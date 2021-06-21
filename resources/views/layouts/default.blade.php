<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.min.css'/>
</head>
<body>
    <nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-brand">
                <a href="/" class="navbar-item">
                    {{ config('app.name') }}
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-end">
                    <a href="{{ route('products.index') }}" class="navbar-item is-tab">
                        Products
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>
</body>
</html>