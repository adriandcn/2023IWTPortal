<?php

namespace App\Models;

use Eloquent as Model;

class PrioridadSeccion extends Model
{

    public $table = 'prioridad_seccion';
    public $timestamps = false;
    protected $primaryKey = 'id_prioridad_seccion';
    public $fillable = [
        'id_usuario_servicio',
        'prioridad',
        'id_region',
        'status'
    ];

    protected $casts = [
        'id_usuario_servicio' => 'integer',
        'prioridad' => 'integer',
        'id_region' => 'integer',
        'status' => 'integer'
    ];

    public static $rules = [
        
    ];

    public function serviceData(){
        return $this->hasOne('App\Models\Usuario_Servicio','id','id_usuario_servicio')
                ->select(['usuario_servicios.id','nombre_servicio','detalle_servicio']);
    } 

    public function serviceImage(){
        return $this->hasOne('App\Models\Image','id_auxiliar','id_usuario_servicio')
                ->select(['id','id_auxiliar','filename'])
                ->where('estado_fotografia',1)
                ->where('id_catalogo_fotografia',1);
                //->where('profile_pic',1);
    } 
    
}
