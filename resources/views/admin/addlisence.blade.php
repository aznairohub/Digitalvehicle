@extends('admin.admin_header')
@section('admin_body')
<section class="content">
    <div class="container-fluid">
        <div class="row" >
            <!-- left column -->
            <div class="col-2"></div>
            <div class="col-9">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ADD LISECNCE</h3>
                    </div>

                    <form action="/addlisenceaction" method="post">
                        @csrf
                        <div class="card-body" >
                            <div class="form-group">
                            <label for="username" >OWNER NAME:</label>
                            <input type="text"  class="form-control" name="username" id="username">
                            </div>
                            <div class="form-group">
                            <label for="username" >DL Number</label>
                            <input type="text"  class="form-control" name="dlno" id="dlno">
                            </div>
                            <div class="form-group">
                            <label for="sof">S/W/D OF:</label>
                             <input type="text"  class="form-control" name="sof" id="sof">
                            </div>
                            <div class="form-group">
                            <label for="address">ADDRESS:</label>
                           <input type="text"  class="form-control" name="address" id="address">
                            </div>
                            <div class="form-group">

                            <label for="dob">DOB:</label>
                             <input type="date" class="form-control" name="dob" id="dob">
                            </div>
                            <div class="form-group">
                <label for="bg">BLOOD GROUP:</label>
            <input type="text"  class="form-control" name="bg" id="bg">
        </div>
        <div class="form-group">
            <label for="cat">CATEGORY:</label>
            <input type="text"  class="form-control" name="cat" id="cat">
        </div>
        <div class="form-group">
            
            <label for="vf">VALID FROM:</label>
            <input type="date" class="form-control" name="vf" id="vf">
        </div>
        <div class="form-group">
            <label for="vt">VALID TO:</label>
            <input type="date" class="form-control" name="vt" id="vt">
        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer" >
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

