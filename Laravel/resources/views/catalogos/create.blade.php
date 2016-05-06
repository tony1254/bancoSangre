@extends('layouts.app')
@section('title') {{'Catalogo de '.$catalogo.' Nuevo'}}@stop

@section('content')
<form class="form" role="form" method="POST" action="{{ url($mid.'/catalogos/'.$catalogo) }}">
	               {!! csrf_field() !!}
<!-- <input type="text" name="_method" value="PUT" hidden> -->
<div class="panel panel-default"  id="ver">
		        <div class="panel-heading">{{$catalogo}} NUEVO</div>
		        	<div class="panel-body">
					  <div class="input-field col s6">
						<input type="text" name="nombre" id="nombre" >
						<label class="active"  for="nombre">Nombre de {{$catalogo}}</label>
				      </div> 
			 		 </div>
			 	</div>
<div class="fixed-action-btn" style="bottom: 100px; right: 24px;">
    <button class="btn-floating btn-large green tooltipped waves-effect waves-light" data-position="left" data-delay="50" data-tooltip="Grabar" type="submit">
    	<i class="fa fa-floppy-o"></i>
    </button>
    
  </div>

</form>
@endsection