<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\page_gallery;
class categories_gallery extends Model
{
    use HasFactory;
    protected $table = "categories_gallery";
    public $timestamps = false; // Menonaktifkan timestamp
    protected $primaryKey = "id";
    protected $fillable= [
        "title"
    ];
    public function pageGalleries()
    {
        return $this->hasMany(page_gallery::class);
    }
}
