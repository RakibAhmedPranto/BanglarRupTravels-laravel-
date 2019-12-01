<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    public function images()
    {
      return $this->hasMany('App\room_image');
    }
    public function catagory()
    {
      return $this->belongsTo(Catagory::class);
    }
    public function hotel()
    {
      return $this->belongsTo(Hotel::class);
    }
}
