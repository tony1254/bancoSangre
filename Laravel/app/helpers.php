<?php
 use App\CRol;
use App\User;
use App\CSexo;
use App\CAlmacen;
use App\CEstadoUnidad;
use App\CCongelador;
use App\CFactorSangre;
use App\CGrupoSangre;
use App\CTipoAfeccion;
use App\CTipoTransaccion;

use App\Persona;
function currentUser()
{
    return auth()->user();
}
/*Funcion para devolver el middleware donde se encuentra*/
function mid()
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
    return $mid;
}
 /**
     ***CATALOGOS
     **1 sexo
     **2 rol
     **3 congelador
     **4 factorSangre
     **5 gurpoSangre
     **6 tipoAfeccion
     **7 estadoUnidad
     **8 tipoTransaccion
     */    
/*FUNCION para devolver los datos del catalogo solicitado*/
function datosCatalogo($catalogo)
{
 if($catalogo=="sexo"){
            $datos=CSexo::all();
        }else if($catalogo=="rol"){
            $datos=CRol::all();
        }else if($catalogo=="almacen"){
            $datos=CAlmacen::all();
        }else if($catalogo=="congelador"){
            $datos=CCongelador::all();
        }else if($catalogo=="factorSangre"){
            $datos=CFactorSangre::all();
        }else if($catalogo=="grupoSangre"){
            $datos=CGrupoSangre::all();
        }else if($catalogo=="tipoAfeccion"){
            $datos=CTipoAfeccion::all();
        }else if($catalogo=="estadoUnidad"){
            $datos=CEstadoUnidad::all();
        }else if($catalogo=="tipoTransaccion"){
            $datos=CTipoTransaccion::all();
        }else {
            return "index de else";
        }
        return $datos;
}
/*FUNCION para crear los datos del catalogo solicitado*/
function nuevoCatalogo($catalogo)
{
 if($catalogo=="sexo"){
            $datos=new CSexo;
        }else if($catalogo=="rol"){
            $datos=new CRol;
        }else if($catalogo=="almacen"){
            $datos=new CAlmacen;
        }else if($catalogo=="congelador"){
            $datos=new CCongelador;
        }else if($catalogo=="factorSangre"){
            $datos=new CFactorSangre;
        }else if($catalogo=="grupoSangre"){
            $datos=new CGrupoSangre;
        }else if($catalogo=="tipoAfeccion"){
            $datos=new CTipoAfeccion;
        }else if($catalogo=="estadoUnidad"){
            $datos=new CEstadoUnidad;
        }else if($catalogo=="tipoTransaccion"){
            $datos=new CTipoTransaccion;
        }else {
            return "index de else";
        }
        return $datos;
}
/*FUNCION para devolver los datos del catalogo solicitado*/
function datoCatalogo($catalogo,$id)
{
			 if($catalogo=="sexo"){
            $datos=CSexo::find($id);
        }else if($catalogo=="rol"){
            $datos=CRol::find($id);
        }else if($catalogo=="almacen"){
            $datos=CAlmacen::find($id);
        }else if($catalogo=="congelador"){
            $datos=CCongelador::find($id);
        }else if($catalogo=="factorSangre"){
            $datos=CFactorSangre::find($id);
        }else if($catalogo=="grupoSangre"){
            $datos=CGrupoSangre::find($id);
        }else if($catalogo=="tipoAfeccion"){
            $datos=CTipoAfeccion::find($id);
        }else if($catalogo=="estadoUnidad"){
            $datos=CEstadoUnidad::find($id);
        }else if($catalogo=="tipoTransaccion"){
            $datos=CTipoTransaccion::find($id);
        }else {
            return "index de else";
        }
        return $datos;
}
