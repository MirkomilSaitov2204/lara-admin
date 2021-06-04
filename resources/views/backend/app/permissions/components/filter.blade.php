<style>
    .radius {
        border-radius: 10px;
    }
    .button_color{
        background: #1D3557;
    }
</style>
<form action="?" method="get">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <input type="text" class="form-control radius" value="" name="name" placeholder="Permission Name"
                       >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <select name="parent_id" id="" class="form-select radius" aria-label="Default select example">
                    <option value="">Permission Parent Name</option>
                    @foreach($permissionParents as $parent)
                        <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <input type="date" class="form-control radius" value="" name="name" placeholder="Permission Name">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <input type="date" class="form-control radius" value="" name="name" placeholder="Permission Name">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group d-flex justify-content-between">
                <button type="submit" class="btn btn-dark btn-pill button_color"><i
                        class="fa fa-filter"></i> FILTER
                </button>
                <button type="" class="btn btn-dark btn-pill button_color"><i
                        class="fa fa-undo"></i> RESET
                </button>
            </div>
        </div>
    </div>
</form>

