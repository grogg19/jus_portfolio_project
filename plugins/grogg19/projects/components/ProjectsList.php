<?php
namespace Grogg19\Projects\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Grogg19\Projects\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class ProjectsList extends ComponentBase
{
    /**
     * @var Collection of projects to display
     */
    public $projects;


    /**
     * @return int current page number
     */
    public $currentPage;


    /**
     * @var int last page number
     */
    public $lastPage;

    public function componentDetails()
    {
        return [
            'name'        => 'grogg19.projects::lang.components.projects_list',
            'description' => 'grogg19.projects::lang.components.projects_list_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'projectPage' => [
                'title'       => 'grogg19.projects::lang.components.project_page_label',
                'description' => 'grogg19.projects::lang.components.project_page_description',
                'type'        => 'dropdown',
                'default'     => 'list-projects/project',
            ],
            'thumbMode' => [
                'title'       => 'grogg19.projects::lang.components.thumb_mode_label',
                'description' => 'grogg19.projects::lang.components.thumb_mode_description',
                'type'        => 'dropdown',
                'default'     => 'auto',
            ],
            'thumbWidth' => [
                'title'             => 'grogg19.projects::lang.components.thumb_width_label',
                'description'       => 'grogg19.projects::lang.components.thumb_width_description',
                'default'           => 640,
                'type'              => 'string',
                'validationMessage' => 'grogg19.projects::lang.errors.thumb_width_error',
                'validationPattern' => '^[0-9]+$',
                'required'          => FALSE,
            ],
            'thumbHeight' => [
                'title'             => 'grogg19.projects::lang.components.thumb_height_label',
                'description'       => 'grogg19.projects::lang.components.thumb_height_description',
                'default'           => 480,
                'type'              => 'string',
                'validationMessage' => 'grogg19.projects::lang.errors.thumb_height_error',
                'validationPattern' => '^[0-9]+$',
                'required'          => FALSE,
            ],
            'projectsOnPage' => [
                'title'             => 'grogg19.projects::lang.components.projects_on_page_label',
                'description'       => 'grogg19.projects::lang.components.projects_on_page_description',
                'default'           => 12,
                'type'              => 'string',
                'validationMessage' => 'grogg19.projects::lang.errors.projects_on_page_error',
                'validationPattern' => '^[0-9]+$',
                'required'          => FALSE,
            ],
        ];
    }

    /**
     *
     * Returns pages list for project page select box setting
     *
     * @return mixed
     */
    public function getProjectPageOptions() {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    /**
     *
     * Returns thumb resize mode options for thumb mode select box setting
     *
     * @return array
     */
    public function getThumbModeOptions() {
        return [
            'auto' => 'Auto',
            'exact' => 'Exact',
            'portrait' => 'Portrait',
            'landscape' => 'Landscape',
            'crop' => 'Crop',
        ];
    }


    /**
     * Get photo page number from query
     */
    protected function setCurrentPage() {
        if (isset($_GET['page'])) {
            if (ctype_digit($_GET['page']) && ($_GET['page'] > 0)) {
                $this->currentPage = $_GET['page'];
            } else {
                return FALSE;
            }
        } else {
            $this->currentPage = 1;
        }
        return TRUE;
    }


    /**
     * OnRun implementation
     * Setup pager
     * Load projects
     */
    public function onRun() {
        if (!$this->setCurrentPage()) {
            return Redirect::to($this->currentPageUrl() . '?page=1');
        }
        $this->projects = $this->loadProjects();
        $this->prepareProjects();

        $this->lastPage = $this->projects->lastPage();
        // if current page is greater than number of pages, redirect to the last page
        // only if lastPage > 0 to avoid redirect loop when there are no elements
        if ($this->lastPage && ($this->currentPage > $this->lastPage)) {
            return Redirect::to($this->currentPageUrl() . '?page=' . $this->lastPage);
        }
    }


    /**
     *
     * Returns array of site's albums to be used in component
     * Albums are sorted by created date desc, each one loaded with one latest photo (or photo set to be front)
     * Empty albums won't be displayed
     *
     * @return array
     */
    protected function loadProjects() {
        $projects = Project::orderBy('sort_order', 'asc')
            ->has('photos')
            ->with(['latestPhoto' => function ($query) {
                $query->with('image');
            }])
            ->with(['front' => function ($query) {
                $query->with('image');
            }])
            ->with('photosCount')
            ->paginate($this->property('projectsOnPage'), $this->currentPage);

        return $projects;
    }


    /**
     *
     * Prepares array of project models to be displayed:
     *  - set up project urls
     *  - set up photo counts
     *  - set up project thumb
     */
    protected function prepareProjects() {
        //set up photo count and url
        foreach ($this->projects as $project) {
            $project->photo_count = $project->photosCount;
            $project->url = $project->setUrl($this->property('projectPage'), $this->controller);

            // prepare thumb from $project->front if it is set or from latestPhoto otherwise
            $image = ($project->front) ? $project->front->image : $project->latestPhoto->image;
            $project->front->thumb = $image->getThumb(
                $this->property('thumbWidth'),
                $this->property('thumbHeight'),
                ['mode' => $this->property('thumbMode')]
            );

        }
    }
}
