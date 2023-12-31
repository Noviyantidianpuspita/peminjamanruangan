<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Room;
use Illuminate\Http\Request;

class DashboardRentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.rents.index', [
            'adminRents' => Rent::latest()->get(),
            'userRents' => Rent::where('user_id', auth()->user()->id)->get(),
            'title' => "Peminjaman",
            'rooms' => Room::all(),
        ]);
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
        $validatedData = $request->validate([
            'no_wa' => 'required|max:20',
            'room_id' => 'required',
            'time_start_use' => 'required',
            'time_end_use' => 'required',
            'purpose' => 'required|max:250',
            'note' => 'required|max:500',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['transaction_start'] = now();
        $validatedData['status'] = 'pending';
        $validatedData['transaction_end'] = null;

        Rent::create($validatedData);

        return redirect('/dashboard/rents')->with('rentSuccess', 'Peminjaman diajukan. Harap tunggu konfirmasi PJ ruangan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        return view('dashboard.rents.show', [
            'title' => "Peminjaman",
            'rent' => $rent,
            'rents' => Rent::all(),
            'rents' => Rent::where('user_id', $rent->id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        //
        $rules = [
            'name' => 'required',
            'purpose' => 'required|max:250',
            'note' => 'required|max:250',
            'transaction_start' => 'required',
        ];

        if ($request->name != $rent->name) {
            $rules['name'] = 'required|max:4|unique:rents';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        Rent::destroy($rent->id);
        return redirect('/dashboard/rents')->with('deleteRent', 'Data peminjaman berhasil dihapus');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function endTransaction($id)
    {
        $transaction = [
            'transaction_end' => now(),
            'status' => 'selesai',
        ];

        Rent::where('id', $id)->update($transaction);

        return redirect('/dashboard/rents');
    }
}
