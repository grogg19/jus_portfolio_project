<?php namespace Grogg19\Projects\Models;

use Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;
use System\Models\File;

/**
 * Model
 */
class Project extends Model
{
    use Validation;
    use Sortable;
    

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
        'front' => [
            Photo::class
        ],
    ];

    /**
     *
     * This relation allows us to eager-load 1 latest photo per project
     *
     * @return mixed
     */
    public function latestPhoto() {
        return $this->hasOne(Photo::class)->latest();
    }

    /**
     *
     * This relation allows us to eager-load 1 front photo per project
     *
     * @return mixed
     */
    public function frontPhoto() {
        return $this->hasOne(Photo::class)->latest();
    }

    /**
     *
     * Returns image file of photo set as album front or image in the latest photo of the photo
     *
     * @return File
     */
    public function getImage() {
        if ($this->front) {
            return $this->front->image;
        }

        if ($this->latestPhoto) {
            return $this->latestPhoto->image;
        }

        return NULL;
    }

    /**
     *
     * This relation allows us to count photos
     *
     * @return mixed
     */
    public function photosCount() {
        return $this->hasOne(Photo::class)
            ->selectRaw('project_id, count(*) as aggregate')
            ->orderBy('project_id')
            ->groupBy('project_id');
    }

    /**
     *
     * Sets and returns url for this model using provided page name and controller
     * For now we expose just id and slug for URL parameters
     *
     * @param string $pageName
     * @param CMS\Classes\Controller $controller
     * @return string
     */
    public function setUrl($pageName, $controller) {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }
}
