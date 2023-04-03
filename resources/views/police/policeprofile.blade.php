<section class="py-5">
    <div class="row py-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-8">
        @foreach($result as $value)
        <form action="/policeprofileaction/{{$value->id}}" method="post">
            @csrf
            <div class="row ">
                <div class="col-md-12">
                    <label>Username</label>
                    <input type="text" class="form-control border-0 bg-light px-4" value="{{$value->username}}"value="username"><br>
                </div>
                <div class="col-md-12">
                    <label>password</label>
                    <input type="text" class="form-control border-0 bg-light px-4" value="{{$value->password}}" name="password"><br>
                </div>
                
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">update</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</section>