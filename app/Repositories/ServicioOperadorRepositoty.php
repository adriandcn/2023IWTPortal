<?php


    public function storeNewEvento($inputs) {

        $evento = new $this->eventos;
        $evento->id_usuario_servicio = $inputs['id_usuario_servicio'];
        $evento->id_fotografia = 4;
        $evento->descripcion_evento = trim($inputs['descripcion_evento']);
        $evento->nombre_evento = trim($inputs['nombre_evento']);
        $evento->fecha_desde = $inputs['fecha_desde'];
        $evento->fecha_hasta = $inputs['fecha_hasta'];
        $evento->fecha_hasta = $inputs['fecha_hasta'];
        $evento->estado_evento = 1;
        $evento->permanente = 0;
        $evento->created_at = \Carbon\Carbon::now()->toDateTimeString();
        $evento->updated_at = \Carbon\Carbon::now()->toDateTimeString();
        $evento->id_catalogo_eventos = $inputs['id_catalogo_eventos'];

        $this->save($evento);
        return $evento;
    }

    //actualiza los eventos
    public function storeUpdateEvento($inputs, $evento) {

        foreach ($evento as $servicioBase) {
            $pro = $this->eventos->find($servicioBase->id);

            //Transformo el arreglo en un solo objeto
            $inputs['updated_at'] = \Carbon\Carbon::now()->toDateTimeString();
            $inputs['longitud_evento'] = $inputs['longitud_servicio'];
            $inputs['latitud_evento'] = $inputs['latitud_servicio'];
            $inputs['id_catalogo_eventos'] = $inputs['id_catalogo_eventos'];
            $pro->fill($inputs)->save();
        }

        return true;
    }
