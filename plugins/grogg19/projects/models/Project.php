<?php namespace Grogg19\Projects\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'grogg_projects';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:grogg_projects'],
    ];

    /**
     * @var array Relations
     */
    public $hasMany = [
        'photos' => [
            Photo::class,
            'order' => 'sort_order desc',
        ]
    ];
    public $belongsTo = [
        'front' => [Photo::class],
    ];
}
