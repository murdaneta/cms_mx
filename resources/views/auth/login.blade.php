<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> 90total-Admin | Iniciar sesión </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        {!! HTML::style('assets/template_adm1n/css/vendor.css') !!}
        {!! HTML::style('assets/template_adm1n/css/app-seagreen.css') !!}
        <!-- Theme initialization -->
    </head>

    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">sistema
      </h1> </header>
                    <div class="auth-content">
                        <p class="text-xs-center">Iniciar sesión</p>
                        @if($errors->any())
                            <div class="login-form">
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        {!!Form::open(array('url' =>'system/login','method'=>'post','ovalidate'=>'','id'=>'login-form'))!!}
                            <div class="form-group">
                                <label for="username">Correo Electronico</label>
                                <input type="email" class="form-control underlined" name="email" id="username" placeholder="Ingreta el correo electronico" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Ingresa la contraseña password" required> 
                            </div>
                            <div class="form-group">
                                <label for="remember">
                                    <input class="checkbox" id="remember" type="checkbox"> 
                                    <span>Recordar</span>
                                </label>
                                <a href="reset.html" class="forgot-btn pull-right">
                                    Olvido su  contraseña??
                                </a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">
                                    Iniciar
                                </button> 
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-xs-center">no posees una cuenta? 
                                    <a href="signup.html">Registrate!</a>
                                </p>
                            </div>
                        {!!Form::close()!!}
                    </div>
                </div>
                <div class="text-xs-center">
                    <a href="{{ url('/') }}" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Regresar al inicio </a>
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        {!! HTML::script('assets/template_adm1n/js/vendor.js',
		    array('type' => 'text/javascript')) 
		!!}
		{!! HTML::script('assets/template_adm1n/js/app.js',
		    array('type' => 'text/javascript')) 
		!!}
    </body>

</html>