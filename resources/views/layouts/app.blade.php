<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $title ?? '' }}</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        {{ $styles ?? "" }}
    </head>

    <body>
        {{  $slot }}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        {{ $script ?? "" }}
    </body>
</html>