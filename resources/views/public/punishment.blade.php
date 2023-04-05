@extends('public.public_header')
@section('user-body')
<section class="py-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-md-8">
            <form id="search">
                @csrf
                <div class="row">
                    <label>Search Punishments</label>
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
                    url: '/searchpunishment',
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
                // table.find('#thead').empty();
                if (records != "") {
                    var row1=$('<tr></tr>');
                        row1.append($('<th></th>').text("REASON"));
                        row1.append($('<th></th>').text("DESCRIPTION"));
                        row1.append($('<th></th>').text("STATUS"));
                        table.append(row1);
                    $.each(records, function(index, record) {
                        
                        var row = $('<tr></tr>');
                        row.append($('<td></td>').text(record.first));
                        row.append($('<td></td>').text(record.second));
                        row.append($('<td></td>').text(record.status));
                        // row.append($('<td></td>').text());
                        table.append(row);
                    });
                } else {
                    window.alert("not punishments")
                    $('#search-btn').prop('disabled', false);
                    $('#query').val('');
                }
            }
        </script>
    </div>
</section>
@endsection