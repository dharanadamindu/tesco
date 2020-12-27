<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{ asset('partical/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('partical/node.css') }}" rel="stylesheet"/>
    <!-- Styles -->
    <style>

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

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


        /*nodejs*/


    </style>
</head>
<body>


{{--<div id="particles-js">--}}


{{--<div class="flex-center position-ref full-height">--}}

{{--    <div class="content">--}}
{{--        <div class="title m-b-md">--}}
{{--            Laravel--}}
{{--        </div>--}}

{{--        <div class="links">--}}
{{--            <a href="https://laravel.com/docs">Docs</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</div>--}}


{{--<div style="position: absolute;">--}}
{{--    <canvas id="nodes">--}}
{{--    </canvas>--}}
{{--</div>--}}


<div style="position: relative; z-index: 100;">
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
            </div>
        </div>
    </div>
</div>


</div>


<script src="{{ asset('./partical/particles.js') }}"></script>
<script src="{{ asset('partical/app.js') }}"></script>
<script src="{{ asset('partical/stats.js') }}"></script>


<script src="{{ asset('partical/node.js') }}"></script>


</body>
</html>
