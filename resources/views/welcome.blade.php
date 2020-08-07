@extends('sigma.app')

@section('title','Landing')

@section('formulario')
	<div class="card shadow p-2 mb-4 bg-white rounded-1">
		<form action="{{route('contact')}}" method="POST">
		@csrf
		<div class="card-body pr-lg-5 pl-lg-5 pt-lg-5 pb-lg-3">
			<div class="form-row">
			    <div class="form-group col-12">
			    	<label for="state">Departamento* </label>
			    	<select id="state" name="state" class="form-control @error('state') is-invalid @enderror" value="{{ old('state') }}" required>
			    		<option></option>
				    </select>
			    </div>
			    <div id="Ciudad" class="form-group col-12">
			    	<label for="city">Municipio* </label>
			    	<select id="Munic" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" required>
			    		<option value=""></option>
				    </select>
			    </div>
			    <div class="form-group col-12">
			    	<label for="name">Nombre* </label>
			    	<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
			    </div>
			    <div class="form-group col-12">
			    	<label for="email">Correo* </label>
			    	<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
			    </div>
			    <div class="m-auto">
			    	<input class="btn btn-lg rounded-pill btn-pink" type="submit" value="ENVIAR">
			    </div>
			</div>
		</div>
		</form>
	</div>
@endsection

@section('script')
<script src="{{asset('tail-select/js/tail.select-full.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				var url = "https://www.datos.gov.co/resource/xdk5-pm3f.json";
				$.ajax({
					url: url+'?$query=SELECT distinct departamento',
					type: 'GET',
					dataType: 'JSON',
					success:function(data){
						
						$.each(data, function (i, json) {
							$('select[name=state]').append('<option value="' + json.departamento + '">' + json.departamento+ '</option>');
						});

						tail.select('#state',{
							search: true
						})
					}
				});

			$("select[name=state]").change(function(){
				var dato = $('select[name=state]').val();
				var url_m = url+`?departamento=${dato}`;
				$.ajax({
					url: url_m,
					type: 'GET',
					dataType: 'JSON',

					success:function(data){
						$('#Ciudad').find("div").remove();
						$('#Ciudad > select').removeAttr("data-tail-select");
						$('#Ciudad > select').removeAttr("data-select-hidden");
						$('#Ciudad > select').removeAttr("style");
						$('select[name=city]').find("option").remove();
						
						$.each(data, function (i, json) {
							$('select[name=city]').append('<option value="' + json.municipio + '">' + json.municipio + '</option>');
						});
						tail.select('#Munic',{
							search: true
						});
					}
				});
			});
		});
	</script>
@endsection