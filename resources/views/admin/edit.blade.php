@extends('admin.admin_header')
@section('admin_body')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-sm-3"></div>
            <div class="col-md-9">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ADD RC BOOK</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @foreach($result as $value)

                    <form action="/editaction/{{$value->id}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">OWNER NAME</label>
                                <input type="text" name="name" id="name" value="{{$value->name}}">
                            </div>
                            <div class="form-group">
                                <label for="rto">REGISTERED RTO</label>
                                <input type="text" name="rto" id="rto" value="{{$value->rto}}">
                            </div>
                            <div class="form-group">
                                <label for="model">MAKERMODEL</label>
                                <input type="text" name="model" id="model" value="{{$value->model}}">
                            </div>
                            <div class="form-group">

                                <label for="class">VEHICLE CLASS</label>
                                <input type="text" name="class" id="class" value="{{$value->class}}">
                            </div>
                            <div class="form-group">
                                <label for="fuel">FUEL_NORMS</label>
                                <input type="text" name="fuel" id="fuel" value="{{$value->fuel}}">
                            </div>
                            <div class="form-group">
                                <label for="eno">ENGINE NUMBER</label>
                                <input type="text" name="eno" id="eno" value="{{$value->eno}}">
                            </div>
                            <div class="form-group">

                                <label for="cno">CHASSIS NUMBER</label>
                                <input type="text" name="cno" id="cno" value="{{$value->cno}}">
                            </div>
                            <div class="form-group">
                                <label for="regdate">REGISTRATION DATE</label>
                                <input type="date" name="regdate" id="regdate" value="{{$value->regdate}}">
                            </div>
                            <div class="form-group">
                                <label for="fit">FITNESS UPTO</label>
                                <input type="date" name="fit" id="fit" value="{{$value->fit}}">
                            </div>
                            <div class="form-group">
                                <label for="expiry">INSSURANCE_EXPIRY</label>
                                <input type="date" name="expiry" id="expiry" value="{{$value->expiry}}">
                            </div>
                            <div class="form-group">
                                <label for="expin">INSUSURANCE EXPIRY IN</label>
                                <input type="date" name="expin" id="expin" value="{{$value->expin}}">
                            </div>
                            <div class="form-group">
                                <label for="regnumber">REGISTRATION NUMBER</label>
                                <input type="text" name="regnumber" id="regnumber" value="{{$value->regnumber}}">
                            </div>
                            <div class="form-group">
                                <label for="color">COLOR</label>
                                <input type="text" name="color" id="color" value="{{$value->color}}">
                            </div>
                            <div class="form-group">
                                <label for="unload">UNLOADED WEIGHT</label>
                                <input type="text" name="unload" id="unload" value="{{$value->unload}}">
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="register" id="register">Register</button>
                        </div>

                    </form>
                    @endforeach
                </div>

            </div>
            <!--/.col (left) -->
            <!-- right column -->

        </div>
        <!-- /.card -->
    </div>
</section>
@endsection