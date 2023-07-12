@extends('common.main')
@push('title')
<title></title>
@endpush
@push('jsfile')
<script src="{{ asset('assets/js/find_people.js') }}"></script>
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
                            <h4 class="m-t-0 m-b-20" id=result_count></h4>
                            <!-- begin row -->
                            <div class="row row-space-2" id="people_result_data">
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