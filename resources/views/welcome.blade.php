<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css"
        integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a > i{
            padding: 5px 15px;
            font-size: 30px;
            font-weight: 600;
            color: #636b6f;
            text-decoration: none;
            font-style: normal;

        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .mr-1 {
            margin-right: 5px;
        }

        i {

        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">

            <h2 style="text-transform:uppercase">
                {{ env('APP_NAME') }} - API DE TESTE PRATICO
            </h2>
            {{-- <div class="links">
                <a href="https://github.com/lcmacedo07" class="mr-1">
                    <i class="fab fa-github"></i>
                </a>
                <a href="{{ url('/oauth/google/localhost') }}" class="mr-1">
                    <i class="fab fa-google"></i>
                </a>
                <a href="{{ url('/oauth/facebook/localhost') }}" class="mr-1">
                    <i class="fab fa-facebook"></i>
                </a>
            </div> --}}
        </div>
    </div>
</body>

</html>
