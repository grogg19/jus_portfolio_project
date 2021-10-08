<?php namespace Grogg19\Projects\Models;

use Model;
use System\Models\File;

/**
 * Photo Model
 */
class Photo extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'grogg_project_photos';

    /**
     * @var array of validation rules
     */
    public $rules = [
        //'title' => 'required',
    ];

    /**
     * @var array of fillable fields to use in mass assignment
     */
    protected $fillable = [
        'title', 'description',
    ];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'project' => [Project::class],
    ];
    public $attachOne = [
        'image' => [File::class],
    ];
}
