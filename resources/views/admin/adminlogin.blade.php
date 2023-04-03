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
                        <h3 class="card-title">LOGIN</h3>
                    </div>

                    <form action="/adminloginaction" method="post">
                        @csrf
                        <div class="card-body" >
                            <div class="form-group">
                            <label for="username" >USER NAME:</label>
                            <input type="text" name="username" id="username">
                            </div>
                            <div class="form-group">
                            <label for="password">ADDRESS:</label>
                           <input type="password" name="password" id="password">
                            </div>

                        </div>

                        <div class="card-footer" >
                        <button type="submit" name="register" id="register">Register</button>
                        </div>
                        
                    </form>
                    @if (session('error'))
                     <p style="color:green">
                    {{ session('error') }}
                    </p> @endif
                </div>
            </div>
        </div>
    </div>
</section>


    @endsection

