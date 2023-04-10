@extends('police.police_header')
@section('police_body')
<section class="py-5">
    <div class="row py-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-8">
        <div class="row">
                <div class="col-md-12 bg-danger p-4">
                    MY PROFILE
                </div>
            </div>
        @foreach($result as $value)
        <form action="/policeprofileaction/{{$value->id}}" method="post">
            @csrf
            <div class="row py-3 my-3">
                <div class="col-md-12">
                    <label>USERNAME</label>
                    <input type="text" class="form-control border-0 bg-light px-4" value="{{$value->username}}" name="username"><br>
                </div>
                <div class="col-md-12">
                    <label>PASSWORD</label>
                    <input type="text" class="form-control border-0 bg-light px-4" value="{{$value->password}}" name="password"><br>
                </div>
                <div class="col-md-12">
                    <label>EMAIL</label>
                    <input type="text" class="form-control border-0 bg-light px-4" value="{{$value->email}}" name="email"><br>
                </div>
                
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">UPDATE</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</section>

@endsection