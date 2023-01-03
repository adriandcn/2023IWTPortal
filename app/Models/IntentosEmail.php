<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntentosEmail extends Model
{
    protected $table = 'intentos_email';
    protected $fillable = array('intento', 'fecha', 'email', 'id_agrupamiento','id_reservacion' );
    // public $appends = ['data_emails_send'];

    // public function getDataEmailsSendAttribute(){
        
    //     return $this->hasOne('App\Models\IntentosEmail','id','id_reservacion')
    //              ->select(['id','c_name','c_email','created']);
         
    // }
}
