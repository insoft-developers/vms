<x-app-layout>
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Vehicle Data</h4>

                        </div>
                        <button onclick="addData()" style="float: right;" type="button"
                            class="btn btn-sm btn-success rounded-pill mt-2">+ Add
                            Vehicle Data</button>

                    </div>
                    <div class="card-body">
                        <div class="">
                            <table class="table table-bordered noWrap" id="table-list">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">#</th>
                                        <th scope="col">Vehicle Name</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">Jenis</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Location</th>
                                        <th style="width: 200px;" scope="col">Actions</th>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form type="POST" id="form-add">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id" name="id">
                        <div class="card-body">
                            <div class="collapse" id="tabs-5">
                                <div class="card"></div>
                            </div>

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                        role="tab" aria-controls="pills-home" aria-selected="false">Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">Engine</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                        role="tab" aria-controls="pills-contact" aria-selected="true">Vehicle
                                        Document</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                        href="#pills-other-document" role="tab" aria-controls="pills-other-document"
                                        aria-selected="true">Other Document</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent-2">
                                <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Vehicle Name <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" name="vehicle_name"
                                                    id="vehicle_name" placeholder="Enter Vehicle Name Here...">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Current Location <span style="color:red;">*</span></label>
                                                <select class="form-control" id="location" name="location">
                                                    <option value="">Select</option>
                                                    @foreach ($locations as $location)
                                                        <option value="{{ $location->id }}">
                                                            {{ $location->location_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Merk <span style="color:red;">*</span></label>
                                                <select class="form-control" id="merk_id" name="merk_id">
                                                    <option value="">Select</option>
                                                    @foreach ($merk as $m)
                                                        <option value="{{ $m->id }}">{{ $m->vehicle_merk }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Jenis <span style="color:red;">*</span></label>
                                                <select class="form-control" id="jenis_id" name="jenis_id">
                                                    <option value="">Select</option>
                                                    @foreach ($jenis as $j)
                                                        <option value="{{ $j->id }}">{{ $j->vehicle_jenis }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Type <span style="color:red;">*</span></label>
                                                <select class="form-control" id="type_id" name="type_id">
                                                    <option value="">Select</option>
                                                    @foreach ($type as $t)
                                                        <option value="{{ $t->id }}">{{ $t->vehicle_type }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Police No <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" name="police_no"
                                                    id="police_no" placeholder="Enter Police No Here...">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Call Sign <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" name="call_sign"
                                                    id="call_sign" placeholder="Enter Call Sign Here...">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- tab2 --}}
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>VIN No <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" id="vin_no"
                                                    name="vin_no" placeholder="VIN No Here....">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label>Engine No <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="engine_no"
                                                name="engine_no" placeholder="Engine No Here....">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-4">
                                            <label>Transmition <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="transmition"
                                                name="transmition" placeholder="Enter Vehicle Transmition Here...">
                                        </div>
                                        <div class="col-4">
                                            <label>Year Build <span style="color:red;">*</span></label>
                                            <input type="number" class="form-control" id="year_build"
                                                name="year_build" placeholder="ex: 2018">
                                        </div>
                                        <div class="col-4">
                                            <label>Operation Date <span style="color:red;">*</span></label>
                                            <input type="date" class="form-control" id="operation_date"
                                                name="operation_date">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-4">
                                            <label>Fuel <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="fuel" name="fuel"
                                                placeholder="ex: Diesel">
                                        </div>
                                        <div class="col-4">
                                            <label>Cylinder <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="cylinder"
                                                name="cylinder" placeholder="ex: 13000">
                                        </div>
                                        <div class="col-4">
                                            <label>Plat Color <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" id="plat_color"
                                                name="plat_color" placeholder="ex: Yellow">
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">

                                    <div class="row">
                                        <div class="col-8">
                                            <label>STNK No <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="stnk_no" id="stnk_no"
                                                placeholder="STNK No here ...">
                                        </div>
                                        <div class="col-4">
                                            <label>STNK Expired Date <span style="color:red;">*</span></label>
                                            <input type="date" class="form-control" id="stnk_expired_date"
                                                name="stnk_expired_date">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-8">
                                            <label>Pajak No <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="pajak" id="pajak"
                                                placeholder="Pajak No here ...">
                                        </div>
                                        <div class="col-4">
                                            <label>Pajak Expired Date <span style="color:red;">*</span></label>
                                            <input type="date" class="form-control" id="pajak_expired_date"
                                                name="pajak_expired_date">
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="row">
                                        <div class="col-8">
                                            <label>KIR <span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="kir" id="kir"
                                                placeholder="KIR No here ...">
                                        </div>
                                        <div class="col-4">
                                            <label>KIR Expired Date <span style="color:red;">*</span></label>
                                            <input type="date" class="form-control" id="kir_expired_date"
                                                name="kir_expired_date">
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="tab-pane fade" id="pills-other-document" role="tabpanel"
                                    aria-labelledby="pills-other-document-tab">
                                    <div class="row">
                                        <div class="col-8">
                                            <label>B3 No</label>
                                            <input type="text" class="form-control" name="b3_no" id="b3_no"
                                                placeholder="B3 No here ...">
                                        </div>
                                        <div class="col-4">
                                            <label>B3 Expired Date</label>
                                            <input type="date" class="form-control" id="b3_expired_date"
                                                name="b3_expired_date">
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="row">
                                        <div class="col-8">
                                            <label>B3 Limbah No</label>
                                            <input type="text" class="form-control" name="b3_limbah_no"
                                                id="b3_limbah_no" placeholder="B3 Limbah No here ...">
                                        </div>
                                        <div class="col-4">
                                            <label>B3 Limbah Expired Date</label>
                                            <input type="date" class="form-control" id="b3_limbah_expired_date"
                                                name="b3_limbah_expired_date">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-8">
                                            <label>B3 BBM No</label>
                                            <input type="text" class="form-control" name="b3_bbm_no"
                                                id="b3_bbm_no" placeholder="B3 BBM No here ...">
                                        </div>
                                        <div class="col-4">
                                            <label>B3 BBM Expired Date</label>
                                            <input type="date" class="form-control" id="b3_bbm_expired_date"
                                                name="b3_bbm_expired_date">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-8">
                                            <label>Handak No</label>
                                            <input type="text" class="form-control" name="handak_no"
                                                id="handak_no" placeholder="Handak No here ...">
                                        </div>
                                        <div class="col-4">
                                            <label>Handak Expired Date</label>
                                            <input type="date" class="form-control" id="handak_expired_date"
                                                name="handak_expired_date">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-8">

                                            <div class="form-group">
                                                <label>Insurance Company</label>
                                                <select class="form-control" id="insurance_company_id"
                                                    name="insurance_company_id">
                                                    <option value="">Select</option>
                                                    @foreach ($insurance as $i)
                                                        <option value="{{ $i->id }}">{{ $i->company_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label>Insurance Expired Date</label>
                                            <input type="date" class="form-control" id="insurance_expired_date"
                                                name="insurance_expired_date">
                                        </div>
                                    </div>
                                    <hr />
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

    function viewData(id) {
        $(".modal-title").text("Detail Vehicle Data");
        $.ajax({
            url: "{{ url('vehicle') }}"+"/"+id,
            type: "GET",
            success: function(data) {
                $("#modal-view-content").html(data);
                $("#modal-view").modal("show");
            }
        });
    }


    function loading() {
        $("#btn-save-data").text("Processing....");
        $("#btn-save-data").attr("disabled", true);
    }

    function unloading() {
        $("#btn-save-data").text("Save");
        $("#btn-save-data").removeAttr("disabled");
    }

    $('#table-list').DataTable({
        dom: 'Bfrtip', // 'B' = buttons
        buttons: [
            'csv', 'excel', 'pdf'
        ],
        processing: true,
        serverSide: true,
        ajax: '{{ route('vehicle.table') }}',
        order: [
            [0, "desc"]
        ],
        columns: [{
                data: 'id',
                name: 'id',
                visible: false,
                searchable: false
            },
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false,
                visible: false
            },
            {
                data: 'vehicle_name',
                name: 'vehicle_name'
            },
            {
                data: 'merk',
                name: 'merk'
            },
            {
                data: 'jenis',
                name: 'jenis'
            },
            {
                data: 'type',
                name: 'type'
            },
            {
                data: 'location',
                name: 'location'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
    });

    function addData() {
        resetForm();
        save_method = "add";
        $('input[name=_method]').val('POST');
        $(".modal-title").text("Add Vehicle Data");
        $("#modal-add").modal("show");
        unloading();
    }

    $("#form-add").submit(function(e) {
        loading();
        e.preventDefault();
        var id = $('#id').val();
        if (save_method == "add") url = "{{ url('/vehicle') }}";
        else url = "{{ url('/vehicle') . '/' }}" + id;
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
            url: "{{ url('/vehicle') }}" + "/" + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#modal-add').modal("show");
                $('.modal-title').text("Edit Vehicle Data");
                $('#id').val(data.id);
                $("#vehicle_name").val(data.vehicle_name);
                $("#location").val(data.location);
                $("#merk_id").val(data.merk_id);
                $("#jenis_id").val(data.jenis_id);
                $("#type_id").val(data.type_id);
                $("#police_no").val(data.police_no);
                $("#call_sign").val(data.call_sign);
                $("#vin_no").val(data.vin_no);
                $("#engine_no").val(data.engine_no);
                $("#transmition").val(data.transmition);
                $("#year_build").val(data.year_build);
                $("#operation_date").val(data.operation_date);
                $("#fuel").val(data.fuel);
                $("#cylinder").val(data.cylinder);
                $("#plat_color").val(data.plat_color);
                $("#stnk_no").val(data.stnk_no);
                $("#stnk_expired_date").val(data.stnk_expired_date);
                $("#pajak").val(data.pajak);
                $("#pajak_expired_date").val(data.pajak_expired_date);
                $("#kir").val(data.kir);
                $("#kir_expired_date").val(data.kir_expired_date);
                $("#b3_no").val(data.b3_no);
                $("#b3_expired_date").val(data.b3_expired_date);
                $("#b3_limbah_no").val(data.b3_limbah_no);
                $("#b3_limbah_expired_date").val(data.b3_limbah_expired_date);
                $("#b3_bbm_no").val(data.b3_bbm_no);
                $("#b3_bbm_expired_date").val(data.b3_bbm_expired_date);
                $("#handak_no").val(data.handak_no);
                $("#handak_expired_date").val(data.handak_expired_date);
                $("#insurance_company_id").val(data.insurance_company_id);
                $("#insurance_expired_date").val(data.insurance_expired_date);
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
                    url: "{{ url('/vehicle') }}" + '/' + id,
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
        $("#vehicle_name").val("");
        $("#location").val("");
        $("#merk_id").val("");
        $("#jenis_id").val("");
        $("#type_id").val("");
        $("#police_no").val("");
        $("#call_sign").val("");
        $("#vin_no").val("");
        $("#engine_no").val("");
        $("#transmition").val("");
        $("#year_build").val("");
        $("#operation_date").val("");
        $("#fuel").val("");
        $("#cylinder").val("");
        $("#plat_color").val("");
        $("#stnk_no").val("");
        $("#stnk_expired_date").val("");
        $("#pajak").val("");
        $("#pajak_expired_date").val("");
        $("#kir").val("");
        $("#kir_expired_date").val("");
        $("#b3_no").val("");
        $("#b3_expired_date").val("");
        $("#b3_limbah_no").val("");
        $("#b3_limbah_expired_date").val("");
        $("#b3_bbm_no").val("");
        $("#b3_bbm_expired_date").val("");
        $("#handak_no").val("");
        $("#handak_expired_date").val("");
        $("#insurance_company_id").val("");
        $("#insurance_expired_date").val("");


    }
</script>
