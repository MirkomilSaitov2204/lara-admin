<div class="row">
    <div class="col col-sm-9">
        <input type="text" class="form-control" placeholder="Search">
        <select name="" id="" class="form-control" style="color: #111">
            <option value="">All</option>
            @foreach($permissionParents as $parent)
                <option value="{{ $parent->id }}">{{ $parent->name }}</option>
            @endforeach
        </select>
        <input type="date" class="form-control" placeholder="Search">
        <input type="date" class="form-control" placeholder="Search">
    </div>
    <div class="col-sm-3 text-right">
        <div class="btn_group d-flex justify-content-end ">
            <a href="#" class="btn btn-default" title="Create" data-bs-toggle="modal" data-bs-target="#modal-report">
                <i class="fa fa-plus"></i>Create
            </a>
            <button class="btn btn-default" title="Filter"><i class="fa fa-filter"></i>Filter
            </button>
            <button class="btn btn-default" title="Reload"><i class="fa fa-sync-alt"></i>
            </button>
            <form action="{{route('permission-export')}}">
                <button class="btn btn-default"  name="export" type="submit" title="Excel">
                    <i class="fas fa-file-excel"></i>
                </button>
            </form>

        </div>
    </div>
</div>

@include('backend.app.permissions.create')
