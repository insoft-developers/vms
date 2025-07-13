<x-app-layout>
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Driver Data</h4>

                        </div>
                        <button onclick="addData()" style="float: right;" type="button"
                            class="btn btn-sm btn-success rounded-pill mt-2">+ Add
                            Driver Data</button>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered nowrap" id="table-list">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th style="width: 200px;" scope="col">Actions</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Driver Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">License Number</th>
                                        <th scope="col">PID</th>
                                        <th scope="col">Joining Date</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="modal-add" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form type="POST" id="form-driver">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">

                                <input type="hidden" id="id" name="id">
                                <div class="form-group">
                                    <label>Driver Name:</label>
                                    <input type="text" class="form-control" id="driver_name" name="driver_name"
                                        placeholder="Driver Name Here..">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number:</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                                        placeholder="Phone Number Here..">
                                </div>
                                <div class="form-group">
                                    <label>Profile Image:</label>
                                    <input type="file" class="form-control" id="profile_image" name="profile_image"
                                        placeholder="Profile Image Here.." accept="*.jpg, *.png, *.jpeg">
                                </div>

                                <div class="form-group">
                                    <label>Gender:</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="">Select</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status:</label>
                                    <select class="form-control" id="is_active" name="is_active">
                                        <option value="">Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                    <textarea class="form-control" id="address" name="address" placeholder="Address Here.."></textarea>
                                </div>

                            </div>
                            <div class="col-4">

                                <div class="form-group">
                                    <label>Personal Identity Number (KTP):</label>
                                    <input type="text" class="form-control" id="personal_identity_number"
                                        name="personal_identity_number" placeholder="Personal Identity Number Here..">
                                </div>
                                <div class="form-group">
                                    <label>Personal Identity Type:</label>
                                    <select class="form-control" id="personal_identity_type"
                                        name="personal_identity_type">
                                        <option value="">Select</option>
                                        <option value="KTP">KTP</option>
                                        <option value="SIM">SIM</option>
                                        <option value="PASPOR">PASPOR</option>
                                        <option value="LAINNYA">LAINNYA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Personal Identity Image:</label>
                                    <input type="file" class="form-control" id="personal_identity_image"
                                        name="personal_identity_image" placeholder="Personal Identity Image Here.."
                                        accept="*.jpg, *.png, *.jpeg">
                                </div>
                                <div class="form-group">
                                    <label>Department:</label>
                                    <select class="form-control" id="department_id" name="department_id">
                                        <option value="">Select</option>
                                        @foreach ($department as $dep)
                                            <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Joining Date:</label>
                                    <input type="date" class="form-control" id="joining_date" name="joining_date"
                                        placeholder="Joining Date Here..">
                                </div>


                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>License Number (SIM):</label>
                                    <input type="text" class="form-control" id="license_number"
                                        name="license_number" placeholder="License Number Here..">
                                </div>
                                <div class="form-group">
                                    <label>License Type:</label>
                                    <select class="form-control" id="license_type" name="license_type">
                                        <option value="">Select</option>
                                        @foreach ($license as $l)
                                            <option value="{{ $l->id }}">{{ $l->license_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>License Image:</label>
                                    <input type="file" class="form-control" id="license_image"
                                        name="license_image" placeholder="Personal Identity Image Here.."
                                        accept="*.jpg, *.png, *.jpeg">
                                </div>
                                <div class="form-group">
                                    <label>License Issue Date:</label>
                                    <input type="date" class="form-control" id="license_issue_date"
                                        name="license_issue_date" placeholder="License Issue Date Here..">
                                </div>
                                <div class="form-group">
                                    <label>License Expired Expired:</label>
                                    <input type="date" class="form-control" id="license_expired_date"
                                        name="license_expired_date" placeholder="License Expired Date Here..">
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <button id="btn-save-data" type="submit" class="btn btn-success btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="modal-view" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-view-content"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>



<!-- JAVASCRIPT -->
<script>
    function loading() {
        $("#btn-save-data").text("Processing....");
        $("#btn-save-data").attr("disabled", true);
    }

    function unloading() {
        $("#btn-save-data").text("Save");
        $("#btn-save-data").removeAttr("disabled");
    }

    $('#table-list').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('driver.table') }}',
        order: [
            [0, "desc"]
        ],
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
            {
                data: 'profile_image',
                name: 'profile_image'
            },
            {
                data: 'driver_name',
                name: 'driver_name'
            },
            {
                data: 'phone_number',
                name: 'phone_number'
            },
            {
                data: 'license_number',
                name: 'license_number'
            },
            {
                data: 'personal_identity_number',
                name: 'personal_identity_number'
            },
            {
                data: 'joining_date',
                name: 'joining_date'
            },
            {
                data: 'is_active',
                name: 'is_active'
            },

        ]
    });

    function viewData(id) {
        $(".modal-title").text("Detail Driver Data");
        $.ajax({
            url: "{{ url('driver') }}"+"/"+id,
            type: "GET",
            success: function(data) {
                $("#modal-view-content").html(data);
                $("#modal-view").modal("show");
            }
        });
    }

    function addData() {
        resetForm();
        save_method = "add";
        $('input[name=_method]').val('POST');
        $(".modal-title").text("Add Driver Data");
        $("#modal-add").modal("show");
        unloading();
    }

    $("#form-driver").submit(function(e) {
        loading();
        e.preventDefault();
        var id = $('#id').val();
        if (save_method == "add") url = "{{ url('/driver') }}";
        else url = "{{ url('/driver') . '/' }}" + id;
        $.ajax({
            url: url,
            type: "POST",
            data: new FormData($('#modal-add form')[0]),
            contentType: false,
            processData: false,
            success: function(data) {
                unloading();
                if (data.success) {
                    $('#modal-add').modal('hide');
                    reloadTable();
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "",
                        html: data.message,
                        footer: ''
                    });
                }
            }

        });
    });


    function editData(id) {
        save_method = "edit";
        $('input[name=_method]').val('PATCH');
        $.ajax({
            url: "{{ url('/driver') }}" + "/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#modal-add').modal("show");
                $('.modal-title').text("Edit Driver Data");
                $('#id').val(data.id);
                $("#driver_name").val(data.driver_name);
                $("#phone_number").val(data.phone_number);
                $("#profile_image").val(null);
                $("#gender").val(data.gender);
                $("#is_active").val(data.is_active);
                $("#address").val(data.address);
                $("#personal_identity_number").val(data.personal_identity_number);
                $("#personal_identity_type").val(data.personal_identity_type);
                $("#personal_identity_image").val(null);
                $("#department_id").val(data.department_id);
                $("#joining_date").val(data.joining_date);
                $("#license_number").val(data.license_number);
                $("#license_type").val(data.license_type);
                $("#license_image").val(null);
                $("#license_issue_date").val(data.license_issue_date);
                $("#license_expired_date").val(data.license_expired_date);
            }
        })
    }

    function deleteData(id) {
        Swal.fire({
            icon: 'question',
            title: 'Delete this data?',

            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete',
            cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ url('/driver') }}" + '/' + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': csrf_token
                    },
                    success: function($data) {
                        reloadTable();
                    }
                });
            }
        });
    }


    function reloadTable() {
        var table = $("#table-list").DataTable();
        table.ajax.reload(null, false);
    }

    function resetForm() {
        $("#driver_name").val("");
        $("#phone_number").val("");
        $("#profile_image").val(null);
        $("#gender").val("");
        $("#is_active").val("");
        $("#address").val("");
        $("#personal_identity_number").val("");
        $("#personal_identity_type").val("");
        $("#personal_identity_image").val(null);
        $("#department_id").val("");
        $("#joining_date").val("");
        $("#license_number").val("");
        $("#license_type").val("");
        $("#license_image").val(null);
        $("#license_issue_date").val("");
        $("#license_expired_date").val("");
    }
</script>
</script>
