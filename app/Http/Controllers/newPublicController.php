<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Response;
use App\Models\PrioridadSeccion;
use App\Repositories\BookingRepository;
use Illuminate\Support\Facades\Session;
use App\Models\Usuario_Servicio;
use Illuminate\Contracts\Auth\Guard;
use App\Models\UbicacionGeografica;
use App\Repositories\PublicServiceRepository;

class newPublicController extends Controller {
	
    public function __construct(){
        $this->PrioridadSeccion = new PrioridadSeccion();
        $this->usuarioServicioModel = new Usuario_Servicio();
        $this->UbicacionGeografica = new UbicacionGeografica();
    }

    public function getRegionView(Request $request){
        if (!$request->has('region')) {
            return redirect('/404');
        }
        //array de las regiones del ecuador
        //1: Costa
        //2: Sierra
        //3:Oriente
        //4:Galapagos

        $dataRegion = [];
        switch ($request->region) {
            case 1:
                return redirect('/region/Costa',301);
            break;
            case 2:
                return redirect('/region/Sierra',301);
            break;
            case 3:
                return redirect('/region/Oriente',301);
            break;
            case 4:
                return redirect('/region/Galapagos',301);
            break;
        }

                    }



    public function getRegionViewId(Request $request,$idRegion){
       
        //array de las regiones del ecuador
        //1: Costa
        //2: Sierra
        //3:Oriente
        //4:Galapagos

        $dataRegion = [];
        switch ($idRegion) {
            case "Costa":
                $dataRegion['name'] = 'Costa' ;
                $dataRegion['id_region']=1;
                $dataRegion['name_eng'] = 'Costa' ;
                $dataRegion['image'] = 'mapa-costa.png' ;
                $dataRegion['description'] = trans('publico/labels.descriptionCosta');
            break;
            case "Sierra":
                $dataRegion['name'] = 'Sierra' ;
                $dataRegion['id_region']=2;
                $dataRegion['name_eng'] = 'Sierra' ;
                $dataRegion['image'] = 'mapa-sierra.png' ;
                $dataRegion['description'] = trans('publico/labels.descriptionSierra');
            break;
            case "Oriente":
                $dataRegion['name'] = 'Oriente' ;
                $dataRegion['id_region']=3;
                $dataRegion['name_eng'] = 'Oriente' ;
                $dataRegion['image'] = 'mapa-oriente.png' ;
                $dataRegion['description'] = trans('publico/labels.descriptionOriente');
            break;
            case "Galapagos":
                $dataRegion['name'] = 'Galapagos' ;
                $dataRegion['id_region']=4;
                $dataRegion['name_eng'] = 'Galapagos' ;
                $dataRegion['image'] = 'mapa-galapagos.png' ;
                $dataRegion['description'] = trans('publico/labels.descriptionGalapagos');
            break;
        }

        if (count($dataRegion) == 0) {
            return redirect('/404');
        }

        $placesRegionList = $this->PrioridadSeccion
                                    ->with(['serviceData','serviceImage'])
                                    ->where('id_region',$dataRegion['id_region'])
                                    ->get();
        $lugaresList = $this->usuarioServicioModel
                            ->join('ubicacion_geografica', function ($join) {
                                $join->on('usuario_servicios.id_provincia', '=', 'ubicacion_geografica.id');
                            })
                            ->with('serviceImage')
                            ->select(['usuario_servicios.id','precio_desde','id_catalogo_servicio','id_region','nombre_servicio','detalle_servicio','detalle_servicio_eng'])
                            ->where('estado_servicio',1)
                            ->where('estado_servicio_usuario',1)
                            ->where('id_catalogo_servicio',4)
                            ->where('id_region',$dataRegion['id_region'])
                            ->limit(10)
							->orderBy('updated_at','DESC')
							->orderBy('prioridad','DESC')
                            ->orderBy('num_visitas','DESC')
                            
                            ->get();
        $restaurantesList = $this->usuarioServicioModel
                            ->join('ubicacion_geografica', function ($join) {
                                $join->on('usuario_servicios.id_provincia', '=', 'ubicacion_geografica.id');
                            })
                            ->with('serviceImage')
                            ->select(['usuario_servicios.id','precio_desde','id_catalogo_servicio','id_region','nombre_servicio','detalle_servicio','detalle_servicio_eng'])
                            ->where('estado_servicio',1)
                            ->where('estado_servicio_usuario',1)
                            ->where('id_catalogo_servicio',1)
                            ->where('id_region',$dataRegion['id_region'])
                            ->limit(10)
							->orderBy('updated_at','DESC')
							->orderBy('prioridad','DESC')
                            ->orderBy('num_visitas','DESC')
                            
                            ->get();
        $hotelesList  = $this->usuarioServicioModel
                            ->join('ubicacion_geografica', function ($join) {
                                $join->on('usuario_servicios.id_provincia', '=', 'ubicacion_geografica.id');
                            })
                            ->with('serviceImage')
                            ->select(['usuario_servicios.id','precio_desde','id_catalogo_servicio','id_region','nombre_servicio','detalle_servicio','detalle_servicio_eng'])
                            ->where('estado_servicio',1)
                            ->where('estado_servicio_usuario',1)
                            ->where('id_catalogo_servicio',2)
                            ->where('id_region',$dataRegion['id_region'])
                            ->limit(10)
							->orderBy('updated_at','DESC')
							->orderBy('prioridad','DESC')
                            ->orderBy('num_visitas','DESC')
                            
                            ->get();
                              

        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        // return response()->json(['data' => $hotelesList]);
        return view('public_page.front.regionView',compact('placesRegionList','lugaresList','restaurantesList','hotelesList','dataRegion'));
    }






