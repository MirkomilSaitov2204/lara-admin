<style>
    .modal-content{
        background: linear-gradient(to right, #2980b9, #2c3e50);
        padding: 0;
        border-radius: 10px;
        border: none;
        box-shadow: 0 0 0 5px rgba(0,0,0,0.05),0 0 0 10px rgba(0,0,0,0.05);
    }
</style>


<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 d-flex justify-content-between">
                    <input type="text" class="form-control" style="width: 49% !important" name="example-text-input" placeholder="Permission Name">
                    <select name="" id="" class="form-control" style="color: #111; width: 49% !important">
                        <option value="">All</option>
                        @foreach($permissionParents as $parent)
                            <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="" style="color: #fff">
                    <div>
                        <h3 class="lead font-weight-bold">Description</h3>
                    </div>
                    <ul class="nav nav-tabs nav-fill" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a href="#tabs-home-14" class="nav-link active" data-bs-toggle="tab"><i class="fa fa-language m-1"></i> Uzbek</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-profile-14" class="nav-link" data-bs-toggle="tab"><i class="fa fa-language m-1"></i> Russian</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-activity-14" class="nav-link" data-bs-toggle="tab"><i class="fa fa-language m-1"></i> English</a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tabs-home-14">
                                <textarea name="" id="" class="form-control" style="width: 100% !important; height: 200px !important;" placeholder="Please Fill in Description in Uzbek Lang..."></textarea>
                            </div>
                            <div class="tab-pane" id="tabs-profile-14">
                                <textarea name="" id="" class="form-control" style="width: 100% !important; height: 200px !important;" placeholder="Please Fill in Description in Russian Lang..."></textarea>
                            </div>
                            <div class="tab-pane" id="tabs-activity-14">
                                <textarea name="" id="" class="form-control" style="width: 100% !important; height: 200px !important;" placeholder="Please Fill in Description in English Lang..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    Create new report
                </a>
            </div>
        </div>
    </div>
</div>
