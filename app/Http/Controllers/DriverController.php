<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Driver;
use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

class DriverController extends Controller
{
    public function driverTable()
    {
        $auth_id = Auth::user()->id ?? 1;

        $data = Driver::where('userid', $auth_id);
        return DataTables::of($data)
            ->addColumn('profile_image', function ($row) {
                if ($row->profile_image == null) {
                    return '';
                } else {
                    return '<a href="' . asset('/storage/drivers/' . $row->profile_image) . '" target="_blank"><img class="profile-image" src="' . asset('/storage/drivers/' . $row->profile_image) . '"></a>';
                }
            })
            ->addColumn('is_active', function ($row) {
                if ($row->is_active == 1) {
                    return 'Active';
                } else {
                    return 'Not Active';
                }
            })
            ->addColumn('action', function ($row) {
                $html = '';
                $html .= '<div style="margin-top:-10px;">';
                $html .= '<a title="Duplicate Data" href="javascript:void(0);" onclick="copyData(' . $row->id . ')" style="margin-right:6px;"><i class="fa fa-copy fa-tombol-copy"></i></a>';
                $html .= '<a title="Detail Data" href="javascript:void(0);" onclick="viewData(' . $row->id . ')" style="margin-right:6px;"><i class="fa fa-list fa-tombol-view"></i></a>';
                $html .= '<a title="Edit Data" href="javascript:void(0);" onclick="editData(' . $row->id . ')" style="margin-right:6px;"><i class="fa fa-edit fa-tombol-edit"></i></a>';
                $html .= '<a title="Delete Data" href="javascript:void(0);" onclick="deleteData(' . $row->id . ')"><i class="fa fa-trash fa-tombol-delete"></i></a>';
                $html .= '</div>';
                return $html;
            })
            ->rawColumns(['action', 'profile_image'])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = 'driver';

        $userid = Auth::user()->id ?? 1;
        $department = Department::where('userid', $userid)->get();
        $license = License::where('userid', $userid)->get();

        return view('frontend.driver.index', compact('view', 'department', 'license'));
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
            'driver_name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'department_id' => 'required',
            'personal_identity_number' => 'required',
            'personal_identity_type' => 'required',
            'license_number' => 'required',
            'license_issue_date' => 'required',
            'license_expired_date' => 'required',
            'email' => 'email|required',
            'rt' => 'required',
            'rw' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required'
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

            // upload ktp
            $input['personal_identity_image'] = null;
            $unik = uniqid();
            if ($request->hasFile('personal_identity_image')) {
                $input['personal_identity_image'] = Str::slug($unik, '-') . '.' . $request->personal_identity_image->getClientOriginalExtension();
                $request->personal_identity_image->move(public_path('/storage/personal'), $input['personal_identity_image']);
            }

            // upload profile foto
            $input['profile_image'] = null;
            $unik = uniqid();
            if ($request->hasFile('profile_image')) {
                $input['profile_image'] = Str::slug($unik, '-') . '.' . $request->profile_image->getClientOriginalExtension();
                $request->profile_image->move(public_path('/storage/drivers'), $input['profile_image']);
            }

            // upload sim
            $input['license_image'] = null;
            $unik = uniqid();
            if ($request->hasFile('license_image')) {
                $input['license_image'] = Str::slug($unik, '-') . '.' . $request->license_image->getClientOriginalExtension();
                $request->license_image->move(public_path('/storage/licenses'), $input['license_image']);
            }

            Driver::create($input);
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
        $data = Driver::find($id);
        $html = '';
        $html .= '<table class="table-view">';
        $html .= '<tr>';
        $html .= '<td style="width:200px;">Driver Name</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->driver_name . '</td>';
        $html .= '</tr>';

        if ($data->profile_image !== null) {
            $html .= '<tr>';
            $html .= '<td>Profile Image</td>';
            $html .= '<td>:</td>';
            $html .= '<td><img class="img-view-profile" src="' . asset('/storage/drivers/' . $data->profile_image) . '"></td>';
            $html .= '</tr>';
        }

        $html .= '<tr>';
        $html .= '<td>Address</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->address . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Phone Number</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->phone_number . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Department</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->department->name ?? '' . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Personal Identity Number</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->personal_identity_number . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Personal Identity Type</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->personal_identity_type . '</td>';
        $html .= '</tr>';

        if ($data->personal_identity_image !== null) {
            $html .= '<tr>';
            $html .= '<td>Personal Identity Image</td>';
            $html .= '<td>:</td>';
            $html .= '<td><img class="img-fluid" src="' . asset('/storage/personal/' . $data->personal_identity_image) . '"></td>';
            $html .= '</tr>';
        }

        $html .= '<tr>';
        $html .= '<td>License Number</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->license_number . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>License Type</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->license->license_name ?? '' . '</td>';
        $html .= '</tr>';

        if ($data->license_image !== null) {
            $html .= '<tr>';
            $html .= '<td>License Image</td>';
            $html .= '<td>:</td>';
            $html .= '<td><img class="img-fluid" src="' . asset('/storage/licenses/' . $data->license_image) . '"></td>';
            $html .= '</tr>';
        }

        $html .= '<tr>';
        $html .= '<td>License Issue Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->license_issue_date)) . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>License Expired Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->license_expired_date)) . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Joining Date</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . date('d-m-Y', strtotime($data->joining_date)) . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Gender</td>';
        $html .= '<td>:</td>';
        $html .= '<td>' . $data->gender . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td>Status</td>';
        $html .= '<td>:</td>';
        if($data->is_active == 1) {
            $html .= '<td>Active</td>';
        } else {
             $html .= '<td>Not Active</td>';
        }
        
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
        $data = Driver::find($id);
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
            'driver_name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'department_id' => 'required',
            'personal_identity_number' => 'required',
            'personal_identity_type' => 'required',
            'license_number' => 'required',
            'license_issue_date' => 'required',
            'license_expired_date' => 'required',
            'email' => 'email|required',
            'rt' => 'required',
            'rw' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required'
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

            $driver = Driver::find($id);
            // upload ktp
            $input['personal_identity_image'] = $driver->personal_identity_image;
            $unik = uniqid();
            if ($request->hasFile('personal_identity_image')) {
                $input['personal_identity_image'] = Str::slug($unik, '-') . '.' . $request->personal_identity_image->getClientOriginalExtension();
                $request->personal_identity_image->move(public_path('/storage/personal'), $input['personal_identity_image']);
            }

            // upload profile foto
            $input['profile_image'] = $driver->profile_image;
            $unik = uniqid();
            if ($request->hasFile('profile_image')) {
                $input['profile_image'] = Str::slug($unik, '-') . '.' . $request->profile_image->getClientOriginalExtension();
                $request->profile_image->move(public_path('/storage/drivers'), $input['profile_image']);
            }

            // upload sim
            $input['license_image'] = $driver->license_image;
            $unik = uniqid();
            if ($request->hasFile('license_image')) {
                $input['license_image'] = Str::slug($unik, '-') . '.' . $request->license_image->getClientOriginalExtension();
                $request->license_image->move(public_path('/storage/licenses'), $input['license_image']);
            }

            $driver->update($input);
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
        $data = Driver::destroy($id);
        return $data;
    }
}
