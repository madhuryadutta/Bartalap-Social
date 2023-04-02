@extends('layouts.main')
@push('title')
<title>Profile </title>
@endpush
@section('main-section')
<section class="content">
    <div class="container-fluid">
        <div class="container">


            <form action="{{url('/')}}/editprofile" method="post">
                @csrf
                <input type="text" name="id" id="id" value="@php echo session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'); @endphp" hidden>
                <div class="form-group">
                    <label for="about_me">About Me</label>
                    <input type="text" class="form-control" id="about_me" name="about_me" placeholder="Bio">
                </div>
                <div class="form-group">
                    <label for="phone_no">Phone No</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone No">
                </div>
                <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Date Of Birth">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" placeholder="Select Your Gender">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="current_city">Current City</label>
                    <input type="text" class="form-control" id="current_city" name="current_city" placeholder="Select Your Current City">
                </div>
                <div class="form-group">
                    <label for="hometown">Hometown</label>
                    <input type="text" class="form-control" id="hometown" name="hometown" placeholder="Select Your Hometown">
                </div>
                <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Select Your Occupation">
                </div>
                <div class="form-group">
                    <label for="marital_status">Marital Status</label>
                    <input type="text" class="form-control" id="marital_status" name="marital_status" placeholder="Marital Status">
                </div>
                <div class="form-group">
                    <label for="relationship_status">Relationship Status</label>
                    <input type="text" class="form-control" id="relationship_status" name="relationship_status" placeholder="Relationship Status">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection