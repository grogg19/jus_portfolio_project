<?php

namespace Graker\PhotoAlbums\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Graker\PhotoAlbums\Models\Album as AlbumModel;
use Graker\PhotoAlbums\Components\AlbumList as AlbumList;
use Illuminate\Database\Eloquent\Collection;
use Redirect;

class AlbumListMain extends AlbumList
{
    /**
     * @return array of component details
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Тизер фотоальбомов',
            'description' => 'Блок с фотоальбомами на главной странице'
        ];
    }
}