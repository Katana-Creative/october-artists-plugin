<?php namespace Katana\Artists\Models;

use Model;

/**
 * Artist Model
 */
class Artist extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'katana_artists';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];

    public $attachMany = [
        'photos' => 'System\Models\File'
    ];

}