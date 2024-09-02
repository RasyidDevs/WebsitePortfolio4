<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categories_gallery;
class page_gallery extends Model
{
    use HasFactory;
    protected $table = "page_gallery";
    protected $primaryKey = "id";
    protected $fillable = [
        "gallery_id",
        "images",
    ];
    public function pageGalleries()
    {
        return $this->hasMany(PageGallery::class);
    }
}
