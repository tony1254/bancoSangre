<?php

namespace App\Http\Controllers\personas;

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

class personaController extends Controller
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
   *index
   */
public function index()
   {
        return "index";    
   }
public function show($id)
   {
        return "show";    
   }
public function edit($id)
   {
        return "edit";    
   }
public function create()
   {
        return "create";    
   }
public function store(Request $request)
   {
        return "store";    
   }
public function update(Request $request)
   {
        return "update";    
   }
public function destroy($id)
   {
        return "destroy";    
   }

}
