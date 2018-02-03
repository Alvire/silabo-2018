@extends('template.main')

@section('content')

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input type="text" class="datepicker">
          <label>Date</label>
        </div>
	  </div>
	  <div class="file-field input-field">
	  	<div class="btn">
	  		<span>File</span>
	  		<input type="file">
	  	</div>
	  	<div class="file-path-wrapper">
	  		<input class="file-path validate" type="text">
	  	</div>
	  </div>
	</form>
  </div>

@endsection

@section('js')
<script type="text/javascript">
	  $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year,
	    today: 'Today',
	    clear: 'Clear',
	    close: 'Ok',
	    closeOnSelect: false // Close upon selecting a date,
	  });
</script>
@endsection