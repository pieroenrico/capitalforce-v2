<?php namespace Tropa\Alliances\Models;

use Model;

/**
 * Model
 */
class Alliance extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tropa_alliances_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File',
    ];
}
