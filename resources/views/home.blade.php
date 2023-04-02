@extends('layouts.main')
@push('title')
<title>Home </title>
@endpush
@section('main-section')

<section class="content bg-light">

  <div class="container border border-primary rounded bg-white text-dark">
    <div class="container">
      <form action="{{url('/')}}/home" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="text" name="user_id" id="user_id" value="@php echo session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'); @endphp" hidden>
        <div class="form-group">
          <div class="form-group">
            <label for="post_text">What is happening</label>
            <textarea class="form-control" id="post_text" name="post_text" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="post_media">Add media</label>
            <input type="file" class="form-control" id="post_media" name="post_media" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Post</button>
      </form>
    </div>
  </div>
  </div>

  <div class="container ">
    <br>
    <br>
    <br>
    <br>
    <br>
    
  </div>
  <div class="container  border border-primary rounded bg-white text-dark">


  
@foreach ($post as $postitem)
    <div class="post">
      <div class="user-block">
        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
        <span class="username">
          @php
    $name = DB::table('users')->where('id', $postitem->user_id)->pluck('name');
    @endphp
          <a href="#">{{print_r($name[0])}}</a>
          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
        </span>
        <span class="description">{{$postitem->created_at}}</span>
        {{-- <span class="description">Posted 5 photos - 5 days ago</span> --}}
      </div>
      <!-- /.user-block -->
      <div class="row mb-3">
        <div class="col-sm-6">
          <img class="img-fluid" src="{{$postitem->post_media}}" alt="Photo">
        </div>
        <!-- /.col -->
        <!-- <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
              <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
            </div>
            <div class="col-sm-6">
              <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
              <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
            </div>
          </div>
        </div> -->
        <!-- /.col -->
      </div>
      <p>
        Lorem ipsum represents a long-held tradition for designers,
        typographers and the like. Some people hate it and argue for
        its demise, but others ignore the hate as they create awesome
        tools to help create filler text for everyone from bacon lovers
        to Charlie Sheen fans.
      </p>
      <!-- /.row -->

    </div>
    @endforeach
  </div>
  
  </div>
</section>
@endsection