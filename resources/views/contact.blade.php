@extends('index_header')
@section('index_body')
<section class="content">
    <div class="row g-5 my-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 wow ">
            <center>
                <h3>Contact US </h3>
            </center>
            <form action="/contactaction" method="post">
                @csrf
                <div class="row g-3 mx-5">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name" name="first">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control " placeholder="Your Email" name="second">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control " placeholder="Subject" name="third">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" placeholder="Message" name="msg"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
</section>
@endsection