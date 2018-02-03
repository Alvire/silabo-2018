@extends('template.main')

@section('content')
<div class="row">
	<div class="col s12">
		<h2 class="center-align">CURSO</h2>
	</div>
</div>
<div class="row">
    <form class="col s12 m10 l8 offset-m1 offset-l2">
    	<div class="row">
    		<h5 class="left-align">Registro de creación de curso</h5>
    	</div>

        <div class="row">
            <div class="input-field col s12">
                <input id="silabo_name" type="text" class="validate">
                <label for="silabo_name">Nombre del curso</label>
            </div>
        </div>

        <div class="row">
            <div class="col s6 m3">
                <p class="">Codigo</p>
            </div>
            <div class="col s6 m3">
                <input type="text" name="" id="" class="validate" placeholder="Codigo">
            </div>
            <div class="col s6 m3">
                <p class="">Creditos</p>
            </div>
            <div class="col s6 m3">
                <input type="text" name="" id="" class="validate" placeholder="Creditos">
            </div>
        </div>

        <div class="row">
            <div class="col s6 m3">
                <p class="">Horas Teoricas</p>
            </div>
            <div class="col s6 m3">
                <input type="text" name="" id="" class="validate" placeholder="Horas Teoricas">
            </div>
            <div class="col s6 m3">
                <p class="">Horas prácticas</p>
            </div>
            <div class="col s6 m3">
                <input type="text" name="" id="" class="validate" placeholder="Horas prácticas">
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <p class="">Sumilla</p>
            </div>
            <div class="col s11 offset-s1">
                <textarea id="" name="" class="materialize-textarea validate" placeholder="Sumilla del curso"></textarea>
            </div>
        </div>

    	<div class="row">
    		<div class="col s6 l4">
    			<p class="">Área</p>
    		</div>
    		<div class="input-field col s6 l8">
                <select>
                    <option value="" disabled selected>Seleccione el area</option>
                    <option value="2">Area 1</option>
                    <option value="3">Area 2</option>
                </select>
    		</div>
    	</div>

        <div class="row">
            <div class="col s6 m2">
                <p class="">Ciclo</p>
            </div>
            <div class="input-field col s6 m2">
                <select>
                    <option value="" disabled selected>...</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                    <option value="VI">VI</option>
                    <option value="VII">VII</option>
                    <option value="VIII">VIII</option>
                    <option value="IX">IX</option>
                    <option value="X">X</option>
                </select>
            </div>
            <div class="col s6 m3">
                <p class="">Caracter del curso</p>
            </div>
            <div class="input-field col s6 m5">
                <select>
                    <option value="" disabled selected>Seleccione una opcion</option>
                    <option value="Obligatorio">Obligatorio</option>
                    <option value="Libre">Libre</option>
                </select>
            </div>
        </div>

        <div class="center-align">
            <a class="waves-effect waves-light btn blue center-align"><i class="material-icons left">save</i>Guardar</a>
        </div>
    </form>
  </div>

@endsection