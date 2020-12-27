@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet"/>
@endpush




<div class="row">
    <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Inbox</h6>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="d-flex align-items-center border-bottom pb-3">
                        <div class="mr-3">
                            <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35"
                                 alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">dharana</h6>
                                <p class="text-muted tx-12">12.30 PM</p>
                            </div>
                            <p class="text-muted tx-13">Hey! there I'm available...</p>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center border-bottom py-3">
                        <div class="mr-3">
                            <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35"
                                 alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">damindu</h6>
                                <p class="text-muted tx-12">02.14 AM</p>
                            </div>
                            <p class="text-muted tx-13">Hey! there I'm available...</p>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center border-bottom py-3">
                        <div class="mr-3">
                            <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35"
                                 alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">naveen</h6>
                                <p class="text-muted tx-12">08.22 PM</p>
                            </div>
                            <p class="text-muted tx-13">Hey! there I'm available...</p>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center border-bottom py-3">
                        <div class="mr-3">
                            <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35"
                                 alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">lahiru</h6>
                                <p class="text-muted tx-12">05.49 AM</p>
                            </div>
                            <p class="text-muted tx-13">Hey! there I'm available...</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-xl-8 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Projects</h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                                                                                           class="icon-sm mr-2"></i>
                                <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                                                                                           class="icon-sm mr-2"></i>
                                <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                                                                                           class="icon-sm mr-2"></i>
                                <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                                                                                           class="icon-sm mr-2"></i>
                                <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                                                                                           class="icon-sm mr-2"></i>
                                <span class="">Download</span></a>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Employee ID</th>
                            <th>Project</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tbody>
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->eno}}</td>
                                @switch($user->project_name)
                                    @case(1)
                                    <td><span class="badge badge-danger">A Category</span></td>
                                    @break
                                    @case(2)
                                    <td><span class="badge badge-success">B Category</span></td>
                                    @break
                                    @case(3)
                                    <td><span class="badge badge-info-muted">C Category</span></td>
                                    @break
                                    @case(4)
                                    <td><span class="badge badge-warning">D Category</span></td>
                                    @break
                                    @case(5)
                                    <td><span class="badge badge-danger-muted text-white">E Category</span></td>
                                    @break
                                    @case(6)
                                    <td><span class="badge badge-primary">F Category</span></td>
                                    @break
                                    @default
                                    <td><span class="badge badge-primary">no data</span></td>
                                @endswitch
                            </tr>


                            </tbody>
                        @endforeach
                    </table>
                </div>


            </div>
        </div>
    </div>
</div> <!-- row -->


@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
