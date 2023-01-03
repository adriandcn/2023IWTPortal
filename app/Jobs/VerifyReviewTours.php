<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Mail\Mailer;

class VerifyReviewTours extends Job implements SelfHandling

{
    protected $reviewU;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($reviewU)
    {
        //
          $this->reviewU = $reviewU;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    
    public function handle(Mailer $mailer)
    {
        $data = [
            'title'  => trans('front/verify.ReviewEmail'),
            'intro'  => trans('front/verify.email-intro-tour'),
            'link'   => trans('front/verify.email-link-tour'),
            'token_reservations' => $this->reviewU->token_consulta,
        ];
        
		$too=$this->reviewU->c_email;
		if($too==null)
		{
			$too="info@iwannatrip.com";
		}
        $mailer->send('emails.auth.VerifyReviewTour', $data, function($message) {
            $nombre = $this->reviewU->c_name.' '.$this->reviewU->c_lastname;
            $message->to( $this->reviewU->c_email, $nombre)
                    ->subject("Review Verify iWaNaTrip.com");
        });
    }
    
}
