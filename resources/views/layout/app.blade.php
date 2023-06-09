<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield( 'titlePage' )</title>
    <link rel="icon" type="images/svg+xml" href="{{ Vite::asset('resources/images/favicon.ico') }}" />
    <!-- Styles -->
    @vite('resources/js/app.js')
    <!-- CDN -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
</head>

<body>

    @include('partials.header')
    <div class="mainView">
        @yield( 'content' )
        <h1>Main</h1>
    </div>

</body>

</html>