<?php namespace Grogg19\Projects\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PhotoController extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController'
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Grogg19.Projects', 'main-menu-projects', 'side-menu-photos');
    }
}
