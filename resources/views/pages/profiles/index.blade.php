@extends('layouts.app')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet"/>

@endpush
<style>
    .shape {
        fill: transparent;
        stroke-dasharray: 140, 540;
        stroke-dashoffset: -474;
        stroke-width: 8px;
        stroke: #19f6e8;
    }

    .text {
        color: #fff;
        font-family: 'Roboto Condensed';
        font-size: 22px;
        letter-spacing: 8px;
        line-height: 32px;
        position: relative;
        top: -48px;
    }

    @keyframes draw {
        0% {
            stroke-dasharray: 140, 540;
            stroke-dashoffset: -474;
            stroke-width: 8px;
        }
        100% {
            stroke-dasharray: 760;
            stroke-dashoffset: 0;
            stroke-width: 2px;
        }
    }

    .svg-wrapper:hover .shape {
        -webkit-animation: 0.5s draw linear forwards;
        animation: 0.5s draw linear forwards;
    }
</style>
@section('content')
    <div class="row">
        <div class="col-xl-10 main-content pl-xl-4 pr-xl-5">
            <h1 class="page-title">Profile</h1>
            <p class="lead">welcome to TescoUK profile page</p>
            <hr>
            <h4 id="default">{{ Auth::user()->name }}</h4>

            <div class="example">
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-4 grid-margin grid-margin-md-0">
                        <div class="card">
                            <div class="login100-pic js-tilt" data-tilt>
                                <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar"
                                     class="card-img-top" width="200">
                            </div>
                            <div class="card-body">
                                {{--text here--}}
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul>
                            <li><span>name - </span>{{ Auth::user()->name }}</li>
                            <li><span>email -</span> {{ Auth::user()->email }}</li>
                            <li><span>Employee number - </span>{{ Auth::user()->eno }}</li>
                            @if(Auth::user()->project_name==null)
                                <li class="alert-danger">Add your project name</li>
                            @else
                                <li>
                                    @switch(Auth::user()->project_name)
                                        @case(1)
                                        <td><span>A Category</span></td>
                                        @break
                                        @case(2)
                                        <td><span>B Category</span></td>
                                        @break
                                        @case(3)
                                        <td><span>C Category</span></td>
                                        @break
                                        @case(4)
                                        <td><span>D Category</span></td>
                                        @break
                                        @case(5)
                                        <td><span>E Category</span></td>
                                        @break
                                        @case(6)
                                        <td><span>F Category</span></td>
                                        @break
                                        @default
                                        <td><span>no data</span></td>
                                    @endswitch
                                </li>
                            @endif
                        </ul>
                    </div>


                    <div class="col-12 col-md-6 col-xl-4 grid-margin grid-margin-md-0">
                        <div class="card">
                            <div class="">
                                <br><br><br>
                                <div class="svg-wrapper" style="text-align:center">
                                    <svg height="60" width="320">
                                        <rect class="shape" height="50" width="320"/>
                                    </svg>
                                    <div class="text" style="overflow:hidden;">
                                        <a href="/profile/{{Auth::user()->id}}/edit" style="color:white;">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                {{--text here--}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="col-xl-2 content-nav-wrapper">
            <ul class="nav content-nav d-flex flex-column">
                <li class="nav-item">
                    <a href="#default" class="nav-link">1</a>
                </li>
                <li class="nav-item">
                    <a href="#contents" class="nav-link">2</a>
                </li>
                <li class="nav-item">
                    <a href="#header-footer" class="nav-link">3</a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
    <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}" defer></script>
@endpush
