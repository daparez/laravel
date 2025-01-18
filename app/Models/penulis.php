<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    
  protected $table = "penulis";
  protected $guarded = ["id_penulis"];
  protected $primarykey= "id";
  public $timestamps=false;
}
