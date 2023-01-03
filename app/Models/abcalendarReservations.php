<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class abcalendarReservations extends Model
{
    protected $table = 'booking_abcalendar_reservations';

    public function data_intentos(){
        
        return $this->hasMany('App\Models\IntentosEmail','id_reservacion','id')
                 ->select(['id','intento','id_reservacion','created_at']);
        
    }

    public function data_calendar(){
        
        return $this->hasOne('App\Models\booking_abcalendar_calendars','id','calendar_id')
                 ->select(['id','id_agrupamiento']);
         
    }
}
