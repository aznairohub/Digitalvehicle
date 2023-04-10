@extends('police.police_header')
@section('police_body')
<section class="py-5">
    <div class="row py-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-8">
        <div class="row">
                <div class="col-md-12 bg-danger p-4">
                    PUNISHMENT
                </div>
            </div>
        @foreach($result as $value)
        <form action="/changestatusaction/{{$value->id}}" method="post">
            @csrf
            <div class="row py-3 my-3">
                <label>STATUS</label>
                <div class="col-md-12">
                    <textarea class="form-control border-0 bg-light px-4" value="{{$value->status}}" style="height: 55px;" name="status">{{$value->status}}</textarea><br>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">CHANGE</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</section>

@endsection