@extends('police.police_header')
@section('police_body')

<div class="container">
    <div class="row =">

        <div class="col-md-3">

        </div>
        <div class="col-md-8">
            <form id="search">
                @csrf
                <input type="text" name="query" class="form-control" placeholder="Search RC...">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="row py-5">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-8" id="table">
            
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>id</td>
                    </tr>
                    <tr>
                        <th>RC Owner Name</th>
                        <td>name</td>
                    </tr>
                    <tr>
                        <th>RTO</th>
                        <td>rto</td>
                    </tr>
                    <tr>
                        <th>Vehicle Model</th>
                        <td>model</td>
                    </tr>
                    <tr>
                        <th>Vehicle Class</th>
                        <td>class</td>
                    </tr>
                    <tr>
                        <th>Fuel Type</th>
                        <td>fuel</td>
                    </tr>
                    <tr>
                        <th>Engine Number</th>
                        <td>eno</td>
                    </tr>
                    <tr>
                        <th>Chassis Number</th>
                        <td>cno</td>
                    </tr>
                    <tr>
                        <th>Registration Date</th>
                        <td>regdate</td>
                    </tr>
                    <tr>
                        <th>Fitness</th>
                        <td>fit</td>
                    </tr>
                    <tr>
                        <th>Expiry date</th>
                        <td>expiry</td>
                    </tr>

                    <tr>
                        <th>Inssurance Expiry</th>
                        <td>expin</td>
                    </tr>
                    <tr>
                        <th>Regstration Number</th>
                        <td>regnumber</td>
                    </tr>
                    <tr>
                        <th>Vehicle Color</th>
                        <td>color</td>
                    </tr>
                    <tr>
                        <th>Unload</th>
                        <td>unload</td>
                    </tr>
                </tbody>

            </table>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#search').on('submit', function(e) {
            e.preventDefault();
            var query = $('input[name="query"]').val();
            $.ajax({
                url: '/searchRC',
                method: 'post',
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
@endesection