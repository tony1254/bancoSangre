@extends('layouts.app')

@section('content')


<style type="text/css">
	.tabs .indicator{background-color:#003399;}
</style>
<div class="row">
    <div class="col-sm-12 ">
      <ul class="tabs  ">
@if (Auth::user()->rol==1)
      	
        <li class="tab col s3  "><a  href="#test1" class=" blue-text text-darken-4 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Panel de Control"><i style="  vertical-align: middle;" class="fa fa-cog fa-2x" aria-hidden="true"></i>
</a></li>
@endif
        <li class="tab col s3"><a onclick=" ver()" class="active blue-text text-darken-4 tooltipped" href="#test2" data-position="bottom" data-delay="50" data-tooltip="Usuario"><i  style="  vertical-align: middle;"class="fa fa-2x fa-user" aria-hidden="true"></i>
</a></li>
        <li class="tab col s3"><a href="#test4"class=" blue-text text-darken-4 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Persona"><i class="fa fa-2x fa-universal-access" aria-hidden="true" style="  vertical-align: middle;"></i>
</a></li>
      </ul>
    </div>
@if (Auth::user()->rol==1)

    <div id="test1" class="col s12">
      <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="fa fa-cogs" aria-hidden="true"></i>Catalogos</div>
      <div class="collapsible-body"><p>
				<a href="#" class="btn"></a>
				<a href="#" class="btn"></a>
      		</p>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>
        
    </div>
@endif    
<div class="text-center">
	
 <div class="preloader-wrapper big active " id="carga" style="display">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
</div>
    <div id="test2" class="col s12 " >

		<div class="panel panel-default " id="ver" >
	
		        <div class="panel-heading" >Usuario</div>
		        <div class="panel-body">
					<b>Nombre:</b> {{$usuario->name}}
					<br>
                    {{$usuario->cui}}
					<b>CUI:</b> {{substr($usuario->cui , 0, 4)}}-{{substr($usuario->cui , 4, 9)}}-{{substr($usuario->cui , 10, 13)}}
					<br>
					<b>Emal:	</b>{{$usuario->email}}
					<br>
					<b>Rol:</b>	{{$rol}}
		 		</div>
		 		<div class="panel-footer">
					<div class="row">
						<div class="col-xs-3 col-xs-offset-9">
							<a class="btn btn-floating btn-fab amber  darken-1" onclick=" editar();"><i class="material-icons">create</i></a>
						</div>
					</div>
		 			
		 		</div>
  
    	</div>    

    </div>
<script type="text/javascript">
function editar(){
	$( '#ver' ).toggle();
	$('#carga').show();
$( '#test2' ).load( '{{$usuario->id}}/edit' );
	


}
function ocultar(){
				$('#carga').hide();

}

	            $(document).on('ready',function(){
				$('#carga').hide();

});
</script>    
    <div id="test4" class="col s12">
 
		
		    <div class="panel panel-default">
		        <div class="panel-heading">Persona</div>
		        <div class="panel-body">
		        @if (count($persona)==0)
		        	Aun no hay Persona Vinculada
		        @else
		        <!-- {{$persona=$persona[0]}} -->
					<b>Nombre</b>
					{{$persona->nombre.' '.$persona->apellido}}
					<br>
					<b>Fecha de Nacimiento</b>
					
					{{substr($persona->fechaNacimiento,8,2)}}-{{substr($persona->fechaNacimiento,5,2)}}-{{substr($persona->fechaNacimiento,0,4)}}
					<br>
					<b>Sexo</b>
					{{App\CSexo::find(($persona->sexo))->nombre}}

		        @endif

		  		</div>
		  <div class="panel-footer">
					<div class="row">
						<div class="col-xs-3 col-xs-offset-9">
							<a class="btn btn-floating btn-fab amber  darken-1
								@if (count($persona)==0)
								disabled
								@endif
							" onclick=" editar();"><i class="material-icons">create</i></a>
						</div>
					</div>
		 			
		 		</div>
    	</div>
    </div>
    </div>










<br>
<br>
<br>
<br>
<br>

    

 

@endsection

