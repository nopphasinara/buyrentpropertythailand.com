<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Post extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'posts';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
      // 'ID',
      // 'post_author',
      // 'post_date',
      // 'post_date_gmt',
      // 'post_content',
      // 'post_title',
      // 'post_excerpt',
      // 'post_status',
      // 'comment_status',
      // 'ping_status',
      // 'post_password',
      // 'post_name',
      // 'to_ping',
      // 'pinged',
      // 'post_modified',
      // 'post_modified_gmt',
      // 'post_content_filtered',
      // 'post_parent',
      // 'guid',
      // 'menu_order',
      // 'post_type',
      // 'post_mime_type',
      // 'comment_count',
    ];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [];
    protected $translable = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    // public function author()
    // {
    //   return $this->belongsTo('App\Models\Author', 'post_author', 'ID');
    // }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
