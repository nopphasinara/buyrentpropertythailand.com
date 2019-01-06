<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DumpPost extends Model
{
    protected $guarded = [];
    protected $table = 'wp_posts';
    public $timestamps = false;

    public function created_at_datetime(){
        return $this->post_date;
        // $created_date_time = $this->created_at->timezone(get_option('default_timezone'))->format(get_option('date_format_custom').' '.get_option('time_format_custom'));
        // return $created_date_time;
    }

    public static function getPageBySlug($slug)
    {
      return DumpPost::wherePostType('page')->wherePostName($slug)->first();
    }

    // public function pages()
    // {
    //   return $this->wherePostType('page')->get();
    // }


    // public function created_at_datetime(){
    //     $created_date_time = $this->created_at->timezone(get_option('default_timezone'))->format(get_option('date_format_custom').' '.get_option('time_format_custom'));
    //     return $created_date_time;
    // }
    //
    // public function feature_img(){
    //     return $this->hasOne(Media::class);
    // }
    //
    // public function author(){
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
