@extends('police.police_header')
@section('police_body')
<section class="py-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-md-8">
            <form id="search">
                @csrf
                <div class="row">
                    <label>Search Licenece</label>
                    <div class="col-sm-8"> <input type="text" name="query" class="form-control" placeholder="Enter DL Number"></div>
                    <div class="col-sm-3"><button type="submit" class="btn btn-primary ">Search</button></div>
                </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-9">
            <table class="table table-hover" id="table">
                <thead class=bg-warning>

                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>DL number</th>
                        <th>sof</th>
                        <th>address</th>
                        <th>dob</th>
                        <th>blood group</th>
                        <th>category</th>
                        <th>valid from</th>
                        <th>valid to</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $value)

                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->username}}</td>
                        <td>{{$value->dlno}}</td>
                        <td>{{$value->sof}}</td>
                        <td>{{$value->address}}</td>
                        <td>{{$value->dob}}</td>
                        <td>{{$value->bg}}</td>
                        <td>{{$value->cat}}</td>
                        <td>{{$value->vf}}</td>
                        <td>{{$value->vt}}</td>
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
                    url: '/searchlicence',
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
                    row.append($('<td></td>').text(record.username));
                    row.append($('<td></td>').text(record.dlno));
                    row.append($('<td></td>').text(record.sof));
                    row.append($('<td></td>').text(record.address));
                    row.append($('<td></td>').text(record.dob));
                    row.append($('<td></td>').text(record.bg));
                    row.append($('<td></td>').text(record.cat));
                    row.append($('<td></td>').text(record.vf));
                    row.append($('<td></td>').text(record.vt));
                    table.append(row);
                });
            }
        </script>
    </div>
</section>
@endesection