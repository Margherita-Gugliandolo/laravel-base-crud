<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagante extends Model
{
    protected $table = "paganti";
    protected $fillable = [
      "name",
      "lastname",
      "address"
    ];

}
