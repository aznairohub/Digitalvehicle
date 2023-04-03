@extends('admin.admin_header')
@section('admin_body')
<section class="content">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-2"></div>
                <div class="col-9">
                <div class="card card-primary">
                <div class="card-header">
                        <h3 class="card-title">ADD LISECNCE</h3>
                </div>
                    @foreach($result as $value)

                <form action="/editliaction/{{$value->id}}" method="post">
                        @csrf
                        <div class="card-body" >
                            <div class="form-group">
                            <label for="username" >OWNER NAME:</label>
                            <input type="text"  class="form-control" name="username" id="username" value="{{$value->username}}">
                            </div>
                            <div class="form-group">
                            <label for="sof">S/W/D OF:</label>
                             <input type="text"  class="form-control" name="sof" id="sof" value="{{$value->sof}}">
                            </div>
                            <div class="form-group">
                            <label for="address">ADDRESS:</label>
                           <input type="text"  class="form-control" name="address" id="address" value="{{$value->address}}">
                            </div>
                            <div class="form-group">

                            <label for="dob">DOB:</label>
                             <input type="date" class="form-control" name="dob" id="dob" value="{{$value->dob}}">
                            </div>
                            <div class="form-group">
                <label for="bg">BLOOD GROUP:</label>
            <input type="text"  class="form-control" name="bg" id="bg" value="{{$value->bg}}">
        </div>
        <div class="form-group">
            <label for="cat">CATEGORY:</label>
            <input type="text"  class="form-control" class="form-control" name="cat" id="cat" value="{{$value->cat}}">
        </div>
        <div class="form-group">
            
            <label for="vf">VALID FROM:</label>
            <input type="date" name="vf" id="vf" class="form-control" value="{{$value->vf}}">
        </div>
        <div class="form-group">
            <label for="vt">VALID TO:</label>
            <input type="date" name="vt" id="vt" class="form-control" value="{{$value->vt}}">
        </div>
                        </div>
                        <div class="card-footer" >
                        <button type="submit" name="edit" class="btn btn-primary btn-block" id="edit">EDIT</button>
                        </div>    
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection
    

