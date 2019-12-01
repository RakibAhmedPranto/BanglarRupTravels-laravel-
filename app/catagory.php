<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
  public function rooms()
  {
    return $this->hasMany(Room::class);
  }
}
