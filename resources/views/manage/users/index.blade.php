@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <ol class="breadcrumb d-flex ms-auto pull-righ">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
    </div>
    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <a href="#"  class="btn btn-sm  btn-primary text-capitalize" data-bs-toggle="modal"
                        data-bs-target="#modal_add_users">
                        Add User</a>
                </div>
                @include('manage.users.create')
            </div>
        </div>
        <div class="card-body">
            @include('manage.users.table')

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
