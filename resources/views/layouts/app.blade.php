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
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    {{-- sweet alert end  --}}
    <style>
        .colored-toast {
            background-color: #ffffff !important;
        }

        .colored-toast {
            color: rgb(85, 187, 88);
            font-size: 16px;
        }
    </style>
</head>

<body>
    <livewire:components.navbar />
    {{ $slot }}
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false"></script>

    {{-- sweet alert start  --}}
    <script src="{{ asset('js/sweetAlert.js') }}"></script>

    @if (session()->has('message'))
        <script>
            Toast.fire({
                icon: 'success',
                title: '{{ session('message') }} ',
            })
        </script>
    @endif

    @if (session()->has('message_error'))
        <script>
            Toast.fire({
                icon: 'success',
                title: '{{ session('message_error') }}',
            })
        </script>
    @endif

</body>

</html>
