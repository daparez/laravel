<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class terbit extends Model
{
    protected $table = "terbit";
    protected $guarded = ["id_terbit"];
    protected $primarykey= "id";
    public $timestamps=false;
}
