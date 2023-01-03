<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Booking_abcalendar_agrupamiento extends Model
{
    //
    protected $table = 'booking_abcalendar_agrupamiento';

    public $appends = ['resumen_views'];

    public function getResumenViewsAttribute()
    {
        $resumen = DB::table('reviews_usuario_servicio')
                ->join('tipo_reviews', 'reviews_usuario_servicio.id_tipo_review', '=', 'tipo_reviews.id')
                ->where('agrupamiento_id',$this->id)
                ->where('estado_review',1)
                ->select(['tipo_review','calificacion','tipo_review_eng'])
                ->groupBy('id_tipo_review')
                // ->where('id','<>',$this->id)
                ->get();
        return $resumen;
    }
}
