@extends('public.public_header')
@section('user-body')
<section class="py-3">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-12">
                <center>
                    <h2>Saved Licence Details</h2>
                </center>
                <table class="table table-hover" id="table">
                    <thead class=bg-warning>
                        <tr>
                            <th>USERNAME</th>
                            <th>DRIVING LICENCE NUMBER</th>
                            <th>S/D/W OF</th>
                            <th>ADDRESS</th>
                            <th>DATE OF BIRTH</th>
                            <th>BLOOD GROUP</th>
                            <th>BLOOD GROUP</th>
                            <th>VALID FROM</th>
                            <th>VALID FROM</th>
                            <th>UPLOADED DOCUMENT</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($result as $value)
                        <tr>
                            <td>{{$value->username}}</td>
                            <td>{{$value->dlno}}</td>
                            <td>{{$value->sof}}</td>
                            <td>{{$value->address}}</td>
                            <td>{{$value->dob}}</td>
                            <td>{{$value->bg}}</td>
                            <td>{{$value->cat}}</td>
                            <td>{{$value->vf}}</td>
                            <td>{{$value->vt}}</td>
                            <td><a href="/licenece/{{$value->proof}}">{{$value->proof}}</a></td>
                        </tr>
                        <!-- <tr>
                           <td colspan="10">NO DATA FOUND</td>
                        </tr> -->
                        @endforeach
                    </tbody>

                </table>
                <p id=save>

                </p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-sm-12">
                <center>
                    <h2>Punishment in saved Licence</h2>
                </center>
                <table class="table table-hover" id="table">
                    <thead class=bg-warning>
                        <tr>
                            <th>REASON</th>
                            <th>DESCRIPTION</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($result as $value)
                      
                        <!-- <tr>
                            <center><td colspan="10">NO DATA FOUND</td></center>
                        </tr> -->
                        <tr>
                            <td>{{$value->first}}</td>
                            <td>{{$value->second}}</td>
                            <td>{{$value->status}}</td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
                <p id=save>

                </p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-sm-12">
                <center>
                    <h2>Saved RC BOOK</h2>
                </center>
                <table class="table table-hover" id="table">
                    <thead class=bg-warning>
                        <tr>
                            <th>ID</th>
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
                            <th>UPLOADED DOCUMENT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rc as $value)
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
                            <td><a href="/rcbook/{{$value->proof}}">{{$value->proof}}</a></td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <p id=save>

                </p>
            </div>
        </div>
    </div>
</section>
@endsection