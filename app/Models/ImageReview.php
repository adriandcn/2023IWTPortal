<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageReview extends Model
{
    protected $table = "images_review";
    protected $primaryKey = "id_images_review";
    protected $fillable = array('id_images_review', 'id_review', 'id_image', 'status');
}