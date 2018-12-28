<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class ListingType extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'listing_types';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = [
      'title',
      'slug',
      'thumbnail',
      'web_visible',
    ];
    protected $casts = [];
    protected $fakeColumns = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function boot()
    {
      parent::boot();
      static::deleting(function($obj) {
        \Storage::disk('uploads')->delete($obj->image);
      });
    }

    public function sluggable()
    {
      return [
        'slug' => [
          'source' => 'title',
          'onUpdate' => false,
          // 'method' => function ($string, $separator) {
          //   return strtolower(preg_replace('/[^a-z]+/i', $separator, $string));
          // },
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

    public function setThumbnailAttribute($value)
    {
      $attribute_name = 'thumbnail';
      $disk = 'uploads';
      $destination_path = 'category';

      // if the image was erased
      if ($value == null) {
        // delete the image from disk
        \Storage::disk($disk)->delete($this->{$attribute_name});

        // set null in the database column
        $this->attributes[$attribute_name] = null;
      }

      // if a base64 was sent, store it in the db
      if (starts_with($value, 'data:image')) {
        // 0. Make the image
        $image = \Image::make($value)->encode('jpg', 70);
        // 1. Generate a filename.
        $filename = md5($value.time()).'.jpg';
        // 2. Store the image on disk.
        \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
        // 3. Save the path to the database
        $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
      }
    }
}
