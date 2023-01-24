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

<body id="cart_realaod_table">

    <livewire:components.navbar />


    {{ $slot }}
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false"></script>

    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.min.js" integrity="sha512-t3XNbzH2GEXeT9juLjifw/5ejswnjWWMMDxsdCg4+MmvrM+MwqGhxlWeFJ53xN/SBHPDnW0gXYvBx/afZZfGMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
<script>

</script>
</html>
