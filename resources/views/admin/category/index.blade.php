@extends('admin.template.layout')
@section('content-page')
	<div class="title-block">
		<h3 class="title">
		Categorias
		</h3>
		<p class="title-description"> Podras ver con un listado de tus categorias registradas en el sistema </p>
	</div>
	<section class="section">
		<div class="row">
		    <div class="col-md-12">
		        <div class="card">
		            <div class="card-block">
		                <div class="card-title-block">
		                     <h3 class="title">
								Lista de Categorias
							</h3>
						</div>
                        <section class="example">
                            <div class="table-flip-scroll">
                                <table class="table table-striped table-bordered table-hover flip-content">
                                    <thead class="flip-header">
                                        <tr>
                                        	<th>ID</th>
                                            <th>Nombre</th>
                                            <th>Top Menu</th>
                                            <th>Creado por</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse( $categories as $category)
	                                    <tr>
	                                        <td>
	                                        	{{ $category->id }}
	                                        </td>
	                                        <td>
	                                        	{{ $category->name }}
	                                        </td>
	                                        <td>
	                                        	{{ $category->index }}
	                                        </td>
	                                        <td>
	                                        	{{ $category->user_id }}
	                                        </td>
	                                        <td class="center">
	                                        	<div class="btn-group btn-group-sm">
                                            		<a href="{{ route('system.categories.edit',$category->id) }}" type="button" class="btn btn-info">
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