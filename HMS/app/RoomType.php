<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $primarykey = 'id';
    protected $fillable = ['name', 'desc', 'price'];
}
