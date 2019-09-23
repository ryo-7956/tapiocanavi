<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>タピオカなび</title>
    </head>
    <body>
    @forelse ($reviews as $review)
    <a>{{ $review->review_comment }}</a>
    @empty
    <a>No shops yet</a>
    @endforelse
    </body>
</html>