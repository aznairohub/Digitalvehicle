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
                        <h3 class="card-title">ADD POLICE</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/addpoliceaction" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                
                                <label for="username">USER NAME</label>
                                <input type="text" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <label for="password">PASSWORD</label>
                                <input type="password" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <label for="email">EMAIL ID</label>
                                <input type="email" name="email" id="email">
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="register" id="register">Register</button>
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