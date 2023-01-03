<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\ImageReview;
use DB;

class Review_Usuario_Servicio extends Model
{
    //
    
       
    public static $rules= [
        
       // 'nombre_reviewer' => 'required',
        'email_reviewer' => 'required|email|max:255',
    ];
    
     public static $messages = [
        'nombre_reviewer.required' => 'El campo Nombre es requerido',
        'email_reviewer.required' => 'El campo email es requerido'
    ];

    public $appends = ['resumen_views'];
      
    //
    	protected $table = 'reviews_usuario_servicio';
        protected $fillable = array('id_usuario_servicio', 'nombre_reviewer', 'ip_reviewer', 'calificacion',
            'estado_review', 'id_user', 'id_tipo_review', 'review_verificado','confirmation_rev_code','created_at', 'updated_at'); 

    public function images()
    {
        return $this->hasMany('App\Models\ImageReview','email_review','email_reviewer')
            ->where('images_review.status',1);
            // ->select('filename');
    }

    public function getResumenViewsAttribute()
    {
        return DB::table('reviews_usuario_servicio')
                ->join('tipo_reviews', 'reviews_usuario_servicio.id_tipo_review', '=', 'tipo_reviews.id')
                ->where('email_reviewer',$this->email_reviewer)
                ->where('id_usuario_servicio',$this->id_usuario_servicio)
                ->groupBy('id_tipo_review')
                // ->where('id','<>',$this->id)
                ->get();
    }
}
