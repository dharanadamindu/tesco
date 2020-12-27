@include('layouts/sidebar_active');


<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            TESCO<span>UK</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{ active_class(['/']) }}">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item nav-category">web apps</li>
            <li class="nav-item {{ active_class(['email']) }}">
                <a class="nav-link" data-toggle="collapse" href="#email" role="button"
                   aria-expanded="{{ is_active_route(['Email']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Email</span>
                </a>

            </li>
            <li class="nav-item {{ active_class(['apps/c']) }}">
                <a href="{{ url('/apps/c') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Chat</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['apps/cd']) }}">
                <a href="{{ url('/apps/cd') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>

            <li class="nav-item nav-category">TESCO Categories</li>
            {{--Cat A--}}
            <li class="nav-item {{ active_class(['cat-a-components/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#catAComponents" role="button"
                   aria-expanded="{{ is_active_route(['cat-a-components/*']) }}" aria-controls="AcatComponents">
                    {{--                    <i class="mdi mdi-beer"></i>--}}
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">A Category</span>
                </a>
            </li>

            {{--Cat B--}}
            <li class="nav-item {{ active_class(['cat-b-components/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#catBComponents" role="button"
                   aria-expanded="{{ is_active_route(['cat-b-components/*']) }}" aria-controls="BcatComponents">
                    {{--                    <i class="mdi mdi-battery-70"></i>--}}
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">B Category</span>
                </a>
            </li>

            {{--Cat C--}}
            <li class="nav-item {{ active_class(['cat-c-components/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#catCComponents" role="button"
                   aria-expanded="{{ is_active_route(['cat-c-components/*']) }}" aria-controls="CcatComponents">
                    {{--                    <i class="mdi mdi-flask-outline"></i>--}}
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">C Category</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['cat-c-components/*']) }}" id="catCComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/cat-c-components/1') }}"
                               class="nav-link {{ active_class(['cat-c-components/1']) }}">Pet Food</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/cat-c-components/2') }}"
                               class="nav-link {{ active_class(['cat-c-components/2']) }}">Others</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/cat-c-components/3') }}"
                               class="nav-link {{ active_class(['cat-c-components/3']) }}">Updates</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{--Cat D--}}
            <li class="nav-item {{ active_class(['cat-d-components/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#catDComponents" role="button"
                   aria-expanded="{{ is_active_route(['cat-d-components/*']) }}" aria-controls="DcatComponents">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">D Category</span>
                </a>
            </li>

            {{--Cat E--}}
            <li class="nav-item {{ active_class(['cat-e-components/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#catEComponents" role="button"
                   aria-expanded="{{ is_active_route(['cat-e-components/*']) }}" aria-controls="EcatComponents">
                    {{--                    <i class="mdi mdi-fish"></i>--}}
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">E Category</span>
                </a>
            </li>


            {{--Cat F--}}
            <li class="nav-item {{ active_class(['cat-f-components/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#catFComponents" role="button"
                   aria-expanded="{{ is_active_route(['cat-f-components/*']) }}" aria-controls="FcatComponents">
                    {{--                    <i class="mdi mdi-food-variant"></i>--}}
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">F Category</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['category/*']) }}" id="catFComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('choco') }}"
                               class="nav-link {{ active_class(['choco']) }}">Juice and Water</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/cat-f-components/2') }}"
                               class="nav-link {{ active_class(['cat-f-components/2']) }}">Soft Drinks</a>
                        </li>
                        <li class="nav-item">
{{--                            <a href="{{ url('nuts') }}"--}}
                            <a href="{{ url('nuts') }}"
                               class="nav-link {{ active_class(['nuts']) }}">Snacks</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/cat-f-components/4') }}"
                               class="nav-link {{ active_class(['cat-f-components/4']) }}">Others</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/cat-f-components/5') }}"
                               class="nav-link {{ active_class(['cat-f-components/5']) }}">Updates</a>
                        </li>
                    </ul>
                </div>
            </li>




            <li class="nav-item nav-category">Updates</li>
            {{--Reclining SKU--}}
            <li class="nav-item {{ active_class(['apps/rec']) }}">
                <a href="{{ url('/apps/rec') }}" class="nav-link">
                    <i class="link-icon" data-feather="trending-down"></i>
                    <span class="link-title">Reclining SKU</span>
                </a>
            </li>

            {{-- Stock Attribute--}}
            <li class="nav-item {{ active_class(['apps/sto']) }}">
                <a href="{{ url('/apps/sto') }}" class="nav-link">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">Stock Attribute</span>
                </a>
            </li>

            {{--Obuscated--}}
            <li class="nav-item {{ active_class(['apps/ob']) }}">
                <a href="{{ url('/apps/ob') }}" class="nav-link">
                    <i class="link-icon" data-feather="sidebar"></i>
                    <span class="link-title">Obfuscated Other</span>
                </a>
            </li>


            {{--Approval Recognition--}}
            <li class="nav-item {{ active_class(['apps/ap']) }}">
                <a href="{{ url('/apps/ap') }}" class="nav-link">
                    <i class="link-icon" data-feather="tag"></i>
                    <span class="link-title">Approval Recognition</span>
                </a>
            </li>

            {{--Pricing--}}
            <li class="nav-item {{ active_class(['pricing-components/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#pricingComponents" role="button"
                   aria-expanded="{{ is_active_route(['pricing-components/*']) }}" aria-controls="pricingAComponents">
                    <i class="link-icon" data-feather="alert-triangle"></i>
                    <span class="link-title">Pricing</span>

                </a>

            </li>

            <li class="nav-item nav-category">Others</li>
            {{--Deno calc--}}
            <li class="nav-item {{ active_class(['apps/Calculator']) }}">
                <a href="{{ url('/apps/Calculator') }}" class="nav-link">
                    <i class="link-icon" data-feather="percent"></i>
                    <span class="link-title">Denominator Calculator</span>
                </a>
            </li>

            <li class="nav-item {{ active_class(['apps/Others1']) }}">
                <a href="{{ url('/apps/Others1') }}" class="nav-link">
                    <i class="link-icon" data-feather="command"></i>
                    <span class="link-title">Others1</span>
                </a>
            </li>{{--others--}}
            <li class="nav-item {{ active_class(['apps/Others2']) }}">
                <a href="{{ url('/apps/Others2') }}" class="nav-link">
                    <i class="link-icon" data-feather="command"></i>
                    <span class="link-title">Others2</span>
                </a>
            </li>




{{--            @include('layouts/sidebar_ui')--}}

        </ul>
    </div>
</nav>

