@extends('police.police_header')
@section('police_body')
<section class="py-5">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-md-10">

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead class="bg-warning">
            <tr>
              <th>id</th>
              <th>name</th>
              <th>sof</th>
              <th>address</th>
              <th>dob</th>
              <th>blood group</th>
              <th>category</th>
              <th>valid from</th>
              <th>valid to</th>
              <th>Add Punishment</th>

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
              <td><a href="/ppunishment/{{$value->id}}">add</a></td>

            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>



</section>

@endsection