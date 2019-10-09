<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>タピオカなび</title>
    @if(app('env') == 'production')
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    @else
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
</head>
<body>
    
@yield('content')
    
    @if(app('env') == 'production')
    <script src="{{ secure_asset('js/app.js') }}"></script>
    @else
    <script src="{{ asset('js/app.js') }}"></script>
    @endif
</body>
</html>