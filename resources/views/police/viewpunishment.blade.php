@extends('police.police_header')
@section('police_body')
<div class="row">
  <div class="col-2"></div>
  <div class="col-md-10">
  <div class="row my-5">
                <div class="col-md-12 bg-danger p-4">
                    VIEW PUNISHMENTS
                </div>
            </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive  py-3 my-3">
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