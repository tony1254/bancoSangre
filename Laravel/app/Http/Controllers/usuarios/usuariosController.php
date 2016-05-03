<?php

namespace App\Http\Controllers\usuarios;

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

class usuariosController extends Controller
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
public function edit($id)
    {
        $usuario=User::find($id);
         $usuario->name;
        $rol=CRol::find($usuario->rol)->nombre;
        $roles=CRol::all();

        return view('usuarios/editar', ['roles' => $roles,'rol' => $rol,'usuario'=>$usuario]);

    }
public function show($id)
    {
        $usuario=User::find($id);
         $usuario->name;
        $rol=CRol::find($usuario->rol)->nombre;
        $persona=Persona::where('cui','=',$usuario->cui)->get();

        return view('adminIndex', ['persona' => $persona,'rol' => $rol,'usuario'=>$usuario]);
    }             
public function guardar(Request $request, $id)
    {
// return str_replace('-', '', $request->get('cui'))+0;
        $usuario=User::find($id);
        $usuario->name=$request->get('nombre');
        $usuario->rol=$request->get('rol');
        $usuario->cui=str_replace('-', '', $request->get('cui'));
        $usuario->save();
        return redirect()->to('admin/usuarios/'.Auth::user()->id);
        return User::find($id);
        return $request->get('contrasena');

    }
}
