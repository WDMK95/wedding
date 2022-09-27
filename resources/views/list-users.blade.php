<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <title>Покана за свадба | Дијана и Виктор</title>

    {{-- These scripts should be added to main layout file --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.4.0/jquery.quicksearch.min.js"></script>
    @vite('resources/js/app.js')
    <style>
        body {
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>
</head>

<body>
    <div class="card my-3">
        <div class="card-body">
            <h5 class="card-title"><i class="lnr-list btn-icon-wrapper"> </i> List</h5>
            <hr class="custom-hr">
            <div id="table-report" class="report-Tables text-center">
                <div class="table-responsive">
                    <table id="data_marketing_table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Hash</th>
                                <th>Group ID</th>
                                <th>Attending</th>
                                <th>Answered RSVP</th>
                            </tr>
                        </thead>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->excel_id}}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->hash}}</td>
                            <td>{{ $user->group_id}}</td>
                            <td>{{ $user->attending}}</td>
                            <td>{{ $user->answered_rsvp}}</td>
                        </tr>
                        @endforeach
                        <tbody>
                        </tbody>
                        <tfoot class="bg-primary text-white">
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script>
        async function getData() {
            let response = fetch('raw').
            then((response) => response.json())
                .then((data) => {
                    // console.log(data);
                    populateTable(data.users);
                })
        }

        getData()

        function populateTable(data) {

            $('#data_marketing_table').DataTable({
                data: data,
                order: [
                    [1, 'desc']
                ],
                "columns": [{
                        data: 'excel_id'
                    },
                    {
                        data: 'name'
                    },

                    {
                        data: 'hash'
                    },
                    {
                        data: 'group_id'
                    },
                    {
                        data: 'attending'
                    },
                    {
                        data: 'answered_rsvp'
                    },
                ],
                destroy: true,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        title: 'Excel'
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'CSV'
                    },
                    'copy'
                ]
            });
        }

    </script>
</body>

</html>
