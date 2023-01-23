<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire login </title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <livewire:components.navbar />
    @if (session()->has('message'))
        <div class="row justify-content-end m-2">
            <div class="col-3">
                <div class="alert alert-success text-center">
                    <strong>{{ session('message') }}</strong>
                </div>
            </div>
        </div>
    @endif


    {{ $slot }}
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false"></script>
</body>

</html>
