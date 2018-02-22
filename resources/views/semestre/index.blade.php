@extends('template.main')

@section('title-body','SEMESTRES')
@section('content')
<div class="row">


    <div class="col s12 m9 nav nav-wrapper">
      <form>
        <div class="input-field col s8">
          <input id="search" type="search" required class="validate" placeholder="[Buscar]">
        </div>
        <div class="col s2 right-align">
            <a class="btn-floating waves-effect waves-light blue darken-4"><i class="material-icons">search</i></a>
        </div>
      </form>
      <div class="col s2">
          <a class="btn-floating waves-effect waves-light green darken-4"><i class="material-icons">update</i></a>
      </div>
    </div>
    <div class="col s12 m3 right-align">
        <span>Agregar <a class="btn-floating waves-effect waves-light modal-trigger red darken-4" href="#semestre-create"><i class="material-icons">add</i></a></span>
    </div>
</div>

      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>ID</th>
              <th>Nombre del semestre</th>
              <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          @foreach($semestres as $semestre)
          <tr>
            <td>{{ $semestre->id }}</td>
            <td>{{ $semestre->año.' - '.$semestre->numero }}</td>
            <td>
                <a class="btn-floating waves-effect waves-light green darken-4"><i class="material-icons">edit</i></a>
                <a class="btn-floating waves-effect waves-light red darken-4"><i class="material-icons">delete</i></a>
                <a class="btn-floating waves-effect waves-light blue darken-4" href="{{ route('semestres.show',$semestre->id) }}"><i class="material-icons">remove_red_eye</i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection