<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Review_Usuario_Servicio;
use App\Models\Image;
use App\Models\Booking_abcalendar_agrupamiento;
use App\Models\Booking\DeliveryBooking;
use App\Models\Satisfechos_Usuario_Servicio;
use App\Models\Usuario_Servicio;

class BookingRepository extends BaseRepository
{

    protected $review_usuario;
    protected $image;
    protected $satisfechos;
    protected $usuario_servicio;
    protected $review;

    public function __construct()
    {
        $this->review_usuario = new Review_Usuario_Servicio();
        $this->image = new Image();
        $this->satisfechos = new Satisfechos_Usuario_Servicio();
        $this->usuario_servicio = new Usuario_Servicio();
        $this->review = new Review_Usuario_Servicio();
        $this->Booking_abcalendar_agrupamiento = new Booking_abcalendar_agrupamiento();
    }

    public function getReviewsOfTourOLD($id)
    {

        if ($id != "") {
            $reviewList = $this->review_usuario
                ->where('agrupamiento_id', $id)
                ->select(DB::raw('SUM(calificacion) as total'), 'reviews_usuario_servicio.*')
                ->whereIn('id_tipo_review', [16, 17, 18, 19])
                ->orderBy('created_at', 'DESC')
                ->groupby('email_reviewer')
                ->take(5)

                ->get();
            return $reviewList;
        } else
            return null;
    }

    public function getReviewsOfTour($id, $limite)
    {
        if ($id != "") {
            $reviewList = $this->review_usuario
                ->where('agrupamiento_id', $id)
                ->select(DB::raw('SUM(calificacion) as total'), 'reviews_usuario_servicio.*')
                ->whereIn('id_tipo_review', [16, 17, 18, 19])
                ->orderBy('created_at', 'DESC')
                ->groupby('email_reviewer')
                ->take($limite)
                ->get();
            return $reviewList;
        } else {
            return null;
        }
    }

    //Entrega el arreglo de Imagenes por AGRUPACIONES
    public function getImageAgrupamiento($id_agrupamiento)
    {
        $promociones = new $this->image;
        return       $promociones::where('id_auxiliar', $id_agrupamiento)
            ->where('id_catalogo_fotografia', '=', 11)
            ->where('estado_fotografia', '=', 1)->get();
    }

    //Entrega el arreglo de Imagenes por quien opera el agrupamiento
    public function getImageServicioAgrupamiento($id_usuario_servicio)
    {
        $imagen = new $this->image;
        return       $imagen::where('id_auxiliar', $id_usuario_servicio)
            ->where('id_catalogo_fotografia', '=', 1)
            ->where('estado_fotografia', '=', 1)->get();
    }

    public function getGroupInfoRegion($id_agrupamiento){

        $groupProv = $this->Booking_abcalendar_agrupamiento
            ->select(['agrupamiento_origin_destino.id_provincia'])
            ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
            ->where('booking_abcalendar_agrupamiento.estado', 1)
            ->where('booking_abcalendar_agrupamiento.id', $id_agrupamiento)
            ->first();

        $ubicGeo = DB::table('ubicacion_geografica')
            ->where('ubicacion_geografica.id', '=', $groupProv->id_provincia)
            ->select('ubicacion_geografica.*')->first();


        return $ubicGeo;
    }


