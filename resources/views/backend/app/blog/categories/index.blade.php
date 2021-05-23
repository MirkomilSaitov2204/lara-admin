@extends('backend.layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mt-2 mb-2">
            <div>Create Post Category</div>
            <a href="{{ route('categories.create') }}" class="btn btn-success">Create</a>
        </div>
            <form action="?">
                <button class="btn btn-success d-block" name="export" type="submit">Export Category</button>
            </form>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
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
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                        <tr>
                            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                            <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
                            </th>
                            <th>Category Name</th>
                            <th>Parent Category</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($postCategories as $key=>$postCategory)
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td>{{ ++$key}}</td>
                                    <td>{{ $postCategory->name }}</td>
                                    <td>{{ $postCategory->parent ? $postCategory->parent->name : 0}}</td>
                                    <td>Active</td>
                                    <td>{{ date('d-m-Y', strtotime($postCategory->created_at )) }}</td>
                                    <td>{{ date('d-m-Y', strtotime($postCategory->updated_at )) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class="pagination m-0 ms-auto">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
                                prev
                            </a>
                        </li>

                        {{ $postCategories->links() }}
                        {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                        {{--<li class="page-item">--}}
                            {{--<a class="page-link" href="#">--}}
                                {{--next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
