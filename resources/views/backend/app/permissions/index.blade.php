@extends('backend.layouts.app')
@section('content')
    <link href="{{ asset('backend/dist/css/table.css') }}" rel="stylesheet"/>
{{--    <link rel="stylesheet" href="sweetalert2.min.css">--}}
    <div class="table-responsive">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="mb-2 text-center">
                            <h4 class="title">Permission <span>Table</span></h4>
                        </div>
                        @include('backend.app.permissions.components.filter')

                    </div>
                    <div class="panel-body table-responsive">
                        @include('backend.app.permissions.components.table', $permissions)
                    </div>
                    @include('backend.app.permissions.components.footer', $permissions)
                </div>
            </div>
        </div>
    </div>

{{--    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
@endsection
