@extends('admin.admin_header')
@section('admin_body')
<div class="row py-5">
 <div class="col-2"></div>
          <div class="col-md-10">

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead class="bg-warning">
                    <tr>
                    <th >id</th>
                    <th >name</th>
                   <th >rto</th>
                    <th >model</th>
                    <th >class</th>
                    <th > fuel</th>
                     <th >eno</th>
                    <th >cno</th>
                <th >regdate</th>
                <th >fit</th>
                <th >expiry</th>
                <th >regnumber</th>
                <th >color</th>
                <th >unload</th>
                <th >edit</th>
                <th >delete</th>



                </tr>
                  </thead>
                  <tbody>
                  @foreach($result as $value)

                    <tr>
                    <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->rto}}</td>
                <td>{{$value->model}}</td>
                <td>{{$value->class}}</td>
                <td>{{$value->fuel}}</td>
                <td>{{$value->eno}}</td>
                <td>{{$value->cno}}</td>
                <td>{{$value->regdate}}</td>
                <td>{{$value->fit}}</td>
                <td>{{$value->expiry}}</td>
                <td>{{$value->regnumber}}</td>
                <td>{{$value->color}}</td>
                <td>{{$value->unload}}</td>
                <td><a href="/edit/{{$value->id}}">EDIT</a></td>
                <td><a href="/delete/{{$value->id}}">delete</a></td>

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