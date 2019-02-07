<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use CrudTrait;
    use Sluggable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'post_modified';

    protected $table = 'posts';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
      'post_author',
      'post_date',
      'post_date_gmt',
      'post_content',
      'post_title',
      'post_excerpt',
      'post_status',
      'comment_status',
      'ping_status',
      'post_password',
      'post_name',
      'to_ping',
      'pinged',
      'post_modified',
      'post_modified_gmt',
      'post_content_filtered',
      'post_parent',
      'guid',
      'menu_order',
      'post_type',
      'post_mime_type',
      'comment_count',
    ];
    protected $fakeColumns = [];
    protected $casts = [];
    protected $translable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function sluggable()
    {
      return [
        'post_name' => [
          'source' => 'post_title',
        ],
      ];
    }

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

    public function scopePosts($query)
    {
      return $query->where('post_type', '=', 'post')->get();
    }

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
