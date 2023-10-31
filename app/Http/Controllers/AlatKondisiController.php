<?php

namespace App\Http\Controllers;

use App\Models\AlatKondisi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class AlatKondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        if ($request->ajax()) {
            $kondisi_alat = AlatKondisi::all();
            return DataTables::of($kondisi_alat)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $newdata = json_decode($row);
                    foreach ($newdata as $key => $value) {
                        $newdata->$key = str_replace(" ", "-", $value);
                    }
                    $newdata = json_encode($newdata);

                    $btn = '<a href=' . route('kondisialat.update', $row->KondisiId) . ' data-id='.$newdata.' style="font-size:20px" class="text-warning mr-10" onClick="notificationEdit(event,this)"><i class="lni lni-pencil-alt"></i></a>';
                    // $btn = '<a href=' . route('kondisialat.update', $row->KondisiId) . ' style="font-size:20px" class="text-warning mr-10" onClick="notificationEdit(event,this)"><i class="lni lni-pencil-alt"></i></a>';
                    $btn .= '<a href=' . route('kondisialat.destroy', $row->KondisiId) . ' style="font-size:20px" class="text-danger mr-10" onClick="notificationBeforeDelete(event,this)"><i class="lni lni-trash-can"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('alatberatkondisi.index');
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
        $request->validate(
            [
                'Label' => 'required',
            ]
        );
        //
        $data = [
            'Label' => $request->Label,
            'Keterangan' => $request->Keterangan
        ];
        AlatKondisi::create($data);
        Alert::success('Success', 'Berhasil menambahkan Kondisi Baru');
        return redirect()->route('kondisialat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $data = [
            'Label' => $request->Label,
            'Keterangan' => $request->Keterangan
        ];

        AlatKondisi::where('KondisiId', $request->KondisiId)->update($data);
        Alert::success('Success', 'Berhasil mengupdate Kondisi Alat Berat');
        return redirect()->route('kondisialat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        AlatKondisi::where('KondisiId', $id)->delete();
        Alert::success('Success', 'Berhasil menghapus data Kondisi');
        return redirect()->route('kondisialat.index');
    }
}
