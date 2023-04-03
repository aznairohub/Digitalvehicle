<div class="row">
 <div class="col-2"></div>
          <div class="col-md-10">

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th >id</th>
                    <th >name</th>
                   <th >address</th>
                    <th >dob</th>
                    <th >blood group</th>
                     <th >height</th>
                    <th >weight </th>
                <th >username</th>
                <th >password</th>

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
        

