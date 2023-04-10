@extends('admin.admin_header')
@section('admin_body')
<div class="row py-5">
    <div class="col-2"></div>
    <div class="col-md-6">
    <div class="card-header bg-danger text-dark">
            <h3 class="card-title">MY PROFILE</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive pr-5">
            <div class="card-body login-card-body">
                @foreach($result as $value)
                <form action="/adminloginaction" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" value="{{$value->username}}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" value="{{$value->password}}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="btn btn-dark w-100" value="Login">
                    </div>
                </form>
                @endforeach
            </div>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>


@endsection