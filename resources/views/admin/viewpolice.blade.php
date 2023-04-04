@extends('admin.admin_header')
@section('admin_body')
<div class="row">
 <div class="col-md-2"></div>
          <div class="col-md-10">

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th >ID</th>
                    <th > NAME</th>
                    <th >PASSWORD</th>
                    <th > EMAIL</th>
                </tr>
                  </thead>
                  <tbody>
                  @foreach($result as $value)
                    <tr>
                    <td>{{$value->id}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->password}}</td>
                <td>{{$value->email}}</td>

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