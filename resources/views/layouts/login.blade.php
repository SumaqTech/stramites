<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="plantilla/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="plantilla/vendor2/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="plantilla/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="plantilla/vendor2/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Iniciar Sesión</h3>
                    </div>
                    <div class="panel-body">
                        <img src="plantilla/images/app/Tramites.png">
                         <form method="post" action="login" name="login">{{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="dni" type="text" autofocus required="true" value="{{ old('dni') }}" >
                                    {!! $errors->first('dni',
                                        '<span class="help-block" style="color:rgba(233, 1, 1,.9); ">*:message</span>'
                                    ) !!}
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="" required="true">
                                    {!! $errors->first('password',
                                        '<span class="help-block"  style=" color:rgba(233, 1, 1,.9);">*:message</span>') 
                                    !!}
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                {{-- <a href="index.html" class="btn btn-lg btn-success btn-block">Ingresar</a> --}}
                                <button class="btn btn-lg btn-success btn-block">Ingresar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="plantilla/vendor2/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="plantilla/vendor2/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="plantilla/vendor2/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="plantilla/dist/js/sb-admin-2.js"></script>

</body>

</html>
