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
        <div class="modal-dialog modal-xl">
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
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label class="control-label col-sm-4 align-self-center"
                                            for="vehicle_name">Vehicle Name:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="vehicle_name" name="vehicle_name"
                                                placeholder="masukkan vehicle name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-sm-4 align-self-center"
                                            for="branch_id">Branch:</label>
                                        <div class="col-sm-8">
                                            <select type="text" class="form-control" id="branch_id" name="branch_id">
                                            <option value="">Pilih branch</option>
                                            @foreach($branches as $m)
                                                <option value="{{ $m->id }}">{{ $m->branch_name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-sm-4 align-self-center"
                                            for="no_lambung">Nomor Lambung:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="no_lambung" name="no_lambung"
                                                placeholder="masukkan no lambung kendaraan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-sm-4 align-self-center"
                                            for="police_no">Nomor Polisi:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="police_no" name="police_no"
                                                placeholder="masukkan nomor polisi kendaraan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-sm-4 align-self-center"
                                            for="vehicle_merk">Merk:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="vehicle_merk" name="vehicle_merk">
                                            <option value="">Pilih merk</option>
                                            @foreach($merk as $m)
                                                <option value="{{ $m->id }}">{{ $m->vehicle_merk }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-sm-4 align-self-center"
                                            for="vehicle_jenis">Jenis:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="vehicle_jenis" name="vehicle_jenis">
                                            <option value="">Pilih jenis</option>
                                            @foreach($jenis as $m)
                                                <option value="{{ $m->id }}">{{ $m->vehicle_jenis }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label col-sm-4 align-self-center"
                                            for="vehicle_type">Type:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="vehicle_type" name="vehicle_type">
                                            <option value="">Pilih type</option>
                                            @foreach($type as $m)
                                                <option value="{{ $m->id }}">{{ $m->vehicle_type }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-6">
                                    {{-- bagian dua --}}
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
            url: "{{ url('vehicle') }}" + "/" + id,
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
