<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  // fillable 変数に配列で宣言
  protected $fillable = ['title', 'body', 'published_at'];
  // get属性Attribute()
  public function getTitleAttribute($value)
    {
        // 大文字に変換
        return mb_strtoupper($value);
    }
  // published_at で日付ミューテーターを使う
  protected $dates = ['published_at'];
  //  published scopeを定義
  public function scopePublished($query) {
      $query->where('published_at', '<=', Carbon::now());
  }
  public function user()
    {
        return $this->belongsTo('App\User');
    }
  public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
  public function getTagListAttribute() {
        return $this->tags->lists('id')->all();
    }
    //
}
