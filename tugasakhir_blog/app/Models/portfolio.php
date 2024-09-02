<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;
    protected $table = "portfolios";
    protected $primaryKey = "id";
    protected $fillable = [
        "madeBy",
        "demo",
        "creator",
        "images",
        "video",
        "created",
    ];
}
