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

        <!-- Styles -->
       
        <style>


            body {
                background-image: url(AdminLte/dist/img/3.png);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                height: 100%;
                
                font-family: 'Nunito', sans-serif;
                
            }

            .p1 {
                font-family: "times New Roman", Times, serif;
            }

            button{
                font-family: sans-serif;
                font-size: 15px;
                background: #127bcb;
                color: white;
                border: white 3px solid;
                border-radius: 5px;
                padding: 12px 20px;
                margin-top: 10px;
            }

        </style>
    </head>

    <body>

    <!-- music  -->
        <audio hidden autoplay loop> 
        <source src="{{ asset('AdminLte/dist/img/marskeuangan.mp3')}}" type="audio/mpeg">
        </audio>
            

        <div>
            <center>
            <img src="{{ asset('AdminLte/dist/img/2.png')}}" height="500" width="500">
            </center>

        
            
            <center>
            
            <button>
                @if (Route::has('login'))
                @auth
                 <a style="text-decoration:none"  href="{{ url('/home') }} ">
                 <font color="white">home</font></a>
              
                 <button>
                @else
                <a style="text-decoration:none" href="{{ route('login') }}" > <font color="white">Log in</font></a>
                </button>
             
                

                <!-- <button> 
                @if (Route::has('register'))
        
                <a style="text-decoration:none" href="{{ route('register') }} " ><font color="white">Register</font></a>
                 @endif </button>-->


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

