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
                    <th bgcolor="green">name</th>
                   <th bgcolor="green">sof</th>
                    <th bgcolor="green">address</th>
                    <th bgcolor="green">dob</th>
                    <th bgcolor="green">blood group</th>
                     <th bgcolor="green">category</th>
                    <th bgcolor="green">valid from</th>
                <th bgcolor="green">valid to</th>
                <th bgcolor="green">edit</th>
                <th bgcolor="green">delete</th>

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