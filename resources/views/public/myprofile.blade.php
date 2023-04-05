@extends('public.public_header')
@section('user-body')
<section class="content">
  <div class="container-fluid">
    <div class="row my-5">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">REGISTRATION</h3>
          </div>
          @foreach($sess as $value)
          <form action="/updateprofileaction/{{$value->id}}" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="name">YOUR NAME</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$value->username}}">
              </div>
              <div class="form-group">
                <label for="address">ADDRESS</label>
                <input type="text" name="address" id="address" class="form-control" value="{{$value->address}}">
              </div>
              <div class="form-group">

                <label for="dob">DOB:</label>
                <input type="text" name="dob" id="dob" class="form-control" value="{{$value->dob}}">
              </div>
              <div class="form-group">
                <label for="bg">BLOOD GROUP:</label>
                <input type="text" name="bg" id="bg" class="form-control" value="{{$value->bg}}">
              </div>
              <div class="form-group">
                <label for="hgt">HEIGHT</label>
                <input type="text" name="hgt" id="hgt" class="form-control" value="{{$value->dob}}">
              </div>
              <div class="form-group">
                <label for="wgt">WEIGHT</label>
                <input type="text" name="wgt" id="wgt" class="form-control" value="{{$value->hgt}}">
              </div>
              <div class="form-group">
                <label for="vt">USERNAME</label>
                <input type="text" name="username" id="username" class="form-control" value="{{$value->wgt}}">
              </div>
              <div class="form-group">
                <label for="psd">PASSWORD</label>
                <input type="password" name="psd" id="psd" class="form-control" value="{{$value->password}}">
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" name="register" class="btn btn-block btn-primary" id="register">Register</button>
            </div>
          </form>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>
@endsection