@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mi Perfil</div>

                <div class="panel-body">
                    Inicio de session correcto!
                    <br>
                    <br>
                    
                    {{var_dump(Auth::user())}}
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
