<?php namespace Grogg19\Projects;

use Graker\PhotoAlbums\Classes\MenuItemsProvider;
use Grogg19\Projects\Components\ProjectsList;
use System\Classes\PluginBase;
use Backend;
use Event;
use Lang;

class Plugin extends PluginBase
{
    /**
     * boot() implementation
     *  - Register listener to markdown.parse
     *  - Add button to blog post form to insert photos from albums
     */
    public function boot() {
        $this->registerMenuItems();
    }

    public function registerComponents()
    {
        return [
            ProjectsList::class => 'projectsList',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'grogg19.projects::lang.plugin.name',
                'description' => 'grogg19.projects::lang.plugin.settings_description',
                'icon'        => 'icon-camera-retro',
                'class'       => 'Grogg19\Projects\Models\Settings',
                'order'       => 100,
                'permissions' => ['grogg19.projects.access_settings'],
            ]
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     * At the moment there's one permission allowing overall management of albums and photos
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'grogg19.projects.manage_projects' => [
                'label' => 'grogg19.projects::lang.plugin.manage_projects',
                'tab' => 'grogg19.projects::lang.plugin.tab',
            ],
            'grogg19.projects.access_settings' => [
                'label' => 'grogg19.projects::lang.plugin.access_permission',
                'tab' => 'grogg19.projects::lang.plugin.tab',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'projectslist' => [
                'label' => 'grogg19.projects::lang.plugin.tab',
                'url' => Backend::url('grogg19/projects/list'),
                'icon'        => 'icon-camera-retro',
                'permissions' => ['grogg19.projects.manage_albums'],
                'order'       => 500,
            ],
        ];
    }

    /**
     * Listen to events from RainLab.Pages plugin to register and resolve new menu items
     */
    protected function registerMenuItems() {
        // register items
        Event::listen('pages.menuitem.listTypes', function() {
            return MenuItemsProvider::listTypes();
        });

        // return item type info
        Event::listen('pages.menuitem.getTypeInfo', function($type) {
            if (in_array($type, array_keys(MenuItemsProvider::listTypes()))) {
                return MenuItemsProvider::getMenuTypeInfo($type);
            }
        });

        // resolve item
        Event::listen('pages.menuitem.resolveItem', function($type, $item, $url, $theme) {
            if (in_array($type, array_keys(MenuItemsProvider::listTypes()))) {
                return MenuItemsProvider::resolveMenuItem($type, $item, $url, $theme);
            }
        });
    }
}
