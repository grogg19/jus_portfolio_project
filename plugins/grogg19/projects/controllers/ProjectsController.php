<?php namespace Grogg19\Projects\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\RelationController;
use Backend\Behaviors\ReorderController;
use Backend\Classes\Controller;
use BackendMenu;
use Lang;

class ProjectsController extends Controller
{
    public $implement = [
        ListController::class,
        FormController::class,
        ReorderController::class,
        RelationController::class
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Grogg19.Projects', 'main-menu-projects');
    }

    /**
     *
     * Returns path to reorder current album
     *
     * @return string
     */
    protected function getReorderPath() {
        if (!isset($this->vars['formModel']->id)) {
            return '';
        }

        $uri = \Backend::url('grogg19/projects/reorder/project/' . $this->vars['formModel']->id);
        return $uri;
    }
}
