<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    

  protected $table = "buku";
  protected $guarded = ["id_buku"];
  protected $primarykey= "id";
  public $timestamps=false;

}