    public function getHome(PublicServiceRepository $gestion,Guard $auth) {

        Session::forget('locale');
		Session::put('locale', 'en');
		//$location = $this->getLocationU();
        
         /*********************************************************************/
        /*          OBTENGO EL ID DEL CANTON Y DE LA PROVINCIA               */
        /*********************************************************************/
      

        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        if (!$auth->check()) {
            Session::put('statur', 'visitor');
        }
		
		 /*********************************************************************/
        /*                  INICIO SECCION DE AGRUPAMIENTOS                  */
        /*********************************************************************/

       /* if (!\Cache::has('agrupamientos')) {
            $agrupamientos = $gestion->getAllGroup();
            for($a = 0; $a < count($agrupamientos);$a++){
                $agrupamientos[$a]->foto = $gestion->getPhotoGroup($agrupamientos[$a]->id);
            }
            $arrayMaximos = array();
            $arrayMinimos = array();
            $minimoDeTodos = 0;
            $maximoDeTodos = 0;
            //itero por cada uno de los agrupamientos 
            for($i = 0; $i < count($agrupamientos);$i++){
                $objeto = $agrupamientos[$i];
                //Obtengo los reviews de los agrupamientos
                $calendariosGroup = $gestion->getAllReviewsGroup($objeto->id);   
                if(empty($calendariosGroup)){
                    $agrupamientos[$i]->reviews = [];
                }else{
                    $agrupamientos[$i]->reviews = $calendariosGroup;
                }
                //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
                $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);
                if(count($calendariosGroup)> 0){
                    //itero para cada uno de los calendarios que pertenencen 
                    // al agrupamiento
                    for($j = 0; $j < count($calendariosGroup);$j++){
                        $arrayCalendarios[] = $calendariosGroup[$j]->id;
                        //Obtengo los precios de la semana para un calendario
                        $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);
                        $preciosArray = array();
                        if(count($precios) > 0){
                            //itero por los precios de cada dia para el calendario
                            for($k = 0; $k < count($precios);$k++){
                                if($precios[$k]->mon > 0.16){
                                    $preciosArray[] = $precios[$k]->mon;
                                }
                                if($precios[$k]->tue > 0.16){
                                    $preciosArray[] = $precios[$k]->tue;;
                                }
                                if($precios[$k]->wed > 0.16){
                                    $preciosArray[] = $precios[$k]->wed;
                                }
                                if($precios[$k]->thu > 0.16){
                                    $preciosArray[] = $precios[$k]->thu;
                                }
                                if($precios[$k]->fri > 0.16){
                                    $preciosArray[] = $precios[$k]->fri;
                                }
                                if($precios[$k]->sat > 0.16){
                                    $preciosArray[] = $precios[$k]->sat;
                                }
                                if($precios[$k]->sun > 0.16){
                                    $preciosArray[] = $precios[$k]->sun;
                                }
                                $arrayMaximos[] = max($preciosArray);
                                $arrayMinimos[] = min($preciosArray);
                                $preciosArray = array();
                            }
                        }
                        if(count($arrayMaximos) > 0){
                            $maximoDeTodos = max($arrayMaximos);
                            $minimoDeTodos = max($arrayMinimos);
                        }
                    }
                    $arrayMaximos = array();
                    $arrayMinimos = array();                    
                }
                $agrupamientos[$i]->precioDesde = $minimoDeTodos;
                $agrupamientos[$i]->precioHasta = $maximoDeTodos;
                $arrayCalendarios = array();
            }

            // $reviewsMaximos = array();    
            for($i = 0; $i < count($agrupamientos);$i++){      
                // if(empty($agrupamientos[$i]->reviews)){
                //    $agrupamientos[$i]->reviewCalculado = 0; 
                // }else{
                //     foreach($agrupamientos[$i]->reviews as $reviews){
                //         $reviewsMaximos[] = $reviews->calificacion;            
                //     }
                //     $a = array_sum($reviewsMaximos);
                //     $b = count($reviewsMaximos);
                //     $division = round($a/$b);
                //     $agrupamientos[$i]->reviewCalculado = $division;
                // }

                $agrupamientos[$i]->total = array_sum(array_pluck($agrupamientos[$i]->resumen_views,'calificacion'));
            }
            \Cache::put('agrupamientos', $agrupamientos, 4320);
        } else {
            $agrupamientos = \Cache::get('agrupamientos');
        }

		*/
        
        /*********************************************************************/
        /*                  FIN SECCION DE AGRUPAMIENTOS                     */
        /*********************************************************************/

        /*********************************************************************/
        /*                          INSTAGRAM                                */
        /*********************************************************************/

        if (!\Cache::has('instagrams')) {
            $response     = null;//Instagram::users()->getMedia('self');
            $instagrams   =  null;//$response->get();
            \Cache::put('instagrams', $instagrams, 4320);
        } else {
            $instagrams = \Cache::get('instagrams');
        }

        // return response()->json(['data' => $agrupamientos]);
        
     if($desk=="mobile")
        {
            return view('public_page.home.mobile.homePageFinV2Mobile');
            //->with('location', $location)
            // ->with('eventos', $eventos)
            //->with('agrupamientos', $agrupamientos);
            //->with('instagrams', $instagrams);
}
    else
    {
return view('public_page.home.desk.homePageFinV2Eng');
              //->with('location', $location)
                // ->with('eventos', $eventos)
               // ->with('agrupamientos', $agrupamientos);
                //->with('instagrams', $instagrams);
}
       
    }




//Actualmente se esta utilizando en produccion
    public function getHomeTest(PublicServiceRepository $gestion,Guard $auth) {
       

        Session::forget('locale');
		Session::put('locale', 'es');
		


        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        if (!$auth->check()) {
            Session::put('statur', 'visitor');
        }
		
		 

        if (!\Cache::has('instagrams')) {
            $response     = null;//Instagram::users()->getMedia('self');
            $instagrams   =  null;//$response->get();
            \Cache::put('instagrams', $instagrams, 4320);
        } else {
            $instagrams = \Cache::get('instagrams');
        }

        // return response()->json(['data' => $agrupamientos]);
        
     if($desk=="mobile")
        {
  return view('public_page.home.mobile.homePageFinV2Mobile');
                //->with('location', $location)
                // ->with('eventos', $eventos)
                //->with('agrupamientos', $agrupamientos);
                //->with('instagrams', $instagrams);
}
        else
        {
return view('public_page.home.desk.homePageFinV2Eng');
                //->with('location', $location)
                // ->with('eventos', $eventos)
               // ->with('agrupamientos', $agrupamientos);
                //->with('instagrams', $instagrams);
}
       
    }

