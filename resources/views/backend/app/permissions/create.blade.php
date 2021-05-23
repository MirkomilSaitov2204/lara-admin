@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mt-2 mb-2">
            <div><h3 style="color:#1D3557">Permissions Table </h3></div>
            <a href="{{ route('permissions.index') }}" class="btn btn-outline-success">
                <i class="fa fa-backward" style="margin-right: 10px"></i>
                Permissions Table
            </a>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">Create Permission</h3>
                    {{--<form action="?">--}}
                        {{--<button class="btn btn-success btn-sm d-block" name="export" type="submit">Export Permissions</button>--}}
                    {{--</form>--}}
                </div>
                <div class="card-body border-bottom py-3">
                    <form action="{{ route('permissions.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Name</label>
                                    <div>
                                        <input type="text" name="name" class="form-control"  placeholder="Enter name" required>
                                        <small class="form-hint">We'll never share your email with anyone else.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Parent</label>
                                    <select type="text" name="parent_id" class="form-select">
                                        <option value="0">All</option>
                                        @foreach($permissions as $permission)
                                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <ul class="nav nav-tabs" data-bs-toggle="tabs">
                                    <li class="nav-item">
                                        <a href="#tabs-uz" class="nav-link active" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                            <i class="fa fa-language" style="margin-right: 10px"></i>
                                            UZ
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tabs-en" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                            <i class="fa fa-language" style="margin-right: 10px"></i>
                                            EN
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tabs-ru" class="nav-link" data-bs-toggle="tab"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                            <i class="fa fa-language" style="margin-right: 10px"></i>
                                            RU
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="tabs-uz">
                                            <div class="form-group">
                                                <label class="form-label">Description Uz</label>
                                                <textarea name="description[uz]" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs-ru">
                                            <div class="form-group">
                                                <label class="form-label">Description Ru</label>
                                                <textarea name="description[ru]" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs-en">
                                            <div class="form-group">
                                                <label class="form-label">Description En</label>
                                                <textarea name="description[ru]" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-dark btn-pill">
                                        <i class="fa fa-plus" style="margin-right: 10px"></i>
                                        Save and Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="table-responsive">
                </div>
            </div>
        </div>
    </div>

@endsection
