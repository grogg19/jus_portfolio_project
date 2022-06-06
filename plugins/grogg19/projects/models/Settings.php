<?php

/**
 * PhotoAlbums settings model
 */

namespace Grogg19\Projects\Models;

use Model;

class Settings extends Model {

    public $implement = ['System.Behaviors.SettingsModel '];

    /**
     * @var string unique code to access settings
     */
    public $settingsCode = 'projects_settings';

    /**
     * @var string file with setting fields
     */
    public $settingsFields = 'fields.yaml';

}
