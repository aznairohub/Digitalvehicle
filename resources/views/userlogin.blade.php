@extends('index_header')
@section('index_body')
<section class="content">
    <div class="container-fluid">
        <div class="row my-5" >
            <!-- left column -->
            <div class="col-4"></div>
            <div class="col-4">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">LOGIN</h3>
                    </div>

                    <form action="/userloginaction" method="post" >
                        @csrf
                        <div class="card-body" >
                            <di  v class="form-group">
                            <label for="username" >USER NAME:</label>
                            <input type="text" name="username" id="username"  class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="password">PASSWORD</label>
                           <input type="password" name="password" id="psd"  class="form-control">
                            </div>

                        </div>

                        <div class="card-footer" >
                        <button type="submit" name="register" class="btn btn-block btn-primary w-100" id="register">LOGIN</button>
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



