<div class="col-md-6  pull-right">
    <a href="#" class="btn btn-sm  btn-primary text-capitalize" data-bs-toggle="modal"
        data-bs-target="#modal_provider_list">
        Add Providers</a>
</div>
@include('manage.provider.provider_list')

<div class="card-body mt-3">
    <table id="dataTableList" class="table table-striped table-hover " style="width:100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Code</th>
                <th>Shortname</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($details as $d)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$d->Name}}</td>
            <td>{{$d->Code}}</td>
            <td>{{$d->Shortname}}</td>
            <td>{{$d->Description}}</td>
            <td>
                @if ($d->Status == $statusActive)
                    <span class="badge text-bg-success">{{ $d->Status }}</span>
                @else
                    <span class="badge text-bg-success">{{ $d->Status }}</span>
                @endif
            </td>
            <td>
                
            </td>

        </tr>
    @endforeach
    
        </tbody>
    </table>
</div>
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
