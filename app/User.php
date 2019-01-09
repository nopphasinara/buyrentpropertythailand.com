<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Intervention\Image\ImageManager;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia, Sortable
{
  use Notifiable;
  use Sluggable;
  use SortableTrait;
  use HasMediaTrait;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password', 'user_level', 'is_active',
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  protected $appends = [
    // 'name',
  ];

  public $sortable = [
    'order_column_name' => 'order_column',
    'sort_when_creating' => true,
  ];

  // protected static $sports = [
  //    'soccer' => 'sport:1',
  //    'tennis' => 'sport:2',
  //    'basketball' => 'sport:3',
  //    ...
  // ];

  /**
  * Return the sluggable configuration array for this model.
  *
  * @return array
  */
  /*
  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title',
        'separator' => '-',
        'method' => function ($string, $separator) {
          return strtolower(preg_replace('/[^a-z]+/i', $separator, $string));
        },
        'onUpdate' => true,
      ],
    ];
  }
  */
}
