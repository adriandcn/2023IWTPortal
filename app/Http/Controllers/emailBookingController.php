<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\IntentosEmail;
use App\Models\abcalendarReservations;
use App\Repositories\PublicServiceRepository;
use Illuminate\Contracts\Mail\Mailer;

class emailBookingController extends Controller
{

    public function __construct(){

        $this->intentosEmail = new IntentosEmail();
        $this->reservation = new abcalendarReservations();
        if(session('statut') != 1) {
            return redirect('/');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emailsList = $this->reservation->with('data_intentos')
        ->where('status','Confirmed')
        ->orderBy('id','desc')
        ->get();
        // return response()->json($emailsList);
        $view = view('responsive.emailBookingList', compact('emailsList'));
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PublicServiceRepository $gestion,Mailer $mailer)
    {
        $dataReservation = $this->reservation->with('data_calendar')->find($request->id_reservation);
        if(!$dataReservation) return response()->json(['reservation-not-found'],404);
        if(!$dataReservation->data_calendar) return response()->json(['calendar-not-found'],404);
        $data = [
            'title'  => trans('front/verify.ReviewEmail'),
            'intro'  => trans('front/verify.email-intro-tour'),
            'link'   => trans('front/verify.email-link-tour'),
            'token_reservations' => $dataReservation->token_consulta,
        ];
        
        //dd( $dataReservation->c_email);
        $mailer->send('emails.auth.VerifyReviewTourV2', $data, function($message) use($dataReservation){
            $nombre = $dataReservation->c_name . ' ' . $dataReservation->c_lastname;
            // $dataReservation->c_email
            $message->to($dataReservation->c_email, $nombre)->subject("Review Verify iWaNaTrip.com");
            //$message->to('adrian.dcn@hotmail.com', $nombre)->subject("Review Verify iWaNaTrip.com");
        });



        $gestion->guardarEnIntentosEmailAdmin($dataReservation->data_calendar->id_agrupamiento,$dataReservation,$request->idIntento);
        return response()->json(['success' => true],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
