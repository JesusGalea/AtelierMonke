<!doctype html>
<html lang="es">
    <head>
        
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>{{ config('app.name') }} - Panel de administración</title>
        
        <meta name="msapplication-TileColor" content=""/>
        <meta name="theme-color" content=""/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="mobile-web-app-capable" content="yes"/>
        <meta name="HandheldFriendly" content="True"/>
        <meta name="MobileOptimized" content="320"/>
        <meta name="description" content="Administración web {{ config('app.name') }}"/>
        
  
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
        
        
        
        @yield('styles')
        
    </head>
    
    <body>
        
        
        
        <div class="page">
            
            <header class="navbar navbar-expand-md navbar-dark d-print-none">
                <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                        <a href="{{route('admin.dashboard')}}">
                            <p class="h3">Electricidad montes</p>
                        </a>
                    </h1>
                    <div class="navbar-nav navbar-dark flex-row order-md-last">
                        
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                                {!! Auth::user()->avatar!!}
                                <div class="d-none d-xl-block ps-2">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="mt-1 small text-muted">{{ Auth::user()->email }}</div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <a href="{{route('admin.users.index')}}" class="dropdown-item">Usuarios</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{route('admin.logout')}}" class="dropdown-item">Salir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            
            <div class="navbar-expand-md">
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="navbar navbar-light">
                        <div class="container-xl">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.productos.index')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                                            <path d="M12 12l8 -4.5"></path>
                                            <path d="M8.2 9.8l7.6 -4.6"></path>
                                            <path d="M12 12v9"></path>
                                            <path d="M12 12l-8 -4.5"></path>
                                        </svg>
                                        <span class="nav-link-title ms-1" >
                                            Productos
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.servicios.index')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-desktop-analytics" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 4m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z"></path>
                                            <path d="M7 20h10"></path>
                                            <path d="M9 16v4"></path>
                                            <path d="M15 16v4"></path>
                                            <path d="M9 12v-4"></path>
                                            <path d="M12 12v-1"></path>
                                            <path d="M15 12v-2"></path>
                                            <path d="M12 12v-1"></path>
                                        </svg>
                                        <span class="nav-link-title ms-1" >
                                            Servicios
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.noticias.index')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11"></path>
                                                <path d="M8 8l4 0"></path>
                                                <path d="M8 12l4 0"></path>
                                                <path d="M8 16l4 0"></path>
                                            </svg>
                                        <span class="nav-link-title ms-1" >
                                            Noticias
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a href="https://em.51.255.38.199.getmoss.site/admin/translations" target="_blank" class="nav-link">Traducciones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        
            <div class="page-wrapper">
                @yield('contenido')
            </div>

        
        <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
        
        
        @yield('scripts')
    </body>
</html>