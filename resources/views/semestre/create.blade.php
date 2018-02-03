@extends('template.main')

@section('content')
<div class="row">
	<div class="col s12">
		<h2 class="center-align">SEMESTRE</h2>
	</div>
</div>
<div class="row">
    <form class="col s12 m10 l8 offset-l2 offset-m1">
    	<div class="row">
    		<h5 class="left-align">DATOS</h5>
    	</div>
    	<div class="row">
    		<div class="col s6 m2 offset-m1">
    			<p class="">AÑO</p>
    		</div>
    		<div class="col s6 m3">
    			<input type="text" name="" id="" class="validate" placeholder="AÑO">
    		</div>
            <div class="col s6 m2 offset-m1">
                <p class="">NÚMERO</p>
            </div>
            <div class="col s6 m3">
                <input type="text" name="" id="" class="validate" placeholder="NÚMERO">
            </div>
    	</div>

        <div class="center-align">
            <a class="waves-effect waves-light btn blue center-align"><i class="material-icons left">save</i>Guardar</a>
        </div>

    </form>
  </div>

@endsection