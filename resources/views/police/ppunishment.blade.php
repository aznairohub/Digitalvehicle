@extends('police.police_header')
@section('police_body')
<section>
<div class="row ">
 <div class="col-4"></div>
            <form action="/punishmentaction"  method="post">
                @csrf
                <div class="row ">
                    <div class="col-md-6">
                        <input type="text" class="form-control border-0 bg-light px-4" placeholder="enter the reason" style="height: 55px;" name="first"><br>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control border-0 bg-light px-4" placeholder="description" style="height: 55px;" name="second"><br>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">submit</button>
                    </div>
                </div>
            </form>
        </div>
    
</section>

@endsection
