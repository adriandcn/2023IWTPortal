<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Usuario_Servicio extends Model
{
    //
    protected $table = 'usuario_servicios';
    public $timestamps = false;
    public $appends = ['resumen_views'];
    /* Es la representacion de ELOQUENT de que el Usuaro Servico pertenece a un Usuario Operador
     * En el Modelo de Usuario Operador se encuentra la funcion inversa     */
    public function usuario_operador(){
        
     //   return $this->belongsTo('App\Models\Usuario_Operador');
        
    }
    
    public function catalogo_servicio(){
        
      //  return $this->belongsTo('App\Models\Catalogo_Servicio');
        
    }

    public function profile_image(){
        
       return $this->hasOne('App\Models\Image','id_auxiliar','id')
                ->select(['images.id','id_auxiliar','filename'])
                ->where('estado_fotografia',1)
                ->where('id_catalogo_fotografia',1)
                ->Select(['id_auxiliar','filename']);
        
    }


    public function getResumenViewsAttribute()
    {
        $resumen = DB::table('reviews_usuario_servicio')
                ->join('tipo_reviews', 'reviews_usuario_servicio.id_tipo_review', '=', 'tipo_reviews.id')
                ->where('id_usuario_servicio',$this->id_usuario_servicio)
                ->groupBy('id_tipo_review')
                // ->where('id','<>',$this->id)
                ->get();
        return $resumen;
    }

    public function serviceImage(){
        return $this->hasOne('App\Models\Image','id_auxiliar','id')
                ->select(['images.id','id_auxiliar','filename'])
                ->where('estado_fotografia',1)
                ->where('id_catalogo_fotografia',1)
                // ->where('profile_pic',1)
                ;
    }
}
