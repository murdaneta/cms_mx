<fieldset class="form-group">
	{!! Form::label('name','Nombre de la categoria',['class'=>'control-label']) !!}
	{!! Form::text('name', null, ['class'=>'form-control','required','placeholder'=>'Ingrese el nombre de la categoria']) !!}
</fieldset>
<fieldset class="form-group">
    {!! Form::label('index','Ubicar en index',['class'=>'control-label']) !!}
    {!! Form::select('index',[
        null=>null,
        'ff'=>'Otros',
        'bar1'=>'Barra elemento 1',
        'bar2'=>'Barra elemento 2',
        'bar3'=>'Barra elemento 3',
        'nd1'=>'Noticias destacadas 1',
        'nd2'=>'Noticias destacadas 2',
        'nd3'=>'Noticias destacadas 3',
        'nd4'=>'Noticias destacadas 4',
        'nd5'=>'Noticias destacadas 5',
        'nd6'=>'Noticias destacadas 6',
        'ads1'=>'Publicidad'],
        null,
        ['class'=>'c-select form-control boxed']) !!}
</fieldset>
<fieldset class="form-group">
	{!! Form::label('description','Descripcion de la Categoria',['class'=>'control-label']) !!}
	{!! Form::textarea('description', null, ['rows'=>"3",'class'=>'form-control','id'=>'summernote']) !!}
</fieldset>