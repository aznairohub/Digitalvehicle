@extends('admin.admin_header')
@section('admin_body')
<div class="row">
 <div class="col-2"></div>
          <div class="col-md-10">

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead class="bg-warning">
                    <tr>
                    <th >ID</th>
                    <th >NAME</th>
                    <th >EMAIL</th>
                    <th >SUBJECT</th>
                    <th >MESSAGE</th>
                </tr>
                  </thead>
                  <tbody>
                  @foreach($result as $value)
                    <tr>
                    <td>{{$value->id}}</td>
                <td>{{$value->first}}</td>
                <td>{{$value->second}}</td>
                <td>{{$value->third}}</td>
                <td>{{$value->msg}}</td>

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