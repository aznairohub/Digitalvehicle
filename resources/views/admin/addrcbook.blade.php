@extends('admin.admin_header')
@section('admin_body')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-sm-2"></div>
            <div class="col-md-9">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ADD RC BOOK</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/addrcbookaction" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">OWNER NAME</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="rto">REGISTERED RTO</label>
                                <input type="text" class="form-control" name="rto" id="rto">
                            </div>
                            <div class="form-group">
                                <label for="model">MAKERMODEL</label>
                                <input type="text" class="form-control" name="model" id="model">
                            </div>
                            <div class="form-group">

                                <label for="class">VEHICLE CLASS</label>
                                <input type="text" class="form-control" name="class" id="class">
                            </div>
                            <div class="form-group">
                                <label for="fuel">FUEL_NORMS</label>
                                <input type="text" class="form-control" name="fuel" id="fuel">
                            </div>
                            <div class="form-group">
                                <label for="eno">ENGINE NUMBER</label>
                                <input type="text" class="form-control" name="eno" id="eno">
                            </div>
                            <div class="form-group">

                                <label for="cno">CHASSIS NUMBER</label>
                                <input type="text" class="form-control" name="cno" id="cno">
                            </div>
                            <div class="form-group">
                                <label for="regdate">REGISTRATION DATE</label>
                                <input type="date" class="form-control" name="regdate" id="regdate">
                            </div>
                            <div class="form-group">
                                <label for="fit">FITNESS UPTO</label>
                                <input type="date" class="form-control" name="fit" id="fit">
                            </div>
                            <div class="form-group">
                                <label for="expiry">INSSURANCE_EXPIRY</label>
                                <input type="date" class="form-control" name="expiry" id="expiry">
                            </div>
                            <div class="form-group">
                                <label for="expin">INSUSURANCE EXPIRY IN</label>
                                <input type="date" class="form-control" name="expin" id="expin">
                            </div>
                            <div class="form-group">
                                <label for="regnumber">REGISTRATION NUMBER</label>
                                <input type="text" class="form-control" name="regnumber" id="regnumber">
                            </div>
                            <div class="form-group">
                                <label for="color">COLOR</label>
                                <input type="text" class="form-control" name="color" id="color">
                            </div>
                            <div class="form-group">
                                <label for="unload">UNLOADED WEIGHT</label>
                                <input type="text" class="form-control" name="unload" id="unload">
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="register" class="btn btn-primary btn-block" id="register">Register</button>
                        </div>

                    </form>
                </div>

            </div>
            <!--/.col (left) -->
            <!-- right column -->

        </div>
        <!-- /.card -->
    </div>
</section>
@endsection