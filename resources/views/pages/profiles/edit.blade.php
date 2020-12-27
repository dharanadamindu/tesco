@extends('layouts.app')



@section('content')
    <div class="row">
        <div class="col-xl-10 main-content pl-xl-4 pr-xl-5">
            <h1 class="page-title">Profile</h1>
            <p class="lead">welcome to TescoUK profile Edit page</p>

            <h4 id="default">{{ Auth::user()->name }}</h4>

            <div class="example">
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-4 grid-margin grid-margin-md-0">
                        <div class="card">
                            <div class="wrap-login100">
                                <div class="login100-pic js-tilt" data-tilt>
                                    <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar"
                                         class="card-img-top" width="200">
                                </div>
                            </div>

                            <div class="card-body">
                                {{Auth::user()->name}}<br>
                                {{Auth::user()->email}}<br>
                                {{Auth::user()->eno}}<br>
                                @switch(Auth::user()->project_name)
                                    @case(1)
                                    <span class="badge badge-danger">A Category</span>
                                    @break
                                    @case(2)
                                    <span class="badge badge-success">B Category</span>
                                    @break
                                    @case(3)
                                    <span class="badge badge-info-muted">C Category</span>
                                    @break
                                    @case(4)
                                    <span class="badge badge-warning">D Category</span>
                                    @break
                                    @case(5)
                                    <span class="badge badge-danger-muted text-white">E Category</span>
                                    @break
                                    @case(6)
                                    <span class="badge badge-primary">F Category</span>
                                    @break
                                    @default
                                    <span class="badge badge-primary">no data</span>
                                @endswitch
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Profile</h4>
                                <p class="card-description"></p>
                                {{-- <form class="cmxform" id="signupForm" method="post" action="['profile.update',{{ Auth::user()->id }}]">--}}
                                <form class="" id="signupForm" action="{{route('profile.update',Auth::user()->id)}}"
                                      method="post">
                                    @csrf @method('PUT')
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" class="form-control" name="name"
                                                   placeholder="Enter First Name"
                                                   value="{{ Auth::user()->name }}" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" class="form-control" name="email"
                                                   placeholder="Enter Email"
                                                   value="{{ Auth::user()->email }}" type="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="eno">Employee Number</label>
                                            <input id="eno" class="form-control" name="eno"
                                                   placeholder="Enter G- Number"
                                                   value="{{ Auth::user()->eno }}" type="eno">
                                        </div>
                                        <div class="form-group">
                                            <label for="project_name">Project Name</label>
                                            <select class="form-group" name="project_name">

                                                <option
                                                    value="1" {{ Auth::user()->project_name == 1 ? 'selected' : '' }}>A
                                                    Category
                                                </option>
                                                <option
                                                    value="2" {{ Auth::user()->project_name == 2 ? 'selected' : '' }}>B
                                                    Category
                                                </option>
                                                <option
                                                    value="3" {{ Auth::user()->project_name == 3 ? 'selected' : '' }}>C
                                                    Category
                                                </option>
                                                <option
                                                    value="4" {{ Auth::user()->project_name == 4 ? 'selected' : '' }}>D
                                                    Category
                                                </option>
                                                <option
                                                    value="5" {{ Auth::user()->project_name == 5 ? 'selected' : '' }}>E
                                                    Category
                                                </option>
                                                <option
                                                    value="6" {{ Auth::user()->project_name == 6 ? 'selected' : '' }}>F
                                                    Category
                                                </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" class="form-control" name="password" type="password"
                                                   placeholder="Enter password here">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm password</label>
                                            <input id="confirm_password" class="form-control" name="confirm_password"
                                                   type="password" placeholder="Enter same password here">
                                        </div>

                                        {{--                                    <input class="btn btn-primary" type="submit" value="Edit Profile">--}}
                                    </fieldset>
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
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
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
@endpush



<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}" defer></script>

