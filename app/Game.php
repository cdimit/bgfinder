<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'games';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'description', 'category'];


  public function myRefers()
  {
    return $this->hasMany('App\Table');
  }

}
