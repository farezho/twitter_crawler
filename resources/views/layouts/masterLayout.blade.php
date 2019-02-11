<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twitter Crawler</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #edfeff; /*#fcf2f3 */
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 88vh; /* default 100vh */
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
                font-size: 30px;
                color: #4c3232;
            }

            .links > a {
                color: #4c3232; /* default #636b6f */
                padding: 0 15px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                position: relative;
            }

            .links > a::after{
                content: "";
                background: white;
                mix-blend-mode: exclusion;
                width: calc(100%); /* default 100% + 20px*/
                height: 0;
                position: absolute;
                bottom: -4px;
                left: -3px; /*default -10*/
                transition: all .3s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            }

            .links > a:hover::after{
                height: calc(100% + 8px)
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .footer{
                text-align: center;
                color: #3f2a2a;
                font-size: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <!--  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->

            <div class="content">
                @yield("content")
            </div>
        </div>
        <div class="footer">
            <strong> &copy; Copyright Farezho. All Rights Reserved | </strong>
            <strong> Powered by <a target="_blank" rel="noopener noreferrer" href="https://developer.twitter.com/en/docs/api-reference-index">Twitter API</a>
             & <a target="_blank" rel="noopener noreferrer" href="https://github.com/thujohn/twitter">Thujohn</a>
            </strong>
        </div>
    </body>
</html>
