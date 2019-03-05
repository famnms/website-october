<?php namespace Famnms\Members\Models;

use Model;

/**
 * Model
 */
class Member extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'famnms_members_member';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
