@extends('public.public_header')
@section('user-body')
<section class="py-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-md-8">
            <form id="search">
                @csrf
                <div class="row">
                    <label>Search Licenece</label>
                    <div class="col-sm-8"> <input type="text" name="query" class="form-control" placeholder="Enter DL Number"></div>
                    <div class="col-sm-3"><button type="submit" class="btn btn-primary " id="search-btn">Search</button></div>
                </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-9">
            <table class="table table-hover" id="table">
                <thead class=bg-warning>

                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DL NUMBER</th>
                        <th>S/D/W OF</th>
                        <th>ADDRESS</th>
                        <th>DOB</th>
                        <th>BLOOD GROUP</th>
                        <th>CATEGORY</th>
                        <th>VALID FROM</th>
                        <th>VALID TO</th>
                        <th>ADD PUNISHMENT</th>
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
                        window.reload();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    },

                });
                window.reload();

            });

            function updateTable(records) {

                var table = $('#table');
                table.find('#tbody').empty();
                if (records != "") {
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
                        row.append($('<td></td>').text(record.save));
                        table.append(row);
                    });
                } else {
                    window.alert("not found")
                    $('#search-btn').prop('disabled', false);
                }
            }
        </script>
    </div>
</section>
@endsection