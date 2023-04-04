<div class="row">
  <div class="col-2"></div>
  <div class="col-md-10">

    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>DOB</th>
            <th>BLOOD GROUP</th>
            <th>HEIGHT</th>
            <th>WEIGHT</th>
            <th>USERNAME</th>

          </tr>
        </thead>
        <tbody>
          @foreach($sess as $value)
          <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->username}}</td>
            <td>{{$value->address}}</td>
            <td>{{$value->dob}}</td>
            <td>{{$value->bg}}</td>
            <td>{{$value->hgt}}</td>
            <td>{{$value->wgt}}</td>
            <td>{{$value->username}}</td>
            <td>{{$value->psd}}</td>

          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>