     //Obtiene las descripcion de la atraccion elegida
     public function getCatalogoDescripcion(PublicServiceRepository $gestion,$tipo, $nombre_atraccion, $id_atraccion, $id_catalogo) {
        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }
        Session::put('device', $desk);

        $catalogo = $gestion->getCatalogoDetail($id_catalogo);
        $ServicioPrevio = $gestion->getAtraccionDetails($id_atraccion);
        $servicios = $gestion->getServicios($ServicioPrevio->id_provincia);
        //$likes=$gestion->getlikes($ServicioPrevio->id);


        $provincia = null;
        $canton = null;
        $parroquia = null;

        if ($ServicioPrevio->id_provincia != 0)
            $provincia = $gestion->getUbicacionAtraccion($ServicioPrevio->id_provincia);

        if ($ServicioPrevio->id_canton != 0)
            $canton = $gestion->getUbicacionAtraccion($ServicioPrevio->id_canton);

        if ($ServicioPrevio->id_parroquia != 0)
            $parroqia = $gestion->getUbicacionAtraccion($ServicioPrevio->id_parroquia);


            if($provincia==null)
            {
                return redirect('/');

            }
            else
            {
        return view('public_page.front.listServices')
                        ->with('ServicioPrevio', $ServicioPrevio)
                        ->with('canton', $canton)
                        ->with('provincia', $provincia)
                        ->with('parroquia', $parroquia)
                        ->with('servicios', $servicios)
                        ->with('id_catalogo', $id_catalogo)
                        ->with('catalogo', $catalogo);
                    }
    }




    //Obtiene las descripcion de la atraccion elegida
    public function getTripDescripcion($language,$nombre_atraccion, $id_atraccion, PublicServiceRepository $gestion,BookingRepository $gestionBooking ) {

        Session::put('locale', $language);

        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        $gestion->saveVisita(null, $id_atraccion);

        $provincia = null;
        $canton = null;
        $parroquia = null;

        $atraccion = $gestion->getAtraccionDetails($id_atraccion);
        
        //OBTENGO LA INFORMACION DE TODOS LOS AGRUPAMIENTOS
		/*INFORMACION DE LOS AGRUPAMIENTOS*/
        $agrupamientos2 = $gestionBooking->getAllGroup();
        for($a = 0; $a < count($agrupamientos2);$a++){
            $agrupamientos2[$a]->foto = $gestionBooking->getPhotoGroup($agrupamientos2[$a]->id);
        }     

        
        if ($atraccion != null) {
            
            if ($atraccion->id_catalogo_servicio == 11) {

                $eat = $gestion->getTripToDo($id_atraccion, 1);
                $sleep = $gestion->getTripToDo($id_atraccion, 2);
                $trips = $gestion->getotherTrips($id_atraccion);

                $imagenes = $gestion->getAtraccionImages($id_atraccion);
                //print_r($eat);
                //dd($eat);
                if ($id_atraccion == 1170) {
                    return view('public_page.front.Trip2')->with('atraccion', $atraccion)
                                    ->with('imagenes', $imagenes)
                                    ->with('eat', $eat)
                                    ->with('sleep', $sleep)
                                    ->with('agrupamientos2', $agrupamientos2)
                                    ->with('moretrips', $trips);
                } elseif ($id_atraccion == 1171) {
                    return view('public_page.front.Trip3')->with('atraccion', $atraccion)
                                    ->with('imagenes', $imagenes)
                                    ->with('eat', $eat)
                                    ->with('agrupamientos2', $agrupamientos2)
                                    ->with('sleep', $sleep)
                                    ->with('moretrips', $trips);
                } 
                 elseif ($id_atraccion == 1172) {
                    return view('public_page.front.Trip4')->with('atraccion', $atraccion)
                                    ->with('imagenes', $imagenes)
                                    ->with('eat', $eat)
                                    ->with('sleep', $sleep)
                                    ->with('agrupamientos2', $agrupamientos2)
                                    ->with('moretrips', $trips);
                }
                
                elseif ($id_atraccion == 1173) {
                    
                    return view('public_page.front.Trip5')->with('atraccion', $atraccion)
                                    ->with('imagenes', $imagenes)
                                    ->with('eat', $eat)
                                    ->with('agrupamientos2', $agrupamientos2)
                                    ->with('sleep', $sleep)
                                    ->with('moretrips', $trips);
                }
                else {
                    return view('public_page.front.Trip1')->with('atraccion', $atraccion)
                                    ->with('imagenes', $imagenes)
                                    ->with('eat', $eat)
                                    ->with('sleep', $sleep)
                                    ->with('agrupamientos2', $agrupamientos2)
                                    ->with('moretrips', $trips);
                }
            } else
                abort(404);
        } else
            abort(404);
    }
}
