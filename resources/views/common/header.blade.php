<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    @stack('title')
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="https://databytedigital.com/image/logo.png">
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="{{ asset('assets/3p/fontawesome.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/3p/inter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Tailwind CSS -->
    <script src="{{ asset('assets/3p/tailwindcss.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="{{ asset('assets/3p/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/index.js') }}"></script> --}}


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custom js file for the page  -->
    @stack('jsfile')


</head>

<body class="bg-white">
    <nav>
        <div class="container">
            <div class="logo-holder logo-4">
                <a href="{{route('dashboard')}}" style="text-decoration:none;">
                    <h3>Bartalap</h3>
                    <!-- <p>ipsum dolor sit</p> -->
                </a>
            </div>
            <div class="d-inline ">
                {{-- <a href="{{route('dashboard')}}" style="text-decoration:none;">
                <span>Home</span>
                </a>
                <a href="{{route('connection')}}" style="text-decoration:none;">
                    <span>Connection</span>
                </a>
                <a href="{{route('messages')}}" style="text-decoration:none;">
                    <span>Message</span>
                </a> --}}


            </div>
            {{-- <a class="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#loginModal">{{ __('Login') }}</a> --}}
            <div class="search-bar">
                <!-- <i class="uil uil-search"></i> -->
                <input type="search" placeholder="search for creators, posts">

            </div>
            <div>
                <a href="{{route('People.view')}}" style="text-decoration:none;">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>

            </div>


            {{-- <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>
            </div> --}}


            <div class="btn-group dropdown">
                <div class="profile-photo">
                    @if( session()->get('profile_pic')!='')
                    <a href="{{route('PublicProfile.view')}}"> <img src="{{'/AlphaStorage/'.session()->get('profile_pic')}}" id="profile_pic_header"> </a>
                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                    @else
                    <a href="{{route('PublicProfile.view')}}"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" id="profile_pic_header"> </a>
                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                    @endif
                </div>
                <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 34px, 0px);">
                    <li><a href="{{route('PublicProfile.view')}}">Profile </a></li>
                    <li><a href="javascript:;">Settings</a></li>
                    <!-- <li data-toggle="modal" data-target="#loginModal"><a href="javascript:;">login</a></li> -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a>

                        </form>

                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main>