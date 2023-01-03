<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = 'gallery';
    public $timestamps = false;
    protected $primaryKey = 'id_gallery';

    public $fillable = [
        'id_gallery',
        'nombre',
        'descripcion',
        'url',
        'url_redirect',
        'tags',
        'status'
    ];

    public $appends = [
    	'full_path',
    	'icon_path'
    ];

    public function getFullPathAttribute(){
    	return url("/images/gallery/fullsize") . '/' . $this->url;
    }
    public function getIconPathAttribute(){
    	return url("/images/gallery/icon") . '/' . $this->url;
    }
}
