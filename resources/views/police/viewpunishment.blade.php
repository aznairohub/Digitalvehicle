@extends('police.police_header')
@section('police_body')
<div class="row">
  <div class="col-2"></div>
  <div class="col-md-10">

    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>USER NAME</th>
            <th>DRIVING LICENECE NUM</th>

            <th>REASON</th>
            <th>PUNISHMENT</th>
            <th>STATUS</th>
            <th>CHANGE STATUS</th>

          </tr>
        </thead>
        <tbody>
          @foreach($result as $value)

          <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->username}}</td>
            <td>{{$value->dlno}}</td>
            <td>{{$value->first}}</td>
            <td>{{$value->second}}</td>
            <td>{{$value->status}}</td>
            <td><a href="/changestatus/{{$value->id}}">CHANGE</a></td>

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