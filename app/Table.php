<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'tables';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'game_id', 'date',
                          'time',
                          'comment',
                          'place',
                          'private',
                          'needed_players',
                          'all_players'
                        ];

}
