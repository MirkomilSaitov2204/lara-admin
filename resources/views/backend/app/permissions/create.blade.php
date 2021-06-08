<style>
    .modal-content {
        background: linear-gradient(to right, #2980b9, #2c3e50);
        padding: 0;
        border-radius: 10px;
        border: none;
        box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.05), 0 0 0 10px rgba(0, 0, 0, 0.05);
    }
</style>


<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('permissions.store') }}" id="submitForm" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 d-flex justify-content-between">
                        <input type="text" class="form-control" style="width: 49% !important" name="name" id="name"
                               placeholder="Permission Name">
                        <select name="parent_id" id="parent_id" class="form-control"
                                style="color: #111; width: 49% !important">
                            <option value="">All</option>
                            @foreach($permissionParents as $parent)
                                <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div style="color: #fff">
                        <div>
                            <h3 class="lead font-weight-bold">Description</h3>
                        </div>
                        <ul class="nav nav-tabs nav-fill" data-bs-toggle="tabs">
                            <li class="nav-item">
                                <a href="#tabs-home-14" class="nav-link active" data-bs-toggle="tab"><i
                                        class="fa fa-language m-1"></i> Uzbek</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tabs-profile-14" class="nav-link" data-bs-toggle="tab"><i
                                        class="fa fa-language m-1"></i> Russian</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tabs-activity-14" class="nav-link" data-bs-toggle="tab"><i
                                        class="fa fa-language m-1"></i> English</a>
                            </li>
                        </ul>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabs-home-14">
                                    <textarea name="description[uz]" id="description_uz" class="form-control"
                                              style="width: 100% !important; height: 200px !important;"
                                              placeholder="Please Fill in Description in Uzbek Lang..."></textarea>
                                </div>
                                <div class="tab-pane" id="tabs-profile-14">
                                    <textarea name="description[ru]" id="description_ru" class="form-control"
                                              style="width: 100% !important; height: 200px !important;"
                                              placeholder="Please Fill in Description in Russian Lang..."></textarea>
                                </div>
                                <div class="tab-pane" id="tabs-activity-14">
                                    <textarea name="description[en]" id="description_en" class="form-control"
                                              style="width: 100% !important; height: 200px !important;"
                                              placeholder="Please Fill in Description in English Lang..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submitbtn" type="submit" class="btn btn-primary ms-auto">
                        <i class="fa fa-plus m-1"></i>
                        <b> Save and exit</b>
                    </button>
                    {{--                <div><input id="submitbtn" type="submit" value="Submit"></div>--}}
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    let parent = @json($permissionParents);
    let lang = @json(app()->getLocale());
    console.log(lang);
    function getprentName(value) {
        for (let i = 0; i < parent.length; i++) {
            let element = parent[i];
            if (element.id == value) {
                return element.name;
            }
        }
    }

    $('#submitForm').submit(function (e) {
        e.preventDefault();
        let description = {};
        let name = $('#name').val();
        let parent_id = $('#parent_id').val();
        description['uz'] = $('#description_uz').val();
        description['en'] = $('#description_en').val();
        description['ru'] = $('#description_ru').val();
        let _token = $("input[name=_token]").val()

        $.ajax({
            url: "{{ route('permissions.store') }}",
            type: "POST",
            data: {
                _token: _token,
                name: name,
                parent_id: parent_id,
                description: description

            },
            success: function (response) {
                if (response) {
                    $('#submitForm')[0].reset();
                    $('#table_modal tbody').prepend('<tr><td>' + response.id + '</td><td>' + response.name + '</td><td>' + getprentName(response.parent_id) + '</td><td>' + response.description[lang] ? response.description[lang] : ''  + '</td></tr>')
                    swal("Good job!", "You clicked the button!", "success");
                    $('.modal').modal('toggle');
                } else {
                    $('#submitForm')[0].reset();
                    swal("Good job!", "Not Saved", "danger");
                    $('.modal').modal('toggle');
                }
            }

        })
    })
</script>
