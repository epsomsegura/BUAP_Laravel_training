<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.helpers.head')
</head>
<body>
    <div class="container-fluid">
        {{ $slot }}
    </div>
</body>
</html>