    public function getGroupInfo($id_agrupamiento, $canton = null, $prov = null, $region = null)
    {

        if ($canton == null && $prov == null && $region == null) {
            $groupInfo = $this->Booking_abcalendar_agrupamiento
                ->where('estado', 1)
                ->where('id', $id_agrupamiento)
                ->orderBy('orden', 'desc')

                ->get();
            return $groupInfo;
        }
        $groupCanton = [];
        $groupProv = [];
        $groupRegion = [];

        if ($canton != null) {
            $groupCanton = $this->Booking_abcalendar_agrupamiento
                ->select(['booking_abcalendar_agrupamiento.id'])
                ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
                ->where(function ($query) use ($canton) {
                    $query->where('id_canton', $canton);
                })
                ->where('booking_abcalendar_agrupamiento.estado', 1)
                ->where('booking_abcalendar_agrupamiento.id', $id_agrupamiento)
                ->get()->toArray();
            $groupCanton = ($groupCanton) ? array_column($groupCanton, 'id') : [];
        }

        if ($prov != null) {
            $groupProv = $this->Booking_abcalendar_agrupamiento
                ->select(['booking_abcalendar_agrupamiento.id'])
                ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
                ->where(function ($query) use ($canton, $prov, $region) {
                    $query->where('id_provincia', $prov);
                })
                ->where('booking_abcalendar_agrupamiento.estado', 1)
                ->where('booking_abcalendar_agrupamiento.id', $id_agrupamiento)
                ->get()->toArray();
            $groupProv = ($groupProv) ? array_column($groupProv, 'id') : [];
        }

        if ($region != null) {
            $groupRegion = $this->Booking_abcalendar_agrupamiento
                ->select(['booking_abcalendar_agrupamiento.id'])
                ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
                ->where(function ($query) use ($canton, $prov, $region) {
                    $query->where('id_region', $region);
                })
                ->where('booking_abcalendar_agrupamiento.estado', 1)
                ->where('booking_abcalendar_agrupamiento.id', $id_agrupamiento)
                ->get()->toArray();

            $groupRegion = ($groupRegion) ? array_column($groupRegion, 'id') : [];
        }

        $uniqueArrayServ = array_merge($groupCanton, $groupProv, $groupRegion);

        $groupInfo = $this->Booking_abcalendar_agrupamiento
            ->whereIn('id', $uniqueArrayServ)
            ->get();

        if (count($groupCanton) == 0 && count($groupProv) == 0 && count($groupRegion) == 0) {
            $groupInfo = $this->Booking_abcalendar_agrupamiento
                ->where('estado', 1)
                ->where('id', $id_agrupamiento)
                ->get();
            return $groupInfo;
        }

        return $groupInfo;
    }

    public function getBlockDays($id_agrupamiento)
    {

        $diasBloqueados = DB::table('booking_abcalendar_maintenance')
            ->select(DB::raw('after_day'))
            ->where('id_agrupamiento', '=', $id_agrupamiento)
            ->get();

        return $diasBloqueados;
    }

    public function getInfoAgrupamiento($id)
    {

        $agrupamiento = DB::table('booking_abcalendar_agrupamiento')->where('id', '=', $id)->get();
        return $agrupamiento;
    }

    public function getCalendariosAgrupamiento($id, $id_usuario_servicio)
    {

        $calendarInfo = DB::table('booking_abcalendar_calendars')
            ->join('booking_abcalendar_multi_lang', 'booking_abcalendar_calendars.id', '=', 'booking_abcalendar_multi_lang.foreign_id')
            ->select(DB::raw('booking_abcalendar_calendars.* , booking_abcalendar_multi_lang.content'))
            ->where('booking_abcalendar_multi_lang.model', '=', 'pjCalendar')
            ->where('booking_abcalendar_multi_lang.field', '=', 'name')
            ->where('booking_abcalendar_calendars.id_usuario_servicio', '=', $id_usuario_servicio)
            ->where('booking_abcalendar_calendars.id_agrupamiento', '=', $id)
            ->get();


        return $calendarInfo;
    }

    public function getNombreUsuarioServicio($id)
    {

        //$nombreUsuarioServ = DB::table('usuario_servicios')->where('id', '=', $id)->select('nombre_servicio')->get();
        $nombreUsuarioServ = DB::table('usuario_servicios')->where('id', '=', $id)->get();

        return $nombreUsuarioServ;
    }



