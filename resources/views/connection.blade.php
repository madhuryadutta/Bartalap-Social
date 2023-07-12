@extends('common.main')
@push('title')
<title></title>
@endpush
@push('jsfile')
<script src="{{ asset('assets/js/connection.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/connection.css') }}">
<!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script> -->
@endpush
@section('main-section')
@section('main-section')

<div class="container pt-5 mt-5 ">
    <div class="row">
        <div class="col-md-12">
            <div id="content" class="content content-full-width">
                <!-- begin profile-content -->
                <div class="profile-content">
                    <!-- begin tab-content -->
                    <div class="tab-content p-0">
                        <!-- begin #profile-friends tab -->
                        <div class="tab-pane fade in active show" id="profile-friends">
                            <h4 class="m-t-0 m-b-20">Search Results (14)</h4>
                            <!-- begin row -->
                            <div class="row row-space-2">
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">James Pittman</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 34px, 0px);">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Mitchell Ashcroft</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Ella Cabena</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, -2px, 0px);">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Declan Dyson</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">George Seyler</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Patrick Musgrove</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Taj Connal</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Laura Pollock</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Dakota Mannix</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Timothy Woolley</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Benjamin Congreve</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Mariam Maddock</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Blake Gerrald</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Gabrielle Bunton</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end #profile-friends tab -->
                    </div>
                    <!-- end tab-content -->
                </div>
                <!-- end profile-content -->
            </div>
        </div>
    </div>
</div>
@endsection