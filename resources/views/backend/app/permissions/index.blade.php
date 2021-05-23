@extends('backend.layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mt-2 mb-2">
            <div><h3 style="color:#1D3557">Permissions Table </h3></div>
            <a href="{{ route('permissions.create') }}" class="btn btn-outline-success">
                <i class="fa fa-plus" style="margin-right: 10px"></i>
                Create Permissions
            </a>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">Permissions</h3>
                    <form action="?">
                        <button class="btn btn-success btn-sm d-block" name="export" type="submit">Export Permissions</button>
                    </form>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="text-muted">
                            Show
                            <div class="mx-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                            </div>
                            entries
                        </div>
                        <div class="ms-auto text-muted">
                            Search:
                            <div class="ms-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover card-table table-vcenter text-nowrap datatable">
                        <thead>
                        <tr>
                            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                            <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
                            </th>
                            <th>Permission Name</th>
                            <th>Permission Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $key=>$permission)
                            <tr  style="background: {{!$permission->parent ? '#89DEFD' : ''}}">
                                <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                <td>{{ ++$key}}</td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->parent ? $permission->parent->name : 0}}</td>
                                <td>{{ $permission->description }}</td>
                                <td>{{ $permission->created_at ? date('d-m-Y', strtotime($permission->created_at )) : 'NULL' }}</td>
                                <td>{{ $permission->updated_at ? date('d-m-Y', strtotime($permission->updated_at )) : 'NULL'}}</td>
                                <td >
                                    <div class="d-flex">
                                        {{--@if(Auth::user()->hasPermissionTo('roles_view'))--}}
                                            <a class="btn  btn-outline-warning"
                                               href="{{route('permissions.show', $permission)}}">
                                          <i class="fas fa-eye"></i>
                                            </a>
                                        {{--@endif--}}
{{--                                        @if(Auth::user()->hasPermissionTo('roles_edit'))--}}
                                            <a class="btn btn-md btn-outline-info"
                                               href="{{route('permissions.edit', $permission)}}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        {{--@endif--}}

                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class="pagination m-0 ms-auto">
                        {{ $permissions->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
@endsection
