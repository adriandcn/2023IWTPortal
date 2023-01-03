<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\SubscriptionType;
use App\Models\SubscriptionTypePivot;
use App\Models\User;
use App\Models\Usuario_Servicio;
use App\Models\Usuario_Operador;
use Validator;
use DB,Mail;
use Illuminate\Contracts\Auth\Guard;

class subscriptionsController extends Controller
{

    public $rules = [
        'email' => 'unique:users'
    ];
    public $messages = [
        'email.unique' => 'Email del subscriptor ya a sido registrado'
    ];

    public function __construct(){

        $this->subscription = new Subscription();
        $this->SubscriptionType = new SubscriptionType();
        $this->SubscriptionTypePivot = new SubscriptionTypePivot();
        $this->userModel = new User();
        $this->usuarioServicios = new Usuario_Servicio();
        $this->usuarioServiciosOperador = new Usuario_Operador();
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
        $typesList = $this->SubscriptionType->get();
        $view = view('responsive.subscriptionsAdmin', compact('typesList'));
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
    public function store(Request $request)
    {
        $inputData = $request->formData;
        parse_str($inputData, $formFields);
        // return $formFields;
        $validator = Validator::make($formFields, Subscription::$rules,Subscription::$messages);
        $validatorUser = Validator::make($formFields, $this->rules,$this->messages);
        if ($validator->fails()) {
            return response()->json(array(
                        'fail' => true,
                        'message' => $validator->messages()->first(),
                        'errors' => $validator->getMessageBag()->toArray()
            ));
        }

        if ($validatorUser->fails()) {
            return response()->json(array(
                        'fail' => true,
                        'message' => $validatorUser->messages()->first(),
                        'errors' => $validatorUser->getMessageBag()->toArray()
            ));
        }
            if (!array_key_exists('subscription_type', $formFields)) {
                 return response()->json(array(
                            'fail' => true,
                            'message' => '',
                            'errors' => ['selecione el tipo de subscrpción']
                ));
            }
            $dbTransaction = DB::transaction(function() use($formFields){
                // Subscripcion
                $itemSubscription = new $this->subscription;
                $itemSubscription->atraction_name = $formFields['atraction_name'];
                $itemSubscription->email = $formFields['email'];
                $itemSubscription->phone = $formFields['phone'];
                $itemSubscription->movil = $formFields['movil'];
                $itemSubscription->payment = $formFields['payment'];
                $itemSubscription->payment_marketing = $formFields['payment_marketing'];
                $itemSubscription->date_ini = $formFields['date_ini'];
                $itemSubscription->date_end  = $formFields['date_end'];
                $itemSubscription->subscription_time = $formFields['subscription_time'];
                $itemSubscription->status = 1;
                $savedItem = $itemSubscription->save();
                $lastId = $itemSubscription->id_subscription;
                // User
                $itemUSer = new $this->userModel;
                $itemUSer->username = $formFields['email'];
                $itemUSer->email = $formFields['email'];
                $itemUSer->password = bcrypt($formFields['movil']);
                $itemUSer->role_id = 3;
                $itemUSer->seen = 0;
                $itemUSer->valid = 1;
                $itemUSer->confirmed = 1;
                $itemUSer->confirmation_code = null;
                $itemUSer->save();
                // Subscription type pivot
                foreach ($formFields['subscription_type'] as $type) {
                    $itemSubscriptionTypePivot = new $this->SubscriptionTypePivot;
                    $itemSubscriptionTypePivot->id_subscription = $lastId;
                    $itemSubscriptionTypePivot->id_type = intval($type);
                    $savedItemPivot = $itemSubscriptionTypePivot->save();
                }
                $dataEmail = [
                    'email' => $formFields['email'],
                    'user' => $formFields['email'],
                    'pass' => $formFields['movil']
                ];
                $this->sendEmailSubscription($dataEmail);
                return true;
            });
            
            return response()->json(array(
                        'success' => $dbTransaction,
                        'message' => 'Suscripción guardada correctamente'
            ));
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

    public function sendEmailSubscription($dataEmail) {
        $correo_enviar = $dataEmail['email'];
        Mail::send('emails.subscriptionEmail', $dataEmail, function($message) use ($correo_enviar)
        {
            $message->from(env('MAIL_USERNAME'),'iwanatrip');
            $message->to($correo_enviar)->subject('Gracias por suscribirse');
        });
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function moveSuscriptionIndex(Request $request)
    {
        $view = view('responsive.suscriptionToUser');
        return $view;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function moveSuscriptionToUserIndex(Request $request,Guard $auth)
    {
        if(!$request->has('id_atraction')){
            return redirect('/suscription-to-user')->with('error', 'key not found id_atraction');
        }
        $attracion = $this->usuarioServicios->find($request->id_atraction);
        $servOperador = $this->usuarioServiciosOperador->where('id_usuario',$auth->user()->id)->first();
        if(!$attracion){
            return redirect('/suscription-to-user')->with('error', 'Atración no encontrada');
        }
        if(!$servOperador){
            return redirect('/suscription-to-user')->with('error', 'Operador no encontrado');
        }
        $attracion->id_usuario_operador = $servOperador->id_usuario_op;
        $saved = $attracion->save();
        return redirect('/suscription-to-user')->with('sucess', $saved);
    }
}
