@extends('admin.admin_header')
@section('admin_body')
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-9">

    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead class="bg-warning">
          <tr>
            <th >id</th>
            <th >name</th>
            <th >sof</th>
            <th >address</th>
            <th >dob</th>
            <th >blood group</th>
            <th >category</th>
            <th >valid from</th>
            <th >valid to</th>
            <th >edit</th>
            <th >delete</th>

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
            <td><a href="/delete1/{{$value->id}}">delete</a></td>

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