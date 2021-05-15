<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cooperando</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                font-size: 5px;
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

            .h1{
                font-size: 100px;
            }

            .links1 > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 40px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }} ">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">          
                
                <div class="links1">
                    
            <a href="{{ url('/home') }}" ><h1>Cooperando</h1></a>
                    </div>
                        
            

                <div class="links">
                
                <a href=""><h4>Encontranos en</h4></a>
                
                    <a href="https://Facebook.com"><h7>Facebook</h7></a>
                    <a href="https://twitter.com"><h7>Twitter</h7></a>
                    <a href="https://youtube.com"><h7>YouTube</h7></a>
                    <a href="https://github.com/"><h7>GitHub</h7></a>
                </div>
            </div>
        </div>

    </body>
    
</html>

