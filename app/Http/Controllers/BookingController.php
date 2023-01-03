<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\DB;
use App\Repositories\BookingRepository;
use App\Repositories\PublicServiceRepository;

use App\Repositories\ServiciosOperadorRepository;
use App\Models\Usuario_Servicio;
use App\Repositories\TourServiceRepository;


class BookingController extends Controller
{

    public function __construct(){

        $this->usuarioServicioModel = new Usuario_Servicio();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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

    /*****************************************************************************/
    /*              INICIO METODOS DEL CONTROLADOR PARA BOOKING 2.0              */
    /*****************************************************************************/

    public function reviewsAgrupamiento(Request $request, $id_agrupamiento, $limite, $nombre_agrupamiento, BookingRepository $gestionBooking){

        $reviewsAgrupamientos = $gestionBooking->getReviewsOfTour($id_agrupamiento,$limite);

        $view = \View::make('public_page.partials.searchReviews')
                        ->with('reviewsAgrupamientos',$reviewsAgrupamientos)
                        ->with('nombre_agrupamiento',$nombre_agrupamiento);

        if ($request->ajax()) {
            $sections = $view->rendersections();
            return \Response::json($sections);
        }

    }

    public function agrupamientos($nombre_agrupamiento,$id_usuario_servicio,$id_agrupamiento,
                    BookingRepository $gestionBooking ,Guard $auth) {

        /*INFORMACION DE LOS AGRUPAMIENTOS*/
        $agrupamientos = $gestionBooking->getGroupInfo($id_agrupamiento);
        $Regionagrupamientos = $gestionBooking->getGroupInfoRegion($id_agrupamiento);

		 $checkAtraccionTours = $this->checkUrlDetalleTours($id_usuario_servicio,$agrupamientos,$nombre_agrupamiento,"es");

        if($checkAtraccionTours!="" &&$checkAtraccionTours!="true")
        {

            return redirect($checkAtraccionTours);
        }

        $diasBloqueados = $gestionBooking->getBlockDays($id_agrupamiento);

        $agrupacion = $gestionBooking->getInfoAgrupamiento($id_agrupamiento);

        $calendarios = $gestionBooking->getCalendariosAgrupamiento($id_agrupamiento,$id_usuario_servicio);
        $imagenes = $gestionBooking->getImageAgrupamiento($id_agrupamiento,$id_usuario_servicio);
		$imagenesOperador = $gestionBooking->getImageServicioAgrupamiento($id_usuario_servicio);

		$atraccionComplete = $gestionBooking->getAtraccionDetails($id_usuario_servicio);
        $atraccion = $gestionBooking->getNombreUsuarioServicio($id_usuario_servicio);

        // SACO LA CALIFICACION DE LA BASE DE DATOS
        //$calificacionAgrupamiento = $gestionBooking->getUserServiceCalification($id_agrupamiento);

        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for($i = 0; $i < count($agrupamientos);$i++){
            $objeto = $agrupamientos[$i];

            //Obtengo los reviews de los agrupamientos
            $calendariosGroupReview = $gestionBooking->getAllReviewsGroup($objeto->id);

            if(empty($calendariosGroupReview)){
                $agrupamientos[$i]->reviews = [];
            }else{
                $agrupamientos[$i]->reviews = $calendariosGroupReview;
            }
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestionBooking->getAllGroupCalendars($objeto->id);
            if(count($calendariosGroup)> 0){
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for($j = 0; $j < count($calendariosGroup);$j++){
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestionBooking->getCalendarsPrice($calendariosGroup[$j]->id);
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
                            if(!empty($preciosArray)){
                            $arrayMaximos[] = max($preciosArray);
                            $arrayMinimos[] = min($preciosArray);}
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

        //OBTENGO LA INFORMACION DE TODOS LOS AGRUPAMIENTOS
		/*INFORMACION DE LOS AGRUPAMIENTOS*/
        $agrupamientos2 = $gestionBooking->getAllGroup();
        for($a = 0; $a < count($agrupamientos2);$a++){
            $agrupamientos2[$a]->foto = $gestionBooking->getPhotoGroup($agrupamientos2[$a]->id);
        }

        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for($i = 0; $i < count($agrupamientos2);$i++){
            $objeto = $agrupamientos2[$i];
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestionBooking->getAllGroupCalendars($objeto->id);
            if(count($calendariosGroup)> 0){
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for($j = 0; $j < count($calendariosGroup);$j++){
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestionBooking->getCalendarsPrice($calendariosGroup[$j]->id);
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
                              if(!empty($preciosArray)){
                            $arrayMaximos[] = max($preciosArray);
                            $arrayMinimos[] = min($preciosArray);}
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
            $agrupamientos2[$i]->precioDesde = $minimoDeTodos;
            $agrupamientos2[$i]->precioHasta = $maximoDeTodos;
            $arrayCalendarios = array();
        }
        /*FIN DE LA INFORMACION DE LOS AGRUPAMIENTOS*/


        // $reviewsMaximos = array();
        for($i = 0; $i < count($agrupamientos);$i++){
            $resumenReviews = $agrupamientos[$i]->resumen_views;
            $agrupamientos[$i]->total = array_sum(array_column(json_decode(json_encode($resumenReviews), true), 'calificacion'));
        }

        //REVIEWS INDIVIDUALES DEL AGRUPAMIENTO
        $reviewsAgrupamientos = null;//$gestionBooking->getReviewsOfTour($id_agrupamiento);

        $calificacionAgrupamiento = $gestionBooking->getUserServiceCalification($id_agrupamiento);
        $numerosReviews = $gestionBooking->getUserServiceCountReviews($id_agrupamiento);


		$agent = new Agent();

        $desk = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        Session::put('locale', 'es');
        //Session::put('locale', 'en');

        $calendarClean = [];
        foreach($calendarios as $calendar){
            if (isset($calendar->content) || !empty(($calendar->content))){
                $calendarClean[] = $calendar;
            }
        }

		if($agrupacion==null)
		{
			return $this->getHome($gestionBooking,$auth);

		}else{


            $lugaresList = $this->usuarioServicioModel
            ->join('ubicacion_geografica', function ($join) {
                $join->on('usuario_servicios.id_provincia', '=', 'ubicacion_geografica.id');
            })
            ->with('serviceImage')
            ->select(['usuario_servicios.id','precio_desde','id_catalogo_servicio','id_region','nombre_servicio','detalle_servicio','detalle_servicio_eng'])
            ->where('estado_servicio',1)
            ->where('estado_servicio_usuario',1)
            ->where('id_catalogo_servicio',4)
            ->where('id_region',$Regionagrupamientos->id_region)
            ->limit(10)
            ->orderBy('updated_at','DESC')
            ->orderBy('prioridad','DESC')
            ->orderBy('num_visitas','DESC')
            ->get();

            if($desk == "mobile"){
                return view('public_page.booking.mobile.tourBooking')
                            ->with('imagenes', $imagenes)
                            ->with('calendarios', $calendarClean)
                            ->with('atraccion', $atraccion)
                            ->with('agrupacion', $agrupacion)
                            ->with('reviewsAgrupamientos', $reviewsAgrupamientos)
                            ->with('imagenesOperador', $imagenesOperador)
                            ->with('atraccionComplete', $atraccionComplete)
                            ->with('agrupamientos', $agrupamientos)
                            ->with('agrupamientos2', $agrupamientos2)
                            ->with('lugaresList', $lugaresList)
                            ->with('calificacionAgrupamiento', $calificacionAgrupamiento)
                            ->with('numerosReviews', $numerosReviews)

                            ->with('diasBloqueados',$diasBloqueados[0]->after_day);
            }else{
                return view('public_page.booking.desk.tourBooking')
                            ->with('imagenes', $imagenes)
                            ->with('calendarios', $calendarClean)
                            ->with('atraccion', $atraccion)
                            ->with('agrupacion', $agrupacion)
                            ->with('reviewsAgrupamientos', $reviewsAgrupamientos)
                            ->with('imagenesOperador', $imagenesOperador)
                            ->with('atraccionComplete', $atraccionComplete)
                            ->with('agrupamientos', $agrupamientos)
                            ->with('agrupamientos2', $agrupamientos2)
                            ->with('lugaresList', $lugaresList)
                            ->with('calificacionAgrupamiento', $calificacionAgrupamiento)
                            ->with('numerosReviews', $numerosReviews)
                            ->with('diasBloqueados',$diasBloqueados[0]->after_day);
            }
		}
    }

    public function agrupamientosEn($nombre_agrupamiento,$id_usuario_servicio,$id_agrupamiento,
                    BookingRepository $gestionBooking ,Guard $auth) {

                        $lugaresList=null;

        /*INFORMACION DE LOS AGRUPAMIENTOS*/
        $agrupamientos = $gestionBooking->getGroupInfo($id_agrupamiento);
        $Regionagrupamientos = $gestionBooking->getGroupInfoRegion($id_agrupamiento);

		 $checkAtraccionTours = $this->checkUrlDetalleTours($id_usuario_servicio,$agrupamientos,$nombre_agrupamiento,"en");

    if($checkAtraccionTours!="" &&$checkAtraccionTours!="true")
    {

        return redirect($checkAtraccionTours);
    }


        $diasBloqueados = $gestionBooking->getBlockDays($id_agrupamiento);

        $agrupacion = $gestionBooking->getInfoAgrupamiento($id_agrupamiento);

        $calendarios = $gestionBooking->getCalendariosAgrupamiento($id_agrupamiento,$id_usuario_servicio);
        $imagenes = $gestionBooking->getImageAgrupamiento($id_agrupamiento,$id_usuario_servicio);
		$imagenesOperador = $gestionBooking->getImageServicioAgrupamiento($id_usuario_servicio);

		$atraccionComplete = $gestionBooking->getAtraccionDetails($id_usuario_servicio);
        $atraccion = $gestionBooking->getNombreUsuarioServicio($id_usuario_servicio);

        // SACO LA CALIFICACION DE LA BASE DE DATOS
        $calificacionAgrupamiento = $gestionBooking->getUserServiceCalification($id_agrupamiento);
        $numerosReviews = $gestionBooking->getUserServiceCountReviews($id_agrupamiento);

        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for($i = 0; $i < count($agrupamientos);$i++){
            $objeto = $agrupamientos[$i];

            //Obtengo los reviews de los agrupamientos
            $calendariosGroupReview = $gestionBooking->getAllReviewsGroup($objeto->id);

            if(empty($calendariosGroupReview)){
                $agrupamientos[$i]->reviews = [];
            }else{
                $agrupamientos[$i]->reviews = $calendariosGroupReview;
            }
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestionBooking->getAllGroupCalendars($objeto->id);
            if(count($calendariosGroup)> 0){
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for($j = 0; $j < count($calendariosGroup);$j++){
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestionBooking->getCalendarsPrice($calendariosGroup[$j]->id);
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
                            if(!empty($preciosArray)){
                            $arrayMaximos[] = max($preciosArray);
                            $arrayMinimos[] = min($preciosArray);}
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

        //OBTENGO LA INFORMACION DE TODOS LOS AGRUPAMIENTOS
		/*INFORMACION DE LOS AGRUPAMIENTOS*/
        $agrupamientos2 = $gestionBooking->getAllGroup();
        for($a = 0; $a < count($agrupamientos2);$a++){
            $agrupamientos2[$a]->foto = $gestionBooking->getPhotoGroup($agrupamientos2[$a]->id);
        }

        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for($i = 0; $i < count($agrupamientos2);$i++){
            $objeto = $agrupamientos2[$i];
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestionBooking->getAllGroupCalendars($objeto->id);
            if(count($calendariosGroup)> 0){
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for($j = 0; $j < count($calendariosGroup);$j++){
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestionBooking->getCalendarsPrice($calendariosGroup[$j]->id);
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
                              if(!empty($preciosArray)){
                            $arrayMaximos[] = max($preciosArray);
                            $arrayMinimos[] = min($preciosArray);}
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
            $agrupamientos2[$i]->precioDesde = $minimoDeTodos;
            $agrupamientos2[$i]->precioHasta = $maximoDeTodos;
            $arrayCalendarios = array();
        }
        /*FIN DE LA INFORMACION DE LOS AGRUPAMIENTOS*/


        // $reviewsMaximos = array();
        for($i = 0; $i < count($agrupamientos);$i++){
            $resumenReviews = $agrupamientos[$i]->resumen_views;
            $agrupamientos[$i]->total = array_sum(array_column(json_decode(json_encode($resumenReviews), true), 'calificacion'));
        }

        //REVIEWS INDIVIDUALES DEL AGRUPAMIENTO
        //$reviewsAgrupamientos = $gestionBooking->getReviewsOfTour($id_agrupamiento);

		$agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);
        Session::put('locale', 'en');

        $calendarClean = [];
        foreach($calendarios as $calendar){
            if (isset($calendar->content) || !empty(($calendar->content))){
                $calendarClean[] = $calendar;
            }
        }


		if($agrupacion==null)
		{
			return $this->getHome($gestionBooking,$auth);

		}else{



$lugaresList = $this->usuarioServicioModel
    ->join('ubicacion_geografica', function ($join) {
        $join->on('usuario_servicios.id_provincia', '=', 'ubicacion_geografica.id');
    })
    ->with('serviceImage')
    ->select(['usuario_servicios.id','precio_desde','id_catalogo_servicio','id_region','nombre_servicio','detalle_servicio','detalle_servicio_eng'])
    ->where('estado_servicio',1)
    ->where('estado_servicio_usuario',1)
    ->where('id_catalogo_servicio',4)
    ->where('id_region',$Regionagrupamientos->id_region)

    ->limit(10)
    ->orderBy('updated_at','DESC')
    ->orderBy('prioridad','DESC')
    ->orderBy('num_visitas','DESC')

    ->get();

            if($desk == "mobile"){
                return view('public_page.booking.mobile.tourBooking')
                            ->with('imagenes', $imagenes)
                            ->with('calendarios', $calendarClean)
                            ->with('atraccion', $atraccion)
                            ->with('agrupacion', $agrupacion)
                            //->with('reviewsAgrupamientos', $reviewsAgrupamientos)
                            ->with('imagenesOperador', $imagenesOperador)
                            ->with('atraccionComplete', $atraccionComplete)
                            ->with('agrupamientos', $agrupamientos)
                            ->with('agrupamientos2', $agrupamientos2)
                            ->with('numerosReviews', $numerosReviews)
                            ->with('lugaresList', $lugaresList)
                            ->with('calificacionAgrupamiento', $calificacionAgrupamiento)
                            ->with('diasBloqueados',$diasBloqueados[0]->after_day);
            }else{
                return view('public_page.booking.desk.tourBooking')
                            ->with('imagenes', $imagenes)
                            ->with('calendarios', $calendarClean)
                            ->with('atraccion', $atraccion)
                            ->with('agrupacion', $agrupacion)
                            //->with('reviewsAgrupamientos', $reviewsAgrupamientos)
                            ->with('imagenesOperador', $imagenesOperador)
                            ->with('atraccionComplete', $atraccionComplete)
                            ->with('agrupamientos', $agrupamientos)
                            ->with('numerosReviews', $numerosReviews)
                            ->with('agrupamientos2', $agrupamientos2)
                            ->with('lugaresList', $lugaresList)
                            ->with('calificacionAgrupamiento', $calificacionAgrupamiento)
                            ->with('diasBloqueados',$diasBloqueados[0]->after_day);
            }
		}
    }


    public function checkUrlDetalleTours($idservicio,$agrupamiento,$nombreEnviado,$language) {

        if($language=="en")
        {

            $nombreCanonicalEngF="";
            if($agrupamiento[0]->url_eng==""){
                $nombreCanonicalEngF = str_replace(' ', '-', $agrupamiento[0]->nombre_eng);}
           else{
            $nombreCanonicalEngF = str_replace(' ', '-', $agrupamiento[0]->url_eng);}


            $nombreCanonicalEngF = str_replace('/', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace('?', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace("'", '-', $nombreCanonicalEngF);


            if($nombreCanonicalEngF==$nombreEnviado)
                return true;
                else
                {

                    $nombreCanonicalEng="";
                    if($agrupamiento[0]->url_eng==""){
                        $nombreCanonicalEng = str_replace(' ', '-', $agrupamiento[0]->nombre_eng);}
                   else{
                    $nombreCanonicalEng = str_replace(' ', '-', $agrupamiento[0]->url_eng);}


                    $nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
                    $nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
                    $nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
                    //return redirect('/en/'.$nombreCanonicalEng.'/'.$atraccion->id);

                    //dd($nombreCanonicalEng);
                    return ('/en/tour/'.$nombreCanonicalEng.'/'.$idservicio.'/'.$agrupamiento[0]->id);
                }
        }

        else
        {
            $nombreCanonicalEngF="";
            if($agrupamiento[0]->url_esp==""){
            $nombreCanonicalEngF = str_replace(' ', '-', $agrupamiento[0]->nombre);}
            else{
            $nombreCanonicalEngF = str_replace(' ', '-',$agrupamiento[0]->url_esp);}



            $nombreCanonicalEngF = str_replace('/', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace('?', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace("'", '-', $nombreCanonicalEngF);


            if($nombreCanonicalEngF==$nombreEnviado)
                return true;
                else
                {

                    $nombreCanonicalEng="";
            if($agrupamiento[0]->url_esp==""){
            $nombreCanonicalEng = str_replace(' ', '-', $agrupamiento[0]->nombre);}
            else{
            $nombreCanonicalEng = str_replace(' ', '-',$agrupamiento[0]->url_esp);}



                    $nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
                    $nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
                    $nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
                    //return redirect('/en/'.$nombreCanonicalEng.'/'.$atraccion->id);

                    //dd($nombreCanonicalEng);
                    return ('/es/tour/'.$nombreCanonicalEng.'/'.$idservicio.'/'.$agrupamiento[0]->id) ;
                }


        }


    }

	public function agrupamientosEs($nombre_agrupamiento,$id_usuario_servicio,$id_agrupamiento,
                    PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1,TourServiceRepository $gestionTours,Guard $auth) {

		Session::put('locale', 'es');
		return redirect('/es/tour/' . $nombre_agrupamiento.'/'.$id_usuario_servicio.'/'.$id_agrupamiento);
    }
    /*****************************************************************************/
    /*               FIN METODOS DEL CONTROLADOR PARA BOOKING 2.0                */
    /*****************************************************************************/




    /*****************************************************************************/
    /*       INICIO METODOS DEL CONTROLADOR PARA ADMINISTRAR DELIVERYIWT         */
    /*****************************************************************************/
    public function adminDeliveryIWT($tipo,ServiciosOperadorRepository $gestion) {

        $usuarioOperador = session('operador_id');

        //OBTENGO EL ID DEL USUARIO A PARTIR DEL USUARIO OPERADOR
        $idUsuario = $gestion->getIDUsuario($usuarioOperador);
        $idUser = $idUsuario[0];
        $idUser = $idUser->id_usuario;

        //OBTENGO LA INFORMACION DEL USUARIO
        $infoTablaUser = $gestion->getInfoUser($idUser);
        $identificadorUser = $infoTablaUser[0]->id;
        $emailUser = $infoTablaUser[0]->email;
        $passwordUser = $infoTablaUser[0]->password;
        $nombreUsuarioLarvel = $infoTablaUser[0]->username;

        //VERIFICO SI EL USUARIO YA EXISTE EN LA TABLA BOOKING
        //$verificarUsuarioExiste = $gestion->getVerificarUsuario($identificadorUser,$emailUser);

        //GENERO LA FECHA Y EL IDENTIFICADOR
        $fecha = \Carbon\Carbon::now()->toDateTimeString();
        $uuid = $idUser."_".$fecha;

        //ENCRIPTO EL IDENTIFICADOR
        $encriptado =  \Crypt::encrypt($uuid);
        //$desencriptado = \Crypt::decrypt($passwordUser);

        //GUARDA EN LA TABLA VERIFICAR BOOKING
        $guardarBooking = $gestion->guardarVerificarBooking($idUser,null,$encriptado);
        $guardarBook = $guardarBooking->uuid;

        // echo "http://localhost:8081/verify/".$tipo."/".$encriptado;
        // echo '<br><br>';
        // echo $tipo;
        // echo '<br><br>';
        // echo 'Encriptado: '.$encriptado;
        // echo '<br><br>';

        if($guardarBook === ""){
            //redirigir a la pagina de error
            return view('errors.404');
        }else{
            $returnHTML = "https://iguanatrip.com/verify/".$tipo."/".$encriptado;
            return \Redirect::to($returnHTML);
        }



    }

    /*****************************************************************************/
    /*       INICIO METODOS DEL CONTROLADOR PARA ADMINISTRAR DELIVERYIWT         */
    /*****************************************************************************/



 /*****************************************************************************/
    /*            INICIO METODOS DEL CONTROLADOR PARA EL NUEVO HOME              */
    /*****************************************************************************/


    public function getDayTripsDetails($nombre_canton, $id_canton, BookingRepository $gestion ) {


        //se envia el id del canton para buscar en la tabla origen_destino todos
        //los registros que tienen el origen en el canton
        $origen_destino_group = $gestion->findOriginGroup($id_canton);

        if($id_canton == 286){
            $searchCanton = 'banos';
        }else if($id_canton == 237){
            $searchCanton = 'scruz';
        }else if($id_canton == 236){
            $searchCanton = 'isabela';
        }else if($id_canton == 235){
            $searchCanton = 'scristobal';
        }

        $agrupamientosNew = [];
        //Obtengo todos agrupamientos que pertenecen al canton
        for($a = 0; $a < count($origen_destino_group);$a++){
            $agrupamientosNew[] = $gestion->getGroupInfoDetails($origen_destino_group[$a]);
        }

        $agrupamientos = $agrupamientosNew;

        //Obtengo las fotos de cada agrupamiento
        for($a = 0; $a < count($agrupamientos);$a++){
            $agrupamientos[$a]->foto = $gestion->getPhotoGroup($agrupamientos[$a][0]->id);
        }

        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for($i = 0; $i < count($agrupamientos);$i++){
            $objeto = $agrupamientos[$i][0];

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
                            if($precios[$k]->mon > 0.16 || $precios[$k]->mon ==0){
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if($precios[$k]->tue > 0.16 || $precios[$k]->tue == 0){
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if($precios[$k]->wed > 0.16 || $precios[$k]->wed ==0){
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if($precios[$k]->thu > 0.16 || $precios[$k]->thu == 0){
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if($precios[$k]->fri > 0.16 || $precios[$k]->fri == 0){
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if($precios[$k]->sat > 0.16 || $precios[$k]->sat ==0){
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if($precios[$k]->sun > 0.16 || $precios[$k]->sun == 0){
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
            $agrupamientos[$i][0]->precioDesde = $minimoDeTodos;
            $agrupamientos[$i][0]->precioHasta = $maximoDeTodos;
            $arrayCalendarios = array();
        }

        return view('public_page.booking.dayTripsDetails')
                    ->with('nombreCanton', $nombre_canton)
                    ->with('agrupamientos', $agrupamientos)
                    ->with('searchCanton', $searchCanton);

    }


    /*****************************************************************************/
    /*              FIN METODOS DEL CONTROLADOR PARA EL NUEVO HOME               */
    /*****************************************************************************/

}
