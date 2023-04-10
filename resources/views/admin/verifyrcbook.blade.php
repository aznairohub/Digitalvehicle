@extends('admin.admin_header')
@section('admin_body')
<div class="row py-5">
    <div class="col-2"></div>
    <div class="col-md-10">
    <div class="card-header bg-danger text-dark">
            <h3 class="card-title">VERIFY RC BOOK</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead class="bg-warning">
                    <tr>
                        <th>ID</th>
                        <th>PUBLIC ID</th>
                        <th>NAME</th>
                        <th>REGIONAL TRANSPORT OFFICE</th>
                        <th>VEHICLE MODEL</th>
                        <th>VEHICLE CLASS</th>
                        <th> FUEL NORMS</th>
                        <th>ENGINE NUMBER</th>
                        <th>CHASSIS NUMBER</th>
                        <th>REGISTRATION DATE</th>
                        <th>FITNESS</th>
                        <th>EXPIRY</th>
                        <th>REGISTRATION NUMBER</th>
                        <th>COLOR</th>
                        <th>UNLOAD</th>
                        <th>DOCUMENT</th>
                        <th>STATUS</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach($rcbook as $value)

                    <tr>
                        <td>{{$value->id}}</td>
                        <td><a class="btn btn-info" href="/view/{{$value->userid}}">{{$value->userid}}</a></td>
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
                        <td><a href="/rcbook/{{$value->proof}}">{{$value->proof}}</a></td>
                        <td>{{$value->status}}</td>
                        <td>@if($value->status=="verified")<h1></h1>@else<a href="/verifiedrcbook/{{$value->id}}">VERIFY</a>@endif</td>

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