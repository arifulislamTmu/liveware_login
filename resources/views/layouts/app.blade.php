<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire login </title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- sweet alert start  --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    {{-- sweet alert end  --}}
  
</head>

<body>
    <livewire:components.navbar />
    {{ $slot }}
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false"></script>
        
    @include('sweetalert::alert')

</body>

</html>
