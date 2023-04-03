@extends('admin.admin_header')
@section('admin_body')
<div class="row">
 <div class="col-2"></div>
          <div class="col-md-10">

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th bgcolor="green">id</th>
                    <th bgcolor="green">punishment</th>
                    <th bgcolor="green">reason</th>
                <th bgcolor="green">edit</th>
                <th bgcolor="green">delete</th>

                </tr>
                  </thead>
                  <tbody>
                  @foreach($result as $value)

                    <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->first}}</td>
                    <td>{{$value->second}}</td>
                <td><a href="/editpunishment/{{$value->id}}">EDIT</a></td>
                <td><a href="/deletepunishment/{{$value->id}}">delete</a></td>

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