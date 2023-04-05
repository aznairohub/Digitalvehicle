@extends('public.public_header')
@section('user-body')
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
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
                            <th>STATUS</th>
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
                            <td>{{$value->status}}</td>
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