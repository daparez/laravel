<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class judul extends Model
{
    
  protected $table = "judul";
  protected $guarded = ["id_judul"];
  protected $primarykey= "id";
  public $timestamps=false;

}
