<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
use App\Galeria;
use App\Http\Requests;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade;

class PrincipalController extends Controller
{
    public function index(){
       // $publicaciones=Publicacion::paginate(10);
        //return view('principal.index',compact('publicaciones'));
        return view('principal.index');
	}

	public function noticias(){
      //  $publicaciones=Publicacion::paginate(10);
    //	return view('principal.noticias',compact('publicaciones'));
    return view('principal.noticias');
	}

	public function instalaciones(){
		return view('principal.instalaciones');
	}

  public function QuienesSomos(){
    return view('principal.QuienesSomos');
  }

  public function GaleriaFotos(){
    $Fotos= Galeria::all();
    return view('principal.Galeria',compact('Fotos'));
  }


	public function contacto(){
		
        
        return view('principal.contacto');
	}
}
