<html>
    <head>
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>{{ config('app.name') }}</title>
        <meta name="csrf-token" content="">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
        
        
    </head>
    <body class="vh-100 vw-100 antialiased overflow-x-hidden">
        <div class="container-fluid p-0">
            <div class="row g-0 h-100 antialiased">
                <div class="col-md h-100 bg-light order-md-2">
                    <div class="d-flex h-100">
                        <div class="container-tight py-6 align-items-center align-self-center">
                            <form class="card card-md" action="{{ route('admin.login') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="card-body">
                                    <div class="text-center mb-4">
                                         <p class="h2">Electricidad montes</p>
                                    </div>
                                    
                                   
                                    <div class="mb-3">
                                        
                                         <x-admin.alert type="{{session('status')}}">{{ session('item')}}</x-admin.alert>
                                        <label class="form-label">Usuario</label>
                                        <input type="email" name="email" class="form-control" placeholder="Introducir email" required value="">
                                        <div class="invalid-feedback">Debes indicar un email</div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">
                                            Contraseña
                                        </label>
                                        <div class="input-group input-group-flat">
                                            <input type="password" class="form-control" name="password"  placeholder="Password"  autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">Acceder al sistema</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md h-100 bg-dark order-md-1">
                    <div class="d-flex h-100">
                        <div class="container-tight py-6 align-items-center align-self-center text-white">
                            <div class="text-center"><img src="{{asset('img/logo_Innova.svg')}}" alt="InnovaCreaciones" class="img-fluid m-5" width="200"></div>
                            <h1>Panel de Administración</h1>
                            <p>Con este panel de administración podrás gestionar el contenido de la página web de {{ env('APP_NAME')}}.</p>
                            <p>Para cualquier incidencia, no dude en ponerse en contacto con <a href="mailto:info@innovacreaciones.es">innovacreaciones.es</a></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
        
        
    </body>
    
        
        
        
        
        
    </body>
</html>