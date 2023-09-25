@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <ol class="breadcrumb d-flex ms-auto pull-right">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
    </div>
    <div class="card shadow">
        <div class="card-header bg-primary">
            <span>Provider Management</span>
        </div>
        <div class="card-body">
            <div class="mt-2">
                <ul class="nav nav-tabs" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" style="color:#9b9b9b !important;" aria-current="page"
                            data-bs-toggle="tab" href="#tab1">Provider List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" style="color:#9b9b9b !important;"
                            href="#tab2">Category</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1">
                        @include('manage.provider.list')
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        @include('manage.provider.category')
                    </div>
                </div>

            </div>

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
