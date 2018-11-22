<?php namespace Tropa\ArtificialIntelligence\Models;

use Model;

/**
 * Model
 */
class ArtificialIntelligence extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tropa_artificialintelligence_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File',
    ];
}
