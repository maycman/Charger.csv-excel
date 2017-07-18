@extends("layout")
@section("page")
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-md-offset-4 center">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Cargar Base</h3>
				</div>
				<div class="panel-body">
					{!! Form::open(array('url' => 'cargando', 'method' => 'post', 'files' => true)) !!}
            			<div class="form-group">
            				{!! Form::label('file', 'Carga: ') !!}
            				<span class="btn btn-default btn-file">
            					Selecciona la base de datos
            					{!! Form::file('base') !!}
                    		</span>
                		</div>
                		<div class="form-group">
                			{!! Form::submit('Send', ["class" => "btn btn-primary btn-block btn-lg"]) !!}
                		</div>
            		{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection