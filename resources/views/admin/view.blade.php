@extends('admin.admin_header')
@section('admin_body')
<div class="row py-5" >
    <div class="col-2"></div>
    <div class="col-md-10">

        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 ">
        <center>
            <h2 class="text-info">View Public</h2>
         
           <table class="table table-hover table-bordered text-nowrap w-25">
                <tbody>
                    @foreach($result as $value)
                    <tr>
                        <th>ID</th>
                        <td>{{$value->id}}</td>
                    </tr>
                    <tr>
                        <th>NAME</th>
                        <td>{{$value->name}}</td>
                    </tr>
                    <tr>
                        <th>ADDRESS</th>
                        <td>{{$value->address}}</td>
                    </tr>
                    <tr>
                        <th>DOB</th>
                        <td>{{$value->dob}}</td>
                    </tr>
                    <tr>
                        <th>BLOOD GROUP</th>
                        <td>{{$value->bg}}</td>
                    </tr>
                    <tr>
                        <th>HEIGHT</th>
                        <td>{{$value->hgt}}</td>
                    </tr>
                    <tr>
                        <th>WEIGHT</th>
                        <td>{{$value->wgt}}</td>
                    </tr>
                    <tr>
                        <th>USERNAME</th>
                        <td>{{$value->username}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
           </center>
           
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>


@endsection