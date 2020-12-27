{{--@extends('layouts.app')--}}

{{--@section('content')--}}

{{--        <style>--}}
{{--            @import url(https://fonts.googleapis.com/css?family=Montserrat:700);--}}

{{--            body {--}}
{{--                margin: 0;--}}
{{--                /*width: 100%;*/--}}
{{--                /*height: 100vh;*/--}}
{{--                /*overflow: hidden;*/--}}
{{--                /*background: hsla(0, 5%, 5%, 1);*/--}}
{{--                /*background-repeat: no-repeat;*/--}}
{{--                /*background-attachment: fixed;*/--}}
{{--                /*background-image: linear-gradient(to right top, hsla(0, 5%, 15%, 0.5), hsla(0, 5%, 5%, 1));*/--}}
{{--            }--}}


{{--        </style>--}}


{{--    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">--}}
{{--        <div>--}}
{{--            <h4 class="mb-3 mb-md-0">Welcome to TESCOUK Dashboard</h4>--}}
{{--        </div>--}}
{{--        <div class="d-flex align-items-center flex-wrap text-nowrap">--}}
{{--            <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex"--}}
{{--                 id="dashboardDate">--}}
{{--                <span class="input-group-addon bg-transparent"><i data-feather="calendar"--}}
{{--                                                                  class=" text-primary"></i></span>--}}
{{--                <input type="text" class="form-control">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--        <div class="col-12 col-xl-12 stretch-card">--}}
{{--            <div class="row flex-grow">--}}

{{--                @include('layouts/category/category_home')--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div> <!-- row -->--}}
{{--        <br><br>--}}

{{--    <div class="row">--}}
{{--        <div class="col-12 col-xl-12 grid-margin stretch-card">--}}
{{--        <div>--}}
{{--            <h4 class="mb-3 mb-md-0">Profile</h4>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 col-xl-12 grid-margin stretch-card">--}}
{{--            <div class="row flex-grow">--}}
{{--                <div class="col-md-6 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}


{{--                            <div class="row mt-4 mb-3">--}}
{{--                                <div class="col-12 d-flex justify-content-center">--}}
{{--                                    <div>--}}
{{--                                        <h5 class="font-weight-bold mb-0 text-center">--}}
{{--                                            @if (session('status'))--}}
{{--                                                <div class="alert alert-success" role="alert">--}}
{{--                                                    {{ session('status') }}--}}
{{--                                                </div>--}}
{{--                                            @endif--}}

{{--                                            {{ __('You are logged in!') }}--}}
{{--                                        </h5>--}}

{{--                                        <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar" width="200">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 d-flex justify-content-center">--}}
{{--                                    <div>--}}
{{--                                        <div class="font-weight-bold mb-0 text-center">--}}
{{--                                            <svg>--}}
{{--                                                <path id="path">--}}
{{--                                                    <animate attributeName="d" from="m0,110 h0" to="m0,110 h1100" dur="6.8s" begin="0s" repeatCount="10"/>--}}
{{--                                                    <!--repeatCount="indefinite"-->--}}
{{--                                                </path>--}}
{{--                                                <text font-size="26" font-family="Montserrat" fill='hsl(50, 50%, 50%)'>--}}
{{--                                                    <textPath xlink:href="#path">Welcome {{ Auth::user()->name }}.--}}
{{--                                                    </textPath>--}}
{{--                                                </text>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline">--}}
{{--                                <h6 class="card-title mb-0">Upload Your Profile Picture</h6>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-6 col-md-12 col-xl-5">--}}
{{--                                    @include('layouts.flash')--}}
{{--                                    <form action="/upload" method="post" enctype="multipart/form-data">--}}
{{--                                        @csrf--}}
{{--                                        <input class="custom-file" type="file" name="image"/>--}}





{{--                                        <button type="submit" class="btn btn-primary btn-icon-text" value="upload">--}}
{{--                                            <i class="btn-icon-prepend" data-feather="upload-cloud"></i>--}}
{{--                                            Button with Icon--}}
{{--                                        </button>--}}



{{--                                    </form>--}}

{{--                                </div>--}}
{{--                                <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                    <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div> <!-- row -->--}}

{{--    @include('home_chart')--}}
{{--@endsection--}}

{{--@push('plugin-scripts')--}}
{{--    <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>--}}
{{--@endpush--}}

{{--@push('custom-scripts')--}}
{{--    <script src="{{ asset('assets/js/dashboard.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/js/datepicker.js') }}"></script>--}}
{{--@endpush--}}
