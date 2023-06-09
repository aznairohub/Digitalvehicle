@extends('admin.admin_header')
@section('admin_body')
<div class="row">
  <div class="col-2"></div>
  <div class="col-md-10">
  <div class="card-header bg-danger text-dark">
            <h3 class="card-title">VIEW PUBLICS</h3>
        </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>DOB</th>
            <th>BLOOD GROUP</th>
            <th>HEIGHT</th>
            <th>WEIGHT</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
          </tr>
        </thead>
        <tbody>
          @foreach($result as $value)
          <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->address}}</td>
            <td>{{$value->dob}}</td>
            <td>{{$value->bg}}</td>
            <td>{{$value->hgt}}</td>
            <td>{{$value->wgt}}</td>
            <td>{{$value->username}}</td>
            <td>{{$value->psd}}</td>


          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>


@endsection