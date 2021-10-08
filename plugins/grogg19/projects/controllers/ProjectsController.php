<?php namespace Grogg19\Projects\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\RelationController;
use Backend\Behaviors\ReorderController;
use Backend\Classes\Controller;
use BackendMenu;
use Grogg19\Projects\Models\Photo;
use Grogg19\Projects\Models\Project;
use Lang;
use Input;
use League\Flysystem\Exception;

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

    /**
     * Ajax callback to set Photo as Album's front photo
     *
     * @param null|int $recordId album id
     * @return string relation refresh or error string in json if there's error
     */
    public function update_onRelationButtonSetFront($recordId = NULL) {

        // get project
        $project = Project::find($recordId);
        if (!$project) {
            // project not found
            return Response::json(Lang::get('grogg19.projects::lang.errors.project_not_found'), 400);
        }

        // get first checked photo
        $input = Input::all();
        $checked = $input['checked'];
        $photo_id = array_shift($checked);

        // validate photo
        $photo = Photo::find($photo_id);
        try {
            if (!$photo) {
                throw new ApplicationException(Lang::get('grogg19.projects::lang.errors.cant_find_selected'));
            }
            if ($photo->project_id != $project->id) {
                // attempt to use other project's photo
                throw new ApplicationException(Lang::get('grogg19.projects::lang.errors.not_this_project'));
            }
        } catch (Exception $e) {
            return Response::json($e->getMessage(), 400);
        }

        // set front id
        $project->front_id = $photo->id;
        $project->save();

        $this->initRelation($project, 'photos');
        return $this->relationRefresh('photos');
    }
}
