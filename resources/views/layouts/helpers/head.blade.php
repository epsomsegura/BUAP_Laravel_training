<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{config('app.name')}}@isset($title) {{ ' - '.$title }} @endisset</title>

<link rel="stylesheet" href="{{ mix('/css/app.css') }}">

<script src="{{ mix('/js/app.js') }}"></script>

@livewireStyles