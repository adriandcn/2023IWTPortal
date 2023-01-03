<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Mail\Mailer;

class ReservacionTDCMail extends Job implements SelfHandling
{
    
    public function __construct($infoReservas,$urlConsulta,$infoPago,$inforeserva1){
          $this->infoReservas = $infoReservas;
          $this->urlConsulta = $urlConsulta;
          $this->infoPago = $infoPago;
		  $this->inforeserva1 = $inforeserva1;
    }
    
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer){
        $data = [
            'title'  => "Confirmación Reserva iWaNaTrip.com",
            'nombrepara'   => $this->infoReservas[0]->c_name,
            'correo' => $this->infoReservas[0]->c_email,
            'uuid' => $this->infoReservas[0]->uuid,
            'url' => $this->urlConsulta,
            'id' => $this->infoReservas[0]->id
        ];
		
		
		
		    if(isset($this->inforeserva1[0]->correo_operador)){
				
            $mailer->send('emails.auth.reservacionTDC', $data, function($message) {
                
                $message->to( $this->infoReservas[0]->c_email, $this->infoReservas[0]->c_name)
                        ->cc([$this->inforeserva1[0]->correo_operador])
						->cc("info@iwannatrip.com")
                        ->subject("Email confirmation iWaNaTrip.com")
                        ->attach('pdf/Reservacion-'.preg_replace('([^A-Za-z0-9])', '', $this->infoReservas[0]->c_name).'-'.$this->infoPago[0]->id.'-es.pdf')
                        ->attach('pdf/Reservation-'.preg_replace('([^A-Za-z0-9])', '', $this->infoReservas[0]->c_name).'-'.$this->infoPago[0]->id.'-en.pdf');                        
                        //->attach('pdf/Reservacion-'.preg_replace('([^A-Za-z0-9])', '', $this->infoReservas[0]->c_name).'-'.$this->infoPago[0]->id.'.pdf');
						
						
            });            
        }else{
			
            $mailer->send('emails.auth.reservacionTDC', $data, function($message) {
                
                $message->to( $this->infoReservas[0]->c_email, $this->infoReservas[0]->c_name)
				->cc("info@iwannatrip.com")
                        ->subject("Email confirmation iWaNaTrip.com")
                        ->attach('pdf/Reservacion-'.preg_replace('([^A-Za-z0-9])', '', $this->infoReservas[0]->c_name).'-'.$this->infoPago[0]->id.'-es.pdf')
                        ->attach('pdf/Reservation-'.preg_replace('([^A-Za-z0-9])', '', $this->infoReservas[0]->c_name).'-'.$this->infoPago[0]->id.'-en.pdf');                                                
                        //->attach('pdf/Reservacion-'.preg_replace('([^A-Za-z0-9])', '', $this->infoReservas[0]->c_name).'-'.$this->infoPago[0]->id.'.pdf');
            });            
        }

		
		
        /*$mailer->send('emails.auth.reservacionTDC', $data, function($message) {
            //$path = asset('public/pdf/'.$this->infoReservas[0]->c_name.'-'.$this->infoPago[0]->id.'.pdf');              
            //$path = '/home/adrianic8/public_html/public/pdf/'.$this->infoReservas[0]->c_name.'-'.$this->infoPago[0]->id.'.pdf';              
            $message->to( $this->infoReservas[0]->c_email, $this->infoReservas[0]->c_name)
                    ->subject("Confirmacion Reserva Booking iWaNaTrip.com")
                    //->attach('/home/adrianic8/public_html/public/pdf/'.$this->infoReservas[0]->c_name.'-'.$this->infoPago[0]->id.'.pdf');
                    ->attach('pdf/Reservacion-'.$this->infoReservas[0]->c_name.'-'.$this->infoPago[0]->id.'.pdf');
        });*/
    }
    
}

