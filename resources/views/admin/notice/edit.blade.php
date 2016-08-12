@extends('admin.template.layout')
@section('page-style')
{!! HTML::style('assets/template_adm1n/summernote/summernote.css') !!}
{!! HTML::style('assets/template_adm1n/bootstrap-fileinput-master/css/fileinput.css') !!}
@stop
@section('content-page')
	<div class="title-block">
		<h3 class="title">
		Editar Noticia | {{ $notice->title }}
		</h3>
		<p class="title-description">Editando una noticia.</p>
	</div>
	{!! Form::model($notice,['route'=>['system.news.update',$notice->id],'method'=>'PUT']) !!}
	<section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title">
							<i class="fa fa-file-text-o"></i> Noticia
						</h3>
					</div>
                    <fieldset class="form-group">
                    	{!! Form::label('name','Nombre de la pagina',['class'=>'control-label']) !!}
                    	{!! Form::text('name', null, ['class'=>'form-control','required','placeholder'=>'Ingrese el nombre de la noticia']) !!}
                    </fieldset>
                    <fieldset class="form-group">
                    	{!! Form::label('title','Titulo de la noticia',['class'=>'control-label']) !!}
                    	{!! Form::text('title', null, ['class'=>'form-control','required','placeholder'=>'Ingrese el titulo para la noticia']) !!}
                    </fieldset>
                    <fieldset class="form-group">
                    	{!! Form::label('category_id','Nombre de la noticia',['class'=>'control-label']) !!}
                    	{!! Form::select('category_id',App\Category::all()->lists("name","id"),null,['class'=>'c-select form-control boxed']) !!}
                    </fieldset>
                    <fieldset class="form-group">
                        {!! Form::label('secction','Situar Noticia',['class'=>'control-label']) !!}
                        {!! Form::select('secction',[
                            null=>null,
                            'slider'=>'slider',
                            'top news'=>'top news',
                            'featured news'=>'featured news',
                            'latest news'=>'latest news',
                            'recent sports events'=>'recent sports events',
                            'more news'=>'more news',
                            'latest news'=>'recent sports events'],
                            null,
                            ['class'=>'c-select form-control boxed']) !!}
                    </fieldset>
                    <fieldset class="form-group">
                        {!! Form::label('content','Contenido de la noticia',['class'=>'control-label']) !!}
                        {!! Form::textarea('content', null, ['rows'=>"3",'class'=>'form-control','id'=>'summernote']) !!}
                    </fieldset>
                    <fieldset class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Guardar
                        </button>
                    </fieldset>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title">
                            Imagenes
                        </h3>
                    </div>
                    @forelse($notice->img as $img)
                        <img src="{!!url('/assets/images/'.$img->name)!!}" class="img-responsive img-thumbnail" alt="Cinque Terre" style="width:360px;height:auto;">
                        
                        @empty
                    @endforelse
                    <fieldset class="form-group">
                            <input id="file-0a" type="file" name='file' >
                    </fieldset>
                </div>
            </div>
        </div>
    </section>
    {!! Form::close()!!}
@stop
@section('page-script')
{!! HTML::script('assets/template_adm1n/summernote/summernote.min.js',
    array('type' => 'text/javascript')) 
!!}
{!! HTML::script('assets/template_adm1n/bootstrap-fileinput-master/js/fileinput.min.js',
    array('type' => 'text/javascript')) 
!!}
{!! HTML::script('assets/template_adm1n/bootstrap-fileinput-master/js/fileinput_locale_fr.js',
    array('type' => 'text/javascript')) 
!!}
{!! HTML::script('assets/template_adm1n/bootstrap-fileinput-master/js/fileinput_locale_es.js',
    array('type' => 'text/javascript')) 
!!}
<script type="text/javascript">
	$('#summernote').summernote({height: 300});
    $('#file-0a').fileinput({
        previewFileIcon: "<i class='fa fa-folder-open-o'></i>",
        validateInitialCount: false,
        language: 'es',
    });
</script>
@stop
