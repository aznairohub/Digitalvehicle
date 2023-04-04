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
              <th>ID</th>
              <th>NAME</th>
              <th>DL NUMBER</th>
              <th>S/D/W OF</th>
              <th>ADDRESS</th>
              <th>DOB</th>
              <th>BLOOD GROUP</th>
              <th>CATEGORY</th>
              <th>VALID FROM</th>
              <th>VALID TO</th>
              <th>ADD PUNISHMENT</th>

            </tr>
          </thead>
          <tbody>
            @foreach($result as $value)

            <tr>
              <td>{{$value->id}}</td>
              <td>{{$value->username}}</td>
              <td>{{$value->dlno}}</td>
              
              <td>{{$value->sof}}</td>
              <td>{{$value->address}}</td>
              <td>{{$value->dob}}</td>
              <td>{{$value->bg}}</td>
              <td>{{$value->cat}}</td>
              <td>{{$value->vf}}</td>
              <td>{{$value->vt}}</td>
              <td><a href="/ppunishment/{{$value->id}}">ADD</a></td>

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