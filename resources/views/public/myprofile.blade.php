<div class="row">
 <div class="col-2"></div>
          <div class="col-md-10">

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th bgcolor="green">id</th>
                    <th bgcolor="green">name</th>
                   <th bgcolor="green">address</th>
                    <th bgcolor="green">dob</th>
                    <th bgcolor="green">blood group</th>
                     <th bgcolor="green">height</th>
                    <th bgcolor="green">weight </th>
                <th bgcolor="green">username</th>
                <th bgcolor="green">password</th>

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
        

