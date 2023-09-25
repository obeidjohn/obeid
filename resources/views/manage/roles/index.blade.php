@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h6 class=" d-flex ms-auto pull-right">Users</h6>
    </div>
    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" style="color:white !important;" class="btn btn-sm  btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modal_add_roles">
                        Add Grade</a>
                </div>
                @include('manage.roles.create')
            </div>
        </div>
        <div class="card-body">
            @include('manage.roles.table')

        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('cms/js/sweetalert.min.js') }} "></script>
    <script type="text/javascript" language="javascript" class="init">
        $(".indicator-progress").toggle(false);
    </script>
    </script>
@endpush
