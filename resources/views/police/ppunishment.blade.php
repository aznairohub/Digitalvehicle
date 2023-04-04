@extends('police.police_header')
@section('police_body')
<section class="py-5">
    <div class="row py-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-8">
        @foreach($result as $value)
        <form action="/punishmentaction/{{$value->id}}" method="post">
            @csrf
            <div class="row ">
                <div class="col-md-12">
                    <label>Name</label>
                    <input type="text" class="form-control border-0 bg-light px-4" value="{{$value->username}}" readonly><br>
                </div>
                <div class="col-md-12">
                    <label>DRIVING LICENECE NUMBER</label>
                    <input type="text" class="form-control border-0 bg-light px-4" value="{{$value->dlno}}" readonly name="first"><br>
                </div>
                <div class="col-md-12">
                    <label>REASON</label>
                    <input type="text" class="form-control border-0 bg-light px-4" placeholder="enter the reason" style="height: 55px;" name="first"><br>
                </div>
                <label>DESCRIPTION</label>
                <div class="col-md-12">
                    <textarea class="form-control border-0 bg-light px-4" placeholder="Enter The Punishment" style="height: 55px;" name="second"></textarea><br>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">ADD</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</section>

@endsection