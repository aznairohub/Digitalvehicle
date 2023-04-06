@extends('public.public_header')
@section('user-body')
<section class="py-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-md-8">
            <form id="search">
                @csrf
                <div class="row">
                    <label>Search RC BOOK</label>
                    <div class="col-sm-8"> <input type="text" name="query" id="query" class="form-control" placeholder="Enter Registration Number"></div>
                    <div class="col-sm-3"><button type="submit" class="btn btn-primary " id="search-btn">Search</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-hover" id="table">
                    <thead class=bg-warning>

                        <tr>

                        </tr>
                    </thead>
                    <tbody>


                        <tr>

                        </tr>
                    </tbody>

                </table>
                <p id=save>

                </p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#search').on('submit', function(e) {

            e.preventDefault();
            var query = $('input[name="query"]').val();
            $('#search-btn').prop('disabled', true);
            $('#query').prop('disabled', true);
            // alert(query)
            $.ajax({
                url: '/usersearchrcbook',
                method: 'get',
                data: {
                    query: query
                },
                success: function(response) {

                    updateTable(response);
                    window.reload();
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                },

            });
            // window.reload();

        });

        function updateTable(records) {
var save = $('#save');
            var table = $('#table');
            table.find('#tbody').empty();
            // table.find('#thead').empty();
            if (records != "") {
                $.each(records, function(index, record) {
                    var row1 = $('<tr></tr>');
                    row1.append($('<th></th>').text("ID"));
                    row1.append($('<th></th>').text("NAME"));
                    row1.append($('<th></th>').text("REGIONAL TRANSPORT OFFICE"));
                    row1.append($('<th></th>').text("VEHICLE MODEL"));
                    row1.append($('<th></th>').text('VEHICLE CLASS'));
                    row1.append($('<th></th>').text('FUEL NORMS'));
                    row1.append($('<th></th>').text('ENGINE NUMBER'));
                    row1.append($('<th></th>').text('CHASSIS NUMBER'));
                    row1.append($('<th></th>').text('REGISTRATION DATE'));
                    row1.append($('<th></th>').text('FITNESS'));
                    row1.append($('<th></th>').text('INSSURANCE EXPIRY'));
                    row1.append($('<th></th>').text('INSSURANCE EXPIRY IN'));
                    row1.append($('<th></th>').text('REGISTRATION NUMBER'));
                    row1.append($('<th></th>').text('COLOR'));
                    row1.append($('<th></th>').text('UNLOAD'));
                    // row.append($('<th></th>').text(record.save));
                    table.append(row1);
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
                    // row.append($('<td></td>').text());
                    table.append(row);
                     var id = record.id;
                        save.append($('<div></div>').html("<a href=/savercbook/" + id + " class='btn btn-primary'>save</a>"));
                });
            } else {
                window.alert("not found")
                $('#search-btn').prop('disabled', false);
                $('#query').prop('disabled', false);
                $('#query').val('');
            }
        }
    </script>
</section>
@endsection