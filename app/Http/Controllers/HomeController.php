<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use App\Jobs\ChangeLocale;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Session;
use App\Repositories\PublicServiceRepository;
use DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller {

    /**
     * Display the home page.
     *
     * @return Response
     */
    public function index(Guard $auth) {
        //	


        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        if ($auth->check()) {
            $user = $auth->user();
           // $view = view('RegistroOperadores.registroStep1'); // revisar debe redirecccionar a otro lado
            return redirect('/servicios')->with('user', $user->id);
        } else {

            $view = view('auth.completeRegister');
        }
        return $view;
    }

    /**
     * Change language.
     *
     * @param  App\Jobs\ChangeLocaleCommand $changeLocaleCommand
     * @return Response
     */
    public function language(
    ChangeLocale $changeLocale) {
        $this->dispatch($changeLocale);

        return redirect()->back();
    }
    
	
	 public function indexresgister(Guard $auth) {

        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        $view = view('responsive.completeRegister');
        
        return $view;
        
    } 

    
            public function indexres(Guard $auth) {
        //	


        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        if ($auth->check()) {
            $user = $auth->user();
           // $view = view('RegistroOperadores.registroStep1'); // revisar debe redirecccionar a otro lado
            return redirect('/serviciosres')->with('user', $user->id);
        } else {

            $view = view('responsive.completeLogin');
        }
        return $view;
    }


	
	//FAKE REVIEWS
	
	public function indexAdminReview(Guard $auth) {
        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);
        $agrupamientoList = DB::table('booking_abcalendar_agrupamiento')
                            // ->where('estado',1)
                            ->select(['nombre','id','id_usuario_Servicio'])
                            ->get();
        $view = view('responsive.adminReview')->with('agrupamientoList',$agrupamientoList);
        
        return $view;
        
    } 
	
	 public function getReviewTypes($id_atraccion = null,PublicServiceRepository $gestion) {
        if ($id_atraccion == null) {
            return response()->json(['types' => []]);
        }
        $dataCAtalogo = DB::table('usuario_servicios')
                        ->where('id',$id_atraccion)
                        ->select('id_catalogo_servicio')
                        ->first();
        // $tipoReviews = $gestion->getTiporeviews($dataCAtalogo->id_catalogo_servicio);
        $tipoReviews = $gestion->getTiporeviews(12);
		
        $view = view('responsive.adminReview')->with('tipoReviews',$tipoReviews);
        // return response()->json(['types' => $tipoReviews]);
        $view = View::make('public_page.partials.typeReviews', array('tipoReviews'=> $tipoReviews));
        $sections = $view->rendersections();
        return response()->json($sections);
        // 
    } 

    public function saveAdminReview(Request $request) {

                DB::transaction(function() use($request){
            $itemAgrupamiento = DB::table('booking_abcalendar_agrupamiento')->where('id',$request->agrupamiento)->first();
            foreach ($request->id_tipo_review as $key => $idTiporeview) {
                DB::table('reviews_usuario_servicio')->insert([
                    'id_usuario_servicio' => $itemAgrupamiento->id_usuario_servicio,
                    'nombre_reviewer' => $request->name,
                    'email_reviewer' => $request->email,
                    'ip_reviewer' => '::1',
                    'text_review' => $request->comentario,
                    'estado_review' => 1,
                    'calificacion' => $request->review_score[$key],
                    'peso' => 0,
                    'id_user' => 0,
                    'id_tipo_review' => $idTiporeview,
                    'tip_text' => '',
                    'review_verificado' => 1,
                    'confirmation_rev_code' => '',
                    'created_at' => Carbon::createFromFormat('Y-m-d',$request->created_at)->toDateTimeString(),
                    'updated_at' => Carbon::createFromFormat('Y-m-d',$request->created_at)->toDateTimeString(),
                    'seen' => 0,
                    'agrupamiento_id' => $itemAgrupamiento->id
                ]);
            }
        });

        return response()->json(['success' => true]);
        
    } 

   

}
