@extends('admin.template.layout')
@section('content-page')
	<div class="title-block">
		<h3 class="title">
		Noticias Registradas
		</h3>
		<p class="title-description"> Podras ver con un listado de tus noticias registradas en el sistema </p>
	</div>
	<section class="section">
		<div class="row">
		    <div class="col-md-12">
		        <div class="card">
		            <div class="card-block">
		                <div class="card-title-block">
		                     <h3 class="title">
								Lista de Noticias
                            <a href="{{ route('system.news.create') }}" class="pull-right btn btn-primary btn-sm rounded pull-right">
                                Crear Nueva
                            </a>
                            </h3>
                        </div>
                        <section class="example">
                            <div class="table-flip-scroll">
                                <table class="table table-striped table-bordered table-hover flip-content">
                                    <thead class="flip-header">
                                        <tr>
                                        	<th>ID</th>
                                            <th>Titulo</th>
                                            <th>Ubicacion</th>
                                            <th>Status</th>
                                            <th>Categoria</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse( $news as $notice)
	                                    <tr>
	                                        <td>
	                                        	{{ $notice->id }}
	                                        </td>
	                                        <td>
	                                        	{{ $notice->title }}
	                                        </td>
	                                        <td>
	                                        	{{ $notice->secction }}
	                                        </td>
	                                        <td>
	                                        	{{ $notice->status }}
	                                        </td>
	                                        <td>
	                                        	{{ $notice->categorie_id }}
	                                        </td>
	                                        <td class="center">
	                                        	<div class="btn-group btn-group-sm">
                                            		<a href="{{ route('system.news.edit',$notice->id) }}" type="button" class="btn btn-info">
                                            			Editar
                                            		</a>
                                            		<a type="button" class="btn btn-danger">
                                            			Eliminar
                                            		</a>
                                            		<a type="button" class="btn btn-success">
                                            			Ver
                                            		</a>
                                            	</div>
	                                        </td>
	                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="center text-danger">
                                            No hay noticias registradas
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
	</section>
@stop