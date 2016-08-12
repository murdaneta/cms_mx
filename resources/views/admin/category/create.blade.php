@extends('admin.template.layout')
@section('page-style')
@stop
@section('content-page')
	<div class="title-block">
		<h3 class="title">
		Nueva Categoria
		</h3>
		<p class="title-description">Creando una nueva categoria.</p>
	</div>
	<section class="section">
        <div class="row sameheight-container">
            <div class="col-md-9">
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title">
							<i class="fa fa-file-text-o"></i> Detalles
						</h3>
					</div>
					{!! Form::open(['route'=>'system.categories.store','method'=>'POST']) !!}
                    @include('admin.category.fields')
                    <fieldset class="form-group">
                    	<button type="submit" class="btn btn-primary">
							Guardar
						</button>
					</fieldset>
    				{!! Form::close()!!}
                </div>
            </div>
        </div>
    </section>
@stop
@section('page-script')
<script type="text/javascript">
</script>
@stop