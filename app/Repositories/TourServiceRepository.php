<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Review_Usuario_Servicio;

class TourServiceRepository extends BaseRepository {
    public function __construct() {
        $this->review_usuario = new Review_Usuario_Servicio();
    }

    public function getReviewsOfTour($id) {
		if($id!="")
		{
        $reviewList = $this->review_usuario
                                        ->where('agrupamiento_id',$id)
                                        ->select(DB::raw('SUM(calificacion) as total'),'reviews_usuario_servicio.*')
                                         ->whereIn('id_tipo_review', [16,17,18,19])
                                         ->orderBy('created_at', 'DESC')
                                        ->groupby('email_reviewer')
                                        ->get();        
       return $reviewList;
	}
	else
		return null;
    }
}
