<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>タピオカなび</title>
    </head>
    <body>
    <a>{{ $prefecture->name }}</a>
    <ul>
    @forelse ($prefecture->shops as $shop)
    <li>{{ $shop->shop_name }}</li>
    @empty
    <li>No shops yet</li>
    @endforelse
    <ul>
    </body>
</html>