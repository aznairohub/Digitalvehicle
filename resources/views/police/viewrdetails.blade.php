@extends('police.police_header')
@section('police_body')

<section class="py-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-md-8">
            <form id="search">
                @csrf
                <div class="row">
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
                        <th>RC Owner Name</th>
                        <th>RTO</th>
                        <th>Vehicle Model</th>
                        <th>Vehicle Class</th>
                        <th>Fuel Type</th>
                        <th>Engine Number</th>
                        <th>Chassis Number</th>
                        <th>Registration Date</th>
                        <th>fitness</th>
                        <th>Inssurance Expiry</th>
                        <th>Inssurance Expiry In</th>
                        <th>Regstration Number</th>
                        <th>Vehicle Color</th>
                        <th>Unload</th>

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