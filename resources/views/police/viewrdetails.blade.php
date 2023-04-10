@extends('police.police_header')
@section('police_body')

<section class="py-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-md-8">
        <div class="row">
                <div class="col-md-12 bg-danger p-4">
                    VIEW RC BOOK
                </div>
            </div>
            <form id="search">
                @csrf
                <div class="row py-3 my-3">
                    <label>Search RC...</label>
                    <div class="col-sm-8"> <input type="text" name="query" class="form-control" placeholder="Enter Registration Number"></div>
                    <div class="col-sm-3"><button type="submit" class="btn btn-primary ">Search</button></div>
                </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <table class="table table-hover" id="table">
                <thead class=bg-warning>
                    <tr>

                        <th>ID</th>
                        <th>NAME</th>
                        <th>REGIONAL TRANSPORT OFFICE</th>
                        <th>VEHICLE MODEL</th>
                        <th>VEHICLE CLASS</th>
                        <th> FUEL NORMS</th>
                        <th>ENGINE NUMBER</th>
                        <th>CHASSIS NUMBER</th>
                        <th>REGISTRATION DATE</th>
                        <th>FITNESS</th>
                        <th>INSSURANCE EXPIRY</th>
                        <th>INSSURANCE EXPIRY IN</th>
                        <th>REGISTRATION NUMBER</th>
                        <th>COLOR</th>
                        <th>UNLOAD</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $value)
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
                        <td>{{$value->expin}}</td>
                        <td>{{$value->regnumber}}</td>
                        <td>{{$value->color}}</td>
                        <td>{{$value->unload}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $('#search').on('submit', function(e) {
                e.preventDefault();
                var query = $('input[name="query"]').val();
                // alert(query)
                $.ajax({
                    url: '/searchRC',
                    method: 'get',
                    data: {
                        query: query
                    },
                    success: function(response) {
                        updateTable(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            function updateTable(records) {
                var table = $('#table');
                table.find('tbody').empty();
                $.each(records, function(index, record) {
                    var row = $('<tr></tr>');
                    row.append($('<td></td>').text(record.id));
                    row.append($('<td></td>').text(record.name));
                    row.append($('<td></td>').text(record.rto));
                    row.append($('<td></td>').text(record.model));
                    row.append($('<td></td>').text(record.class));
                    row.append($('<td></td>').text(record.fuel));
                    row.append($('<td></td>').text(record.eno));
                    row.append($('<td></td>').text(record.cno));
                    row.append($('<td></td>').text(record.regdate));
                    row.append($('<td></td>').text(record.fit));
                    row.append($('<td></td>').text(record.expiry));
                    row.append($('<td></td>').text(record.expin));
                    row.append($('<td></td>').text(record.regnumber));
                    row.append($('<td></td>').text(record.color));
                    row.append($('<td></td>').text(record.unload));
                    table.append(row);
                });
            }
        </script>
    </div>
</section>
@endesection