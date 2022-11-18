<!DOCTYPE html>

<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">

<link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

<link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SITAJAKDATA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
        <style>


            body {
                background-image: url(AdminLte/dist/img/bg.png);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                height: 100%;
                
                font-family: 'Nunito', sans-serif;
            }


            .button {
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }

            .button1 {background-color: #C0C0C0;} /* white */

            .p1 {
                font-family: "times New Roman", Times, serif;
            }
        </style>
    </head>

    <body>

    <!-- music  -->
        <audio hidden autoplay loop> 
        <source src="{{ asset('AdminLte/dist/img/.mp3')}}" type="audio/mpeg">
        </audio>
            

        <div>
            <center>
            <img src="{{ asset('AdminLte/dist/img/logoawal.png')}}" height="500" width="500">
            </center>

            <center>
            <button class="button button1">
                @if (Route::has('login'))

                <div class="pull-right">
                @auth
                 <a href="{{ url('/home') }}">home</a>
                </div>

                @else
                <div class="pull-right">
                <a href="{{ route('login') }}">Log in</a>
                </div>
                </button>
                

                <button class="button button1">
                @if (Route::has('registrasi'))
                <div class="pull-right">
                <a href="{{ route('registrasi') }}" >Register</a>
                 </div>
                 @endif </button>


                 @endauth
                 @endif
                </li>
                </ul>
                </li>
                </center>
                </div>
            </div>
        </div>
    </body>
                                    
</html>

