@extends('admin.admin_header')
@section('admin_body')
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-9">
  <div class="card-header bg-danger text-dark">
            <h3 class="card-title">VIEW LICENCE</h3>
        </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead class="bg-warning">
          <tr>
            <th >ID</th>
            <th >NAME</th>
            <th >S/D/W OF</th>
            <th >ADDRESS</th>
            <th >DOB</th>
            <th >BLOOD GROUP</th>
            <th >CATEGORY</th>
            <th >VALID FROM</th>
            <th >VALID TO</th>
            <th >EDIT</th>
            <th >DELETE</th>

          </tr>
        </thead>
        <tbody>
          @foreach($result as $value)

          <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->username}}</td>
            <td>{{$value->sof}}</td>
            <td>{{$value->address}}</td>
            <td>{{$value->dob}}</td>
            <td>{{$value->bg}}</td>
            <td>{{$value->cat}}</td>
            <td>{{$value->vf}}</td>
            <td>{{$value->vt}}</td>
            <td><a href="/editlisence/{{$value->id}}">EDIT</a></td>
            <td><a href="/delete1/{{$value->id}}">DELETE</a></td>

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