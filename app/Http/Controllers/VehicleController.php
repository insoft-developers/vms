<?php

namespace App\Http\Controllers;

use App\Models\InsuranceCompany;
use App\Models\Location;
use App\Models\Vehicle;
use App\Models\VehicleJenis;
use App\Models\VehicleMerk;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class VehicleController extends Controller
{
    public function vehicleTable()
    {
        $userid = Auth::user()->id ?? 1;
        $data = Vehicle::where('userid', $userid);
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('merk', function ($row) {
                return $row->merk->vehicle_merk ?? '';
            })

            ->addColumn('type', function ($row) {
                return $row->type->vehicle_type ?? '';
            })

            ->addColumn('jenis', function ($row) {
                return $row->jenis->vehicle_jenis ?? '';
            })
            ->addColumn('location', function ($row) {
                return $row->locations->location_name ?? '';
            })
            ->addColumn('action', function ($row) {
                $html = '';
                $html .= '<div style="margin-top:-10px;"><center>';
                $html .= '<a title="Detail Data" href="javascript:void(0);" onclick="viewData(' . $row->id . ')" style="margin-right:6px;"><i class="fa fa-list fa-tombol-view"></i></a>';
                $html .= '<a title="Edit Data" href="javascript:void(0);" onclick="editData(' . $row->id . ')" style="margin-right:6px;"><i class="fa fa-edit fa-tombol-edit"></i></a>';
                $html .= '<a title="Delete Data" href="javascript:void(0);" onclick="deleteData(' . $row->id . ')"><i class="fa fa-trash fa-tombol-delete"></i></a>';
                $html .= '</center></div>';
                return $html;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = 'vehicle-data';
        $userid = Auth::user()->id ?? 1;
        $merk = VehicleMerk::where('userid', $userid)->get();
        $jenis = VehicleJenis::where('userid', $userid)->get();
        $type = VehicleType::where('userid', $userid)->get();
        $locations = Location::where('userid', $userid)->get();
        $insurance = InsuranceCompany::where('userid', $userid)->get();

        return view('frontend.vehicle.vehicle', compact('view', 'merk', 'jenis', 'type', 'locations', 'insurance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
            'vehicle_name' => 'required',
            'location' => 'required',
            'merk_id' => 'required',
            'jenis_id' => 'required',
            'type_id' => 'required',
            'police_no' => 'required',
            'call_sign' => 'required',
            'vin_no' => 'required',
            'engine_no' => 'required',
            'transmition' => 'required',
            'year_build' => 'required',
            'operation_date' => 'required',
            'fuel' => 'required',
            'cylinder' => 'required',
            'plat_color' => 'required',
            'stnk_no' => 'required',
            'stnk_expired_date' => 'required',
            'pajak' => 'required',
            'pajak_expired_date' => 'required',
            'kir' => 'required',
            'kir_expired_date' => 'required'
        ];

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $pesan = $validator->errors();
            $pesanarr = explode(',', $pesan);
            $find = ['[', ']', '{', '}'];
            $html = '';
            foreach ($pesanarr as $p) {
                $html .= str_replace($find, '', $p) . '<br>';
            }

            return response()->json([
                'success' => false,
                'message' => $html,
            ]);
        }

        try {

            $input['userid'] = Auth::user()->id ?? 1;
            Vehicle::create($input);
            return response()->json([
                'success' => true,
                'message' => 'success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Vehicle::find($id);
        $html = '';
        $html .= '<table class="table-view">';
        $html .= '<tr>';
        $html .= '<td style="width:200px;">Vehicle Name</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->vehicle_name . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Merk</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->merk->vehicle_merk ?? '' . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Jenis</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->jenis->vehicle_jenis ?? '' . '</td>';
        $html .= '</tr>';


        $html .= '<tr>';
        $html .= '<td>Type</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->type->vehicle_type ?? '' . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Police No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->police_no . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Call Sign</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->call_sign . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>VIN No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->vin_no . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Engine No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->engine_no . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Transmition</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->transmition . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Year Build</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->year_build . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Operation Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->operation_date)) . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Fuel</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->fuel . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Cylinder</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->cylinder . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Plat Color</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->plat_color . '</td>';
        $html .= '</tr>';
        
        $html .= '<tr>';
        $html .= '<td>STNK No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->stnk_no . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>STNK Expired Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->stnk_expired_date)) . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Pajak No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->pajak . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Pajak Expired Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->pajak_expired_date)) . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>KIR No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->kir . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>KIR Expired Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->kir_expired_date)) . '</td>';
        $html .= '</tr>';


        $html .= '<tr>';
        $html .= '<td>B3 No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->b3_no . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>B3 Expired Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->b3_expired_date)) . '</td>';
        $html .= '</tr>';


        $html .= '<tr>';
        $html .= '<td>B3 Limbah No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->b3_limbah_no . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>B3 Expired Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->b3_limbah_expired_date)) . '</td>';
        $html .= '</tr>';
        

        $html .= '<tr>';
        $html .= '<td>B3 BBM No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->b3_bbm_no . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>B3 Expired Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->b3_bbm_expired_date)) . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Handak No</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->handak_no . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Handak Expired Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->handak_expired_date)) . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Insurance Company</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->insurance->company_name ?? '' . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Insurance Expired Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->insurance_expired_date)) . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Location</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->locations->location_name ?? '' . '</td>';
        $html .= '</tr>';

       
        
        $html .= '</table>';

        return $html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Vehicle::find($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $rules = [
            'vehicle_name' => 'required',
            'location' => 'required',
            'merk_id' => 'required',
            'jenis_id' => 'required',
            'type_id' => 'required',
            'police_no' => 'required',
            'call_sign' => 'required',
            'vin_no' => 'required',
            'engine_no' => 'required',
            'transmition' => 'required',
            'year_build' => 'required',
            'operation_date' => 'required',
            'fuel' => 'required',
            'cylinder' => 'required',
            'plat_color' => 'required',
            'stnk_no' => 'required',
            'stnk_expired_date' => 'required',
            'pajak' => 'required',
            'pajak_expired_date' => 'required',
            'kir' => 'required',
            'kir_expired_date' => 'required'
        ];

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $pesan = $validator->errors();
            $pesanarr = explode(',', $pesan);
            $find = ['[', ']', '{', '}'];
            $html = '';
            foreach ($pesanarr as $p) {
                $html .= str_replace($find, '', $p) . '<br>';
            }

            return response()->json([
                'success' => false,
                'message' => $html,
            ]);
        }

        try {

            $input['userid'] = Auth::user()->id ?? 1;
            $data = Vehicle::find($id);
            $data->update($input);
            return response()->json([
                'success' => true,
                'message' => 'success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Vehicle::destroy($id);
        return $data;
    }
}
