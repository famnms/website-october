<?php namespace Famnms\SitewideNotification\Models;

use Model;

/**
 * Model
 */
class SitewideNotification extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'famnms_sitewidenotification_notification';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
