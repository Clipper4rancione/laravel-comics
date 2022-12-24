<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Laravel DC Comics</title>
</head>

<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <div class="app_main">
        <div class="container">
            <div class="card-wrapper">
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
                @include('partials.card')
            </div>
            <div class="cta">
                <div class="button-show-more">show more</div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    @yield('content')
</body>

</html>