    public function getUserServiceCalification2($agrupamiento_id)
    {

        $results = DB::select(DB::raw("SELECT COALESCE(ROUND(SUM(tot)/COUNT(tot)),0) as calificacion
                                        FROM (
                                            SELECT nombre_reviewer,ROUND(SUM(calificacion) / COUNT(agrupamiento_id)) as tot
                                            FROM reviews_usuario_servicio
                                            WHERE agrupamiento_id = $agrupamiento_id
                                            AND estado_review = 1

                                            GROUP BY email_reviewer
                                            ORDER BY created_at ASC
                                            )A "));

        return $results;
    }


    public function getUserServiceCountReviews($agrupamiento_id)
    {

        $results = DB::select(DB::raw("SELECT COALESCE(ROUND((COUNT(tot)),1),0) as numerosReviews
                                        FROM (
                                            SELECT nombre_reviewer,SUM(calificacion) / COUNT(agrupamiento_id) as tot
                                            FROM reviews_usuario_servicio
                                            WHERE agrupamiento_id = $agrupamiento_id
                                            AND estado_review = 1
                                            GROUP BY email_reviewer
                                            ORDER BY created_at ASC
                                            )A "));

        return $results;
    }

    public function getUserServiceCalification($agrupamiento_id)
    {

        $results = DB::select(DB::raw("SELECT COALESCE(ROUND((SUM(tot)/COUNT(tot)),1),0) as calificacion
                                    FROM (
                                        SELECT nombre_reviewer,SUM(calificacion) / COUNT(agrupamiento_id) as tot
                                        FROM reviews_usuario_servicio
                                        WHERE agrupamiento_id = $agrupamiento_id
                                        AND estado_review = 1
                                        GROUP BY email_reviewer
                                        ORDER BY created_at ASC
                                        )A "));

        return $results;
    }

    public function getAllReviewsGroup($id)
    {
        $groupInfoCalendars = DB::table('reviews_usuario_servicio')
            ->where('agrupamiento_id', $id)
            ->select('id', 'calificacion', 'id_tipo_review')
            ->get();
        return $groupInfoCalendars;
    }

    public function getAllGroupCalendars($id)
    {
        $groupInfoCalendars = DB::table('booking_abcalendar_calendars')
            ->select('id')
            ->where('id_agrupamiento', $id)
            ->where('activo', 1)
            ->get();
        return $groupInfoCalendars;
    }

    public function getCalendarsPrice($id)
    {
        $calendarsPrice = DB::table('booking_abcalendar_plugin_price')
            ->where('foreign_id', $id)
            ->where('adults', 0)
            ->where('children', 0)
            ->where('season', 'Default price')
            ->get();
        return $calendarsPrice;
    }

    public function getPhotoGroup($id_auxiliar)
    {
        $groupPhoto = DB::table('images')
            ->select('filename')
            ->where('id_auxiliar', $id_auxiliar)
            ->where('id_catalogo_fotografia', 11)
            ->where('estado_fotografia', 1)
            ->take(1)->get();
        return $groupPhoto;
    }

    //Entrega el detalle de la provincia
    public function getAtraccionDetails($id_atraccion)
    {



        $atraccion = DB::table('usuario_servicios')
            ->where('id', '=', $id_atraccion)
            ->select('usuario_servicios.*')
            ->first();

        if (isset($atraccion)) {
            $atraccion->reviewsTotal = 0;
            $atraccion->reviewsTotal = DB::table('reviews_usuario_servicio')
                ->where('id_usuario_servicio', '=', $id_atraccion)
                ->where('review_verificado', '=', 1)
                ->where('estado_review', '=', 1)
                ->groupby('email_reviewer')
                ->get();
            $atraccion->reviewsTotal = array_pluck($atraccion->reviewsTotal, 'email_reviewer');
            $atraccion->reviewsTotal = count(array_unique($atraccion->reviewsTotal));
            return $atraccion;
        } else {
            return null;
        }
    }

    public function getAllGroup($canton = null, $prov = null, $region = null)
    {

        if ($canton == null && $prov == null && $region == null) {
            $groupInfo = $this->Booking_abcalendar_agrupamiento
                ->where('estado', 1)
                ->orderBy('orden', 'desc')

                ->get();
            return $groupInfo;
        }
        $groupCanton = [];
        $groupProv = [];
        $groupRegion = [];

        if ($canton != null) {
            $groupCanton = $this->Booking_abcalendar_agrupamiento
                ->select(['booking_abcalendar_agrupamiento.id'])
                ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
                ->where(function ($query) use ($canton) {
                    $query->where('id_canton', $canton);
                })
                ->where('booking_abcalendar_agrupamiento.estado', 1)
                ->get()->toArray();
            $groupCanton = ($groupCanton) ? array_column($groupCanton, 'id') : [];
        }

        if ($prov != null) {
            $groupProv = $this->Booking_abcalendar_agrupamiento
                ->select(['booking_abcalendar_agrupamiento.id'])
                ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
                ->where(function ($query) use ($canton, $prov, $region) {
                    $query->where('id_provincia', $prov);
                })
                ->where('booking_abcalendar_agrupamiento.estado', 1)
                ->get()->toArray();
            $groupProv = ($groupProv) ? array_column($groupProv, 'id') : [];
        }

        if ($region != null) {
            $groupRegion = $this->Booking_abcalendar_agrupamiento
                ->select(['booking_abcalendar_agrupamiento.id'])
                ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
                ->where(function ($query) use ($canton, $prov, $region) {
                    $query->where('id_region', $region);
                })
                ->where('booking_abcalendar_agrupamiento.estado', 1)
                ->get()->toArray();

            $groupRegion = ($groupRegion) ? array_column($groupRegion, 'id') : [];
        }
        $uniqueArrayServ = array_merge($groupCanton, $groupProv, $groupRegion);
        $groupInfo = $this->Booking_abcalendar_agrupamiento
            ->whereIn('id', $uniqueArrayServ)
            ->get();
        if (count($groupCanton) == 0 && count($groupProv) == 0 && count($groupRegion) == 0) {
            $groupInfo = $this->Booking_abcalendar_agrupamiento
                ->where('estado', 1)
                ->get();
            return $groupInfo;
        }
        return $groupInfo;
    }



    /* **************************************************************************** */
    /*                        INICIO METODOS NEW HOME                               */
    /* **************************************************************************** */
    // BUSCA LOS AGRUPAMIENTOS CONFIURADOS EN LA TABLA ORIGEN_DESTINO
    public function findOriginGroup($id_canton)
    {

        $agrupamientos = [];
        $results = DB::select(DB::raw("SELECT id_agrupamiento
                                        FROM agrupamiento_origin_destino
                                        WHERE id_canton = $id_canton"));

        if (!empty($results)) {
            foreach ($results as $result) {
                $agrupamientos[] = $result->id_agrupamiento;
            }
        }

        return $agrupamientos;
    }

    public function getGroupInfoDetails($id_agrupamiento, $canton = null, $prov = null, $region = null)
    {

        if ($canton == null && $prov == null && $region == null) {
            $groupInfo = $this->Booking_abcalendar_agrupamiento
                ->where('estado', 1)
                ->where('id', $id_agrupamiento)
                ->orderBy('orden', 'desc')

                ->get();
            return $groupInfo;
        }
        $groupCanton = [];
        $groupProv = [];
        $groupRegion = [];

        if ($canton != null) {
            $groupCanton = $this->Booking_abcalendar_agrupamiento
                ->select(['booking_abcalendar_agrupamiento.id'])
                ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
                ->where(function ($query) use ($canton) {
                    $query->where('id_canton', $canton);
                })
                ->where('booking_abcalendar_agrupamiento.estado', 1)
                ->where('booking_abcalendar_agrupamiento.id', $id_agrupamiento)
                ->get()->toArray();
            $groupCanton = ($groupCanton) ? array_column($groupCanton, 'id') : [];
        }

        if ($prov != null) {
            $groupProv = $this->Booking_abcalendar_agrupamiento
                ->select(['booking_abcalendar_agrupamiento.id'])
                ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
                ->where(function ($query) use ($canton, $prov, $region) {
                    $query->where('id_provincia', $prov);
                })
                ->where('booking_abcalendar_agrupamiento.estado', 1)
                ->where('booking_abcalendar_agrupamiento.id', $id_agrupamiento)
                ->get()->toArray();
            $groupProv = ($groupProv) ? array_column($groupProv, 'id') : [];
        }

        if ($region != null) {
            $groupRegion = $this->Booking_abcalendar_agrupamiento
                ->select(['booking_abcalendar_agrupamiento.id'])
                ->join('agrupamiento_origin_destino', 'agrupamiento_origin_destino.id_agrupamiento', '=', 'booking_abcalendar_agrupamiento.id')
                ->where(function ($query) use ($canton, $prov, $region) {
                    $query->where('id_region', $region);
                })
                ->where('booking_abcalendar_agrupamiento.estado', 1)
                ->where('booking_abcalendar_agrupamiento.id', $id_agrupamiento)
                ->get()->toArray();

            $groupRegion = ($groupRegion) ? array_column($groupRegion, 'id') : [];
        }

        $uniqueArrayServ = array_merge($groupCanton, $groupProv, $groupRegion);

        $groupInfo = $this->Booking_abcalendar_agrupamiento
            ->whereIn('id', $uniqueArrayServ)
            ->get();

        if (count($groupCanton) == 0 && count($groupProv) == 0 && count($groupRegion) == 0) {
            $groupInfo = $this->Booking_abcalendar_agrupamiento
                ->where('estado', 1)
                ->where('id', $id_agrupamiento)
                ->get();
            return $groupInfo;
        }

        return $groupInfo;
    }

    /* **************************************************************************** */
    /*                        FIN METODOS NEW HOME                                  */
    /* **************************************************************************** */
}
