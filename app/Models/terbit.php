<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class terbit extends Model
{
    protected $table = "penulis";
    protected $guarded = ["id_penulis"];
    protected $primarykey= "id";
    public $timestamps=false;
}
