<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @livewireStyles
</head>

<body class="antialiased">


    <script src="{{asset('js/app.js')}}"></script>
    <livewire:test />
    @livewireScripts
</body>

</html>