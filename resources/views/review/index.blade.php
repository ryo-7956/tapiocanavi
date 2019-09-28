<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>タピオカなび</title>
    </head>
    <body>
    @forelse ($user->reviews as $review)
            <h1>{{ $review->review_title }}</h1>
            @empty
            <a>No reviews yet</a>
            @endforelse
    </body>
</html>