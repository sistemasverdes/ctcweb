<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function __invoke(Request $request)
    {        
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',            
            'message' => 'required'
        ]);

        $input = $request->all();

        $objDemo = new \stdClass();
        $objDemo->nombre = $input['nombre'];
        $objDemo->email = $input['email'];
        $objDemo->message = $input['message'];

        $servicios = '';
        if (isset($input['indumentaria'])){
            $servicios = 'indumentaria';
        }

        if (isset($input['bordado'])){
            $servicios = $servicios . ', bordado';
        }

        if (isset($input['diseño'])){
            $servicios = $servicios . ', diseño';
        }

        if (isset($servicios)){
            $objDemo->servicios = $servicios;
        }

        $demo = new DemoEmail($objDemo);
        //var_dump($demo);die();
        //Mail::to("admin@cooperativadelcentro.coop.ar")->send($demo);        
        Mail::to("julian.sistema@gmail.com")->send($demo);        
        
        if (count(Mail::failures()) == 0) {            
            return redirect('/')->withSuccess('Email enviado correctamente.');
        } else {
            return redirect('/')->withFail('No se pudo enviar el email, intente más tarde.');
        }
        //var_dump($parametros);die();
       
    }
}
