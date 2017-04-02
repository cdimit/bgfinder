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


  public function getTableAttribute(): string
  {
    return $this->tables->count();
  }

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'description', 'category', 'color'];


  public function tables()
  {
    return $this->hasMany('App\Table');
  }

}
