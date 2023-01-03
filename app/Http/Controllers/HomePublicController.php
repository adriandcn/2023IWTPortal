<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\ContactosMail;
use App\Jobs\ReservacionMail;
use App\Jobs\VerifyReviewTours;
use App\Models\Review_Usuario_Servicio;
use App\Repositories\PublicServiceRepository;
use App\Repositories\ServiciosOperadorRepository;
use App\Repositories\TourServiceRepository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Input;
use Jenssegers\Agent\Agent;
use Mail;
use PDF;
use Validator;

error_reporting(E_ALL ^ E_DEPRECATED);

class HomePublicController extends Controller
{


    private function getIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        return $_SERVER['REMOTE_ADDR'];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getLocationU()
    {

        if (session('ubicacionS') == null) {

            $location = (object) [
                'city' => 'Quito',
                'region' => 'Pichincha',
                'country' => 'EC',
            ];
            Session::put('ubicacionS', $location);
            return session('ubicacionS');
            try {
                $ipUser = $this->getIp();
                $location = json_decode(file_get_contents("http://ipinfo.io/" . $ipUser));
                if ($location == null || $location->country != "EC") {
                    $location = (object) [
                        'city' => 'Quito',
                        'region' => 'Pichincha',
                        'country' => 'EC',
                    ];
                }
                Session::put('ubicacionS', $location);
            } catch (Exception $e) {

                $location = (object) [
                    'city' => 'Quito',
                    'region' => 'Pichincha',
                    'country' => 'EC',
                ];
                Session::put('ubicacionS', $location);
            }
        }


        return session('ubicacionS');
    }




    public function getHome(PublicServiceRepository $gestion, Guard $auth)
    {

        Session::forget('locale');
        Session::put('locale', 'es');
        //$location = $this->getLocationU();

        /*********************************************************************/
        /*          OBTENGO EL ID DEL CANTON Y DE LA PROVINCIA               */
        /*********************************************************************/

        //   $cantonEventos = $gestion->buscarCantonHome($location->city);
        //   $cantonEventos1 = $gestion->buscarProvinciaPorID($cantonEventos[0]->idUbicacionGeograficaPadre);
        //   if($cantonEventos1[0]->idUbicacionGeograficaPadre != 1){
        //       $cantonEventos1 = $gestion->buscarProvinciaPorID($cantonEventos1[0]->idUbicacionGeograficaPadre);
        //   }

        //   if(empty($cantonEventos)){
        //       $idProvincia = $cantonEventos1[0]->id;
        //       $eventos = $gestion->getEventosHome($idProvincia,2);
        //   }else{
        //       $idCanton = $cantonEventos[0]->id;
        //       $eventos = $gestion->getEventosHome($idCanton,1);
        //       if(empty($eventos)){
        //           $idProvincia = $cantonEventos1[0]->id;
        //           $eventos = $gestion->getEventosHome($idProvincia,2);
        //      }
        //   }


        // for($a = 0; $a < count($eventos);$a++){
        //       $eventos[$a]->foto = $gestion->getPhotoEvents($eventos[$a]->id);
        //       $eventos[$a]->canton = $gestion->getCantonEventsById($eventos[$a]->id_canton);
        //       $eventos[$a]->tipoEvento = $gestion->getTypeEventsById($eventos[$a]->id_catalogo_eventos);
        //   }


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
            $response     = null; //Instagram::users()->getMedia('self');
            $instagrams   =  null; //$response->get();
            \Cache::put('instagrams', $instagrams, 4320);
        } else {
            $instagrams = \Cache::get('instagrams');
        }

        // return response()->json(['data' => $agrupamientos]);

