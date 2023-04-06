@extends('public.public_header')
@section('user-body')
<section class="content">
  <div class="container-fluid">
    <div class="row my-5">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Save Licence</h3>
          </div>
          @foreach($rcbook as $value)
          <form action="/savercbookaction/{{$value->id}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="name"><b><h3>Upload Driving Licenece Original</h3></b></label>
                <input type="file" name="proof" id="name" class="form-control" value="Upload Here" required>
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