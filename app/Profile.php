<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'profiles';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'name', 'picture', 'gender', 'birthday', 'about', 'country', 'phone', 'rank', 'review'];

  /**
  * Return the relationship with User model.
  */
  public function user()
  {
    return $this->belongsTo('App\User', 'user_id');
  }

}
