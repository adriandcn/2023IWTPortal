<?php

namespace App\Http\Controllers;

use \Crypt;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UtilsController;
use App\Http\Requests;
use App\Jobs\ContactosMail;
use App\Jobs\ReservacionMail;
use App\Jobs\ReservacionTDCMail;
use App\Jobs\VerifyReview;
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
use Illuminate\Support\Facades\View;
use Input;
use Instagram;
use Jenssegers\Agent\Agent;
use Mail;
use PDF;
use Validator;


class DetailsPublicController extends Controller {

    public function __construct(){


    }



	//Obtiene las descripcion de la atraccion elegida
    public function getAtraccionDescripcion($nombre_atraccion, $id_atraccion, PublicServiceRepository $gestion, UtilsController $util) {
        /*INFORMACION DE LOS AGRUPAMIENTOS*/

        Session::put('locale', 'es');
        $agent = new Agent();
        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }
        Session::put('device', $desk);
        if (!\Cache::has('atraccion_'.$id_atraccion)) {
            $atraccion = $gestion->getAtraccionDetails($id_atraccion);

            \Cache::put('atraccion_'.$id_atraccion, $atraccion, config('global.cacheCleanTime'));

        } else {
            $atraccion = \Cache::get('atraccion_'.$id_atraccion);
        }

        if(!$atraccion)
        {
            abort(404);
        }

        if( $atraccion->estado_servicio_usuario==0)
        {
            return redirect("/",301);
        }


		$checkAtraccion = $util->checkUrlDetalle($atraccion,$nombre_atraccion,"es");

		if($checkAtraccion!="" &&$checkAtraccion!="true")
		{
				return redirect($checkAtraccion,301);
        }

