<fieldset class="form-group">
	{!! Form::label('link','Enlace de la Red Social',['class'=>'control-label']) !!}
	{!! Form::text('link', null, ['class'=>'form-control','required','placeholder'=>'Ingrese http://facebook.com/123456789']) !!}
</fieldset>
<fieldset class="form-group">
    {!! Form::label('name','Escoja su Red Social',['class'=>'control-label']) !!}
    {!! Form::select('name',[
        null=>null,
        'facebook'=>'Facebook',
        'twitter'=>'Twitter',
        'googoe-plus'=>'Google +',
        'youtube'=>'Youtube'],
        null,
        ['class'=>'c-select form-control boxed']) !!}
</fieldset>