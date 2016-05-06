@extends('layouts.app')
@section('title') {{'Catalogo de '.$catalogo.' Nuevo'}}@stop

@section('content')
<form class="form" role="form" method="POST" action="{{ url($mid.'/catalogos/'.$catalogo) }}">
	               {!! csrf_field() !!}
<!-- <input type="text" name="_method" value="PUT" hidden> -->
<div class="panel panel-default"  id="ver">
		        <div class="panel-heading">{{$catalogo}} NUEVO</div>
		        	<div class="panel-footer">
						
			 		 </div>
			 	</div>
<div class="fixed-action-btn" style="bottom: 100px; right: 24px;">
    <button class="btn-floating btn-large red tooltipped waves-effect waves-light" data-position="left" data-delay="50" data-tooltip="Nuevo" type="submit">
    	<i class="fa fa-plus"></i>
    </button>
    
  </div>

</form>
@endsection