        return $this->DetalleFinal($atraccion,$gestion, $id_atraccion, $desk,$util);

    }



	//Obtiene las descripcion de la atraccion elegida
    public function getAtraccionDescripcionEng($nombre_atraccion, $id_atraccion, PublicServiceRepository $gestion, UtilsController $util) {
        /*INFORMACION DE LOS AGRUPAMIENTOS*/

        Session::put('locale', 'en');
        $agent = new Agent();
        $desk = $device = $agent->isMobile();
        if ($desk == 1)
            $desk = "mobile";
        else {
            $desk = "desk";
        }

        Session::put('device', $desk);

        if (!\Cache::has('atraccion_'.$id_atraccion)) {
            $atraccion = $gestion->getAtraccionDetails($id_atraccion);

            \Cache::put('atraccion_'.$id_atraccion, $atraccion, config('global.cacheCleanTime'));

        } else {
            $atraccion = \Cache::get('atraccion_'.$id_atraccion);
        }



        if(!$atraccion)
        {
            abort(404);
        }

        if( $atraccion->estado_servicio_usuario==0)
        {
            return redirect("/",301);
        }


		$checkAtraccion = $util->checkUrlDetalle($atraccion,$nombre_atraccion,"en");

		if($checkAtraccion!="" &&$checkAtraccion!="true")
		{
				return redirect($checkAtraccion,301);
        }


        return $this->DetalleFinal($atraccion,$gestion, $id_atraccion, $desk,$util);

    }







    public function DetalleFinal($atraccion, $gestion, $id_atraccion, $desk,$util){




                $idCanton = null;
                $idProv = null;
                $Region = null;
                $idRegion = null;
                $stories = null;
                $servicios = null;
                $eventos=null;
                $ImgItiner = null;
                $explore = null;
                $visitados = null;
                $provincia = null;
                $canton = null;
                $parroquia = null;
                $trips=null;
                $operadores=null;
                //$errores = $gestion->getErrores();
                $errores = null;
                $agrupamientos=null;
                $tipoReviews=null;




            if($atraccion){
                $idCanton = $atraccion->id_canton;
                $idProv = $atraccion->id_provincia;
                $Region = DB::table('ubicacion_geografica')->select(['id_region'])->where('id',$atraccion->id_provincia)->first();
                $idRegion = ($Region)?$Region->id_region:null;
            }



            if($desk=='desk')
            {
                if (!\Cache::has('agrupamientos'.$idCanton)) {
                    $agrupamientos = $gestion->getAllGroup($idCanton,$idProv,$idRegion);
                    \Cache::put('agrupamientos'.$idCanton, $agrupamientos, config('global.cacheCleanTime'));

                } else {
                    $agrupamientos = \Cache::get('agrupamientos'.$idCanton);
                }


                //Get photo agrupamientos
                for($a = 0; $a < count($agrupamientos);$a++){
                    $agrupamientos[$a]->foto = $gestion->getPhotoGroup($agrupamientos[$a]->id);
                }

             }



            //Se almacena ela visita
            if($atraccion){
                $gestion->saveVisita(null, $id_atraccion);
                if($desk=='desk')
                {

                    if (!\Cache::has('reviews'.$id_atraccion)) {
                        $tipoReviews = $gestion->getTiporeviews($id_atraccion);
                        \Cache::put('reviews'.$id_atraccion, $tipoReviews, config('global.cacheCleanTime'));

                    } else {
                        $tipoReviews = \Cache::get('reviews'.$id_atraccion);
                    }
                }

            if (!\Cache::has('imagenes'.$id_atraccion)) {
                $imagenes = $gestion->getAtraccionImages($id_atraccion);

                \Cache::put('imagenes'.$id_atraccion, $imagenes, config('global.cacheCleanTime'));

            } else {
                $agrupamientos = \Cache::get('imagenes'.$id_atraccion);

            }


            if($imagenes==null)
            {
                $imagenes = $gestion->getAtraccionImagesnNULL($id_atraccion);
            }

            $itinerarios = null;
            $related  = null;
            $operadores = null;

            if($desk=='desk')
            {
                $itinerarios = $gestion->getItinerAtraccion($id_atraccion);
                $related = $gestion->getHijosAtraccion($id_atraccion);
                $operadores = $gestion->getOperadores($atraccion->id_provincia);

                if(count($related) > 0){
                    //CALCULO DE LA DISTANCIA POR CADA $RELATED
                    for($i =0; $i < count($related); $i++){
                        $distancia = $util->distanceCalculation($atraccion->latitud_servicio,$atraccion->longitud_servicio,$related[$i]->latitud_servicio,$related[$i]->longitud_servicio);
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



                    $stories = $gestion->getStories($id_atraccion);
                    $servicios = $gestion->getServicios($atraccion->id_canton);

                }

            //$trips = $gestion->getTrips($atraccion->id_provincia);
            $trips=null;


            if (isset($atraccion->id_provincia))
                $explore = $gestion->getExplorer($atraccion->id);


            // ultimos editados solo para desktop.
                if($desk=='desk')
                    $updatedServices = $gestion->getLatestServicesUpdated($atraccion->id_provincia,$atraccion->id_canton,2);
                else
                    $updatedServices = null;



                   //Se pasan los parametros por idioma al blade
                    if(session('locale') == 'en' && $atraccion->nombre_servicio_eng!=''){
                        $tituloIdioma=$atraccion->nombre_servicio_eng;
                        $detalleIdioma=$atraccion->detalle_servicio_eng;
                        $keywordsIdioma=$atraccion->key_words_eng;
                        $h1=$atraccion->h1_eng;
                        }
                     else{
                        $tituloIdioma=$atraccion->nombre_servicio;
                        $detalleIdioma=$atraccion->detalle_servicio;
                        $keywordsIdioma=$atraccion->key_words;
                        $h1=$atraccion->h1_esp;
                    }

                    $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                    $nombreCanonical=$util->sanear_string($nombreCanonical);

                     $nombreCanonicalEsp=htmlspecialchars(html_entity_decode(nl2br(e($atraccion->nombre_servicio))));
                     $nombreCanonicalEsp=$util->sanear_string($nombreCanonicalEsp);

                    $nombreCanonicalEng=htmlspecialchars(html_entity_decode(nl2br(e($atraccion->nombre_servicio_eng))));
                    $nombreCanonicalEng=$util->sanear_string($nombreCanonicalEng);

                    if($nombreCanonicalEng=="")
                        $nombreCanonicalEng=$nombreCanonicalEsp;




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
                            ->with('eventos', $eventos)

                            ->with('tituloIdioma', $tituloIdioma)
                            ->with('detalleIdioma', $detalleIdioma)
                            ->with('keywordsIdioma', $keywordsIdioma)
                            ->with('h1', $h1)
                            ->with('nombreCanonicalEng', $nombreCanonicalEng)
                            ->with('nombreCanonicalEsp', $nombreCanonicalEsp)

                            ->with('stories', $stories);

            }
            else
            {
                abort(404);

            }

}


}





