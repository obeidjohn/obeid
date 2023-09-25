<table id="dataTableList" class="table table-striped table-hover" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>

            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        

    </tbody>
</table>
@push('scripts')
    <script>
        $(function() {
            $('#dataTableList').DataTable({
                "processing": true,
                "pageLength": 10,
                "scrollCollapse": true,
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +
                    "<tr>" +
                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">",
            });

        })
    </script>
@endpush