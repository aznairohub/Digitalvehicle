
<section>
<div class="row">
 <div class="col-2"></div>
          <div class="col-md-10">

              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th bgcolor="green">id</th>
                    <th bgcolor="green">name</th>
                   <th bgcolor="green">rto</th>
                    <th bgcolor="green">model</th>
                    <th bgcolor="green">class</th>
                    <th bgcolor="green"> fuel</th>
                     <th bgcolor="green">eno</th>
                    <th bgcolor="green">cno</th>
                <th bgcolor="green">regdate</th>
                <th bgcolor="green">fit</th>
                <th bgcolor="green">expiry</th>
                <th bgcolor="green">regnumber</th>
                <th bgcolor="green">color</th>
                <th bgcolor="green">unload</th>
                <th bgcolor="green">edit</th>
                <th bgcolor="green">delete</th>



                </tr>
                  </thead>
                  <tbody>
                  @foreach($sess as $value)

                    <tr>
                    <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->rto}}</td>
                <td>{{$value->model}}</td>
                <td>{{$value->class}}</td>
                <td>{{$value->fuel}}</td>
                <td>{{$value->eno}}</td>
                <td>{{$value->cno}}</td>
                <td>{{$value->regdate}}</td>
                <td>{{$value->fit}}</td>
                <td>{{$value->expiry}}</td>
                <td>{{$value->regnumber}}</td>
                <td>{{$value->color}}</td>
                <td>{{$value->unload}}</td>
                <td><a href="/edit/{{$value->id}}">EDIT</a></td>
                <td><a href="/delete/{{$value->id}}">delete</a></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</section>
        

