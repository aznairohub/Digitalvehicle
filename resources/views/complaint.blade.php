<div class="row">
 <div class="col-2"></div>
          <div class="col-md-10">

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th bgcolor="green">ID</th>
                    <th bgcolor="green">NAME</th>
                   <th bgcolor="green">MAIL ID</th>
                    <th bgcolor="green">SUBJECT</th>
                    <th bgcolor="green">MESSAGE</th>
                </tr>
                  </thead>
                  <tbody>
                  @foreach($result as $value)

                    <tr>
                    <td>{{$value->id}}</td>
                <td>{{$value->first}}</td>
                <td>{{$value->second}}</td>
                <td>{{$value->third}}</td>
                <td>{{$value->msg}}</td>

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
        