        if ($desk == "mobile") {
            return view('public_page.front.homePageFinV2Mobile');
            //->with('location', $location)
            // ->with('eventos', $eventos)
            //->with('agrupamientos', $agrupamientos);
            //->with('instagrams', $instagrams);
        } else {
            return view('public_page.front.homePageFinV2Eng');
            //->with('location', $location)
            // ->with('eventos', $eventos)
            // ->with('agrupamientos', $agrupamientos);
            //->with('instagrams', $instagrams);
        }
    }

    //Logica para obtener sitemap de los sitios turisticos
    public function sitemap(PublicServiceRepository $gestion)
    {
        if (!\Cache::has('usuarioServicioCache')) {

            $usuarioServicioCache = $gestion->getSitemapUsuariosServicio();

            \Cache::put('usuarioServicioCache', $usuarioServicioCache, 4320);
        } else {
            $usuarioServicioCache = \Cache::get('usuarioServicioCache');
        }
        $content = View::make('Admin/sitemap', ['usuarioServicioCache' => $usuarioServicioCache]);
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }



    //Logica para obtener sitemap de los sitios turisticos
    public function sitemapEng(PublicServiceRepository $gestion)
    {
        if (!\Cache::has('usuarioServicioCache')) {

            $usuarioServicioCache = $gestion->getSitemapUsuariosServicio();

            \Cache::put('usuarioServicioCache', $usuarioServicioCache, 4320);
        } else {
            $usuarioServicioCache = \Cache::get('usuarioServicioCache');
        }
        $content = View::make('Admin/sitemapEng', ['usuarioServicioCache' => $usuarioServicioCache]);
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }



    public function getEventList(Request $request, PublicServiceRepository $gestion)
    {

        $location = $this->getLocationU();


        $cantonEventos = $gestion->buscarCantonHome($location->city);
        $provinciaEventos = $gestion->buscarProvinciaHome($location->region);

        if (empty($cantonEventos)) {
            $idProvincia = $provinciaEventos[0]->id;
            $eventos = $gestion->getEventosHome($idProvincia, 2);
        } else {
            $idCanton = $cantonEventos[0]->id;
            $eventos = $gestion->getEventosHome($idCanton, 1);
            if (empty($eventos)) {
                $idProvincia = $provinciaEventos[0]->id;
                $eventos = $gestion->getEventosHome($idProvincia, 2);
            }
        }

        $arrayIds = array();
        for ($a = 0; $a < count($eventos); $a++) {
            $eventos[$a]->foto = $gestion->getPhotoEvents($eventos[$a]->id);
            $eventos[$a]->canton = $gestion->getCantonEventsById($eventos[$a]->id_canton);
            $eventos[$a]->tipoEvento = $gestion->getTypeEventsById($eventos[$a]->id_catalogo_eventos);
            $arrayIds[] = $eventos[$a]->id_canton;
        }

        /*******************************************/
        /*INICIO SELECT DE LOS CANTONES POR EVENTOS */
        /*******************************************/
        //$arrayIds = array_unique($arrayIds);
        //$cantonesPorEventos = $gestion->getCantonesPorEvento($arrayIds);
        $eventosActuales = $gestion->getEventosActuales();
        $arrayEventos = array();
        for ($a = 0; $a < count($eventosActuales); $a++) {
            $arrayEventos[] = $eventosActuales[$a]->id_canton;
        }

        $arrayEventos = array_unique($arrayEventos);
        $cantonesPorEventos = $gestion->getCantonesPorEvento($arrayEventos);
        /*******************************************/
        /* FIN SELECT DE LOS CANTONES POR EVENTOS  */
        /*******************************************/

        /*******************************************/
        /* LISTA LOS TIPOS DE EVENTOS DEL SISTEMA  */
        /*******************************************/
        $tipoEventos = $gestion->getTipoEventos();
        /*******************************************/
        /*      FIN LISTA DE TIPOS DE EVENTOS       */
        /*******************************************/

        $servicios = $gestion->getServiciosAll();
        $view = View::make('public_page.front.eventList', array('servicios' => $servicios, 'eventos' => $eventos, 'cantonesPorEventos' => $cantonesPorEventos));

        if ($request->ajax()) {
            $sections = $view->rendersections();
            return Response::json($sections);
        } else {
            return $view;
        }
    }

    public function getEventListSearch($id_canton, Request $request, PublicServiceRepository $gestion)
    {

        $eventos = $gestion->getEventosHome($id_canton, 3);
        $arrayIds = array();
        for ($a = 0; $a < count($eventos); $a++) {
            $eventos[$a]->foto = $gestion->getPhotoEvents($eventos[$a]->id);
            $eventos[$a]->canton = $gestion->getCantonEventsById($eventos[$a]->id_canton);
            $eventos[$a]->tipoEvento = $gestion->getTypeEventsById($eventos[$a]->id_catalogo_eventos);
            $arrayIds[] = $eventos[$a]->id_canton;
        }

        /*******************************************/
        /*INICIO SELECT DE LOS CANTONES POR EVENTOS */
        /*******************************************/
        //$arrayIds = array_unique($arrayIds);
        //$cantonesPorEventos = $gestion->getCantonesPorEvento($arrayIds);
        $eventosActuales = $gestion->getEventosActuales();
        $arrayEventos = array();
        for ($a = 0; $a < count($eventosActuales); $a++) {
            $arrayEventos[] = $eventosActuales[$a]->id_canton;
        }

        $arrayEventos = array_unique($arrayEventos);
        $cantonesPorEventos = $gestion->getCantonesPorEvento($arrayEventos);
        /*******************************************/
        /* FIN SELECT DE LOS CANTONES POR EVENTOS  */
        /*******************************************/

        /*******************************************/
        /* LISTA LOS TIPOS DE EVENTOS DEL SISTEMA  */
        /*******************************************/
        $tipoEventos = $gestion->getTipoEventos();
        /*******************************************/
        /*      FIN LISTA DE TIPOS DE EVENTOS       */
        /*******************************************/

        $servicios = $gestion->getServiciosAll();
        $view = View::make('public_page.front.eventList1', array('servicios' => $servicios, 'eventos' => $eventos, 'cantonesPorEventos' => $cantonesPorEventos, 'id_canton' => $id_canton));

        if ($request->ajax()) {
            $sections = $view->rendersections();
            return Response::json($sections);
        } else {
            return $view;
        }
    }

    public function getEventListSearch1($limite, Request $request, PublicServiceRepository $gestion)
    {

        $eventos = $gestion->getEventosHomePaginate($limite);
        $arrayIds = array();
        for ($a = 0; $a < count($eventos); $a++) {
            $eventos[$a]->foto = $gestion->getPhotoEvents($eventos[$a]->id);
            $eventos[$a]->canton = $gestion->getCantonEventsById($eventos[$a]->id_canton);
            $eventos[$a]->tipoEvento = $gestion->getTypeEventsById($eventos[$a]->id_catalogo_eventos);
            $arrayIds[] = $eventos[$a]->id_canton;
        }
        /*******************************************/
        /*INICIO SELECT DE LOS CANTONES POR EVENTOS */
        /*******************************************/
        //$arrayIds = array_unique($arrayIds);
        //$cantonesPorEventos = $gestion->getCantonesPorEvento($arrayIds);
        $eventosActuales = $gestion->getEventosActuales();
        $arrayEventos = array();
        for ($a = 0; $a < count($eventosActuales); $a++) {
            $arrayEventos[] = $eventosActuales[$a]->id_canton;
        }

        $arrayEventos = array_unique($arrayEventos);
        $cantonesPorEventos = $gestion->getCantonesPorEvento($arrayEventos);
        /*******************************************/
        /* FIN SELECT DE LOS CANTONES POR EVENTOS  */
        /*******************************************/

        /*******************************************/
        /* LISTA LOS TIPOS DE EVENTOS DEL SISTEMA  */
        /*******************************************/
        $tipoEventos = $gestion->getTipoEventos();
        /*******************************************/
        /*      FIN LISTA DE TIPOS DE EVENTOS       */
        /*******************************************/

        $servicios = $gestion->getServiciosAll();
        $id_canton = 0;
        $view = View::make('public_page.front.eventList1', array('servicios' => $servicios, 'eventos' => $eventos, 'cantonesPorEventos' => $cantonesPorEventos, 'id_canton' => $id_canton));

        if ($request->ajax()) {
            $sections = $view->rendersections();
            return Response::json($sections);
        } else {
            return $view;
        }
    }


    public function getSearchTotalEventsNew(Request $request, PublicServiceRepository $gestion)
    {

        $location = $this->getLocationU();

        $cantonEventos = $gestion->buscarCantonHome($location->city);
        $provinciaEventos = $gestion->buscarProvinciaHome($location->region);

        if (empty($cantonEventos)) {
            $idProvincia = $provinciaEventos[0]->id;
            $eventos = $gestion->getEventosHomeDetalles($idProvincia, 2);
        } else {
            $idCanton = $cantonEventos[0]->id;
            $eventos = $gestion->getEventosHomeDetalles($idCanton, 1);
            if (empty($eventos)) {
                $idProvincia = $provinciaEventos[0]->id;
                $eventos = $gestion->getEventosHomeDetalles($idProvincia, 2);
            }
        }

        for ($a = 0; $a < count($eventos); $a++) {
            $eventos[$a]->foto = $gestion->getPhotoEvents($eventos[$a]->id);
            $eventos[$a]->canton = $gestion->getCantonEventsById($eventos[$a]->id_canton);
            $eventos[$a]->tipoEvento = $gestion->getTypeEventsById($eventos[$a]->id_catalogo_eventos);
        }

        $view = View::make('public_page.front.AllTopEvents', array('eventos' => $eventos));

        if ($request->ajax()) {
            $sections = $view->rendersections();
            return Response::json($sections);
        }
    }

    public function getSearchTotalEvents(Request $request, PublicServiceRepository $gestion, $limite)
    {

        $eventos = $gestion->getEventosHomePaginate($limite);

        for ($a = 0; $a < count($eventos); $a++) {
            $eventos[$a]->foto = $gestion->getPhotoEvents($eventos[$a]->id);
            $eventos[$a]->canton = $gestion->getCantonEventsById($eventos[$a]->id_canton);
            $eventos[$a]->tipoEvento = $gestion->getTypeEventsById($eventos[$a]->id_catalogo_eventos);
        }

        $view = View::make('public_page.front.AllTopEvents', array('eventos' => $eventos));

        if ($request->ajax()) {
            $sections = $view->rendersections();
            return Response::json($sections);
        }
    }


    public function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2)
    {

        $degrees = rad2deg(acos((sin(deg2rad($point1_lat)) * sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat)) * cos(deg2rad($point2_lat)) * cos(deg2rad($point1_long - $point2_long)))));
        switch ($unit) {
            case 'km':
                $distance = $degrees * 111.13384;
                break;
            case 'mi':
                $distance = $degrees * 69.05482;
                break;
            case 'nmi':
                $distance =  $degrees * 59.97662;
        }
        return round($distance, $decimals);
    }






    //Obtiene las descripcion de la atraccion elegida
    public function getTripDescripcion($nombre_atraccion, $id_atraccion, PublicServiceRepository $gestion)
    {


        if (session('locale') == 'en') {
            return redirect('/en/itinerary/' . $nombre_atraccion . '/' . $id_atraccion, 301);
        } else {
            Session::put('locale', 'es');
            return redirect('/es/itinerario/' . $nombre_atraccion . '/' . $id_atraccion, 301);
        }
    }



    //busca dentro de un usuario servicios
    public function postFiltersCategoriaIntern(Request $request, PublicServiceRepository $gestion)
    {

        $inputData = Input::get('formData');
        parse_str($inputData, $formFields);
        $arrayFiltro = array();
        //obtengo los servicios ya almacenados de la bdd


        foreach ($formFields as $key => $value) {
            //verifica si el arreglo de parametros es un catalogo
            if (strpos($key, 'act_') !== False) {
                $arrayFiltro[] = str_replace("act_", "", $key);
            }
        }

        $busquedaInicial = $gestion->getBusquedaInicialCatalogoFiltrosInternos($formFields['id_usuario_previo'], $formFields['searchCity'], $arrayFiltro, $formFields['min_price_i'], $formFields['max_price_i'], null, null, 100, 1);

        $busquedaInicialP = null;

        $view = View::make('public_page.partials.searchcategory', array('catalogo' => $busquedaInicial, 'catalogo2' => $busquedaInicialP));

        if ($request->ajax()) {
            //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());
            $sections = $view->rendersections();

            return response()->json(array('success' => true, 'sections' => $sections));
            //return  Response::json($sections['contentPanel']);
        }

        //obtengo los servicios ya almacenados de la bdd
        return response()->json(array('success' => true));
    }

    //Obtiene los servicios por catalogo cercanos a la atraccion paginados
    public function getCatalosoServiciosSearchIntern(Request $request, PublicServiceRepository $gestion, $id, $id_catalogo, $ciudad)
    {
        //

        $busquedaInicial = $gestion->getBusquedaInicialCatalogoIntern($id, $id_catalogo, $ciudad, null, null, 500, 4);
        //dd($busquedaInicial);


        $busquedaInicialP = null;

        if ($busquedaInicial != null) {
            if (Input::get('page') > $busquedaInicial->currentPage()) {

                $busquedaInicialP = $gestion->getBusquedaInicialCatalogoPadreIntern($id, $id_catalogo, $ciudad, Input::get('page'), $busquedaInicial->currentPage(), 100, 3);
            }
        }


        $view = View::make('public_page.partials.listServicesCategoria', array('catalogo' => $busquedaInicial, 'catalogo2' => $busquedaInicialP));

        if ($request->ajax()) {
            //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());
            $sections = $view->rendersections();
            return Response::json($sections);
            //return  Response::json($sections['contentPanel']);
        }
    }

    //Obtiene los top places paginados
    public function getTopPlaces(Request $request, PublicServiceRepository $gestion)
    {
        $array = array(1, 2);
        // $topPlacesCosta = $gestion->getTopPlaces(500, $array);
        //cargar desde cache
        if (!\Cache::has('topPlacesCosta')) {
            $topPlacesCosta = $gestion->getTopPlacesByRegion(7, 1);
            \Cache::put('topPlacesCosta', $topPlacesCosta, config('global.cacheCleanTime'));
        } else {
            $topPlacesCosta = \Cache::get('topPlacesCosta');
        }

        if (!\Cache::has('topPlacesSierra')) {
            $topPlacesSierra = $gestion->getTopPlacesByRegion(7, 2);
            \Cache::put('topPlacesSierra', $topPlacesSierra, config('global.cacheCleanTime'));
        } else {
            $topPlacesSierra = \Cache::get('topPlacesSierra');
        }

        if (!\Cache::has('topPlacesOriente')) {
            $topPlacesOriente = $gestion->getTopPlacesByRegion(7, 3);
            \Cache::put('topPlacesOriente', $topPlacesOriente, config('global.cacheCleanTime'));
        } else {
            $topPlacesOriente = \Cache::get('topPlacesOriente');
        }

        if (!\Cache::has('topPlacesGalapagos')) {
            $topPlacesGalapagos = $gestion->getTopPlacesByRegion(7, 4);
            \Cache::put('topPlacesGalapagos', $topPlacesGalapagos, config('global.cacheCleanTime'));
        } else {
            $topPlacesGalapagos = \Cache::get('topPlacesGalapagos');
        }
        //Toma de la tabla events
        $topEvents = null; //$gestion->getTopEvents(2);
        //toma de la tabla usuario servicio where catalogo=10 (eventos)
        $topEventsIndividual = null; //$gestion->getTopEventsIndividual(2);
        $view = View::make('public_page.partials.AllTopPlaces', array(
            'topPlacesCosta' => $topPlacesCosta,
            'topPlacesSierra' => $topPlacesSierra,
            'topPlacesOriente' => $topPlacesOriente,
            'topPlacesGalapagos' => $topPlacesGalapagos,
            'topEvents' => $topEvents,
            'topEventsIndividual' => $topEventsIndividual
        ));

        if ($request->ajax()) {
            $sections = $view->rendersections();


            return Response::json($sections);
        }
    }

    public function getTopPlacesByLocation(Request $request, PublicServiceRepository $gestion)
    {
        $array = array(1, 2);
        // $topPlacesCosta = $gestion->getTopPlaces(500, $array);
        switch ($request->topId) {
            case '1':
                //Costa
                $data = $gestion->getTopPlacesByRegion(8, 1);
                $idCarousel = 'carouselTopCosta';
                break;
            case '2':
                // Sierra
                $data = $gestion->getTopPlacesByRegion(8, 2);
                $idCarousel = 'carouselTopSierra';
                break;
            case '3':
                // Oriente
                $data = $gestion->getTopPlacesByRegion(8, 3);
                $idCarousel = 'carouselTopOriente';
                break;
            case '4':
                // Galapagos
                $data = $gestion->getTopPlacesByRegion(8, 4);
                $idCarousel = 'carouselTopGalapagos';
                break;
            case 'evnt':
                //Toma de la tabla events
                $data = $gestion->getTopPlacesByRegion(8);
                $idCarousel = 'carouselTopCosta';
                break;
            case 'indiv':
                //toma de la tabla usuario servicio where catalogo=10 (eventos)
                $data = $gestion->getTopEventsIndividual(8);
                $idCarousel = 'carouselTopIndividual';
                break;
        }

        //return response()->json(['idCarousel' => $idCarousel,'data' => $data->items()]);
        $view = View::make('public_page.partials.topPlacesByLocation', array(
            'data' => $data
        ));
        if ($request->ajax()) {
            $sections = $view->rendersections();
            return Response::json($sections);
        }
    }

    //Obtiene los top places paginados
    public function getCercanosIntern(Request $request, PublicServiceRepository $gestion, $id_atraccion, $id_provincia, $id_canton, $id_parroquia)
    {
        //
        //saber cuales son los hijos de la atraccion principal si lo tiene
        $atraccion = $gestion->getAtraccionDetails($id_atraccion);

        $provincias = null;
        $canton = null;
        $parroquia = null;
        $evntParroquia = null;
        $prmoParroquia = null;
        $evntCanton = null;
        $prmoCanton = null;
        $evntProvincia = null;
        $prmoProvincia = null;
        if ($id_parroquia != 0) {
            $parroquia = $gestion->getParroquiaIntern($id_parroquia, $id_atraccion);
            if ($parroquia != null) {
                $evntParroquia = $gestion->getEventIntern($parroquia);
                $prmoParroquia = $gestion->getPromoIntern($parroquia);
            }
        }
        if ($id_canton != 0) {
            if ($parroquia != null) {
                if (Input::get('page') > $parroquia->currentPage()) {
                    $canton = $gestion->getCantonIntern($id_canton, $id_atraccion, $id_parroquia, Input::get('page'), $parroquia->currentPage());
                }
            } else {
                $canton = $gestion->getCantonIntern($id_canton, $id_atraccion, $id_parroquia, null, null);
            }
            if ($canton != null) {
                $evntCanton = $gestion->getEventIntern($canton);
                $prmoCanton = $gestion->getPromoIntern($canton);
            }
        }
        if ($id_provincia != 0) {
            if ($canton != null) {
                if ($parroquia != null) {
                    $page = $canton->currentPage() + $parroquia->currentPage();
                    $stop = $parroquia->currentPage();
                } else {
                    $page = $canton->currentPage();
                    $stop = $canton->currentPage();
                }
                if (Input::get('page') > ($page)) {
                    $provincias = $gestion->getProvinciaIntern($id_provincia, $id_atraccion, $id_canton, $id_parroquia, Input::get('page'), $stop);
                }
            } else {
                $provincias = $gestion->getProvinciaIntern($id_provincia, $id_atraccion, $id_canton, $id_parroquia, null, null);
            }
            if ($provincias != null) {
                $evntProvincia = $gestion->getEventIntern($provincias);
                $prmoProvincia = $gestion->getPromoIntern($provincias);
            }
        }





        //**********************************************************************//
        //            CALCULO DE LAS DISTANCIAS                                //
        //**********************************************************************//

        if ($parroquia != null) {
            if (count($parroquia) > 0) {
                for ($i = 0; $i < count($parroquia); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $parroquia[$i]->latitud_servicio, $parroquia[$i]->longitud_servicio);
                    $parroquia[$i]->distancia = $distancia;
                }
            }
        }
        if ($evntParroquia != null) {
            if (count($evntParroquia) > 0) {
                for ($i = 0; $i < count($evntParroquia); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $evntParroquia[$i]->latitud_servicio, $evntParroquia[$i]->longitud_servicio);
                    $evntParroquia[$i]->distancia = $distancia;
                }
            }
        }

        if ($prmoParroquia != null) {
            if (count($prmoParroquia) > 0) {
                for ($i = 0; $i < count($prmoParroquia); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $prmoParroquia[$i]->latitud_servicio, $prmoParroquia[$i]->longitud_servicio);
                    $prmoParroquia[$i]->distancia = $distancia;
                }
            }
        }

        if ($canton != null) {
            if (count($canton) > 0) {
                for ($i = 0; $i < count($canton); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $canton[$i]->latitud_servicio, $canton[$i]->longitud_servicio);
                    $canton[$i]->distancia = $distancia;
                }
            }
        }
        if ($provincias != null) {
            if (count($provincias) > 0) {
                for ($i = 0; $i < count($provincias); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $provincias[$i]->latitud_servicio, $provincias[$i]->longitud_servicio);
                    $provincias[$i]->distancia = $distancia;
                }
            }
        }

        if ($evntCanton != null) {
            if (count($evntCanton) > 0) {
                for ($i = 0; $i < count($evntCanton); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $evntCanton[$i]->latitud_servicio, $evntCanton[$i]->longitud_servicio);
                    $evntCanton[$i]->distancia = $distancia;
                }
            }
        }
        if ($prmoCanton != null) {
            if (count($prmoCanton) > 0) {
                for ($i = 0; $i < count($prmoCanton); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $prmoCanton[$i]->latitud_servicio, $prmoCanton[$i]->longitud_servicio);
                    $prmoCanton[$i]->distancia = $distancia;
                }
            }
        }

        if ($evntProvincia != null) {
            if (count($evntProvincia) > 0) {
                for ($i = 0; $i < count($evntProvincia); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $evntProvincia[$i]->latitud_servicio, $evntProvincia[$i]->longitud_servicio);
                    $evntProvincia[$i]->distancia = $distancia;
                }
            }
        }

        if ($prmoProvincia != null) {
            if (count($prmoProvincia) > 0) {
                for ($i = 0; $i < count($prmoProvincia); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $prmoProvincia[$i]->latitud_servicio, $prmoProvincia[$i]->longitud_servicio);
                    $prmoProvincia[$i]->distancia = $distancia;
                }
            }
        }









        $view = View::make('public_page.partials.cercanosIntern', array(
            'parroquia' => $parroquia,
            'evntParroquia' => $evntParroquia,
            'prmoParroquia' => $prmoParroquia,
            'canton' => $canton,
            'provincias' => $provincias,
            'evntCanton' => $evntCanton,
            'prmoCanton' => $prmoCanton,
            'evntProvincia' => $evntProvincia,
            'prmoProvincia' => $prmoProvincia,
        ));
        if ($request->ajax()) {
            $sections = $view->rendersections();
            return Response::json($sections);
        }
    }

    //Obtiene los top places paginados
    public function getbyCity(Request $request, PublicServiceRepository $gestion, $city)
    {
        //



        $eventosCloseProv = null;
        $eventosDepCloseProv = null;
        $eventosClose = null; //$gestion->getEventsIndepCity($city, 100, 10); //$eventosClose = $gestion->getEventsIndepCity(ciudad,take,pagination);
        $eventosDepClose = $gestion->getEventsDepCity($city, 100, 10); //$eventosClose = $gestion->getEventsIndepCity(ciudad,take,pagination);
        $PromoDepClose = null; //$gestion->getPromoDepCity($city, 100, 10); //$eventosClose = $gestion->getEventsIndepCity(ciudad,take,pagination);



        $view = View::make('public_page.partials.closeToMe', array(
            'eventosClose' => $eventosClose,
            'eventosCloseProv' => $eventosCloseProv,
            'eventosDepClose' => $eventosDepClose,
            'eventosDepCloseProv' => $eventosDepCloseProv,
            'PromoDepClose' => $PromoDepClose
        ));

        if ($request->ajax()) {
            //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());


            $sections = $view->rendersections();
            return Response::json($sections);

            //return  Response::json($sections['contentPanel']);
        }
    }

    //Obtiene los lugares cercanos acorde a una ubicacion paginados
    public function getcloseToMe(Request $request, PublicServiceRepository $gestion, $city)
    {


        $eventosCloseProv = null;
        $eventosDepClose = null;
        $eventosDepCloseProv = null;
        $PromoDepClose = null;
        $AtraccionesClose = null;
        //Existe una categoria que es independiente para crear eventos
        $eventosClose = null; //$gestion->getEventsIndepCity($city, 100, 12); //$eventosClose = $gestion->getEventsIndepCity(ciudad,take,pagination);
        //esos son eventos y promociones de los establecimientos
        $eventosDepClose = $gestion->getEventsDepCity($city, 100, 12); //$eventosClose = $gestion->getEventsIndepCity(ciudad,take,pagination);
        $PromoDepClose = $gestion->getPromoDepCity($city, 100, 12); //$eventosClose = $gestion->getEventsIndepCity(ciudad,take,pagination);


        $AtraccionesClose = $gestion->getAtraccionesByCity($city, 100, 12);

        if ($AtraccionesClose == null) {
            $AtraccionesClose = $gestion->getAtraccionesByCity("Ecuador", 100, 12);
        }
        //$Inspiration = $gestion->getInspiration(100, 2);
        $Inspiration = null;


        if ($eventosClose != null) {

            if (Input::get('page') > $eventosClose->currentPage()) {
                $eventosCloseProv = $gestion->getEventsIndepProvince($city, Input::get('page'), $eventosClose->currentPage(), 100, 10);
            }
            if ($eventosDepClose != null) {
                if (Input::get('page') > $eventosDepClose->currentPage()) {
                    $eventosDepCloseProv = $gestion->getEventsDepProvince($city, Input::get('page'), $eventosDepClose->currentPage(), 100, 10);
                }
            }
        } else {

            $eventosCloseProv = $gestion->getEventsIndepProvince($city, null, null, 100, 4);
        }

        $view = View::make(
            'public_page.partials.closeToMe',
            array(
                'eventosClose' => $eventosClose,
                'eventosCloseProv' => $eventosCloseProv,
                'eventosDepClose' => $eventosDepClose,
                'eventosDepCloseProv' => $eventosDepCloseProv,
                'PromoDepClose' => $PromoDepClose,
                'Inspiration' => $Inspiration,
                'AtraccionesClose' => $AtraccionesClose,
            )
        );

        if ($request->ajax()) {
            $sections = $view->rendersections();
            return Response::json($sections);
        }
    }

    //Obtiene las regiones del pais
    public function getRegiones(Request $request)
    {
        //
        //Al momento son quemadas 4 provincias
        //$listProvincias = $gestion->getProvincias();
        // $location=file_get_contents('http://freegeoip.net/json/200.125.245.238');

        $view = View::make('public_page.partials.regiones')->with('location', $location);

        if ($request->ajax()) {
            $sections = $view->rendersections();


            return Response::json($sections);
            //return  Response::json($sections['contentPanel']);
        } else
            return $view;
    }

    //Obtiene las descripcion de la provincia elegida
    public function getProvinciaDescripcion($id_provincia, $id_image, PublicServiceRepository $gestion)
    {
        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);
        $provincias = $gestion->getProvinciaDetails($id_provincia);
        $imagenes = $gestion->getImageporProvincia($id_provincia);
        $ciudades = $gestion->getCiudades($id_provincia);
        $visitados = $gestion->getVisitadosProvincia($id_provincia);

        // $eventosProvincia = $gestion->getEventosProvincia($id_provincia);
        $explore = $gestion->getExplorer($id_provincia);

        return view('public_page.front.detalleProvincia')->with('provincias', $provincias)->with('imagenes', $imagenes)->with('ciudades', $ciudades)->with('explore', $explore)->with('visitados', $visitados);
    }

    //Obtiene las promociones de cada evento
    public function getPromocionesAtraccion(Request $request, $id_atraccion, PublicServiceRepository $gestion)
    {
        //




        $ImgPromociones = null;
        $promociones = $gestion->getPromoAtraccion($id_atraccion);
        if ($promociones != null)
            $ImgPromociones = $gestion->getPromotionsImagenAtraccion($promociones);



        $view = View::make('public_page.partials.promocionesAtraccion', array('promociones' => $promociones, 'ImgPromociones' => $ImgPromociones));

        if ($request->ajax()) {
            //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());


            $sections = $view->rendersections();
            return Response::json($sections);

            //return  Response::json($sections['contentPanel']);
        }
    }

    //Obtiene los eventos de cada atraccion  de cada evento
    public function getEventosAtraccion(Request $request, $id_atraccion, PublicServiceRepository $gestion)
    {
        //




        $Imgeventos = null;
        $eventos = $gestion->getEventosAtraccion($id_atraccion);
        if ($eventos != null)
            $Imgeventos = $gestion->getEventosImagenAtraccion($eventos);



        $view = View::make('public_page.partials.eventosAtraccion', array('eventos' => $eventos, 'Imgeventos' => $Imgeventos));

        if ($request->ajax()) {
            //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());


            $sections = $view->rendersections();
            return Response::json($sections);

            //return  Response::json($sections['contentPanel']);
        }
    }



    //Obtiene las descripcion de la atraccion elegida
    public function getAtraccionDescripcionEspBack($nombre_atraccion, $id_atraccion, PublicServiceRepository $gestion)
    {
        Session::forget('locale');
        Session::put('locale', 'es');
        return redirect('/detalle/' . $nombre_atraccion . '/' . $id_atraccion, 301);
    }


    //Obtiene las descripcion de la atraccion elegida
    public function getAtraccionDescripcionEsp($nombre_atraccion, $id_atraccion, PublicServiceRepository $gestion)
    {
        /*INFORMACION DE LOS AGRUPAMIENTOS*/

        Session::put('locale', 'es');
        $atraccion = $gestion->getAtraccionDetails($id_atraccion);
        $checkAtraccion = $this->checkUrlDetalle($atraccion, $nombre_atraccion, "es");

        if ($checkAtraccion != "" && $checkAtraccion != "true") {

            return redirect($checkAtraccion, 301);
        }

        $idCanton = null;
        $idProv = null;
        $Region = null;
        $idRegion = null;

        if ($atraccion) {
            $idCanton = $atraccion->id_canton;
            $idProv = $atraccion->id_provincia;
            $Region = DB::table('ubicacion_geografica')->select(['id_region'])->where('id', $atraccion->id_provincia)->first();
            $idRegion = ($Region) ? $Region->id_region : null;
        }


        $agrupamientos = $gestion->getAllGroup($idCanton, $idProv, $idRegion);
        //dd($agrupamientos);

        // return response()->json(['data' => $agrupamientos]);
        for ($a = 0; $a < count($agrupamientos); $a++) {
            $agrupamientos[$a]->foto = $gestion->getPhotoGroup($agrupamientos[$a]->id);
        }
        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos); $i++) {
            $objeto = $agrupamientos[$i];
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);
            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);
                    $preciosArray = array();
                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16) {
                                $preciosArray[] = $precios[$k]->sun;
                            }
                            if (!empty($preciosArray)) {
                                $arrayMaximos[] = max($preciosArray);
                                $arrayMinimos[] = min($preciosArray);
                            }
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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
        /*FIN DE LA INFORMACION DE LOS AGRUPAMIENTOS*/
        /*INFORMACION DE LOS EVENTOS*/
        $location = $this->getLocationU();
        $cantonEventos = $gestion->buscarCantonHome($location->city);
        $cantonEventos1 = $gestion->buscarProvinciaPorID($cantonEventos[0]->idUbicacionGeograficaPadre);
        if ($cantonEventos1[0]->idUbicacionGeograficaPadre != 1) {
            $cantonEventos1 = $gestion->buscarProvinciaPorID($cantonEventos1[0]->idUbicacionGeograficaPadre);
        }
        if (empty($cantonEventos)) {
            $idProvincia = $cantonEventos1[0]->id;
            $eventos = $gestion->getEventosHomeDetalles($idProvincia, 2);
        } else {
            $idCanton = $cantonEventos[0]->id;
            $eventos = $gestion->getEventosHomeDetalles($idCanton, 1);
            if (empty($eventos)) {
                $idProvincia = $cantonEventos1[0]->id;
                $eventos = $gestion->getEventosHomeDetalles($idProvincia, 2);
            }
        }
        for ($a = 0; $a < count($eventos); $a++) {
            $eventos[$a]->foto = $gestion->getPhotoEvents($eventos[$a]->id);
        }
        /*FIN DE LA INFORMACION DE LOS EVENTOS*/
        $ImgItiner = null;
        $explore = null;
        $visitados = null;
        $provincia = null;
        $canton = null;
        $parroquia = null;
        $trips = null;
        $operadores = null;
        $errores = $gestion->getErrores();
        // $atraccion = $gestion->getAtraccionDetails($id_atraccion);
        // return response()->json($atraccion->reviewsTotal);
        if ($atraccion != null) {
            $gestion->saveVisita(null, $id_atraccion);
            $tipoReviews = $gestion->getTiporeviews($id_atraccion);
            $imagenes = $gestion->getAtraccionImages($id_atraccion);
            if ($imagenes == null) {
                $imagenes = $gestion->getAtraccionImagesnNULL($id_atraccion);
            }
            $itinerarios = $gestion->getItinerAtraccion($id_atraccion);
            $related = $gestion->getHijosAtraccion($id_atraccion);
            $servicios = $gestion->getServicios($atraccion->id_canton);
            $trips = $gestion->getTrips($atraccion->id_provincia);
            $operadores = $gestion->getOperadores($atraccion->id_provincia);

            if (count($related) > 0) {
                //CALCULO DE LA DISTANCIA POR CADA $RELATED
                for ($i = 0; $i < count($related); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $related[$i]->latitud_servicio, $related[$i]->longitud_servicio);
                    $related[$i]->distancia = $distancia;
                }
            }
            if ($atraccion->id_provincia != 0)
                $provincia = $gestion->getUbicacionAtraccion($atraccion->id_provincia);

            if ($atraccion->id_canton != 0)
                $canton = $gestion->getUbicacionAtraccion($atraccion->id_canton);

            if ($atraccion->id_parroquia != 0)
                $parroqia = $gestion->getUbicacionAtraccion($atraccion->id_parroquia);

            if ($related == null)
                $visitados = $gestion->getVisitadosProvincia($atraccion->id_provincia);

            if ($itinerarios != null)
                $ImgItiner = $gestion->getItinerImagenAtraccion($itinerarios);

            if (isset($atraccion->id_provincia))
                $explore = $gestion->getExplorer($atraccion->id);
            // ultimos editados.
            $updatedServices = $gestion->getLatestServicesUpdated($atraccion->id_provincia, $atraccion->id_canton, 2);
            // return response()->json(['data' => $updatedServices]);


            //if (session('device')!="")
            $agent = new Agent();

            $desk = $device = $agent->isMobile();
            if ($desk == 1)
                $desk = "mobile";
            else {
                $desk = "desk";
            }

            Session::put('device', $desk);



            return view('public_page.newFront.' . session('device') . '.detalleAtracciones')->with('atraccion', $atraccion)
                ->with('imagenes', $imagenes)->with('explore', $explore)
                ->with('itinerarios', $itinerarios)
                ->with('ImgItiner', $ImgItiner)
                ->with('related', $related)
                ->with('visitados', $visitados)
                ->with('canton', $canton)
                ->with('provincia', $provincia)
                ->with('parroquia', $parroquia)
                ->with('servicios', $servicios)
                ->with('tipoReviews', $tipoReviews)
                ->with('trips', $trips)
                ->with('errores', $errores)
                ->with('operadores', $operadores)
                ->with('agrupamientos', $agrupamientos)
                ->with('updatedServices', $updatedServices)
                ->with('eventos', $eventos);
        } else {
            abort(404);
        }
    }

    //Obtiene las descripcion de la atraccion elegida
    public function getTourListEs()
    {
        //Session::forget('locale');
        if (session('locale') == 'es')
            return redirect('/es/Ferry-Galapagos/', 301);
        else
            return redirect('/en/Galapagos-Ferry/', 301);
    }

    public function checkUrlDetalleTours($idservicio, $agrupamiento, $nombreEnviado, $language)
    {

        if ($language == "en") {

            $nombreCanonicalEngF = str_replace(' ', '-', $agrupamiento[0]->nombre_eng);
            $nombreCanonicalEngF = str_replace('/', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace('?', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace("'", '-', $nombreCanonicalEngF);


            if ($nombreCanonicalEngF == $nombreEnviado)
                return true;
            else {
                $nombreCanonicalEng = str_replace(' ', '-', $agrupamiento[0]->nombre_eng);
                $nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
                $nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
                $nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
                //return redirect('/en/'.$nombreCanonicalEng.'/'.$atraccion->id);

                //dd($nombreCanonicalEng);
                return ('/en/tour/' . $nombreCanonicalEng . '/' . $idservicio . '/' . $agrupamiento[0]->id);
            }
        } else {


            $nombreCanonicalEngF = str_replace(' ', '-', $agrupamiento[0]->nombre);
            $nombreCanonicalEngF = str_replace('/', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace('?', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace("'", '-', $nombreCanonicalEngF);

            if ($nombreCanonicalEngF == $nombreEnviado)
                return true;
            else {
                $nombreCanonicalEng = str_replace(' ', '-', $agrupamiento[0]->nombre);
                $nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
                $nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
                $nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
                //return redirect('/en/'.$nombreCanonicalEng.'/'.$atraccion->id);

                return ('/es/tour/' . $nombreCanonicalEng . '/' . $idservicio . '/' . $agrupamiento[0]->id);
            }
        }
    }







    public function checkUrlDetalle($atraccion, $nombreEnviado, $language)
    {

        if ($language == "en") {

            $nombreCanonicalEngF = "";
            if ($atraccion->url_eng == "") {
                $nombreCanonicalEngF = str_replace(' ', '-', $atraccion->nombre_servicio_eng);
            } else {
                $nombreCanonicalEngF = str_replace(' ', '-', $atraccion->url_eng);
            }

            $nombreCanonicalEngF = str_replace('/', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace('?', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace("'", '-', $nombreCanonicalEngF);


            if ($nombreCanonicalEngF == $nombreEnviado)
                return true;
            else {
                $nombreCanonicalEng = "";
                if ($atraccion->url_eng == "") {
                    $nombreCanonicalEng = str_replace(' ', '-', $atraccion->nombre_servicio_eng);
                } else {
                    $nombreCanonicalEng = str_replace(' ', '-', $atraccion->url_eng);
                }


                $nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
                $nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
                $nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
                //return redirect('/en/'.$nombreCanonicalEng.'/'.$atraccion->id);

                //dd($nombreCanonicalEng);
                return ('/en/' . $nombreCanonicalEng . '/' . $atraccion->id);
            }
        } else {
            $nombreCanonicalEngF = "";
            if ($atraccion->url_esp == "") {
                $nombreCanonicalEngF = str_replace(' ', '-', $atraccion->nombre_servicio);
            } else {
                $nombreCanonicalEngF = str_replace(' ', '-', $atraccion->url_esp);
            }


            $nombreCanonicalEngF = str_replace('/', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace('?', '-', $nombreCanonicalEngF);
            $nombreCanonicalEngF = str_replace("'", '-', $nombreCanonicalEngF);


            if ($nombreCanonicalEngF == $nombreEnviado)
                return true;
            else {
                $nombreCanonicalEng = "";
                if ($atraccion->url_esp == "") {
                    $nombreCanonicalEng = str_replace(' ', '-', $atraccion->nombre_servicio);
                } else {
                    $nombreCanonicalEng = str_replace(' ', '-', $atraccion->url_esp);
                }



                $nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
                $nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
                $nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
                //return redirect('/en/'.$nombreCanonicalEng.'/'.$atraccion->id);

                //dd($nombreCanonicalEng);
                return ('/es/' . $nombreCanonicalEng . '/' . $atraccion->id);
            }
        }
    }

    //Obtiene las descripcion de la atraccion elegida
    public function getAtraccionDescripcionEng($nombre_atraccion, $id_atraccion, PublicServiceRepository $gestion)
    {
        /*INFORMACION DE LOS AGRUPAMIENTOS*/

        Session::put('locale', 'en');
        $atraccion = $gestion->getAtraccionDetails($id_atraccion);
        if (!$atraccion) {
            abort(404);
        }

        if ($atraccion->estado_servicio_usuario == 0) {
            return redirect("/", 301);
        }

        $checkAtraccion = $this->checkUrlDetalle($atraccion, $nombre_atraccion, "en");

        if ($checkAtraccion != "" && $checkAtraccion != "true") {

            return redirect($checkAtraccion, 301);
        }

        $idCanton = null;
        $idProv = null;
        $Region = null;
        $idRegion = null;

        if ($atraccion) {
            $idCanton = $atraccion->id_canton;
            $idProv = $atraccion->id_provincia;
            $Region = DB::table('ubicacion_geografica')->select(['id_region'])->where('id', $atraccion->id_provincia)->first();
            $idRegion = ($Region) ? $Region->id_region : null;
        }


        $agrupamientos = $gestion->getAllGroup($idCanton, $idProv, $idRegion);


        // return response()->json(['data' => $agrupamientos]);
        for ($a = 0; $a < count($agrupamientos); $a++) {
            $agrupamientos[$a]->foto = $gestion->getPhotoGroup($agrupamientos[$a]->id);
        }
        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos); $i++) {
            $objeto = $agrupamientos[$i];
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);
            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);
                    $preciosArray = array();
                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16) {
                                $preciosArray[] = $precios[$k]->sun;
                            }
                            if (!empty($preciosArray)) {
                                $arrayMaximos[] = max($preciosArray);
                                $arrayMinimos[] = min($preciosArray);
                            }
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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
        /*FIN DE LA INFORMACION DE LOS AGRUPAMIENTOS*/
        /*INFORMACION DE LOS EVENTOS*/
        $location = $this->getLocationU();
        $cantonEventos = $gestion->buscarCantonHome($location->city);
        $cantonEventos1 = $gestion->buscarProvinciaPorID($cantonEventos[0]->idUbicacionGeograficaPadre);
        if ($cantonEventos1[0]->idUbicacionGeograficaPadre != 1) {
            $cantonEventos1 = $gestion->buscarProvinciaPorID($cantonEventos1[0]->idUbicacionGeograficaPadre);
        }
        if (empty($cantonEventos)) {
            $idProvincia = $cantonEventos1[0]->id;
            $eventos = $gestion->getEventosHomeDetalles($idProvincia, 2);
        } else {
            $idCanton = $cantonEventos[0]->id;
            $eventos = $gestion->getEventosHomeDetalles($idCanton, 1);
            if (empty($eventos)) {
                $idProvincia = $cantonEventos1[0]->id;
                $eventos = $gestion->getEventosHomeDetalles($idProvincia, 2);
            }
        }
        for ($a = 0; $a < count($eventos); $a++) {
            $eventos[$a]->foto = $gestion->getPhotoEvents($eventos[$a]->id);
        }
        /*FIN DE LA INFORMACION DE LOS EVENTOS*/
        $ImgItiner = null;
        $explore = null;
        $visitados = null;
        $provincia = null;
        $canton = null;
        $parroquia = null;
        $trips = null;
        $operadores = null;
        $errores = $gestion->getErrores();
        // $atraccion = $gestion->getAtraccionDetails($id_atraccion);
        // return response()->json($atraccion->reviewsTotal);
        if ($atraccion != null) {
            $gestion->saveVisita(null, $id_atraccion);
            $tipoReviews = $gestion->getTiporeviews($id_atraccion);
            $imagenes = $gestion->getAtraccionImages($id_atraccion);
            if ($imagenes == null) {
                $imagenes = $gestion->getAtraccionImagesnNULL($id_atraccion);
            }
            $itinerarios = $gestion->getItinerAtraccion($id_atraccion);
            $related = $gestion->getHijosAtraccion($id_atraccion);
            $servicios = $gestion->getServicios($atraccion->id_canton);
            $trips = $gestion->getTrips($atraccion->id_provincia);
            $operadores = $gestion->getOperadores($atraccion->id_provincia);

            if (count($related) > 0) {
                //CALCULO DE LA DISTANCIA POR CADA $RELATED
                for ($i = 0; $i < count($related); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $related[$i]->latitud_servicio, $related[$i]->longitud_servicio);
                    $related[$i]->distancia = $distancia;
                }
            }
            if ($atraccion->id_provincia != 0)
                $provincia = $gestion->getUbicacionAtraccion($atraccion->id_provincia);

            if ($atraccion->id_canton != 0)
                $canton = $gestion->getUbicacionAtraccion($atraccion->id_canton);

            if ($atraccion->id_parroquia != 0)
                $parroqia = $gestion->getUbicacionAtraccion($atraccion->id_parroquia);

            if ($related == null)
                $visitados = $gestion->getVisitadosProvincia($atraccion->id_provincia);

            if ($itinerarios != null)
                $ImgItiner = $gestion->getItinerImagenAtraccion($itinerarios);

            if (isset($atraccion->id_provincia))
                $explore = $gestion->getExplorer($atraccion->id);
            // ultimos editados.
            $updatedServices = $gestion->getLatestServicesUpdated($atraccion->id_provincia, $atraccion->id_canton, 2);
            // return response()->json(['data' => $updatedServices]);


            //if (session('device')!="")
            $agent = new Agent();

            $desk = $device = $agent->isMobile();
            if ($desk == 1)
                $desk = "mobile";
            else {
                $desk = "desk";
            }

            Session::put('device', $desk);



            return view('public_page.newFront.' . session('device') . '.detalleAtracciones')->with('atraccion', $atraccion)
                ->with('imagenes', $imagenes)->with('explore', $explore)
                ->with('itinerarios', $itinerarios)
                ->with('ImgItiner', $ImgItiner)
                ->with('related', $related)
                ->with('visitados', $visitados)
                ->with('canton', $canton)
                ->with('provincia', $provincia)
                ->with('parroquia', $parroquia)
                ->with('servicios', $servicios)
                ->with('tipoReviews', $tipoReviews)
                ->with('trips', $trips)
                ->with('errores', $errores)
                ->with('operadores', $operadores)
                ->with('agrupamientos', $agrupamientos)
                ->with('updatedServices', $updatedServices)
                ->with('eventos', $eventos);
        } else {
            abort(404);
        }
    }




    //Obtiene las descripcion de la atraccion elegida
    public function getAtraccionDescripcion($nombre_atraccion, $id_atraccion, PublicServiceRepository $gestion)
    {
        /*INFORMACION DE LOS AGRUPAMIENTOS*/

        Session::put('locale', 'es');


        if (!\Cache::has('atraccion_' . $id_atraccion)) {
            $atraccion = $gestion->getAtraccionDetails($id_atraccion);
            //return($atraccion);
            \Cache::put('atraccion_' . $id_atraccion, $atraccion, config('global.cacheCleanTime'));
        } else {
            $atraccion = \Cache::get('atraccion_' . $id_atraccion);
            // return('here2');

        }



        if (!$atraccion) {

            abort(404);
        }

        if ($atraccion->estado_servicio_usuario == 0) {
            return redirect("/", 301);
        }


        $checkAtraccion = $this->checkUrlDetalle($atraccion, $nombre_atraccion, "es");

        if ($checkAtraccion != "" && $checkAtraccion != "true") {

            return redirect($checkAtraccion, 301);
        }
        $idCanton = null;
        $idProv = null;
        $Region = null;
        $idRegion = null;

        if ($atraccion) {
            $idCanton = $atraccion->id_canton;
            $idProv = $atraccion->id_provincia;
            $Region = DB::table('ubicacion_geografica')->select(['id_region'])->where('id', $atraccion->id_provincia)->first();
            $idRegion = ($Region) ? $Region->id_region : null;
        }


        $agrupamientos = $gestion->getAllGroup($idCanton, $idProv, $idRegion);


        // return response()->json(['data' => $agrupamientos]);
        for ($a = 0; $a < count($agrupamientos); $a++) {
            $agrupamientos[$a]->foto = $gestion->getPhotoGroup($agrupamientos[$a]->id);
        }
        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos); $i++) {
            $objeto = $agrupamientos[$i];
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);
            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);
                    $preciosArray = array();
                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16) {
                                $preciosArray[] = $precios[$k]->sun;
                            }
                            if (!empty($preciosArray)) {
                                $arrayMaximos[] = max($preciosArray);
                                $arrayMinimos[] = min($preciosArray);
                            }
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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
        /*FIN DE LA INFORMACION DE LOS AGRUPAMIENTOS*/
        /*INFORMACION DE LOS EVENTOS*/
        $location = $this->getLocationU();
        $cantonEventos = $gestion->buscarCantonHome($location->city);
        $cantonEventos1 = $gestion->buscarProvinciaPorID($cantonEventos[0]->idUbicacionGeograficaPadre);
        if ($cantonEventos1[0]->idUbicacionGeograficaPadre != 1) {
            $cantonEventos1 = $gestion->buscarProvinciaPorID($cantonEventos1[0]->idUbicacionGeograficaPadre);
        }
        if (empty($cantonEventos)) {
            $idProvincia = $cantonEventos1[0]->id;
            $eventos = $gestion->getEventosHomeDetalles($idProvincia, 2);
        } else {
            $idCanton = $cantonEventos[0]->id;
            $eventos = $gestion->getEventosHomeDetalles($idCanton, 1);
            if (empty($eventos)) {
                $idProvincia = $cantonEventos1[0]->id;
                $eventos = $gestion->getEventosHomeDetalles($idProvincia, 2);
            }
        }
        for ($a = 0; $a < count($eventos); $a++) {
            $eventos[$a]->foto = $gestion->getPhotoEvents($eventos[$a]->id);
        }
        /*FIN DE LA INFORMACION DE LOS EVENTOS*/
        $ImgItiner = null;
        $explore = null;
        $visitados = null;
        $provincia = null;
        $canton = null;
        $parroquia = null;
        $trips = null;
        $operadores = null;
        $errores = $gestion->getErrores();
        // $atraccion = $gestion->getAtraccionDetails($id_atraccion);
        // return response()->json($atraccion->reviewsTotal);
        if ($atraccion != null) {
            $gestion->saveVisita(null, $id_atraccion);
            $tipoReviews = $gestion->getTiporeviews($id_atraccion);
            $imagenes = $gestion->getAtraccionImages($id_atraccion);
            if ($imagenes == null) {
                $imagenes = $gestion->getAtraccionImagesnNULL($id_atraccion);
            }
            $itinerarios = $gestion->getItinerAtraccion($id_atraccion);
            $related = $gestion->getHijosAtraccion($id_atraccion);
            $servicios = $gestion->getServicios($atraccion->id_canton);
            $trips = $gestion->getTrips($atraccion->id_provincia);
            $operadores = $gestion->getOperadores($atraccion->id_provincia);

            if (count($related) > 0) {
                //CALCULO DE LA DISTANCIA POR CADA $RELATED
                for ($i = 0; $i < count($related); $i++) {
                    $distancia = $this->distanceCalculation($atraccion->latitud_servicio, $atraccion->longitud_servicio, $related[$i]->latitud_servicio, $related[$i]->longitud_servicio);
                    $related[$i]->distancia = $distancia;
                }
            }
            if ($atraccion->id_provincia != 0)
                $provincia = $gestion->getUbicacionAtraccion($atraccion->id_provincia);

            if ($atraccion->id_canton != 0)
                $canton = $gestion->getUbicacionAtraccion($atraccion->id_canton);

            if ($atraccion->id_parroquia != 0)
                $parroqia = $gestion->getUbicacionAtraccion($atraccion->id_parroquia);

            if ($related == null)
                $visitados = $gestion->getVisitadosProvincia($atraccion->id_provincia);

            if ($itinerarios != null)
                $ImgItiner = $gestion->getItinerImagenAtraccion($itinerarios);

            if (isset($atraccion->id_provincia))
                $explore = $gestion->getExplorer($atraccion->id);
            // ultimos editados.
            $updatedServices = $gestion->getLatestServicesUpdated($atraccion->id_provincia, $atraccion->id_canton, 2);
            // return response()->json(['data' => $updatedServices]);


            //if (session('device')!="")
            $agent = new Agent();

            $desk = $device = $agent->isMobile();
            if ($desk == 1)
                $desk = "mobile";
            else {
                $desk = "desk";
            }

            Session::put('device', $desk);


            return view('public_page.newFront.' . session('device') . '.detalleAtracciones')->with('atraccion', $atraccion)
                ->with('imagenes', $imagenes)->with('explore', $explore)
                ->with('itinerarios', $itinerarios)
                ->with('ImgItiner', $ImgItiner)
                ->with('related', $related)
                ->with('visitados', $visitados)
                ->with('canton', $canton)
                ->with('provincia', $provincia)
                ->with('parroquia', $parroquia)
                ->with('servicios', $servicios)
                ->with('tipoReviews', $tipoReviews)
                ->with('trips', $trips)
                ->with('errores', $errores)
                ->with('operadores', $operadores)
                ->with('agrupamientos', $agrupamientos)
                ->with('updatedServices', $updatedServices)
                ->with('eventos', $eventos);
        } else {
            abort(404);
        }
    }



    /* ::           where: 'M' is statute miles (default)                         : */
    /* ::                  'K' is kilometers                                      : */
    /* ::                  'N' is nautical miles
      public function distance($lat1, $lon1, $lat2, $lon2, $unit) {

      $theta = $lon1 - $lon2;
      $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
      $dist = acos($dist);
      $dist = rad2deg($dist);
      $miles = $dist * 60 * 1.1515;
      $unit = strtoupper($unit);

      if ($unit == "K") {
      return ($miles * 1.609344);
      } else if ($unit == "N") {
      return ($miles * 0.8684);
      } else {
      return $miles;
      }
      }
      : */

    //Obtiene los servicios por catalogo cercanos a la atraccion paginados
    public function getCatalosoServiciosSearch(Request $request, PublicServiceRepository $gestion, $id_catalogo, $ciudad)
    {
        //

        $busquedaInicial = $gestion->getBusquedaInicialCatalogo($id_catalogo, $ciudad, null, null, 500, 4);


        $busquedaInicialP = null;

        if ($busquedaInicial != null) {
            if (Input::get('page') > $busquedaInicial->currentPage()) {

                $busquedaInicialP = $gestion->getBusquedaInicialCatalogoPadre($id_catalogo, $ciudad, Input::get('page'), $busquedaInicial->currentPage(), 100, 3);
            }
        }


        $view = View::make('public_page.partials.searchcategory', array('catalogo' => $busquedaInicial, 'catalogo2' => $busquedaInicialP));

        if ($request->ajax()) {
            //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());
            $sections = $view->rendersections();
            return Response::json($sections);
            //return  Response::json($sections['contentPanel']);
        }
    }

    //Obtiene los servicios por catalogo cercanos a la atraccion paginados
    public function getCatalosoServicios(Request $request, PublicServiceRepository $gestion, $id_atraccion, $id_catalogo)
    {
        //

        $atraccion = $gestion->getAtraccionDetails($id_atraccion);
        $catalogo = null;
        $catalogo1 = null;


        if ($id_catalogo == 11) {
            $catalogo1 = $gestion->getTripList($id_atraccion, $id_catalogo);

            if ($catalogo1 != "" && $catalogo1 != null)
                $catalogo = $gestion->getDetailsServiciosAtraccionTrips($catalogo1, null, null, 10);
        } else {
            $catalogo1 = $gestion->getCatalogoDetails($id_atraccion, $id_catalogo);

            $catalogo = $gestion->getDetailsServiciosAtraccion($catalogo1, null, null, 4);
        }

        if ($catalogo != null) {
            if ($atraccion->id_provincia != 0) {


                if (Input::get('page') > $catalogo->currentPage()) {

                    $catalogo2 = $gestion->getCatalogoDetailsProvincia($atraccion, $id_catalogo, $catalogo1);
                    $catalogo = $gestion->getDetailsServiciosAtraccion($catalogo2, Input::get('page'), $catalogo->currentPage(), 3);
                }
            }


            $view = View::make('public_page.partials.listServicesCategoria', array('catalogo' => $catalogo));

            if ($request->ajax()) {
                //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());
                $sections = $view->rendersections();
                return Response::json($sections);
                //return  Response::json($sections['contentPanel']);
            }
        } else {
            return null;
        }
    }



    //*************************************************************//
    //              NUEAVS FUNCIONES                               //
    //*************************************************************//

    public function guardarError($id_usuario_servicio, $id_error, PublicServiceRepository $gestion)
    {

        $ipUser = $this->getIp();
        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        $guardarError = $gestion->guardarError($id_usuario_servicio, $id_error, $ipUser, $desk);

        return response()->json(array('success' => true, 'guardar' => $guardarError));
    }

    public function postError(Request $request, PublicServiceRepository $gestion)
    {

        $inputData = Input::get('formData');
        parse_str($inputData, $formFields);

        $ipUser = $this->getIp();
        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        $nuevoErrorContacto = $gestion->guardarErrorContacto(
            $formFields['id_usuario_servicio'],
            $formFields['id_error'],
            $formFields['nombres'],
            $formFields['email'],
            $formFields['telefono'],
            $ipUser,
            $desk
        );


        return response()->json(array('success' => true, 'redirectto' => $nuevoErrorContacto));
    }



    //**********************************************************************************************************************************//


    public function detallePromo($nombre_servicio, $nombre_evento, $id_promo, PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1)
    {

        $promocion = $gestion->getInfoPromo($id_promo);
        $imagenes = $gestion1->getImagePromocionesOperador($id_promo);
        $nombreAtraccion = $gestion->getNombreUsuarioServicio($promocion[0]->id_usuario_servicio);

        if ($promocion[0]->estado_promocion == 1) {
            return view('responsive.detallePromocion')
                ->with('imagenes', $imagenes)
                ->with('nombreAtraccion', $nombreAtraccion)
                ->with('promocion', $promocion);
        } elseif ($promocion[0]->estado_promocion == 0) {

            return redirect('/detalle/' . $nombreAtraccion[0]->nombre_servicio . '/' . $nombreAtraccion[0]->id, 301);
        } else {
            return view('errors.404');
        }
    }

    public function detalleEvento($nombre_servicio, $nombre_evento, $id_evento, PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1)
    {

        $evento = $gestion->getInfoEvento($id_evento);
        $imagenes = $gestion1->getImageEventosOperador($id_evento);
        //$nombreAtraccion = $gestion->getNombreUsuarioServicioEvento($evento[0]->id_usuario_servicio);
        $nombreAtraccion = $gestion->getNombreUsuarioServicio($evento[0]->id_usuario_servicio);

        if ($evento[0]->estado_evento == 1) {
            return view('responsive.detalleEvento')
                ->with('imagenes', $imagenes)
                ->with('nombreAtraccion', $nombreAtraccion)
                ->with('evento', $evento);
        } elseif ($evento[0]->estado_evento == 0) {

            return redirect('/detalle/' . $nombreAtraccion[0]->nombre_servicio . '/' . $nombreAtraccion[0]->id);
        } else {
            return view('errors.404');
        }
    }

    public function updateEstadoError($id, Request $request, Guard $auth, PublicServiceRepository $gestion)
    {

        $ipUser = $this->getIp();
        $fecha = date("Y-m-d h:i:s");
        $usuario = $auth->user()->id;
        $updateError = $gestion->updateErrorRevisado($id, $ipUser, $fecha, $usuario);

        return response()->json(array('success' => true, 'redirectto' => $updateError));
    }


    public function postContactos(Request $request, PublicServiceRepository $gestion)
    {


        $inputData = Input::get('formData');
        parse_str($inputData, $formFields);

        $nuevoContactenos = $gestion->guardarContactos($formFields['fistname'], $formFields['lastname'], $formFields['email'], $formFields['mensaje']);

        if ($nuevoContactenos == true) {
            $this->dispatch(new ContactosMail(
                $formFields['fistname'],
                $formFields['lastname'],
                $formFields['email'],
                $formFields['mensaje']
            ));
        }


        return response()->json(array('success' => true, 'redirectto' => $nuevoContactenos));
    }




    //Obtiene las descripcion de la atraccion elegida
    public function getSearchHomeCatalogo(PublicServiceRepository $gestion, $id_catalogo)
    {

        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }
        Session::put('device', $desk);


        $catalogo = $gestion->getCatalogoDetail($id_catalogo);
        if ($catalogo != null) {
            $actividades = $gestion->getExplorerbyCatalogo($id_catalogo);
            $servicios = $gestion->getServiciosAll();
            $precio_minimo = $gestion->getMinPrice($id_catalogo);

            $precio_max = $gestion->getMaxPrice($id_catalogo);

            return view('public_page.front.searchByHome')
                ->with('actividades', $actividades)
                ->with('servicios', $servicios)
                ->with('precio_minimo', $precio_minimo)
                ->with('precio_max', $precio_max)
                ->with('catalogo', $catalogo);
        } else {
            return $this->getHome($gestion);
        }
    }

    //Obtiene las descripcion de la atraccion elegida
    public function getCatalogoDescripcion(PublicServiceRepository $gestion, $id_atraccion, $id_catalogo)
    {

        $ServicioPrevio = $gestion->getAtraccionDetails($id_atraccion);
        $catalogo = $gestion->getCatalogoDetail($id_catalogo);

        $nombreCanonicalEng = str_replace(' ', '-', $ServicioPrevio->nombre_servicio_eng);
        $nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
        $nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
        $nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);

        $nombreCanonicalES = str_replace(' ', '-', $ServicioPrevio->nombre_servicio);
        $nombreCanonicalES = str_replace('/', '-', $nombreCanonicalES);
        $nombreCanonicalES = str_replace('?', '-', $nombreCanonicalES);
        $nombreCanonicalES = str_replace("'", '-', $nombreCanonicalES);

        if (session('locale') == 'en') {
            return redirect('/en/' . $catalogo->nombre_servicio_eng . '/close-to/' . $nombreCanonicalEng . '/' . $id_atraccion . '/' . $id_catalogo, 301);
        } else {
            return redirect('/es/' . $catalogo->nombre_servicio . '/cerca-de/' . $nombreCanonicalES . '/' . $id_atraccion . '/' . $id_catalogo, 301);
        }
    }

    //Obtiene todas las provincias de la region
    public function getRegionsId($id_region, PublicServiceRepository $gestion)
    {
        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);
        $provincias = $gestion->getRegionDetails($id_region);
        $imagenes = $gestion->getImageporRegion($id_region);



        return view('public_page.front.allRegions')->with('provincias', $provincias)->with('imagenes', $imagenes)->with('region', $id_region);
    }

    //Obtiene los top places paginados
    public function getConfirmReview($codigo, PublicServiceRepository $gestion)
    {
        $checkcode = $gestion->updateCodeReview($codigo);
        $rev_code = $gestion->getRevCode($codigo);

        return redirect('/tokenDc$rip/' . $rev_code->id_usuario_servicio);
    }

    public function getReviews(Request $request, PublicServiceRepository $gestion, $id_atraccion)
    {
        //

        $reviews = $gestion->getReviews($id_atraccion);

        // return response()->json(['data'=> $reviews->items()]);
        $view = View::make('public_page.partials.reviews', array('reviews' => $reviews));

        if ($request->ajax()) {
            //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());
            $sections = $view->rendersections();
            return Response::json($sections);
            //return  Response::json($sections['contentPanel']);
        }
    }

    public function getLikesSatisf(Request $request, PublicServiceRepository $gestion, $id_atraccion)
    {
        //

        $likes = $gestion->getlikes($id_atraccion);


        $view = View::make('public_page.partials.btnLike', array('likes' => $likes, 'atraccion' => $id_atraccion));

        if ($request->ajax()) {
            //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());
            $sections = $view->rendersections();
            return Response::json($sections);
            //return  Response::json($sections['contentPanel']);
        }
    }

    public function postReviews(Request $request, PublicServiceRepository $gestion)
    {


        $inputData = Input::get('formData');
        parse_str($inputData, $formFields);
        $tempImages = $request->session()->get('idTempReviewImages');

        $validator = Validator::make($formFields, Review_Usuario_Servicio::$rules);

        if ($validator->fails()) {
            return response()->json(array(
                'fail' => true,
                'message' => $validator->messages()->first(),
                'errors' => $validator->getMessageBag()->toArray()
            ));
        } else {

            $verifyIp = $gestion->getReviewsIpEmail($formFields['id_atraccion'], $formFields['email_reviewer']);

            if ($verifyIp == null) {
                $root_array = array();
                //Arreglo de servicios prestados que vienen del formulario
                foreach ($formFields as $key => $value) {
                    //verifica si el arreglo de parametros es un catalogo
                    if (strpos($key, 'review_score') !== false) {
                        $root_array[$key] = $value;
                    }
                }

                $save_array = array();
                $codigo = str_random(30);

                if (!array_key_exists('nombre_reviewer', $formFields)) {
                    $save_array['calificacion'] = 5;
                    $emailSplit = explode('@', $formFields['email_reviewer']);
                    $save_array['nombre_reviewer'] = $emailSplit[0];
                    $save_array['email_reviewer'] = $formFields['email_reviewer'];
                    $save_array['id_usuario_servicio'] = $formFields['id_atraccion'];
                    $save_array['id_tipo_review'] = 1;
                    $save_array['confirmation_rev_code'] = $codigo;
                    $save_array['ip_reviewer'] = $this->getIp();
                    $review = $gestion->storeNew($save_array);
                }
                if (count($root_array) > 1) {
                    foreach ($root_array as $key1 => $value1) {
                        $save_array['calificacion'] = $value1;
                        if (!array_key_exists('nombre_reviewer', $formFields)) {
                            $emailSplit = explode('@', $formFields['email_reviewer']);
                            $save_array['nombre_reviewer'] = $emailSplit[0];
                        } else {
                            $save_array['nombre_reviewer'] = $formFields['nombre_reviewer'];
                        }
                        $save_array['email_reviewer'] = $formFields['email_reviewer'];
                        $save_array['id_usuario_servicio'] = $formFields['id_atraccion'];
                        $save_array['id_tipo_review'] = $formFields['id_tipo_review_' . substr($key1, 13)];
                        $save_array['confirmation_rev_code'] = $codigo;
                        $save_array['ip_reviewer'] = $this->getIp();
                        $review = $gestion->storeNew($save_array);
                    }
                } else {
                    $save_array['calificacion'] = 5;
                    if (!array_key_exists('nombre_reviewer', $formFields)) {
                        $emailSplit = explode('@', $formFields['email_reviewer']);
                        $save_array['nombre_reviewer'] = $emailSplit[0];
                    } else {
                        $save_array['nombre_reviewer'] = $formFields['nombre_reviewer'];
                    }
                    $save_array['email_reviewer'] = $formFields['email_reviewer'];
                    $save_array['id_usuario_servicio'] = $formFields['id_atraccion'];
                    $save_array['id_tipo_review'] = 1;
                    $save_array['confirmation_rev_code'] = $codigo;
                    $save_array['ip_reviewer'] = $this->getIp();
                    $review = $gestion->storeNew($save_array);
                }

                if ($tempImages) {
                    DB::table('images_review')
                        ->whereNull('email_review')
                        ->where('id_usuario_servicio', $formFields['id_atraccion'])
                        ->whereIn('id_images_review', explode(',', $tempImages))
                        ->update([
                            'email_review' => $formFields['email_reviewer']
                        ]);
                    $request->session()->forget('idTempReviewImages');
                }
                $dataEmail['confirmation_rev_code'] = $codigo;
                $dataEmail['email'] = $formFields['email_reviewer'];
                $dataEmail['link'] = 'Haz click aqui para confirmar tu comentario';
                $this->sendEmailReviewCofirmation($dataEmail);
                $request->session()->forget('idTempReviewImages');
            } else {
                return response()->json(array(
                    'fail' => true,
                    'message' => "Usted ya ha dejado un review anteriormente",
                    'errors' => $validator->getMessageBag()->toArray()
                ));
            }

            return response()->json(array(
                'success' => true,
                'message' => "Gracias por tu review, se ha enviado un correo electr�nico a tu email para verificaci�n"
            ));
        }
    }

    public function sendEmailReviewCofirmation($dataEmail)
    {
        $correo_enviar = $dataEmail['email'];
        Mail::send('emails.auth.reviewConfirmation', $dataEmail, function ($message) use ($correo_enviar) {
            $message->from(env('MAIL_USERNAME'), 'iwanatrip');
            $message->to($correo_enviar)->subject('Hemos recibido tu comentario');
        });
    }

    public function confirmReview($codigo = null, PublicServiceRepository $gestion)
    {
        if ($codigo != null) {
            $gestion->updateCodeReview($codigo);
            return redirect('/okConfirmationReview');
        } else {
            return redirect('/');
        }
    }

    public function postFiltersCategoria(Request $request, PublicServiceRepository $gestion)
    {


        $inputData = Input::get('formData');
        parse_str($inputData, $formFields);
        $arrayFiltro = array();
        //obtengo los servicios ya almacenados de la bdd


        foreach ($formFields as $key => $value) {
            //verifica si el arreglo de parametros es un catalogo
            if (strpos($key, 'act_') !== False) {
                $arrayFiltro[] = str_replace("act_", "", $key);
            }
        }


        $busquedaInicial = $gestion->getBusquedaInicialCatalogoFiltros($formFields['catalogo'], $formFields['searchCity'], $arrayFiltro, $formFields['min_price_i'], $formFields['max_price_i'], null, null, 100, 1);


        $busquedaInicialP = null;




        $view = View::make('public_page.partials.searchcategory', array('catalogo' => $busquedaInicial, 'catalogo2' => $busquedaInicialP));

        if ($request->ajax()) {
            //return Response::json(View::make('public_page.partials.AllTopPlaces', array('topPlacesEcuador' => $topPlacesEcuador))->rendersections());
            $sections = $view->rendersections();

            return response()->json(array('success' => true, 'sections' => $sections));
            //return  Response::json($sections['contentPanel']);
        }






        //obtengo los servicios ya almacenados de la bdd

        return response()->json(array('success' => true));
    }

    public function postLikesS(Request $request, PublicServiceRepository $gestion)
    {


        $inputData = Input::get('formData');
        parse_str($inputData, $formFields);

        $ip = $this->getIp();

        $likesIP = $gestion->getlikesIp($formFields['ids'], $ip);

        if (is_array($likesIP) || $likesIP instanceof Countable || $likesIP == null) {
            $gestion->storeLikes($formFields['ids'], $ip);
        }
        //obtengo los servicios ya almacenados de la bdd

        return response()->json(array('success' => true));
    }





    public function getAtraccionDescripcion1(PublicServiceRepository $gestion)
    {
        $agent = new Agent();

        $id_atraccion = session('usu_servicio');
        $id_catalogo = session('id_catalogo');

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        $gestion->saveVisita(null, $id_atraccion);
        $ImgItiner = null;
        $explore = null;
        $visitados = null;

        $provincia = null;
        $canton = null;
        $parroquia = null;

        $tipoReviews = $gestion->getTiporeviews($id_atraccion);
        $atraccion = $gestion->getAtraccionDetails($id_atraccion);
        $imagenes = $gestion->getAtraccionImages($id_atraccion);


        $itinerarios = $gestion->getItinerAtraccion($id_atraccion);
        $related = $gestion->getHijosAtraccion($id_atraccion);
        $servicios = $gestion->getServicios($atraccion->id_provincia);

        if ($atraccion->id_provincia != 0)
            $provincia = $gestion->getUbicacionAtraccion($atraccion->id_provincia);

        if ($atraccion->id_canton != 0)
            $canton = $gestion->getUbicacionAtraccion($atraccion->id_canton);

        if ($atraccion->id_parroquia != 0)
            $parroqia = $gestion->getUbicacionAtraccion($atraccion->id_parroquia);

        if ($related == null)
            $visitados = $gestion->getVisitadosProvincia($atraccion->id_provincia);




        if ($itinerarios != null)
            $ImgItiner = $gestion->getItinerImagenAtraccion($itinerarios);


        if (isset($atraccion->id_provincia))
            $explore = $gestion->getExplorer($atraccion->id);


        return view('responsive.detalleAtracciones')->with('atraccion', $atraccion)
            ->with('imagenes', $imagenes)
            ->with('explore', $explore)
            ->with('itinerarios', $itinerarios)
            ->with('related', $related)
            ->with('visitados', $visitados)
            ->with('canton', $canton)
            ->with('provincia', $provincia)
            ->with('parroquia', $parroquia)
            ->with('servicios', $servicios)
            ->with('tipoReviews', $tipoReviews);
    }








    //*************************************************************//
    //          Booking            //
    //*************************************************************//


    public function getConfirmacionPaypal1($id, Guard $auth)
    {

        //ENVIO EL ID DE LA RESERVA
        if (isset($id)) {

            //VERIFICO QUE EL ID DE LA RESERVA ESTE EN LA TABLA PAGO PAYPAL
            $verificoPagoConsumido = DB::table('pago_paypals')
                ->select(DB::raw('consumido'))
                ->where('id_reserva', '=', $id)
                ->get();

            if (empty($verificoPagoConsumido)) {
                //SI NO EXISTE EN LA TABLA DE PAGO PAYPAL
                //ME REDIRIGE A LA TABLA DE ERROR DE PAYPAL
                return view('public_page.front.confirmacionError');
            } elseif ($verificoPagoConsumido[0]->consumido == true) {
                //SI EXISTE EN LA TABLA DE PAGO PAYPAL Y CONSUMIDO ES TRUE
                //ME REDIRIGE A LA TABLA DE ERROR DE PAYPAL
                return view('public_page.front.confirmacionError');
            } else {
                $estado = true;
                $updateReserva = DB::table('pago_paypals')
                    ->where('id_reserva', $id)
                    ->update(['consumido' => $estado]);

                $infoPago = DB::table('pago_paypals')
                    ->select(DB::raw('*'))
                    ->where('id_reserva', '=', $id)
                    ->get();

                $infoReservas = DB::table('booking_abcalendar_reservations')
                    ->select(DB::raw('*'))
                    ->where('id', '=', $id)
                    ->get();

                $estadoReserva = $infoPago[0]->estadoPago;

                //$estadoReserva = "Fail";

                if ($estadoReserva == "Completed") {

                    //BUSCO EL ID DEL CALENDARIO
                    $infoReserva = DB::table('booking_abcalendar_reservations')
                        ->select(DB::raw('calendar_id'))
                        ->where('id', '=', $id)
                        ->get();

                    $idCalendario = $infoReserva[0]->calendar_id;

                    //BUSCO EL ID DEL USUARIO SERVICIO
                    $infoReserva1 = DB::table('booking_abcalendar_calendars')
                        ->select(DB::raw('id_usuario_servicio'))
                        ->where('id', '=', $idCalendario)
                        ->get();

                    $idUsuarioServicio = $infoReserva1[0]->id_usuario_servicio;

                    $user = $auth->user();

                    if (empty($user)) {
                        // EL VOLVER ES A LA PARTE PUBLICA
                        // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                        $tipoUsuario = "public";
                        $updateReserva = DB::table('booking_abcalendar_reservations')
                            ->where('id', $id)
                            ->update(['tipo_usuario' => $tipoUsuario]);

                        //BUSCO EL ID DEL USUARIO OPERADOR
                        $infoUsuarioOperador = DB::table('usuario_servicios')
                            ->select(DB::raw('id_usuario_operador'))
                            ->where('id', '=', $idUsuarioServicio)
                            ->get();

                        $idUsuarioPeradorPublica = $infoUsuarioOperador[0]->id_usuario_operador;

                        //OBTENGO LA INFORMACION DEL USUARIO OPERADOR
                        $infoReserva2 = DB::table('usuario_operadores')
                            ->select(DB::raw('*'))
                            ->where('id_usuario_op', '=', $idUsuarioPeradorPublica)
                            ->get();
                        //  envio el correo con la informacion de la reserva y el pago y el codigo QR
                        $statusReserva = 1;
                        $this->dispatch(new ReservacionMail($infoReservas, $infoPago, $infoReserva2, $statusReserva));

                        return view('public_page.front.confirmacionPaypal', compact('infoPago', 'infoReservas', 'user', 'infoReserva2', 'idUsuarioServicio'));
                    } else {

                        // VOLVER A LA PARTE ADMIN
                        // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                        $tipoUsuario = "admin";
                        $updateReserva = DB::table('booking_abcalendar_reservations')
                            ->where('id', $id)
                            ->update(['tipo_usuario' => $tipoUsuario]);

                        $buscoIdUsuarioServicio = DB::table('usuario_servicios')
                            ->select(DB::raw('id_usuario_operador'))
                            ->where('id', '=', $idUsuarioServicio)
                            ->get();

                        $temIdOp = $buscoIdUsuarioServicio[0]->id_usuario_operador;

                        /*$buscoIdUsuario = DB::table('usuario_operadores')
                                 ->select(DB::raw('id_usuario'))
                                 ->where('id_usuario_op', '=', $temIdOp)
                                 ->get();
                        $idUser = $buscoIdUsuario[0]->id_usuario; */


                        $infoReserva2 = DB::table('usuario_operadores')
                            ->select(DB::raw('*'))
                            ->where('id_usuario_op', '=', $temIdOp)
                            ->get();

                        $idUsuarioOperador = $infoReserva2[0]->id_usuario_op;

                        //SI EL USUARIO ESTA LOGUEADO PERO VIENE DE LA PARTE PUBLICA
                        //COMPROBAR QUE EL USUARIO SERVICIO DEL CALENDARIO PERTENEZCA
                        // AL USUARIO SERVCIO DEL OPERADOR
                        //BUSCO EL ID DEL Catalogo
                        $idUsuarioOperadorLogueado = session('operador_id');
                        $infoReservaComprobar = DB::table('usuario_servicios')
                            ->select(DB::raw('id_catalogo_servicio'))
                            ->where('id', '=', $idUsuarioServicio)
                            ->where('id_usuario_operador', '=', $idUsuarioOperadorLogueado)
                            ->get();

                        if (empty($infoReservaComprobar)) {
                            $statusReserva = 1;
                            $this->dispatch(new ReservacionMail($infoReservas, $infoPago, $infoReserva2, $statusReserva));
                            $partePublica = true;
                            return view('public_page.front.confirmacionPaypal', compact('infoPago', 'infoReservas', 'user', 'partePublica', 'infoReserva2', 'idUsuarioServicio'));
                        } else {
                            $statusReserva = 1;
                            $this->dispatch(new ReservacionMail($infoReservas, $infoPago, $infoReserva2, $statusReserva));
                            $idCatalogo = $infoReservaComprobar[0]->id_catalogo_servicio;
                            $partePublica = false;
                            return view('public_page.front.confirmacionPaypal', compact('infoPago', 'infoReservas', 'user', 'partePublica', 'idCatalogo', 'idUsuarioServicio', 'infoReserva2'));
                        }
                    }
                } else {

                    //CUANDO EL PAGO CON PAYPAL NO SE COMPLETO
                    //PARTE PUBLICA Y PRIVADA
                    $user = $auth->user();

                    $infoPago = DB::table('pago_paypals')
                        ->select(DB::raw('*'))
                        ->where('id_reserva', '=', $id)
                        ->get();

                    $infoReservas = DB::table('booking_abcalendar_reservations')
                        ->select(DB::raw('*'))
                        ->where('id', '=', $id)
                        ->get();

                    $idCalendario = $infoReservas[0]->calendar_id;

                    //BUSCO EL ID DEL USUARIO SERVICIO
                    $infoReserva1 = DB::table('booking_abcalendar_calendars')
                        ->select(DB::raw('id_usuario_servicio'))
                        ->where('id', '=', $idCalendario)
                        ->get();

                    $idUsuarioServicio = $infoReserva1[0]->id_usuario_servicio;

                    $sql1 = DB::table('booking_abcalendar_reservations')
                        ->select(DB::raw('calendar_id'))
                        ->where('id', '=', $id)
                        ->get();
                    $idCalendarioError = $sql1[0]->calendar_id;

                    $sql2 = DB::table('booking_abcalendar_calendars')
                        ->select(DB::raw('id_usuario_servicio'))
                        ->where('id', '=', $idCalendarioError)
                        ->get();
                    $idUsuarioServicioError = $sql2[0]->id_usuario_servicio;

                    $sql3 = DB::table('usuario_servicios')
                        ->select(DB::raw('id_usuario_operador'))
                        ->where('id', '=', $idUsuarioServicioError)
                        ->get();

                    $idUsuarioOperadorError = $sql3[0]->id_usuario_operador;

                    $infoReserva2 = DB::table('usuario_operadores')
                        ->select(DB::raw('*'))
                        ->where('id_usuario_op', '=', $idUsuarioOperadorError)
                        ->get();

                    $idUsuarioOperadorError = $infoReserva2[0]->id_usuario_op;
                    //$idUsuarioOperadorError = session('operador_id');

                    //BUSCO EL ID DEL Catalogo
                    $idUsuarioOperadorLogueado = session('operador_id');
                    $infoReservaComprobar = DB::table('usuario_servicios')
                        ->select(DB::raw('id_catalogo_servicio'))
                        ->where('id', '=', $idUsuarioServicio)
                        ->where('id_usuario_operador', '=', $idUsuarioOperadorLogueado)
                        ->get();

                    if (empty($infoReservaComprobar)) {
                        $partePublica = true;
                        return view('public_page.front.errorPaypal', compact('infoReservas', 'infoPago', 'user', 'partePublica', 'infoReserva2', "idUsuarioServicio", 'idCatalogo'));
                    } else {

                        $partePublica = false;
                        $idCatalogo = $infoReservaComprobar[0]->id_catalogo_servicio;
                        return view('public_page.front.errorPaypal', compact('infoReservas', 'infoPago', 'user', 'infoReserva2', 'partePublica', "idUsuarioServicio", 'idCatalogo'));
                    }

                    //return view('public_page.front.errorPaypal', compact('infoReservas','infoPago','user','infoReserva2',"idUsuarioServicio",'idCatalogo'));

                }

                //return view('public_page.front.confirmacionPaypal', compact('$infoPago','$infoReserva'));


            }
        }
    }

    public function getConfirmacionAuhtorize1($id, Guard $auth)
    {

        //ENVIO EL ID DE LA RESERVA
        if (isset($id)) {

            //VERIFICO QUE EL ID DE LA RESERVA ESTE EN LA TABLA PAGO PAYPAL
            $verificoPagoConsumido = DB::table('pago_authorizes')
                ->select(DB::raw('consumido'))
                ->where('id_reserva', '=', $id)
                ->get();

            if (empty($verificoPagoConsumido)) {
                //SI NO EXISTE EN LA TABLA DE PAGO PAYPAL
                //ME REDIRIGE A LA TABLA DE ERROR DE PAYPAL
                return view('public_page.front.confirmacionError');
            } elseif ($verificoPagoConsumido[0]->consumido == true) {
                //SI EXISTE EN LA TABLA DE PAGO PAYPAL Y CONSUMIDO ES TRUE
                //ME REDIRIGE A LA TABLA DE ERROR DE PAYPAL
                return view('public_page.front.confirmacionError');
            } else {
                $estado = true;
                $updateReserva = DB::table('pago_authorizes')
                    ->where('id_reserva', $id)
                    ->update(['consumido' => $estado]);

                $infoPago = DB::table('pago_authorizes')
                    ->select(DB::raw('*'))
                    ->where('id_reserva', '=', $id)
                    ->get();

                $infoReservas = DB::table('booking_abcalendar_reservations')
                    ->select(DB::raw('*'))
                    ->where('id', '=', $id)
                    ->get();

                $estadoReserva = $infoPago[0]->estadoPago;

                //$estadoReserva = "Fail";

                if ($estadoReserva == "This transaction has been approved.") {

                    //BUSCO EL ID DEL CALENDARIO
                    $infoReserva = DB::table('booking_abcalendar_reservations')
                        ->select(DB::raw('calendar_id'))
                        ->where('id', '=', $id)
                        ->get();

                    $idCalendario = $infoReserva[0]->calendar_id;

                    //BUSCO EL ID DEL USUARIO SERVICIO
                    $infoReserva1 = DB::table('booking_abcalendar_calendars')
                        ->select(DB::raw('id_usuario_servicio'))
                        ->where('id', '=', $idCalendario)
                        ->get();

                    $idUsuarioServicio = $infoReserva1[0]->id_usuario_servicio;

                    $user = $auth->user();

                    if (empty($user)) {
                        // EL VOLVER ES A LA PARTE PUBLICA
                        // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                        $tipoUsuario = "public";
                        $updateReserva = DB::table('booking_abcalendar_reservations')
                            ->where('id', $id)
                            ->update(['tipo_usuario' => $tipoUsuario]);

                        //BUSCO EL ID DEL USUARIO OPERADOR
                        $infoUsuarioOperador = DB::table('usuario_servicios')
                            ->select(DB::raw('id_usuario_operador'))
                            ->where('id', '=', $idUsuarioServicio)
                            ->get();

                        $idUsuarioPeradorPublica = $infoUsuarioOperador[0]->id_usuario_operador;

                        //OBTENGO LA INFORMACION DEL USUARIO OPERADOR
                        $infoReserva2 = DB::table('usuario_operadores')
                            ->select(DB::raw('*'))
                            ->where('id_usuario_op', '=', $idUsuarioPeradorPublica)
                            ->get();

                        $statusReserva = 1;
                        $this->dispatch(new ReservacionMail($infoReservas, $infoPago, $infoReserva2, $statusReserva));

                        return view('public_page.front.confirmacionAuhtorize', compact('infoPago', 'infoReservas', 'user', 'infoReserva2', 'idUsuarioServicio'));
                    } else {

                        // VOLVER A LA PARTE ADMIN
                        // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                        $tipoUsuario = "admin";
                        $updateReserva = DB::table('booking_abcalendar_reservations')
                            ->where('id', $id)
                            ->update(['tipo_usuario' => $tipoUsuario]);

                        //BUSCO EL ID DEL USUARIO OPERADOR
                        $infoReserva2 = DB::table('usuario_operadores')
                            ->select(DB::raw('*'))
                            ->where('id_usuario', '=', $user->id)
                            ->get();

                        $idUsuarioOperador = $infoReserva2[0]->id_usuario_op;

                        //SI EL USUARIO ESTA LOGUEADO PERO VIENE DE LA PARTE PUBLICA
                        //COMPROBAR QUE EL USUARIO SERVICIO DEL CALENDARIO PERTENEZCA
                        // AL USUARIO SERVCIO DEL OPERADOR
                        //BUSCO EL ID DEL Catalogo
                        $idUsuarioOperadorLogueado = session('operador_id');
                        $infoReservaComprobar = DB::table('usuario_servicios')
                            ->select(DB::raw('id_catalogo_servicio'))
                            ->where('id', '=', $idUsuarioServicio)
                            ->where('id_usuario_operador', '=', $idUsuarioOperadorLogueado)
                            ->get();

                        if (empty($infoReservaComprobar)) {

                            $statusReserva = 1;
                            $this->dispatch(new ReservacionMail($infoReservas, $infoPago, $infoReserva2, $statusReserva));

                            $partePublica = true;
                            return view('public_page.front.confirmacionAuhtorize', compact('infoPago', 'infoReservas', 'user', 'partePublica', 'infoReserva2', 'idUsuarioServicio'));
                        } else {

                            $statusReserva = 1;
                            $this->dispatch(new ReservacionMail($infoReservas, $infoPago, $infoReserva2, $statusReserva));

                            $idCatalogo = $infoReservaComprobar[0]->id_catalogo_servicio;
                            $partePublica = false;
                            return view('public_page.front.confirmacionAuhtorize', compact('infoPago', 'infoReservas', 'user', 'partePublica', 'idCatalogo', 'idUsuarioServicio', 'infoReserva2'));
                        }
                    }
                } else {

                    //CUANDO EL PAGO CON PAYPAL NO SE COMPLETO
                    //PARTE PUBLICA Y PRIVADA
                    $user = $auth->user();

                    $infoPago = DB::table('pago_authorizes')
                        ->select(DB::raw('*'))
                        ->where('id_reserva', '=', $id)
                        ->get();

                    $infoReservas = DB::table('booking_abcalendar_reservations')
                        ->select(DB::raw('*'))
                        ->where('id', '=', $id)
                        ->get();

                    $idCalendario = $infoReservas[0]->calendar_id;

                    //BUSCO EL ID DEL USUARIO SERVICIO
                    $infoReserva1 = DB::table('booking_abcalendar_calendars')
                        ->select(DB::raw('id_usuario_servicio'))
                        ->where('id', '=', $idCalendario)
                        ->get();

                    $idUsuarioServicio = $infoReserva1[0]->id_usuario_servicio;

                    $sql1 = DB::table('booking_abcalendar_reservations')
                        ->select(DB::raw('calendar_id'))
                        ->where('id', '=', $id)
                        ->get();
                    $idCalendarioError = $sql1[0]->calendar_id;

                    $sql2 = DB::table('booking_abcalendar_calendars')
                        ->select(DB::raw('id_usuario_servicio'))
                        ->where('id', '=', $idCalendarioError)
                        ->get();
                    $idUsuarioServicioError = $sql2[0]->id_usuario_servicio;

                    $sql3 = DB::table('usuario_servicios')
                        ->select(DB::raw('id_usuario_operador'))
                        ->where('id', '=', $idUsuarioServicioError)
                        ->get();
                    $idUsuarioOperadorError = $sql3[0]->id_usuario_operador;

                    $infoReserva2 = DB::table('usuario_operadores')
                        ->select(DB::raw('*'))
                        ->where('id_usuario_op', '=', $idUsuarioOperadorError)
                        ->get();

                    $idUsuarioOperadorLogueado = session('operador_id');
                    $infoReservaComprobar = DB::table('usuario_servicios')
                        ->select(DB::raw('id_catalogo_servicio'))
                        ->where('id', '=', $idUsuarioServicio)
                        ->where('id_usuario_operador', '=', $idUsuarioOperadorLogueado)
                        ->get();

                    if (empty($infoReservaComprobar)) {
                        $partePublica = true;
                        return view('public_page.front.errorAuthorize', compact('infoReservas', 'infoPago', 'user', 'partePublica', 'infoReserva2', "idUsuarioServicio", 'idCatalogo'));
                        //return view('public_page.front.confirmacionPaypal', compact('infoPago','infoReservas','user','partePublica','infoReserva2','idUsuarioServicio'));
                    } else {
                        $idCatalogo = $infoReservaComprobar[0]->id_catalogo_servicio;
                        $partePublica = false;
                        return view('public_page.front.errorAuthorize', compact('infoReservas', 'infoPago', 'user', 'infoReserva2', 'partePublica', "idUsuarioServicio", 'idCatalogo'));
                        //return view('public_page.front.confirmacionPaypal', compact('infoPago','infoReservas','user','partePublica','idCatalogo','idUsuarioServicio','infoReserva2'));
                    }

                    //return view('public_page.front.errorPaypal', compact('infoReservas','infoPago','user','infoReserva2',"idUsuarioServicio",'idCatalogo'));

                }

                //return view('public_page.front.confirmacionPaypal', compact('$infoPago','$infoReserva'));


            }
        }
    }

    /************************************************/
    /*         HOME PUBLIC CONTROLLER               */
    /************************************************/



    public function agrupamientos(
        $nombre_agrupamiento,
        $id_usuario_servicio,
        $id_agrupamiento,
        PublicServiceRepository $gestion,
        ServiciosOperadorRepository $gestion1,
        TourServiceRepository $gestionTours,
        Guard $auth
    ) {

        /*INFORMACION DE LOS AGRUPAMIENTOS*/
        //$agrupacion = $gestion->getInfoAgrupamiento($id_agrupamiento);
        $agrupamientos = $gestion->getGroupInfo($id_agrupamiento);
        // if($atraccion){
        //     $idCanton = $atraccion->id_canton;
        //     $idProv = $atraccion->id_provincia;
        //     $Region = DB::table('ubicacion_geografica')->select(['id_region'])->where('id',$atraccion->id_provincia)->first();
        //     $idRegion = ($Region)?$Region->id_region:null;
        // }
        //$agrupamientos = $gestion->getAllGroup();
        // return response()->json(['data' => $agrupamientos]);

        $agrupacion = $gestion->getInfoAgrupamiento($id_agrupamiento);

        $checkAtraccionTours = $this->checkUrlDetalleTours($id_usuario_servicio, $agrupacion, $nombre_agrupamiento, "es");

        if ($checkAtraccionTours != "" && $checkAtraccionTours != "true") {

            return redirect($checkAtraccionTours, 301);
        }

        $calendarios = $gestion->getCalendariosAgrupamiento($id_agrupamiento, $id_usuario_servicio);
        $imagenes = $gestion1->getImageAgrupamiento($id_agrupamiento, $id_usuario_servicio);
        $imagenesOperador = $gestion1->getImageServicioAgrupamiento($id_usuario_servicio);

        $atraccionComplete = $gestion->getAtraccionDetails($id_usuario_servicio);
        $atraccion = $gestion->getNombreUsuarioServicio($id_usuario_servicio);

        // $agrupamientos = $gestion->getGroupById($id_agrupamiento);
        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;

        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos); $i++) {

            $objeto = $agrupamientos[$i];

            //Obtengo los reviews de los agrupamientos
            $calendariosGroupReview = $gestion->getAllReviewsGroup($objeto->id);

            if (empty($calendariosGroupReview)) {
                $agrupamientos[$i]->reviews = [];
            } else {
                $agrupamientos[$i]->reviews = $calendariosGroupReview;
            }
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);
            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);
                    $preciosArray = array();

                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16) {
                                $preciosArray[] = $precios[$k]->sun;
                            }
                            if (!empty($preciosArray)) {
                                $arrayMaximos[] = max($preciosArray);
                                $arrayMinimos[] = min($preciosArray);
                            }
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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

        /*INFORMACION DE LOS AGRUPAMIENTOS*/
        $agrupamientos2 = $gestion->getAllGroup();
        for ($a = 0; $a < count($agrupamientos2); $a++) {
            $agrupamientos2[$a]->foto = $gestion->getPhotoGroup($agrupamientos2[$a]->id);
        }

        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        $preciosDesde = array();
        $preciosHasta = array();
        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos2); $i++) {

            $objeto = $agrupamientos2[$i];
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);
            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);
                    $preciosArray = array();
                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16) {
                                $preciosArray[] = $precios[$k]->sun;
                            }
                            if (!empty($preciosArray)) {
                                $arrayMaximos[] = max($preciosArray);
                                $arrayMinimos[] = min($preciosArray);
                            }
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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

            if ($agrupamientos2[$i]->precioDesde > 0) {
                $preciosDesde[] = $agrupamientos2[$i]->precioDesde;
            }

            if ($agrupamientos2[$i]->precioHasta > 0) {
                $preciosHasta[] = $agrupamientos2[$i]->precioHasta;
            }
        }
        /*FIN DE LA INFORMACION DE LOS AGRUPAMIENTOS*/

        // SE COMENTAN ESTAS LINEAS
        // for($i = 0; $i < count($agrupamientos);$i++){
        //     $resumenReviews = $agrupamientos[$i]->resumen_views;
        //     $agrupamientos[$i]->total = array_sum(array_column(json_decode(json_encode($resumenReviews), true), 'calificacion'));
        // }

        // SE SACA EL PRECIO MINIMO DE TODOS LOS AGRUPAMIENTOS

        if (min($preciosDesde) > max($preciosHasta)) {
            $precioMinimoAgrupamiento = max($preciosHasta);
        } else {
            $precioMinimoAgrupamiento = min($preciosDesde);
        }

        // SACO LA CALIFICACION DE LA BASE DE DATOS
        $calificacionAgrupamiento = $gestion->getUserServiceCalification($id_agrupamiento);

        //REVIEWS INDIVIDUALES DEL AGRUPAMIENTO
        $reviewsAgrupamientos = $gestionTours->getReviewsOfTour($id_agrupamiento);


        // for($k = 0; $k < count($reviewsAgrupamientos);$k++){
        //     $a = $reviewsAgrupamientos[$k]->suma;
        //     $b = $reviewsAgrupamientos[$k]->contador;
        //     $division = round($a/$b);
        //     $reviewsAgrupamientos[$k]->reviewCalculadoParticular = $division;
        // }


        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);
        Session::put('locale', 'es');

        if ($agrupacion == null) {
            return $this->getHome($gestion, $auth);
        } else {
            return view('public_page.front.tours')
                ->with('imagenes', $imagenes)
                ->with('calendarios', $calendarios)
                ->with('atraccion', $atraccion)
                ->with('agrupacion', $agrupacion)
                ->with('reviewsAgrupamientos', $reviewsAgrupamientos)
                ->with('imagenesOperador', $imagenesOperador)
                ->with('atraccionComplete', $atraccionComplete)
                ->with('agrupamientos', $agrupamientos)
                ->with('agrupamientos2', $agrupamientos2)
                ->with('calificacionAgrupamiento', $calificacionAgrupamiento)
                ->with('precioMinimo', $precioMinimoAgrupamiento);
        }
    }







    public function agrupamientosEn(
        $nombre_agrupamiento,
        $id_usuario_servicio,
        $id_agrupamiento,
        PublicServiceRepository $gestion,
        ServiciosOperadorRepository $gestion1,
        TourServiceRepository $gestionTours,
        Guard $auth
    ) {

        /*INFORMACION DE LOS AGRUPAMIENTOS*/
        //$agrupacion = $gestion->getInfoAgrupamiento($id_agrupamiento);
        // if($atraccion){
        //     $idCanton = $atraccion->id_canton;
        //     $idProv = $atraccion->id_provincia;
        //     $Region = DB::table('ubicacion_geografica')->select(['id_region'])->where('id',$atraccion->id_provincia)->first();
        //     $idRegion = ($Region)?$Region->id_region:null;
        // }
        $agrupamientos = $gestion->getGroupInfo($id_agrupamiento);
        // return response()->json(['data' => $agrupamientos]);

        $agrupacion = $gestion->getInfoAgrupamiento($id_agrupamiento);


        $checkAtraccionTours = $this->checkUrlDetalleTours($id_usuario_servicio, $agrupacion, $nombre_agrupamiento, "en");

        if ($checkAtraccionTours != "" && $checkAtraccionTours != "true") {

            return redirect($checkAtraccionTours, 301);
        }


        $calendarios = $gestion->getCalendariosAgrupamiento($id_agrupamiento, $id_usuario_servicio);
        $imagenes = $gestion1->getImageAgrupamiento($id_agrupamiento, $id_usuario_servicio);
        $imagenesOperador = $gestion1->getImageServicioAgrupamiento($id_usuario_servicio);

        $atraccionComplete = $gestion->getAtraccionDetails($id_usuario_servicio);
        $atraccion = $gestion->getNombreUsuarioServicio($id_usuario_servicio);

        // $agrupamientos = $gestion->getGroupById($id_agrupamiento);
        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;

        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos); $i++) {

            $objeto = $agrupamientos[$i];

            //Obtengo los reviews de los agrupamientos
            $calendariosGroupReview = $gestion->getAllReviewsGroup($objeto->id);

            if (empty($calendariosGroupReview)) {
                $agrupamientos[$i]->reviews = [];
            } else {
                $agrupamientos[$i]->reviews = $calendariosGroupReview;
            }
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);
            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);
                    $preciosArray = array();

                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16) {
                                $preciosArray[] = $precios[$k]->sun;
                            }
                            if (!empty($preciosArray)) {
                                $arrayMaximos[] = max($preciosArray);
                                $arrayMinimos[] = min($preciosArray);
                            }
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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

        /*INFORMACION DE LOS AGRUPAMIENTOS*/
        $agrupamientos2 = $gestion->getAllGroup();
        for ($a = 0; $a < count($agrupamientos2); $a++) {
            $agrupamientos2[$a]->foto = $gestion->getPhotoGroup($agrupamientos2[$a]->id);
        }

        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        $preciosDesde = array();
        $preciosHasta = array();
        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos2); $i++) {

            $objeto = $agrupamientos2[$i];
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);
            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);
                    $preciosArray = array();
                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16) {
                                $preciosArray[] = $precios[$k]->sun;
                            }
                            if (!empty($preciosArray)) {
                                $arrayMaximos[] = max($preciosArray);
                                $arrayMinimos[] = min($preciosArray);
                            }
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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

            if ($agrupamientos2[$i]->precioDesde > 0) {
                $preciosDesde[] = $agrupamientos2[$i]->precioDesde;
            }

            if ($agrupamientos2[$i]->precioHasta > 0) {
                $preciosHasta[] = $agrupamientos2[$i]->precioHasta;
            }
        }
        /*FIN DE LA INFORMACION DE LOS AGRUPAMIENTOS*/

        // SE COMENTAN ESTAS LINEAS
        // for($i = 0; $i < count($agrupamientos);$i++){
        //     $resumenReviews = $agrupamientos[$i]->resumen_views;
        //     $agrupamientos[$i]->total = array_sum(array_column(json_decode(json_encode($resumenReviews), true), 'calificacion'));
        // }

        // SE SACA EL PRECIO MINIMO DE TODOS LOS AGRUPAMIENTOS
        if (min($preciosDesde) > max($preciosHasta)) {
            $precioMinimoAgrupamiento = max($preciosHasta);
        } else {
            $precioMinimoAgrupamiento = min($preciosDesde);
        }

        // SACO LA CALIFICACION DE LA BASE DE DATOS
        $calificacionAgrupamiento = $gestion->getUserServiceCalification($id_agrupamiento);

        //REVIEWS INDIVIDUALES DEL AGRUPAMIENTO
        $reviewsAgrupamientos = $gestionTours->getReviewsOfTour($id_agrupamiento);


        // for($k = 0; $k < count($reviewsAgrupamientos);$k++){
        //     $a = $reviewsAgrupamientos[$k]->suma;
        //     $b = $reviewsAgrupamientos[$k]->contador;
        //     $division = round($a/$b);
        //     $reviewsAgrupamientos[$k]->reviewCalculadoParticular = $division;
        // }


        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);
        Session::put('locale', 'en');

        if ($agrupacion == null) {
            return $this->getHome($gestion, $auth);
        } else {
            return view('public_page.front.tours')
                ->with('imagenes', $imagenes)
                ->with('calendarios', $calendarios)
                ->with('atraccion', $atraccion)
                ->with('agrupacion', $agrupacion)
                ->with('reviewsAgrupamientos', $reviewsAgrupamientos)
                ->with('imagenesOperador', $imagenesOperador)
                ->with('atraccionComplete', $atraccionComplete)
                ->with('agrupamientos', $agrupamientos)
                ->with('agrupamientos2', $agrupamientos2)
                ->with('calificacionAgrupamiento', $calificacionAgrupamiento)
                ->with('precioMinimo', $precioMinimoAgrupamiento);
        }
    }




    //Obtiene las descripcion de la atraccion elegida



    public function agrupamientosEs(
        $nombre_agrupamiento,
        $id_usuario_servicio,
        $id_agrupamiento,
        PublicServiceRepository $gestion,
        ServiciosOperadorRepository $gestion1,
        TourServiceRepository $gestionTours,
        Guard $auth
    ) {


        Session::put('locale', 'es');
        return redirect('/tour/' . $nombre_agrupamiento . '/' . $id_usuario_servicio . '/' . $id_agrupamiento, 301);
    }





    public function getNoAcceso()
    {

        return view('public_page.front.confirmacionError');
    }








    //************************************************************************//
    //              FUNCIONES PARA EL PAGO CON TARJETA DE CREDITO             //
    //************************************************************************//
    public function pagoTarjetaCredito($reservacion_id, $token, Guard $auth, PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1)
    {
        /*echo "Reservacion ID".$reservacion_id;
        echo "<br>";
        echo "Token ".$token;
        echo "<br>";echo "<br>";*/
        $getReserva = $gestion->getReserva($reservacion_id);
        /*echo "Infor reserva ";
        print_r($getReserva);echo "<br>";echo "<br>";*/
        $getPagoInfo = $gestion->getPagoInfo($reservacion_id, $token);
        /*echo "Infor Pago ";
        print_r($getPagoInfo);echo "<br>";echo "<br>";*/
        $getTokenInfo = $gestion->getTokenInfo($token);
        //print_r($getTokenInfo);echo "<br>";echo "<br>";
        $getCalendarInfo = $gestion->getCalendarInfo($getPagoInfo[0]->calendario_id);
        //print_r($getCalendarInfo);echo "<br>";echo "<br>";

        if (empty($getPagoInfo) || $getPagoInfo[0]->consumido == 1 || $getTokenInfo[0]->consumido == 1) {
            //SI NO EXISTE EN LA TABLA DE PAGO PAGOS O YA FUE CONSUMIDO EL TOKEN
            //ME REDIRIGE A LA TABLA DE ERROR DE PAYPAL
            return view('public_page.front.confirmaciontErrorTarjetaCredito');
        } elseif ($getPagoInfo[0]->consumido == 0 && $getTokenInfo[0]->consumido == 0) {
            //ACTUALIZO EL CONSUMIDO DEL PAGO A 1
            //$updateReserva = $gestion->updateConsumidoReserva($getPagoInfo[0]->id);
            //$updateToken = $gestion->updateConsumidoToken($getTokenInfo[0]->id);

            $estadoReserva = $getPagoInfo[0]->estado_pago;

            if ($estadoReserva == "Pendiente") {

                //BUSCO EL ID DEL CALENDARIO
                /*$infoReserva = DB::table('booking_abcalendar_reservations')
                                ->select(DB::raw('calendar_id'))
                                ->where('id', '=', $id)
                                ->get();

                $idCalendario = $infoReserva[0]->calendar_id;*/
                $idCalendario = $getPagoInfo[0]->calendario_id;

                //BUSCO EL ID DEL USUARIO SERVICIO
                /*$infoReserva1 = DB::table('booking_abcalendar_calendars')
                             ->select(DB::raw('id_usuario_servicio'))
                             ->where('id', '=', $idCalendario)
                             ->get();

                $idUsuarioServicio = $infoReserva1[0]->id_usuario_servicio;*/
                $idUsuarioServicio = $getCalendarInfo[0]->id_usuario_servicio;

                $user = $auth->user();

                if (empty($user)) {
                    // EL VOLVER ES A LA PARTE PUBLICA
                    // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                    /*$tipoUsuario = "public";
                    $estatusReserva = "Pending";*/

                    //$updateReserva = $gestion->updateReserva($reservacion_id,1);

                    //BUSCO EL ID DEL USUARIO OPERADOR
                    $infoUsuarioOperador = $gestion->getIdUsuarioOperador($idUsuarioServicio);

                    $idUsuarioPeradorPublica = $infoUsuarioOperador[0]->id_usuario_operador;

                    //OBTENGO LA INFORMACION DEL USUARIO OPERADOR
                    $infoReserva2 = $gestion->getInfoUsuarioOperador($idUsuarioPeradorPublica);

                    $statusReserva = 1;
                    echo "Parte Publica No Logueado";
                    //$this->dispatch(new ReservacionMail($getReserva,$getPagoInfo,$infoReserva2,$statusReserva));
                    //return view('public_page.front.confirmacionCashPublica', compact('infoPago','infoReservas','user','infoReserva2','idUsuarioServicio'))->render();

                } else {
                    // VOLVER A LA PARTE ADMIN
                    //BUSCO EL ID DEL USUARIO OPERADOR
                    /*$buscoIdUsuarioServicio = DB::table('usuario_servicios')
                             ->select(DB::raw('id_usuario_operador'))
                             ->where('id', '=', $idUsuarioServicio)
                             ->get();*/
                    $buscoIdUsuarioServicio = $gestion->getIdUsuarioOperador($idUsuarioServicio);

                    $temIdOp = $buscoIdUsuarioServicio[0]->id_usuario_operador;

                    /*$buscoIdUsuario = DB::table('usuario_operadores')
                             ->select(DB::raw('id_usuario'))
                             ->where('id_usuario_op', '=', $temIdOp)
                             ->get();
                    $buscoIdUsuario = $gestion->getInfoUsuarioOperador($temIdOp);

                    $idUser = $buscoIdUsuario[0]->id_usuario;*/


                    /*$infoReserva2 = DB::table('usuario_operadores')
                             ->select(DB::raw('*'))
                             ->where('id_usuario', '=', $idUser)
                             ->get();*/

                    $infoReserva2 = $gestion->getInfoUsuarioOperador($temIdOp);
                    $idUsuarioOperador = $infoReserva2[0]->id_usuario_op;

                    //SI EL USUARIO ESTA LOGUEADO PERO VIENE DE LA PARTE PUBLICA
                    //COMPROBAR QUE EL USUARIO SERVICIO DEL CALENDARIO PERTENEZCA
                    // AL USUARIO SERVCIO DEL OPERADOR
                    //BUSCO EL ID DEL Catalogo
                    $idUsuarioOperadorLogueado = session('operador_id');
                    $infoReservaComprobar = $gestion->getIdCatalogo($idUsuarioServicio, $idUsuarioOperadorLogueado);

                    if (empty($infoReservaComprobar)) {
                        // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                        /*$tipoUsuario = "admin";
                        $estatusReserva = "Pending";*/
                        //$updateReserva = $gestion->updateReserva($reservacion_id,2);

                        echo "Parte Publica Logueado";
                        $statusReserva = 1;
                        $infoPago = $getPagoInfo;
                        $infoReservas = $getReserva;
                        //$this->dispatch(new ReservacionMail($infoReservas,$infoPago,$infoReserva2,$statusReserva));
                        $partePublica = true;
                        return view('public_page.front.confirmacionCashPublica', compact('infoPago', 'infoReservas', 'user', 'partePublica', 'infoReserva2', 'idUsuarioServicio'))->render();
                    } else {
                        // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                        /*$tipoUsuario = "admin";
                        $estatusReserva = "Confirmed";*/

                        //$updateReserva = $gestion->updateReserva($reservacion_id,2);
                        echo "Parte Privada Logueado";
                        $statusReserva = 1;
                        $infoPago = $getPagoInfo;
                        $infoReservas = $getReserva;
                        //$this->dispatch(new ReservacionMail($infoReservas,$infoPago,$infoReserva2,$statusReserva));
                        $idCatalogo = $infoReservaComprobar[0]->id_catalogo_servicio;
                        $partePublica = false;
                        return view('public_page.front.confirmacionTarjetaCredito', compact('infoPago', 'infoReservas', 'user', 'partePublica', 'idCatalogo', 'idUsuarioServicio', 'infoReserva2', 'nombreCalendario'));
                    }
                }
            }
        }
    }

    public function sendMailBooking(Request $request, Guard $auth, PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1)
    {

        $infoReservas = $gestion->getReservaToken($request->token);
        $inforeserva1 = $gestion->usuarioServicoCash($infoReservas[0]->calendar_id);
        $idUsuarioServicio = $inforeserva1[0]->id_usuario_servicio;
        $id = $infoReservas[0]->id;
        $idCalendarioNew = $infoReservas[0]->calendar_id;
        $fecha = $infoReservas[0]->date_from;
        $correo = $infoReservas[0]->c_email;
        $infoPago = $gestion->infoPagosCash($id);
        $estadoReserva = $infoPago[0]->estado_pago;
        $calendarGroup = $gestion->buscarIdAgrupamiento($idCalendarioNew);
        $infoAgrupamiento = $gestion->getInfoAgrupamiento($calendarGroup[0]->id_agrupamiento);

        if ($estadoReserva == "Pendiente") {
            //BUSCO EL ID DEL CALENDARIO
            $idCalendario = $infoReservas[0]->calendar_id;
            $user = $auth->user();

            if (empty($user)) {
                $infoUsuarioOperador = $gestion->usuarioOperadorCash($idUsuarioServicio);
                $idUsuarioPeradorPublica = $infoUsuarioOperador[0]->id_usuario_operador;
                $infoReserva2 = $gestion->usuarioCash($idUsuarioPeradorPublica);
                $partePublica = false;
                $statusReserva = 0;
                /**************************************************************/
                /*                  CODIGO DE GENERACION DEL PDF              */
                /**************************************************************/
                //PDF::loadView('public_page.front.pdf',compact('infoPago','infoReservas','user','partePublica','idUsuarioServicio','infoReserva2','infoAgrupamiento'))->save('/var/www/html/IguanaTrip/public/pdf/'.$request->nombre);
                $textodocumento = "<center><img src='https://iwannatrip.s3.us-east-1.amazonaws.com/images/img/index-logo.png'></center>";
                $textodocumento .= "<center><h1>Confirmaci&oacute;n de la Reservaci&oacute;n Sistema de Booking iWaNaTrip.com</h1></center>";
                $textodocumento .= "<h3>Informaci&oacute;n del Operador del Servicio:</h3>";
                $textodocumento .= "<p><b>Nombre del Tour:</b> " . $infoAgrupamiento[0]->nombre . "</p>";
                $textodocumento .= "<p><b>Detalle del Tour:</b> " . $infoAgrupamiento[0]->descripcion . "</p>";
                $textodocumento .= "<p><b>Nombre del Operador:</b> " . $infoReserva2[0]->nombre_contacto_operador_1 . "</p>";
                $textodocumento .= "<p><b>Empresa del Operador:</b> " . $infoReserva2[0]->nombre_empresa_operador . "</p>";
                $textodocumento .= "<p><b>Direcci&oacute;n del Operador:</b> " . $infoReserva2[0]->direccion_empresa_operador . "</p>";
                $textodocumento .= "<p><b>Tel&eacute;fono del Operador:</b> " . $infoReserva2[0]->telf_contacto_operador_1 . "</p>";
                $textodocumento .= "<p><b>Correo del Operador:</b> " . $infoReserva2[0]->email_contacto_operador . "</p>";
                $textodocumento .= "<br>";
                $textodocumento .= "<h3>Informaci&oacute;n de la Reservaci&oacute;n:</h3>";
                $textodocumento .= "<p><b>Nombre del Servico :</b> " . $infoPago[0]->nombre_calendario . "</p>";
                $textodocumento .= "<p><b>Nombre del Cliente:</b> " . $infoReservas[0]->c_name . "</p>";
                $textodocumento .= "<p><b>Correo del Cliente:</b> " . $infoReservas[0]->c_email . "</p>";
                $textodocumento .= "<p><b>Tel&eacute;fono del Cliente:</b> " . $infoReservas[0]->c_phone . "</p>";
                $textodocumento .= "<p><b>Reserva Desde:</b> " . $infoReservas[0]->date_from . "</p>";
                $textodocumento .= "<p><b>Reserva Hasta:</b> " . $infoReservas[0]->date_to . "</p>";
                $textodocumento .= "<p><b>Adultos:</b> " . $infoReservas[0]->c_adults . "</p>";
                $textodocumento .= "<p><b>Ni&ntilde;os:</b> " . $infoReservas[0]->c_children . "</p>";
                $textodocumento .= "<p><b>Fecha de Pago:</b> " . $infoPago[0]->fecha_pago . "</p>";
                $textodocumento .= "<p><b>Monto Total de la Reservaci?:</b> " . $infoReservas[0]->amount . "</p>";
                $textodocumento .= "<br><br><br>";
                $textodocumento .= "<h3>Codigo de la Reservaci&oacute;n:</h3>";
                $textodocumento .= "<center><img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $infoReservas[0]->uuid . "&choe=UTF-8' /><center>";
                $nombreDespliegue = preg_replace('([^A-Za-z0-9])', '', $request->nombre);
                PDF::loadHTML($textodocumento)->save('pdf/' . $nombreDespliegue);
                /**************************************************************/
                /*              FIN CODIGO DE GENERACION DEL PDF              */
                /**************************************************************/
                $this->dispatch(new ReservacionMail($infoReservas, $infoPago, $infoReserva2, $statusReserva, $infoAgrupamiento, $inforeserva1));
            } else {
                $buscoIdUsuarioServicio = $gestion->usuarioOperadorCash($idUsuarioServicio);
                $temIdOp = $buscoIdUsuarioServicio[0]->id_usuario_operador;

                $buscoIdUsuario = $gestion->usuarioCash($temIdOp);
                $idUser = $buscoIdUsuario[0]->id_usuario;

                $infoReserva2 = $buscoIdUsuario;

                $idUsuarioOperador = $infoReserva2[0]->id_usuario_op;
                $partePublica = false;

                /**************************************************************/
                /*                  CODIGO DE GENERACION DEL PDF              */
                /**************************************************************/
                //PDF::loadView('public_page.front.pdf',compact('infoPago','infoReservas','user','partePublica','idUsuarioServicio','infoReserva2','infoAgrupamiento'))->save('/var/www/html/IguanaTrip/public/pdf/'.$request->nombre);
                $textodocumento = "<center><img src='https://iwannatrip.s3.us-east-1.amazonaws.com/images/img/index-logo.png'></center>";
                $textodocumento .= "<center><h1>Confirmaci&oacute;n de la Reservaci&oacute;n Sistema de Booking iWaNaTrip.com</h1></center>";
                $textodocumento .= "<h3>Informaci&oacute;n del Operador del Servicio:</h3>";
                $textodocumento .= "<p><b>Nombre del Tour:</b> " . $infoAgrupamiento[0]->nombre . "</p>";
                $textodocumento .= "<p><b>Detalle del Tour:</b> " . $infoAgrupamiento[0]->descripcion . "</p>";
                $textodocumento .= "<p><b>Nombre del Operador:</b> " . $infoReserva2[0]->nombre_contacto_operador_1 . "</p>";
                $textodocumento .= "<p><b>Empresa del Operador:</b> " . $infoReserva2[0]->nombre_empresa_operador . "</p>";
                $textodocumento .= "<p><b>Direcci&oacute;n del Operador:</b> " . $infoReserva2[0]->direccion_empresa_operador . "</p>";
                $textodocumento .= "<p><b>Tel&eacute;fono del Operador:</b> " . $infoReserva2[0]->telf_contacto_operador_1 . "</p>";
                $textodocumento .= "<p><b>Correo del Operador:</b> " . $infoReserva2[0]->email_contacto_operador . "</p>";
                $textodocumento .= "<br>";
                $textodocumento .= "<h3>Informaci&oacute;n de la Reservaci&oacute;n:</h3>";
                $textodocumento .= "<p><b>Nombre del Servico :</b> " . $infoPago[0]->nombre_calendario . "</p>";
                $textodocumento .= "<p><b>Nombre del Cliente:</b> " . $infoReservas[0]->c_name . "</p>";
                $textodocumento .= "<p><b>Correo del Cliente:</b> " . $infoReservas[0]->c_email . "</p>";
                $textodocumento .= "<p><b>Tel&eacute;fono del Cliente:</b> " . $infoReservas[0]->c_phone . "</p>";
                $textodocumento .= "<p><b>Reserva Desde:</b> " . $infoReservas[0]->date_from . "</p>";
                $textodocumento .= "<p><b>Reserva Hasta:</b> " . $infoReservas[0]->date_to . "</p>";
                $textodocumento .= "<p><b>Adultos:</b> " . $infoReservas[0]->c_adults . "</p>";
                $textodocumento .= "<p><b>Ni&ntilde;os:</b> " . $infoReservas[0]->c_children . "</p>";
                $textodocumento .= "<p><b>Fecha de Pago:</b> " . $infoPago[0]->fecha_pago . "</p>";
                $textodocumento .= "<p><b>Monto Total de la Reservaci?:</b> " . $infoReservas[0]->amount . "</p>";
                $textodocumento .= "<br><br><br>";
                $textodocumento .= "<h3>Codigo de la Reservaci&oacute;n:</h3>";
                $textodocumento .= "<center><img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $infoReservas[0]->uuid . "&choe=UTF-8' /><center>";

                $nombreDespliegue = preg_replace('([^A-Za-z0-9])', '', $request->nombre);
                PDF::loadHTML($textodocumento)->save('pdf/' . $nombreDespliegue);
                /**************************************************************/
                /*              FIN CODIGO DE GENERACION DEL PDF              */
                /**************************************************************/

                $idUsuarioOperadorLogueado = session('operador_id');
                $infoReservaComprobar = $gestion->comprobarUsuarioLogueado($idUsuarioServicio, $idUsuarioOperadorLogueado);

                if (empty($infoReservaComprobar)) {
                    $statusReserva = 0;
                    $this->dispatch(new ReservacionMail($infoReservas, $infoPago, $infoReserva2, $statusReserva, $infoAgrupamiento, $inforeserva1));
                } else {
                    $statusReserva = 1;
                    $this->dispatch(new ReservacionMail($infoReservas, $infoPago, $infoReserva2, $statusReserva, $infoAgrupamiento, $inforeserva1));
                }
            }
        }
    }

    public function eliminar_simbolos($string)
    {

        $string = trim($string);

        $string = str_replace(
            array('�', '�', '�', '�', '�', '�', '�', '�', '�'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );

        $string = str_replace(
            array('�', '�', '�', '�', '�', '�', '�', '�'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );

        $string = str_replace(
            array('�', '�', '�', '�', '�', '�', '�', '�'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );

        $string = str_replace(
            array('�', '�', '�', '�', '�', '�', '�', '�'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );

        $string = str_replace(
            array('�', '�', '�', '�', '�', '�', '�', '�'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );

        $string = str_replace(
            array('�', '�', '�', '�'),
            array('n', 'N', 'c', 'C',),
            $string
        );

        $string = str_replace(
            array(
                "\\", "�", "�", "-", "~",
                "#", "@", "|", "!", "\"",
                "�", "$", "%", "&", "/",
                "(", ")", "?", "'", "�",
                "�", "[", "^", "<code>", "]",
                "+", "}", "{", "�", "�",
                ">", "< ", ";", ",", ":",
                ".", " "
            ),
            ' ',
            $string
        );
        return $string;
    }

    public function generateBookingPDFES($infoAgrupamiento, $infoReserva2, $infoPago, $infoReservas)
    {

        $textodocumento = "<center><img src='https://iwannatrip.s3.us-east-1.amazonaws.com/images/img/index-logo.png'></center>";
        $textodocumento .= "<center><h1>Confirmaci&oacute;n de la Reservaci&oacute;n Sistema de Booking iWaNaTrip.com</h1></center>";
        $textodocumento .= "<h3>Informaci&oacute;n del Operador del Servicio:</h3>";
        $textodocumento .= "<p><b>Nombre del Tour:</b> " . $infoAgrupamiento[0]->nombre . "</p>";
        $textodocumento .= "<p><b>Detalle del Tour:</b> " . $infoAgrupamiento[0]->descripcion . "</p>";
        $textodocumento .= "<p><b>Nombre del Operador:</b> " . $infoReserva2[0]->nombre_contacto_operador_1 . "</p>";
        $textodocumento .= "<p><b>Empresa del Operador:</b> " . $infoReserva2[0]->nombre_empresa_operador . "</p>";
        $textodocumento .= "<p><b>Direcci&oacute;n del Operador:</b> " . $infoReserva2[0]->direccion_empresa_operador . "</p>";
        $textodocumento .= "<p><b>Tel&eacute;fono del Operador:</b> " . $infoReserva2[0]->telf_contacto_operador_1 . "</p>";
        $textodocumento .= "<p><b>Correo del Operador:</b> " . $infoReserva2[0]->email_contacto_operador . "</p>";
        $textodocumento .= "<br>";
        $textodocumento .= "<h3>Informaci&oacute;n de la Reservaci&oacute;n:</h3>";
        $textodocumento .= "<p><b>Nombre del Servicio :</b> " . $infoPago[0]->nombre_calendario . "</p>";
        $textodocumento .= "<p><b>Nombre del Cliente:</b> " . $infoReservas[0]->c_name . " " . $infoReservas[0]->c_lastname . "</p>";
        $textodocumento .= "<p><b>Correo del Cliente:</b> " . $infoReservas[0]->c_email . "</p>";
        $textodocumento .= "<p><b>Tel&eacute;fono del Cliente:</b> " . $infoReservas[0]->c_phone . "</p>";
        $textodocumento .= "<p><b>Reserva Desde:</b> " . $infoReservas[0]->date_from . "</p>";
        $textodocumento .= "<p><b>Reserva Hasta:</b> " . $infoReservas[0]->date_to . "</p>";
        $textodocumento .= "<p><b>Adultos:</b> " . $infoReservas[0]->c_adults . "</p>";
        $textodocumento .= "<p><b>Ni&ntilde;os:</b> " . $infoReservas[0]->c_children . "</p>";
        $textodocumento .= "<p><b>Fecha de Pago:</b> " . $infoPago[0]->fecha_pago . "</p>";
        $textodocumento .= "<p><b>Monto Total de la Reservaci&oacute;n:</b> " . $infoReservas[0]->amount . "</p>";
        $textodocumento .= "<br><br><br>";
        $textodocumento .= "<h3>Codigo de la Reservaci&oacute;n:</h3>";
        $textodocumento .= "<center><img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $infoReservas[0]->uuid . "&choe=UTF-8' /><center>";
        $nombreDespliegue = preg_replace('([^A-Za-z0-9])', '', $infoReservas[0]->c_name);
        PDF::loadHTML($textodocumento)->save('pdf/Reservacion-' . $nombreDespliegue . '-' . $infoPago[0]->id . '-es.pdf');
    }

    public function generateBookingPDFEN($infoAgrupamiento, $infoReserva2, $infoPago, $infoReservas)
    {

        $textodocumento = "<center><img src='https://iwannatrip.s3.us-east-1.amazonaws.com/images/img/index-logo.png'></center>";
        $textodocumento .= "<center><h1>Confirmation of reservation booking system iWaNaTrip.com</h1></center>";
        $textodocumento .= "<h3>Service operator Information</h3>";
        $textodocumento .= "<p><b>Tour Name:</b> " . $infoAgrupamiento[0]->nombre_eng . "</p>";
        $textodocumento .= "<p><b>Tour Detail:</b> " . $infoAgrupamiento[0]->descripcion_eng . "</p>";
        $textodocumento .= "<p><b>Operator name:</b> " . $infoReserva2[0]->nombre_contacto_operador_1 . "</p>";
        $textodocumento .= "<p><b>Operator Company:</b> " . $infoReserva2[0]->nombre_empresa_operador . "</p>";
        $textodocumento .= "<p><b>Operator address:</b> " . $infoReserva2[0]->direccion_empresa_operador . "</p>";
        $textodocumento .= "<p><b>Operator phone:</b> " . $infoReserva2[0]->telf_contacto_operador_1 . "</p>";
        $textodocumento .= "<p><b>Operator Mail:</b> " . $infoReserva2[0]->email_contacto_operador . "</p>";
        $textodocumento .= "<br>";
        $textodocumento .= "<h3>Booking Information:</h3>";
        $textodocumento .= "<p><b>Service Name :</b> " . $infoPago[0]->nombre_calendario . "</p>";
        $textodocumento .= "<p><b>Customer Name:</b> " . $infoReservas[0]->c_name . " " . $infoReservas[0]->c_lastname . "</p>";
        $textodocumento .= "<p><b>Customer Mail:</b> " . $infoReservas[0]->c_email . "</p>";
        $textodocumento .= "<p><b>Customer Phone:</b> " . $infoReservas[0]->c_phone . "</p>";
        $textodocumento .= "<p><b>Booking from:</b> " . $infoReservas[0]->date_from . "</p>";
        $textodocumento .= "<p><b>Booking until:</b> " . $infoReservas[0]->date_to . "</p>";
        $textodocumento .= "<p><b>Adults:</b> " . $infoReservas[0]->c_adults . "</p>";
        $textodocumento .= "<p><b>Childrens:</b> " . $infoReservas[0]->c_children . "</p>";
        $textodocumento .= "<p><b>Payment Date:</b> " . $infoPago[0]->fecha_pago . "</p>";
        $textodocumento .= "<p><b>Total amount of booking:</b> " . $infoReservas[0]->amount . "</p>";
        $textodocumento .= "<br><br><br>";
        $textodocumento .= "<h3>Booking Code:</h3>";
        $textodocumento .= "<center><img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $infoReservas[0]->uuid . "&choe=UTF-8' /><center>";
        $nombreDespliegue = preg_replace('([^A-Za-z0-9])', '', $infoReservas[0]->c_name);
        PDF::loadHTML($textodocumento)->save('pdf/Reservation-' . $nombreDespliegue . '-' . $infoPago[0]->id . '-en.pdf');
    }

    public function confirmacion(
        Request $request,
        Guard $auth,
        PublicServiceRepository $gestion,
        ServiciosOperadorRepository $gestion1
    ) {
        //PARAMETROS ENVIADOS POR POST PAGOMEDIOS
        // {
        //     "authorization_result": "00",
        //     "customer_id": "1757146806",
        //     "order_id": "1184",
        //     "order_status": "Autorizado",
        //     "purchase_operation_number": "877953883",
        //     "card_brand": "VISA",
        //     "card_number": "485951******0036",
        //     "card_type": "CREDIT"
        // }

        // $request->authorization_result = "00";
        // $request->customer_id = "1757146806";
        // $request->order_id = "427";
        // $request->order_status = "Autorizado";
        // $request->purchase_operation_number = "877953883";
        // $request->card_brand = "VISA";
        // $request->card_number = "485951******0036";
        // $request->card_type = "CREDIT";

        //FIN PARAMETROS
        // valores $request->authorization_result
        // 00 Indica que la transacci�n ha sido	autorizada
        // 01 Indica que la transacci�n	ha sido denegada en el Banco Emisor
        // 05 Indica que la transacci�n	ha sido rechazada

        if ($request->authorization_result == "00") {

            //OBTENGO LA INFORMACION DE LA RESERVA, PAGO Y USUARIO OPERADOR
            $infoReservas = $gestion->getReserva($request->order_id);
            $infoPago = $gestion->getInfoPagoReserva($request->order_id);
            $searchUsuServ = $gestion->getUsuarioServicio($infoReservas[0]->calendar_id);
            $idUsuarioServicio = $searchUsuServ[0]->id_usuario_servicio;
            // $nombreCalendario = $infoPago[0]->nombre_calendario;
            $buscoIdUsuarioServicio = $gestion->getIdUsuarioOperador($idUsuarioServicio);
            $infoReserva2 = $gestion->getInfoUsuarioOperador($buscoIdUsuarioServicio[0]->id_usuario_operador);
            $calendarGroup = $gestion->buscarIdAgrupamiento($infoReservas[0]->calendar_id);
            $infoAgrupamiento = $gestion->getInfoAgrupamiento($calendarGroup[0]->id_agrupamiento);

            //ACTUALIZO ESTADO DE RESERVA Y DEL PAGO
            $tipo = 0;
            $gestion->updateStatusReservaTDC($request->order_id, $tipo);
            $gestion->updateStatusPagoReservaTDC($request->order_id, $tipo);

            // TODO: DESCOMENTAR ESTAS LINEAS PARA GENERAR PDF Y ENVIAR EL CORREO PARA PRUEBAS
            // $this->generateBookingPDFES($infoAgrupamiento, $infoReserva2, $infoPago, $infoReservas);
            // $this->generateBookingPDFEN($infoAgrupamiento, $infoReserva2, $infoPago, $infoReservas);
            // $urlConsulta = 'https://iwannatrip.com/consultareservacion/'.$infoReservas[0]->token_consulta;
            // $this->dispatch(new ReservacionTDCMail($infoReservas,$urlConsulta,$infoPago,$infoReserva2));

            // SE GUARDA EN LA TABLA DELIVERY BOOK PARA GESTIONAR EL ENVIO DE CORREO
            $gestion->saveDeliveryBook($infoReservas[0]->id);

            echo '/consultareservacion/' . $infoReservas[0]->token_consulta;
            die();
            //ME VOY A LA PAGINA PARA QUE VEA LA INFO DE LA RESERVACION
            return redirect('/consultareservacion/' . $infoReservas[0]->token_consulta);
        } elseif ($request->authorization_result == "01" || $request->authorization_result == "05") {

            $infoReservas = $gestion->getReserva($request->order_id);
            //ACTUALIZO ESTADO A CANCELADO DE LA RESERVA Y DEL PAGO
            if ($request->authorization_result == "01") {
                $tipo = 1;
            } elseif ($request->authorization_result == "05") {
                $tipo = 2;
            }

            $gestion->updateStatusReservaTDC($request->order_id, $tipo);
            $gestion->updateStatusPagoReservaTDC($request->order_id, $tipo);

            //ME VOY A LA PAGINA PARA QUE VEA LA INFO DE LA RESERVACION Y MUESTRO MENSAJE
            return redirect('/errorsolicitudpago/' . $infoReservas[0]->token_consulta . '/' . $tipo);
        }
    }

    public function consultareservacion($token, Guard $auth, PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1)
    {
        $infoReservas = $gestion->getReservaToken($token);
        if (empty($infoReservas)) {
            //SI NO EXISTE EN LA TABLA DE RESERVAS, IR A PAGINA DE ERROR
            return view('public_page.front.confirmaciontErrorTarjetaCredito');
        } else {
            //OBTENGO LA INFORMACION DE LA RESERVA, PAGO Y USUARIO OPERADOR
            $infoReservas = $gestion->getReserva($infoReservas[0]->id);
            $infoPago = $gestion->getInfoPagoReserva($infoReservas[0]->id);
            $searchUsuServ = $gestion->getUsuarioServicio($infoReservas[0]->calendar_id);
            $idUsuarioServicio = $searchUsuServ[0]->id_usuario_servicio;
            $nombreCalendario = $infoPago[0]->nombre_calendario;
            $buscoIdUsuarioServicio = $gestion->getIdUsuarioOperador($idUsuarioServicio);
            $infoReserva2 = $gestion->getInfoUsuarioOperador($buscoIdUsuarioServicio[0]->id_usuario_operador);
            $calendarGroup = $gestion->buscarIdAgrupamiento($infoReservas[0]->calendar_id);
            $infoAgrupamiento = $gestion->getInfoAgrupamiento($calendarGroup[0]->id_agrupamiento);
            $pdfPathS3 = 'pdf/booking';
            if (session('locale') == 'en') {
                $fileName = 'Reservacion-' . $infoReservas[0]->c_name . '-' . $infoPago[0]->id . '-es.pdf';
                $pdf = $pdfPathS3 . '/' . $fileName;
            } else {
                Session::put('locale', 'es');
                $fileName = 'Reservation-' . $infoReservas[0]->c_name . '-' . $infoPago[0]->id . '-en.pdf';
                $pdf = $pdfPathS3 . '/' . $fileName;
            }
            return view('public_page.front.confirmaciontdc', compact('infoPago', 'infoReservas', 'idUsuarioServicio', 'infoReserva2', 'nombreCalendario', 'infoAgrupamiento', 'fileName'));
        }
    }

    public function downloadPdfFromBucket($fileName)
    {
        $pathToPDF = 'pdf/booking/' . $fileName;
        // 'Content-Type'        => 'application/jpeg',
        $headers = [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];
        return \Response::make(Storage::disk('s3')->get($pathToPDF), 200, $headers);
    }

    public function getTourList(PublicServiceRepository $gestion)
    {

        //Obtengo todos agrupamientos
        $agrupamientos = $gestion->getAllGroup();
        //Obtengo las fotos de cada agrupamiento
        for ($a = 0; $a < count($agrupamientos); $a++) {
            $agrupamientos[$a]->foto = $gestion->getPhotoGroup($agrupamientos[$a]->id);
        }
        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos); $i++) {
            $objeto = $agrupamientos[$i];

            //Obtengo los reviews de los agrupamientos
            $calendariosGroupReview = $gestion->getAllReviewsGroup($objeto->id);

            if (empty($calendariosGroupReview)) {
                $agrupamientos[$i]->reviews = [];
            } else {
                $agrupamientos[$i]->reviews = $calendariosGroupReview;
            }
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);



            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);

                    $preciosArray = array();
                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16 || $precios[$k]->mon == 0) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16 || $precios[$k]->tue == 0) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16 || $precios[$k]->wed == 0) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16 || $precios[$k]->thu == 0) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16 || $precios[$k]->fri == 0) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16 || $precios[$k]->sat == 0) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16 || $precios[$k]->sun == 0) {
                                $preciosArray[] = $precios[$k]->sun;
                            }

                            $arrayMaximos[] = max($preciosArray);
                            $arrayMinimos[] = min($preciosArray);
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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
        for ($i = 0; $i < count($agrupamientos); $i++) {
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
            $resumenReviews = $agrupamientos[$i]->resumen_views;
            $agrupamientos[$i]->total = array_sum(array_column(json_decode(json_encode($resumenReviews), true), 'calificacion'));
        }
        // return response()->json(['data' => $agrupamientos]);
        return view('public_page.front.tourList', compact('agrupamientos'))->render();
    }


    public function getTourListEn(PublicServiceRepository $gestion)
    {
        //Obtengo todos agrupamientos
        $agrupamientos = $gestion->getAllGroup();
        //Obtengo las fotos de cada agrupamiento
        for ($a = 0; $a < count($agrupamientos); $a++) {
            $agrupamientos[$a]->foto = $gestion->getPhotoGroup($agrupamientos[$a]->id);
        }
        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos); $i++) {
            $objeto = $agrupamientos[$i];

            //Obtengo los reviews de los agrupamientos
            $calendariosGroupReview = $gestion->getAllReviewsGroup($objeto->id);

            if (empty($calendariosGroupReview)) {
                $agrupamientos[$i]->reviews = [];
            } else {
                $agrupamientos[$i]->reviews = $calendariosGroupReview;
            }
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);



            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);

                    $preciosArray = array();
                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16 || $precios[$k]->mon == 0) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16 || $precios[$k]->tue == 0) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16 || $precios[$k]->wed == 0) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16 || $precios[$k]->thu == 0) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16 || $precios[$k]->fri == 0) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16 || $precios[$k]->sat == 0) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16 || $precios[$k]->sun == 0) {
                                $preciosArray[] = $precios[$k]->sun;
                            }

                            $arrayMaximos[] = max($preciosArray);
                            $arrayMinimos[] = min($preciosArray);
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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
        for ($i = 0; $i < count($agrupamientos); $i++) {
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
            $resumenReviews = $agrupamientos[$i]->resumen_views;
            $agrupamientos[$i]->total = array_sum(array_column(json_decode(json_encode($resumenReviews), true), 'calificacion'));
        }


        $agent = new Agent();

        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);
        Session::put('locale', 'en');
        // return response()->json(['data' => $agrupamientos]);
        return view('public_page.front.ferries', compact('agrupamientos'))->render();
    }

    public function getTourListV2(PublicServiceRepository $gestion)
    {

        if (session('locale') == 'en')
            return redirect('/en/Galapagos-Ferry/', 301);


        //Obtengo todos agrupamientos
        $agrupamientos = $gestion->getAllGroup();
        //Obtengo las fotos de cada agrupamiento
        for ($a = 0; $a < count($agrupamientos); $a++) {
            $agrupamientos[$a]->foto = $gestion->getPhotoGroup($agrupamientos[$a]->id);
        }
        $arrayMaximos = array();
        $arrayMinimos = array();
        $minimoDeTodos = 0;
        $maximoDeTodos = 0;
        //itero por cada uno de los agrupamientos
        for ($i = 0; $i < count($agrupamientos); $i++) {
            $objeto = $agrupamientos[$i];

            //Obtengo los reviews de los agrupamientos
            $calendariosGroupReview = $gestion->getAllReviewsGroup($objeto->id);

            if (empty($calendariosGroupReview)) {
                $agrupamientos[$i]->reviews = [];
            } else {
                $agrupamientos[$i]->reviews = $calendariosGroupReview;
            }
            //Obtengo todos los id de calendarios que pertenecen a un agrupamiento
            $calendariosGroup = $gestion->getAllGroupCalendars($objeto->id);



            if (count($calendariosGroup) > 0) {
                //itero para cada uno de los calendarios que pertenencen
                // al agrupamiento
                for ($j = 0; $j < count($calendariosGroup); $j++) {
                    $arrayCalendarios[] = $calendariosGroup[$j]->id;
                    //Obtengo los precios de la semana para un calendario
                    $precios = $gestion->getCalendarsPrice($calendariosGroup[$j]->id);

                    $preciosArray = array();
                    if (count($precios) > 0) {
                        //itero por los precios de cada dia para el calendario
                        for ($k = 0; $k < count($precios); $k++) {
                            if ($precios[$k]->mon > 0.16 || $precios[$k]->mon == 0) {
                                $preciosArray[] = $precios[$k]->mon;
                            }
                            if ($precios[$k]->tue > 0.16 || $precios[$k]->tue == 0) {
                                $preciosArray[] = $precios[$k]->tue;;
                            }
                            if ($precios[$k]->wed > 0.16 || $precios[$k]->wed == 0) {
                                $preciosArray[] = $precios[$k]->wed;
                            }
                            if ($precios[$k]->thu > 0.16 || $precios[$k]->thu == 0) {
                                $preciosArray[] = $precios[$k]->thu;
                            }
                            if ($precios[$k]->fri > 0.16 || $precios[$k]->fri == 0) {
                                $preciosArray[] = $precios[$k]->fri;
                            }
                            if ($precios[$k]->sat > 0.16 || $precios[$k]->sat == 0) {
                                $preciosArray[] = $precios[$k]->sat;
                            }
                            if ($precios[$k]->sun > 0.16 || $precios[$k]->sun == 0) {
                                $preciosArray[] = $precios[$k]->sun;
                            }

                            $arrayMaximos[] = max($preciosArray);
                            $arrayMinimos[] = min($preciosArray);
                            $preciosArray = array();
                        }
                    }
                    if (count($arrayMaximos) > 0) {
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
        for ($i = 0; $i < count($agrupamientos); $i++) {
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
            $resumenReviews = $agrupamientos[$i]->resumen_views;
            $agrupamientos[$i]->total = array_sum(array_column(json_decode(json_encode($resumenReviews), true), 'calificacion'));
        }
        // return response()->json(['data' => $agrupamientos]);
        return view('public_page.front.ferries', compact('agrupamientos'))->render();
    }





    public function getDayTrips(PublicServiceRepository $gestion)
    {

        return view('public_page.front.dayTripsLabel')->render();
    }


    public function errorSolicitudpagoTarjetaCredito($token, $tipo, PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1)
    {
        $infoReservas = $gestion->getReservaToken($token);
        if (empty($infoReservas)) {
            //SI NO EXISTE EN LA TABLA DE RESERVAS, IR A PAGINA DE ERROR
            return view('public_page.front.confirmaciontErrorTarjetaCredito');
        } else {
            $infoPago = $gestion->getInfoPagoReserva($infoReservas[0]->id);
            $searchUsuServ = $gestion->getUsuarioServicio($infoReservas[0]->calendar_id);
            $idUsuarioServicio = $searchUsuServ[0]->id_usuario_servicio;
            $nombreCalendario = $infoPago[0]->nombre_calendario;
            $buscoIdUsuarioServicio = $gestion->getIdUsuarioOperador($idUsuarioServicio);
            $infoReserva2 = $gestion->getInfoUsuarioOperador($buscoIdUsuarioServicio[0]->id_usuario_operador);
            if ($tipo == 1) {
                $mensaje = "La transacci�n ha sido denegada en el Banco Emisor";
            } elseif ($tipo == 2) {
                $mensaje = "La transacci�n ha sido rechazada";
            } else {
                //SI NO EXISTE EN LA TABLA DE RESERVAS, IR A PAGINA DE ERROR
                return view('public_page.front.confirmaciontErrorTarjetaCredito');
            }
            return view('public_page.front.errorSolicitudTDC', compact('infoPago', 'infoReservas', 'idUsuarioServicio', 'infoReserva2', 'nombreCalendario', 'mensaje'));
        }
    }

    public function confirmacionPrueba(Request $request)
    {
        dd($request->all());
        /*echo "Pasa por aqui";
       print_r($request);die();*/
    }


    //************************************************************************//
    //              FUNCIONES PARA EL PAGO CON TARJETA DE CREDITO             //
    /************************************************************************
    public function getConfirmacionCash($token,Guard $auth,PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1) {
                        $infoReservas = $gestion->getReservaToken($token);
            $inforeserva1 = $gestion->usuarioServicoCash($infoReservas[0]->calendar_id);
            $idUsuarioServicio = $inforeserva1[0]->id_usuario_servicio;

            if(empty($infoReservas)){
                //SI NO EXISTE EN LA TABLA DE RESERVAS
                //ME REDIRIGE A LA PAGINA DE ERROR
                return view('public_page.front.confirmacionErrorCash');
            }else{
                $id = $infoReservas[0]->id;
                $idCalendarioNew = $infoReservas[0]->calendar_id;
                $fecha = $infoReservas[0]->date_from;
                $correo = $infoReservas[0]->c_email;
                $verificarCorreo = $gestion1->verificarCorreo($idCalendarioNew,$fecha,$correo);

                //COMPRUEBO QUE NO EXISTA MAS DE UNA RESERVA CON ESA FECHA
                if($verificarCorreo[0]->correo > 1){
                //ya existe una reserva con ese correo, cancelar la reserva
                $cancelarReserva = $gestion->cancelarReserva($id);

                //BUSCO EL ID DEL USUARIO OPERADOR
                $buscoIdUsuarioServicio = $gestion->usuarioOperadorCash($idUsuarioServicio);
                $temIdOp = $buscoIdUsuarioServicio[0]->id_usuario_operador;

                //BUSCO EL ID DEL USUARIO
                $buscoIdUsuario = $gestion->usuarioCash($temIdOp);
                $idUser = $buscoIdUsuario[0]->id_usuario;

                $infoReserva2 = $gestion->usuarioCash($temIdOp);
                $idUsuarioOperador = $buscoIdUsuario[0]->id_usuario_op;

                //SI EL USUARIO ESTA LOGUEADO PERO VIENE DE LA PARTE PUBLICA
                //COMPROBAR QUE EL USUARIO SERVICIO DEL CALENDARIO PERTENEZCA
                // AL USUARIO SERVCIO DEL OPERADOR
                //BUSCO EL ID DEL Catalogo
                $idUsuarioOperadorLogueado = session('operador_id');
                $infoReservaComprobar = $gestion->comprobarUsuarioLogueado($idUsuarioServicio,$idUsuarioOperadorLogueado);
                $user = $auth->user();
                if (empty($infoReservaComprobar)) {
                    $partePublica = true;
                    return view('public_page.front.cancelarReservaCash', compact('user','partePublica','idUsuarioServicio'))->render();
                }else{
                    $partePublica = false;
                    $idCatalogo = $infoReservaComprobar[0]->id_catalogo_servicio;
                    return view('public_page.front.cancelarReservaCash', compact('user','partePublica','idCatalogo','idUsuarioServicio'))->render();
                }
            }else{
                //reserva nueva
                $verificoPagoConsumido = $gestion->getConsumidoCash($id);

                if(empty($verificoPagoConsumido)){
                    //SI CONSUMIDO ES 1 ME REDIRIGE A LA PAGINA DE ERROR
                    return view('public_page.front.confirmacionErrorCash');
                }elseif($verificoPagoConsumido[0]->consumido == 0){

                    $updateReserva = $gestion->updateConsumidoReservaCash($id);
                    $infoPago = $gestion->infoPagosCash($id);
                    $estadoReserva = $infoPago[0]->estado_pago;
                    $calendarGroup = $gestion->buscarIdAgrupamiento($idCalendarioNew);
                    $infoAgrupamiento = $gestion->getInfoAgrupamiento($calendarGroup[0]->id_agrupamiento);
                    if($estadoReserva == "Pendiente"){
                        //BUSCO EL ID DEL CALENDARIO
                        $idCalendario = $infoReservas[0]->calendar_id;
                        $user = $auth->user();

                        if(empty($user)) {
                               // EL VOLVER ES A LA PARTE PUBLICA
                               // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                               $updateReserva = $gestion->updateStatusReservaCash($infoReservas[0]->id,1);

                               //BUSCO EL ID DEL USUARIO OPERADOR
                               $infoUsuarioOperador = $gestion->usuarioOperadorCash($idUsuarioServicio);

                               $idUsuarioPeradorPublica = $infoUsuarioOperador[0]->id_usuario_operador;

                               //OBTENGO LA INFORMACION DEL USUARIO OPERADOR
                               $infoReserva2 = $gestion->usuarioCash($idUsuarioPeradorPublica);

                               $statusReserva = 0;
                               $this->dispatch(new ReservacionMail($infoReservas,$infoPago,$infoReserva2,$statusReserva));
                               return view('public_page.front.confirmacionCashPublica', compact('infoPago','infoReservas','user','infoReserva2','idUsuarioServicio','infoAgrupamiento'))->render();

                        }else{

                            // VOLVER A LA PARTE ADMIN
                            //BUSCO EL ID DEL USUARIO OPERADOR
                            $buscoIdUsuarioServicio = $gestion->usuarioOperadorCash($idUsuarioServicio);
                            $temIdOp = $buscoIdUsuarioServicio[0]->id_usuario_operador;

                            $buscoIdUsuario = $gestion->usuarioCash($temIdOp);
                            $idUser = $buscoIdUsuario[0]->id_usuario;

                            $infoReserva2 = $buscoIdUsuario;

                            $idUsuarioOperador = $infoReserva2[0]->id_usuario_op;

                           //SI EL USUARIO ESTA LOGUEADO PERO VIENE DE LA PARTE PUBLICA
                           //COMPROBAR QUE EL USUARIO SERVICIO DEL CALENDARIO PERTENEZCA
                           // AL USUARIO SERVCIO DEL OPERADOR
                           //BUSCO EL ID DEL Catalogo
                           $idUsuarioOperadorLogueado = session('operador_id');
                           $infoReservaComprobar = $gestion->comprobarUsuarioLogueado($idUsuarioServicio,$idUsuarioOperadorLogueado);

                           if (empty($infoReservaComprobar)) {
                               // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                               $updateReserva = $gestion->updateStatusReservaCash($infoReservas[0]->id,2);
                               $statusReserva = 0;
                               $this->dispatch(new ReservacionMail($infoReservas,$infoPago,$infoReserva2,$statusReserva));
                               $partePublica = true;
                               return view('public_page.front.confirmacionCashPublica', compact('infoPago','infoReservas','user','partePublica','infoReserva2','idUsuarioServicio','infoAgrupamiento'))->render();
                           }else{
                                // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                                $updateReserva = $gestion->updateStatusReservaCash($infoReservas[0]->id,3);
                                $statusReserva = 1;
                                $this->dispatch(new ReservacionMail($infoReservas,$infoPago,$infoReserva2,$statusReserva));
                                $idCatalogo = $infoReservaComprobar[0]->id_catalogo_servicio;
                                $partePublica = false;
                                return view('public_page.front.confirmacionCash', compact('infoPago','infoReservas','user','partePublica','idCatalogo','idUsuarioServicio','infoReserva2','infoAgrupamiento'));
                           }
                        }
                    }
               }else{
                    return view('public_page.front.confirmacionErrorCash');
               }
            }
        }
    }

     */



    public function getConfirmacionCash($token, Guard $auth, PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1)
    {
        $infoReservas = $gestion->getReservaToken($token);
        $inforeserva1 = $gestion->usuarioServicoCash($infoReservas[0]->calendar_id);
        $idUsuarioServicio = $inforeserva1[0]->id_usuario_servicio;

        if (empty($infoReservas)) {
            //SI NO EXISTE EN LA TABLA DE RESERVAS
            //ME REDIRIGE A LA PAGINA DE ERROR
            return view('public_page.front.confirmacionErrorCash');
        } else {
            $id = $infoReservas[0]->id;
            $idCalendarioNew = $infoReservas[0]->calendar_id;
            $fecha = $infoReservas[0]->date_from;
            $correo = $infoReservas[0]->c_email;
            $verificarCorreo = $gestion1->verificarCorreo($idCalendarioNew, $fecha, $correo);
            //COMPRUEBO QUE NO EXISTA MAS DE UNA RESERVA CON ESA FECHA
            if ($verificarCorreo[0]->correo > 1) {
                //ya existe una reserva con ese correo, cancelar la reserva
                $cancelarReserva = $gestion->cancelarReserva($id);

                //BUSCO EL ID DEL USUARIO OPERADOR
                $buscoIdUsuarioServicio = $gestion->usuarioOperadorCash($idUsuarioServicio);
                $temIdOp = $buscoIdUsuarioServicio[0]->id_usuario_operador;

                //BUSCO EL ID DEL USUARIO
                $buscoIdUsuario = $gestion->usuarioCash($temIdOp);
                $idUser = $buscoIdUsuario[0]->id_usuario;

                $infoReserva2 = $gestion->usuarioCash($temIdOp);
                $idUsuarioOperador = $buscoIdUsuario[0]->id_usuario_op;

                //SI EL USUARIO ESTA LOGUEADO PERO VIENE DE LA PARTE PUBLICA
                //COMPROBAR QUE EL USUARIO SERVICIO DEL CALENDARIO PERTENEZCA
                // AL USUARIO SERVCIO DEL OPERADOR
                //BUSCO EL ID DEL Catalogo
                $idUsuarioOperadorLogueado = session('operador_id');
                $infoReservaComprobar = $gestion->comprobarUsuarioLogueado($idUsuarioServicio, $idUsuarioOperadorLogueado);
                $user = $auth->user();
                if (empty($infoReservaComprobar)) {
                    $partePublica = true;
                    return view('public_page.front.cancelarReservaCash', compact('user', 'partePublica', 'idUsuarioServicio'))->render();
                } else {
                    $partePublica = false;
                    $idCatalogo = $infoReservaComprobar[0]->id_catalogo_servicio;
                    return view('public_page.front.cancelarReservaCash', compact('user', 'partePublica', 'idCatalogo', 'idUsuarioServicio'))->render();
                }
            } else {
                //reserva nueva
                $verificoPagoConsumido = $gestion->getConsumidoCash($id);

                if (empty($verificoPagoConsumido)) {
                    //SI CONSUMIDO ES 1 ME REDIRIGE A LA PAGINA DE ERROR
                    return view('public_page.front.confirmacionErrorCash');
                } elseif ($verificoPagoConsumido[0]->consumido == 0) {

                    $updateReserva = $gestion->updateConsumidoReservaCash($id);
                    $infoPago = $gestion->infoPagosCash($id);
                    $estadoReserva = $infoPago[0]->estado_pago;
                    $calendarGroup = $gestion->buscarIdAgrupamiento($idCalendarioNew);
                    $infoAgrupamiento = $gestion->getInfoAgrupamiento($calendarGroup[0]->id_agrupamiento);
                    if ($estadoReserva == "Pendiente") {
                        //BUSCO EL ID DEL CALENDARIO
                        $idCalendario = $infoReservas[0]->calendar_id;
                        $user = $auth->user();

                        if (empty($user)) {
                            // EL VOLVER ES A LA PARTE PUBLICA
                            // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                            $updateReserva = $gestion->updateStatusReservaCash($infoReservas[0]->id, 1);

                            //BUSCO EL ID DEL USUARIO OPERADOR
                            $infoUsuarioOperador = $gestion->usuarioOperadorCash($idUsuarioServicio);

                            $idUsuarioPeradorPublica = $infoUsuarioOperador[0]->id_usuario_operador;

                            //OBTENGO LA INFORMACION DEL USUARIO OPERADOR
                            $infoReserva2 = $gestion->usuarioCash($idUsuarioPeradorPublica);

                            $statusReserva = 0;
                            //$this->dispatch(new ReservacionMail($infoReservas,$infoPago,$infoReserva2,$statusReserva));
                            return view('public_page.front.confirmacionCashPublica', compact('infoPago', 'infoReservas', 'user', 'infoReserva2', 'idUsuarioServicio', 'infoAgrupamiento'))->render();
                        } else {

                            // VOLVER A LA PARTE ADMIN
                            //BUSCO EL ID DEL USUARIO OPERADOR
                            $buscoIdUsuarioServicio = $gestion->usuarioOperadorCash($idUsuarioServicio);
                            $temIdOp = $buscoIdUsuarioServicio[0]->id_usuario_operador;

                            $buscoIdUsuario = $gestion->usuarioCash($temIdOp);
                            $idUser = $buscoIdUsuario[0]->id_usuario;

                            $infoReserva2 = $buscoIdUsuario;

                            $idUsuarioOperador = $infoReserva2[0]->id_usuario_op;

                            //SI EL USUARIO ESTA LOGUEADO PERO VIENE DE LA PARTE PUBLICA
                            //COMPROBAR QUE EL USUARIO SERVICIO DEL CALENDARIO PERTENEZCA
                            // AL USUARIO SERVCIO DEL OPERADOR
                            //BUSCO EL ID DEL Catalogo
                            $idUsuarioOperadorLogueado = session('operador_id');
                            $infoReservaComprobar = $gestion->comprobarUsuarioLogueado($idUsuarioServicio, $idUsuarioOperadorLogueado);

                            if (empty($infoReservaComprobar)) {
                                // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                                $updateReserva = $gestion->updateStatusReservaCash($infoReservas[0]->id, 2);
                                $statusReserva = 0;
                                //$this->dispatch(new ReservacionMail($infoReservas,$infoPago,$infoReserva2,$statusReserva));
                                $partePublica = true;
                                //PDF::loadView('public_page.front.pdf',compact('infoPago','infoReservas','user','partePublica','idCatalogo','idUsuarioServicio','infoReserva2','infoAgrupamiento'))->save('/var/www/html/IguanaTrip/public/pdf/Reservacion-'.$infoReservas[0]->c_name.'-'.$infoPago[0]->fecha_pago.'pdf');
                                return view('public_page.front.confirmacionCashPublica', compact('infoPago', 'infoReservas', 'user', 'partePublica', 'infoReserva2', 'idUsuarioServicio', 'infoAgrupamiento'))->render();
                            } else {
                                // ACTUALIZO EL ESTADO Y EL TIPO DE USUARIO DE LA RESERVA
                                $updateReserva = $gestion->updateStatusReservaCash($infoReservas[0]->id, 3);
                                $statusReserva = 1;
                                //$this->dispatch(new ReservacionMail($infoReservas,$infoPago,$infoReserva2,$statusReserva));
                                $idCatalogo = $infoReservaComprobar[0]->id_catalogo_servicio;
                                $partePublica = false;
                                //PDF::loadView('public_page.front.pdf',compact('infoPago','infoReservas','user','partePublica','idCatalogo','idUsuarioServicio','infoReserva2','infoAgrupamiento'))->save('/var/www/html/IguanaTrip/public/pdf/Reservacion-'.$infoReservas[0]->c_name.'-'.$infoPago[0]->fecha_pago.'pdf');
                                return view('public_page.front.confirmacionCash', compact('infoPago', 'infoReservas', 'user', 'partePublica', 'idCatalogo', 'idUsuarioServicio', 'infoReserva2', 'infoAgrupamiento'));
                            }
                        }
                    }
                } else {
                    return view('public_page.front.confirmacionErrorCash');
                }
            }
        }
    }



    /**************************************************************************/
    /*                       REVIEW DE LOS AGRUPAMIENTOS                      */
    /**************************************************************************/
    //FUNCION ENVIA AL USUARIO AL FORMULARIO PARA DEJAR SU REVIEW
    public function getReviewTour070819(
        $token,
        PublicServiceRepository $gestion,
        ServiciosOperadorRepository $gestion1
    ) {

        $reservacionInfo = $gestion->getReservacionInfoTours($token);
        if (empty($reservacionInfo)) {
            return view('errors.404');
        } else {
            $calendarioConsulta = $gestion->getCalendarioInfoTours($reservacionInfo[0]->calendar_id);
            $agrupacion = $gestion->getInfoAgrupamiento($calendarioConsulta[0]->id_agrupamiento);
            return view('public_page.front.toursListReviews')->with('agrupacion', $agrupacion)->with('reservacion', $reservacionInfo);
        }
    }


    //FUNCION ENVIA AL USUARIO AL FORMULARIO PARA DEJAR SU REVIEW
    public function getReviewTour(
        $token,
        PublicServiceRepository $gestion,
        ServiciosOperadorRepository $gestion1
    ) {

        $reservacionInfo = $gestion->getReservacionInfoTours($token);
        if (empty($reservacionInfo)) {
            return view('errors.404');
        } else {
            $agent = new Agent();
            $desk = $device = $agent->isMobile();
            if ($desk == 1)
                $desk = "mobile";
            else {
                $desk = "desk";
            }
            session(['locale' => 'en']);
            $calendarioConsulta = $gestion->getCalendarioInfoTours($reservacionInfo[0]->calendar_id);
            $nombreCalendario = $gestion->getCalendarName($reservacionInfo[0]->calendar_id);
            $agrupacion = $gestion->getInfoAgrupamiento($calendarioConsulta[0]->id_agrupamiento);
            $fecha = date('d M Y', strtotime($reservacionInfo[0]->date_from));
            return view('public_page.front.toursListReviews')
                ->with('agrupacion', $agrupacion)
                ->with('nombrecalendario', $nombreCalendario[0]->nombre)
                ->with('fecha', $fecha)
                ->with('reservacion', $reservacionInfo);
        }
    }


    //FUNCION QUE EJECUTA EL CRON PARA ENVIO DE CORREO DEL REVIEW
    public function cronReviewsTours(PublicServiceRepository $gestion, ServiciosOperadorRepository $gestion1)
    {


        //ESTADO DEL REVIEW EN LA RESERVA ES IGUAL A 0
        $reservacionesCronCero = $gestion->getReservacionesCron(2);
        if (!empty($reservacionesCronCero)) {
            foreach ($reservacionesCronCero as $reservaCron) {
                $fromDate = date('Y-m-d');
                $curDate = date($reservaCron->date_to);
                $daysLeft = abs(strtotime($curDate) - strtotime($fromDate));
                $days = $daysLeft / (60 * 60 * 24);
                //SI LA DIFERENCIA EN MAYOR A 1 DIA
                if ($days > 0 || $days > '0') {
                    //VERIFICO EN LA TABLA DE INTENTOS
                    $getAgrupamientoReviewIntentos = $gestion->getAgrupamientoReviewIntentos($reservaCron->calendar_id);
                    $verificoIntentosEmail = $gestion->verificoIntentosEmail($reservaCron, $getAgrupamientoReviewIntentos[0]->id_agrupamiento);
                    $contador = count($verificoIntentosEmail);
                    //SI LOS INTENTOS SON MENOR QUE 3 ENVIAR EL CORREO Y AUMENTAR EN LA TABLA DE INTENTOS
                    if ($contador < 3) {
                        //ENVIO DE CORREO AL CORREO DE LA RESERVACION
                        $this->dispatch(new VerifyReviewTours($reservaCron));
                        //GUARDO EN LA TABLA DE INTENTOS
                        $guardarEnIntentos = $gestion->guardarEnIntentosEmail($getAgrupamientoReviewIntentos[0]->id_agrupamiento, $reservaCron);
                    }
                }
            }
        }

        //ESTADO DEL REVIEW EN LA RESERVA ES IGUAL A NULL
        $reservacionesCronNull = $gestion->getReservacionesCron(1);
        if (!empty($reservacionesCronNull)) {
            foreach ($reservacionesCronNull as $reservaCron) {
                $fromDate = date('Y-m-d');
                $curDate = date($reservaCron->date_to);
                $daysLeft = abs(strtotime($curDate) - strtotime($fromDate));
                $days = $daysLeft / (60 * 60 * 24);
                if ($days > 0 || $days > '0') {
                    //ACTUALIZO EL ESTADO DEL REVIEW DE LA RESERVACION A 0
                    $estadoReviewReserva = $gestion->updateEstadoReviewReservacion($reservaCron->id);
                    //VERIFICO EN LA TABLA DE INTENTOS
                    $getAgrupamientoReviewIntentos = $gestion->getAgrupamientoReviewIntentos($reservaCron->calendar_id);
                    $verificoIntentosEmail = $gestion->verificoIntentosEmail($reservaCron, $getAgrupamientoReviewIntentos[0]->id_agrupamiento);
                    $contador = count($verificoIntentosEmail);
                    //SI LOS INTENTOS SON MENOR QUE 3 ENVIAR EL CORREO Y AUMENTAR EN LA TABLA DE INTENTOS
                    if ($contador < 3) {
                        //ENVIO DE CORREO AL CORREO DE LA RESERVACION
                        $this->dispatch(new VerifyReviewTours($reservaCron));
                        //GUARDO EN LA TABLA DE INTENTOS
                        $guardarEnIntentos = $gestion->guardarEnIntentosEmail($getAgrupamientoReviewIntentos[0]->id_agrupamiento, $reservaCron);
                    }
                }
            }
        }
    }


    //GUARDO EL REVIEWS EN LA TABLA reviews_usuario_servicio
    public function verifyReview(
        Request $request,
        PublicServiceRepository $gestion,
        ServiciosOperadorRepository $gestion1
    ) {

        $inputData = Input::get('formData');
        parse_str($inputData, $formFields);

        $reservacionInfo = $gestion->getReservacionInfoTours($formFields['token_reservacion']);
        $email_cliente = $reservacionInfo[0]->c_email;
        $nombre_cliente = $reservacionInfo[0]->c_name . ' ' . $reservacionInfo[0]->c_lastname;
        $id_reservacion = $reservacionInfo[0]->id;
        $id_agrupamiento = $formFields['id_agrupamiento'];
        $id_calendario = $reservacionInfo[0]->calendar_id;
        $id_usuario_servicio = $formFields['id_usuario_servicio'];

        // **********************************************
        // FIN DE VALIDACION CAMPOS OBLIGATORIOS
        // **********************************************
        if ($formFields['review_calidad'] == 0 || $formFields['review_organizacion'] == 0 || $formFields['review_seguridad'] == 0 || $formFields['review_servicio'] == 0) {
            return response()->json(array(
                'fail' => true,
                'closed' => 0,
                'message' => "Dear User, please complete all fields for review"
            ));
        }

        $mensajeLike = trim($formFields['mensaje_reviewer']);
        $mensajeDontLike = trim($formFields['mensaje_reviewer_dont_like']);

        if (isset($mensajeLike) === true && $mensajeLike === '') {
            return response()->json(array(
                'fail' => true,
                'closed' => 0,
                'message' => "Dear User, please complete all fields for review"
            ));
        }

        if (isset($mensajeDontLike) === true && $mensajeDontLike === '') {
            return response()->json(array(
                'fail' => true,
                'closed' => 0,
                'message' => "Dear User, please complete all fields for review"
            ));
        }
        // **********************************************
        // FIN DE VALIDACION CAMPOS OBLIGATORIOS
        // **********************************************

        //VERIFICO EL ESTADO DEL PAGO DE LA RESERVACION
        //SI ESTA EN ESTADO 'CONFIRMADO' NO SE PUEDE HACER EL REVIEW
        //DE LO CONTRARIO NO SE PUEDE HACER EL REVIEWS
        $pagoTour = $gestion->verificarPagoTour($id_calendario, $id_reservacion);
        if ($pagoTour[0]->estado_pago == 'Confirmado') {
            //VERIFICAR EN LA TABLA DE REVIEWS
            $verifyIp = $gestion->getReviewsIpEmailTours($id_agrupamiento, $email_cliente, $id_usuario_servicio);
            //SI PARA EL EMAIL Y PARA ESE AGRUPAMIENTO TENEMOS ALGUN REGISTRO Y PARA ESE USUARIO SERVICIO
            //Y ESE REGISTRO TIENE estado_review = 1 Y review_verificado = 1
            //NO SE PUEDE HACER EL REVIEW PORQUE EL USUARIO YA HA HECHO EL REVIEW
            //4 Servicio, 5 Organizacion, 6 Calidad, 7 Seguridad
            if ($verifyIp == null) {

                $codigo = str_random(30);

                if ($formFields['review_servicio'] > 0) {
                    $idTipoReview = 16;
                    $calificacion = $formFields['review_servicio'];
                    $save_array_servicio = array();
                    $save_array_servicio['nombre_reviewer'] = $nombre_cliente;
                    $save_array_servicio['email_reviewer'] = $email_cliente;
                    $save_array_servicio['text_review'] = $formFields['mensaje_reviewer'];
                    $save_array_servicio['text_review_dont_like'] = $formFields['mensaje_reviewer_dont_like'];
                    $save_array_servicio['id_usuario_servicio'] = $formFields['id_usuario_servicio'];
                    $save_array_servicio['confirmation_rev_code'] = $codigo;
                    $save_array_servicio['agrupamiento_id'] = $formFields['id_agrupamiento'];
                    $save_array_servicio['ip_reviewer'] = $this->getIp();
                    $save_array_servicio['calificacion'] = $calificacion;
                    $save_array_servicio['id_tipo_review'] = $idTipoReview;
                    $review = $gestion->storeNewReviewsTours($save_array_servicio);
                }
                if ($formFields['review_organizacion'] > 0) {
                    $idTipoReview = 17;
                    $calificacion = $formFields['review_organizacion'];
                    $save_array_organizacion = array();
                    $save_array_organizacion['nombre_reviewer'] = $nombre_cliente;
                    $save_array_organizacion['email_reviewer'] = $email_cliente;
                    $save_array_organizacion['text_review'] = $formFields['mensaje_reviewer'];
                    $save_array_organizacion['text_review_dont_like'] = $formFields['mensaje_reviewer_dont_like'];
                    $save_array_organizacion['id_usuario_servicio'] = $formFields['id_usuario_servicio'];
                    $save_array_organizacion['confirmation_rev_code'] = $codigo;
                    $save_array_organizacion['agrupamiento_id'] = $formFields['id_agrupamiento'];
                    $save_array_organizacion['ip_reviewer'] = $this->getIp();
                    $save_array_organizacion['calificacion'] = $calificacion;
                    $save_array_organizacion['id_tipo_review'] = $idTipoReview;
                    $review = $gestion->storeNewReviewsTours($save_array_organizacion);
                }
                if ($formFields['review_calidad'] > 0) {
                    $idTipoReview = 18;
                    $calificacion = $formFields['review_calidad'];
                    $save_array_calidad = array();
                    $save_array_calidad['nombre_reviewer'] = $nombre_cliente;
                    $save_array_calidad['email_reviewer'] = $email_cliente;
                    $save_array_calidad['text_review'] = $formFields['mensaje_reviewer'];
                    $save_array_calidad['text_review_dont_like'] = $formFields['mensaje_reviewer_dont_like'];
                    $save_array_calidad['id_usuario_servicio'] = $formFields['id_usuario_servicio'];
                    $save_array_calidad['confirmation_rev_code'] = $codigo;
                    $save_array_calidad['agrupamiento_id'] = $formFields['id_agrupamiento'];
                    $save_array_calidad['ip_reviewer'] = $this->getIp();
                    $save_array_calidad['calificacion'] = $calificacion;
                    $save_array_calidad['id_tipo_review'] = $idTipoReview;
                    $review = $gestion->storeNewReviewsTours($save_array_calidad);
                }
                if ($formFields['review_seguridad'] > 0) {
                    $idTipoReview = 19;
                    $calificacion = $formFields['review_seguridad'];
                    $save_array_seguridad = array();
                    $save_array_seguridad['nombre_reviewer'] = $nombre_cliente;
                    $save_array_seguridad['email_reviewer'] = $email_cliente;
                    $save_array_seguridad['text_review'] = $formFields['mensaje_reviewer'];
                    $save_array_seguridad['text_review_dont_like'] = $formFields['mensaje_reviewer_dont_like'];
                    $save_array_seguridad['id_usuario_servicio'] = $formFields['id_usuario_servicio'];
                    $save_array_seguridad['confirmation_rev_code'] = $codigo;
                    $save_array_seguridad['agrupamiento_id'] = $formFields['id_agrupamiento'];
                    $save_array_seguridad['ip_reviewer'] = $this->getIp();
                    $save_array_seguridad['calificacion'] = $calificacion;
                    $save_array_seguridad['id_tipo_review'] = $idTipoReview;
                    $review = $gestion->storeNewReviewsTours($save_array_seguridad);
                }

                $gestion->actualizoEstadoReviewReserva($id_reservacion);
                return response()->json(array(
                    'success' => true,
                    'message' => "Thanks for your Review"
                ));
            } else {
                return response()->json(array(
                    'fail' => true,
                    'closed' => 1,
                    'message' => "You have already left a review before"
                ));
            }
        } else {
            return response()->json(array(
                'fail' => true,
                'closed' => 1,
                'message' => "Dear User You cannot leave a review for this Tour"
            ));
        }
    }

    //GUARDO EL REVIEWS EN LA TABLA reviews_usuario_servicio
    public function verifyReview070819(
        Request $request,
        PublicServiceRepository $gestion,
        ServiciosOperadorRepository $gestion1
    ) {

        $inputData = Input::get('formData');
        parse_str($inputData, $formFields);

        $reservacionInfo = $gestion->getReservacionInfoTours($formFields['token_reservacion']);
        $email_cliente = $reservacionInfo[0]->c_email;
        $nombre_cliente = $reservacionInfo[0]->c_name . ' ' . $reservacionInfo[0]->c_lastname;
        $id_reservacion = $reservacionInfo[0]->id;
        $id_agrupamiento = $formFields['id_agrupamiento'];
        $id_calendario = $reservacionInfo[0]->calendar_id;
        $id_usuario_servicio = $formFields['id_usuario_servicio'];

        $root_array = array();
        //Arreglo de servicios prestados que vienen del formulario
        foreach ($formFields as $key => $value) {
            //verifica si el arreglo de parametros es un catalogo
            if (strpos($key, 'review_servicio') !== false) {
                $root_array[$key] = $value;
            }
            if (strpos($key, 'review_organizacion') !== false) {
                $root_array[$key] = $value;
            }
            if (strpos($key, 'review_calidad') !== false) {
                $root_array[$key] = $value;
            }
            if (strpos($key, 'review_seguridad') !== false) {
                $root_array[$key] = $value;
            }
        }

        //VERIFICO EL ESTADO DEL PAGO DE LA RESERVACION
        //SI ESTA EN ESTADO 'CONFIRMADO' NO SE PUEDE HACER EL REVIEW
        //DE LO CONTRARIO NO SE PUEDE HACER EL REVIEWS
        $pagoTour = $gestion->verificarPagoTour($id_calendario, $id_reservacion);
        if ($pagoTour[0]->estado_pago == 'Confirmado') {
            //VERIFICAR EN LA TABLA DE REVIEWS
            $verifyIp = $gestion->getReviewsIpEmailTours($id_agrupamiento, $email_cliente, $id_usuario_servicio);
            //SI PARA EL EMAIL Y PARA ESE AGRUPAMIENTO TENEMOS ALGUN REGISTRO
            //Y PARA ESE USUARIO SERVICIO
            //Y ESE REGISTRO TIENE estado_review = 1 Y review_verificado = 1
            //NO SE PUEDE HACER EL REVIEW PORQUE EL USUARIO YA HA HECHO EL REVIEW
            //4 Servicio, 5 Organizacion, 6 Calidad, 7 Seguridad
            if ($verifyIp == null) {
                $codigo = str_random(30);
                foreach ($root_array as $key1 => $value1) {
                    if ($key1 == 'review_servicio') {
                        $idTipoReview = 16;
                    }
                    if ($key1 == 'review_organizacion') {
                        $idTipoReview = 17;
                    }
                    if ($key1 == 'review_calidad') {
                        $idTipoReview = 18;
                    }
                    if ($key1 == 'review_seguridad') {
                        $idTipoReview = 19;
                    }

                    $save_array = array();
                    $save_array['calificacion'] = $value1;
                    $save_array['nombre_reviewer'] = $nombre_cliente;
                    $save_array['email_reviewer'] = $email_cliente;
                    $save_array['text_review'] = $formFields['mensaje_reviewer'];
                    $save_array['id_usuario_servicio'] = $formFields['id_usuario_servicio'];
                    $save_array['id_tipo_review'] = $idTipoReview;
                    $save_array['confirmation_rev_code'] = $codigo;
                    $save_array['agrupamiento_id'] = $formFields['id_agrupamiento'];
                    $save_array['ip_reviewer'] = $this->getIp();
                    $review = $gestion->storeNewReviewsTours($save_array);
                }
                $actualizoEstadoReviewReserva = $gestion->actualizoEstadoReviewReserva($id_reservacion);
                return response()->json(array(
                    'success' => true,
                    'message' => "Gracias por tu Review"
                ));
            } else {
                return response()->json(array(
                    'fail' => true,
                    'message' => "Usted ya ha dejado un review anteriormente"
                ));
            }
        } else {
            return response()->json(array(
                'fail' => true,
                'message' => "Estimado Usuario Usted no puede dejar un review para este Tour"
            ));
        }
    }

    public function getViewQRReader()
    {
        return view('public_page.front.QRReader');
    }

    public function latestServices(Request $request, ServiciosOperadorRepository $gestion_operator)
    {
        if (!\Cache::has('latestServicesList')) {
            $latestServicesList = $gestion_operator->getLatestServices();
            //return('here');
            \Cache::put('latestServicesList', $latestServicesList, config('global.cacheCleanTime'));
        } else {
            $latestServicesList = \Cache::get('latestServicesList');
        }
        //return response()->json(['data' => $latestServicesList]);
        $view = View::make('public_page.partials.latestServicesView', array('latestServicesList' => $latestServicesList));
        if ($request->ajax()) {
            $sections = $view->rendersections();
            return Response::json($sections);
        } else {
            return $view;
        }
    }
}
