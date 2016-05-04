<?php

namespace App\Http\Controllers\personas;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CRol;
use App\User;
use App\Persona;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Closure;
use Illuminate\Support\Facades\Auth;

class personasController extends Controller
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
     * Mostrar Solo uno
     *
     * @return void
     */    
public function show($id)
    {
        $usuario=User::find($id);
         $usuario->name;
        $rol=CRol::find($usuario->rol)->nombre;
        $persona=Persona::where('cui','=',$usuario->cui)->get();

        return view('adminIndex', ['persona' => $persona,'rol' => $rol,'usuario'=>$usuario]);
    }      
/**
     * formulario editar una Persona
     *
     * @return void
     */        
public function edit($id)
    {
        $persona=Persona::find($id);
        $usuario=Auth::user();
         $usuario->name;
        $rol=CRol::find($usuario->rol)->nombre;
        $roles=CRol::all();
$mid='';
if ($usuario->rol==1){
$mid='admin';
}elseif ($usuario->rol==2){
$mid='encargado';
}elseif ($usuario->rol==3){
$mid='usuario';
}


        return view('personas/editar', ['roles' => $roles,'rol' => $rol,'persona'=>$persona,'usuario'=>$usuario,'mid'=>$mid,'id'=>$id]);

    }
/**
     * Post de  editar una Persona
     *
     * @return void
     */  

    public function store(Request $request){
        // return $request->all();
        return $persona=Persona::find($request->input('id'));
            return redirect()->to('admin/usuarios/'.Auth::user()->id);

    }

    public function index()
    {
            return redirect()->to('admin/usuarios/'.Auth::user()->id);

        return view('usuarios/editar');

        



return "hola";
        return "<script type='text/javascript'>  Materialize.toast('Mensajito de Error o de OK!', 3000, 'rounded')
</script>";
    }
public function create()
    {
        return view('auth/register');

    }

       
public function guardar(Request $request, $id)
    {
        $var=$request->get('contrasena');
        $usuario=User::find($id);
        $usuario->name=$request->get('nombre');
        $usuario->rol=$request->get('rol');
        $usuario->cui=str_replace('-', '', $request->get('cui'));
             $v = \Validator::make($request->all(), [
            
              'email' => 'required|email|max:255|unique:users',
            'contrasena' => 'min:6'
            ],[
    'unique' => 'Usuario ya existente',
    'min' => 'Contraseña no cumple con el tamaño minimo',
    'required' => 'Falto llenar campos',
]);
             if($usuario->email!=$request->input('email')){

            if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }   
             }
        $usuario->email=$request->input('email');
        if (!empty($var)) {
            $usuario->password=bcrypt($request->get('contrasena'));
        }
        $usuario->save();
        return redirect()->to('admin/usuarios/'.Auth::user()->id);
        return User::find($id);
        return $request->get('contrasena');

    }

}
