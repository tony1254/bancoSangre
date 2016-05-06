<?php

namespace App\Http\Controllers\catalogos;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CRol;
use App\User;
use App\CSexo;
use App\Persona;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Closure;
use Illuminate\Support\Facades\Auth;

class catalogosController extends Controller
{
       /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

   /**
     *CATALOGOS
     *1 sexo
     *2 rol
     */    
public function index($catalogo)
    {
        if($catalogo=="sexo"){
            $datos=CSexo::all();
        }else if($catalogo=="rol"){
            $datos=CRol::all();
        }else {
            return "index de else";
        }
$usuario=Auth::user();
$mid='';
if ($usuario->rol==1){
$mid='admin';
}elseif ($usuario->rol==2){
$mid='encargado';
}elseif ($usuario->rol==3){
$mid='usuario';
}        
        return view('catalogos/index', ['datos' => $datos,'catalogo' => $catalogo,'usuario'=>$usuario,'mid'=>$mid]);
           
            return $datos;


    }     
public function show($id)
    {
        return "show";

    }  
public function edit($id)
    {
        return "edit";

    }  
public function update()
    {
        return "update";

    }  
public function create($catalogo)
    {
$usuario=Auth::user();
$mid='';
if ($usuario->rol==1){
$mid='admin';
}elseif ($usuario->rol==2){
$mid='encargado';
}elseif ($usuario->rol==3){
$mid='usuario';
}        
$datos="";
        return view('catalogos/create', ['datos' => $datos,'catalogo' => $catalogo,'usuario'=>$usuario,'mid'=>$mid]);

        

    }  
public function store()
    {
        return "create";

    }  

}