<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="{{Storage::url('favicon.png')}}">
		<title>DANCE REVOLUTION</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Invierte en tu salud! Aprende a bailar y experimenta un cambio radical en tu vida, tanto físico, psicológico como espiritual. Encuentra tu estilo ahora!">
        <meta name="keywords" 	 content="baile, salón, danza, latina, sensualidad, clases, salsa, bachata, kizomba, tango, Palma, Mallorca">

        @include('admin.layout.partials.styles')
    </head>
    
    <body>
        @include('admin.components.delete-warning')
        @include('admin.layout.partials.header')

        <main class="main-content">
            @yield('content')
        </main>

        @include('admin.layout.partials.footer')
        <div class="overlay"></div>
        @include('admin.layout.partials.js')
        
    </body>
</html>