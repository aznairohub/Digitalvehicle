@extends('police.police_header')
@section('police_body')
<section class="py-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 bg-danger p-4">
                    ADD PUNISHMENT
                </div>
            </div>
            <form id="search">
                @csrf
                <div class="row  py-3 my-3">
                    <label>Search Licenece</label>
                    <div class="col-sm-8"> <input type="text" name="query" id="query" class="form-control" placeholder="Enter DL Number"></div>
                    <div class="col-sm-3"><button type="submit" class="btn btn-primary " id="search-btn">Search</button></div>
                </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-9">
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

        </div>
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $('#search').on('submit', function(e) {

                e.preventDefault();
                var query = $('input[name="query"]').val();
                $('#search-btn').prop('disabled', true);
                // alert(query)
                $.ajax({
                    url: '/usersearchlicence',
                    method: 'get',
                    data: {
                        query: query
                    },
                    success: function(response) {

                        updateTable(response);
                        // window.reload();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    },

                });
                // window.reload();

            });

            function updateTable(records) {

                var table = $('#table');
                table.find('#tbody').empty();
                // table.find('#thead').empty();
                if (records != "") {
                    $.each(records, function(index, record) {
                        var row1 = $('<tr></tr>');
                        row1.append($('<th></th>').text("ID"));
                        row1.append($('<th></th>').text("USERNAME"));
                        row1.append($('<th></th>').text("DRIVING LICENCE NUMBER"));
                        row1.append($('<th></th>').text("S/D/W OF"));
                        row1.append($('<th></th>').text('ADDRESS'));
                        row1.append($('<th></th>').text('DATE OF BIRTH'));
                        row1.append($('<th></th>').text('BLOOD GROUP'));
                        row1.append($('<th></th>').text('CATEGORY'));
                        row1.append($('<th></th>').text('VALID FROM'));
                        row1.append($('<th></th>').text('VALID TO'));
                        row1.append($('<th></th>').text('ADD PUNNISHMENT'));
                        // row.append($('<th></th>').text(record.save));
                        table.append(row1);
                        var id = record.id
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
                        row.append($('<td></td>').html("<a href=/ppunishment/" + id + " class='btn btn-primary'>add</a>"));
                        table.append(row);
                    });
                } else {
                    window.alert("not found")
                    $('#search-btn').prop('disabled', false);
                    $('#query').val('');
                }
            }
        </script>
    </div>
</section>
@endsection
<td></td>