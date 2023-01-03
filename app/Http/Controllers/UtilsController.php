<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Repositories\ContactRepository;

class UtilsController extends Controller {

	/**
	 * Create a new ContactController instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('admin', ['except' => ['create', 'store']]);
		$this->middleware('ajax', ['only' => 'update']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param  ContactRepository $contact_gestion
	 * @return Response
	 */
	public function index(
		ContactRepository $contact_gestion)
	{
		$messages = $contact_gestion->index();

		return view('back.messages.index', compact('messages'));
	}

	

   //Funcion para calculo de las distancias
    public function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2){

        $degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
        switch($unit) {
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


//Checquea la URL para retornar el correcto nombrado acorde a la bdd
   
    public function checkUrlDetalle($atraccion,$nombreEnviado,$language) {
	
		if($language=="en")
			{	
		
				$nombreCanonicalEngF="";
				if($atraccion->url_eng==""){
				 $nombreCanonicalEngF = str_replace(' ', '-', $atraccion->nombre_servicio_eng);}
			else{
						$nombreCanonicalEngF = str_replace(' ', '-', $atraccion->url_eng);}
	
						$nombreCanonicalEngF = str_replace('/', '-', $nombreCanonicalEngF);
						$nombreCanonicalEngF = str_replace('?', '-', $nombreCanonicalEngF);
						$nombreCanonicalEngF = str_replace("'", '-', $nombreCanonicalEngF);
						$nombreCanonicalEngF=$this->sanear_string($nombreCanonicalEngF);
		
		
		if($nombreCanonicalEngF==$nombreEnviado)
					return true;
				else
					{
						$nombreCanonicalEng ="";
						if($atraccion->url_eng==""){
						$nombreCanonicalEng = str_replace(' ', '-', $atraccion->nombre_servicio_eng);}
						else{
						$nombreCanonicalEng = str_replace(' ', '-', $atraccion->url_eng);}
	
						
						$nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
						$nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
						$nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
						$nombreCanonicalEng=$this->sanear_string($nombreCanonicalEng);
					//return redirect('/en/'.$nombreCanonicalEng.'/'.$atraccion->id);
					
					//dd($nombreCanonicalEng);
				return ('/en/'.$nombreCanonicalEng.'/'.$atraccion->id) ;
					}
			}
			
			else
			{
				$nombreCanonicalEngF="";
				if($atraccion->url_esp==""){
				$nombreCanonicalEngF = str_replace(' ', '-', $atraccion->nombre_servicio);}
				else{
				$nombreCanonicalEngF = str_replace(' ', '-', $atraccion->url_esp);}
	
			
						$nombreCanonicalEngF = str_replace('/', '-', $nombreCanonicalEngF);
						$nombreCanonicalEngF = str_replace('?', '-', $nombreCanonicalEngF);
						$nombreCanonicalEngF = str_replace("'", '-', $nombreCanonicalEngF);
						$nombreCanonicalEngF=$this->sanear_string($nombreCanonicalEngF);
		
		if($nombreCanonicalEngF==$nombreEnviado)
					return true;
				else
					{
						$nombreCanonicalEng ="";
						if($atraccion->url_esp==""){
				$nombreCanonicalEng = str_replace(' ', '-', $atraccion->nombre_servicio);}
				else{
				$nombreCanonicalEng = str_replace(' ', '-', $atraccion->url_esp);}
	
	
					
						$nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
						$nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
						$nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
						$nombreCanonicalEng=$this->sanear_string($nombreCanonicalEng);
					//return redirect('/en/'.$nombreCanonicalEng.'/'.$atraccion->id);
					
					//dd($nombreCanonicalEng);
				return ('/es/'.$nombreCanonicalEng.'/'.$atraccion->id) ;
					}
				
				
			}
		
		
		}


		function sanear_string($string)
{
 
    $string = trim($string);
 
    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
 
    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );
 
    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
 
    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );
 
    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
 
    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C',),
        $string
    );
 
    //Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(array('/', '¨', 'º', ' ', '~','#', '@', '|', '!', '"','·', '$', '%', '&', '/','(', ')', '?', '¡','¿', '[', '^', ']','+', '}', '{', '¨', '´','>', '< ', ';', ',', ':','.', ')','-'),'-',$string
    );
 
    return $string;
}

}
