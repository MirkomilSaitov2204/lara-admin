@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-2 mb-2">
            <div><h3 style="color:#1D3557">Permissions Table </h3></div>
            <a href="{{ route('permissions.create') }}" class="btn btn-outline-success">
                <i class="fa fa-plus" style="margin-right: 10px"></i>
                Create Permissions
            </a>
        </div>
        <div class="card" style="border-radius: 40px">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Permissions</h3>
                <form action="?">
                    <button class="btn btn-success btn-sm d-block" name="export" type="submit">Export Permissions
                    </button>
                </form>
            </div>
            <div class="card-body border-bottom py-3">
                <div>
                    @include('backend.app.permissions.components.filter', $permissionParents)
                </div>
            </div>
            <div class="table-responsive">
                @include('backend.app.permissions.components.table', $permissions)
            </div>
            <div class="card-footer d-flex align-items-center">
                <p class="m-0 text-muted">Общее количество <span>{{ number_format($permissions->total(), 0, '.', ' ') }}</span> entries</p>
                <ul class="pagination m-0 ms-auto">
                    {{ $permissions->links() }}
                </ul>
            </div>
        </div>
    </div>
@endsection
