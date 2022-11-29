<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = Rent::where("id_usuario", "=", auth()->user()->id)->latest()->paginate(5);
        return view('rent.index', compact('rents'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicle = Product::find(request()->input('id_product'));
        return view('rent.create', ["vehicle"=>$vehicle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # VEM DO GET
        $request->merge(['id_veiculo'=>$request->query('id_veiculo')]);
        $valid_inputs = $this->validate($request, [
            'id_veiculo' => 'required|numeric',
            'valor_total' => 'required|numeric',
            'data_inicial' => 'required|date',
            'data_final' => 'required|date',
        ]);

        Rent::create(array_merge(['id_usuario'=>auth()->user()->id], $valid_inputs));

        return redirect()->route('rent.index')->with('success', 'Rent created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rent = Rent::find($id);

        return view('rent.show', compact('rent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rent = Rent::find($id);
        $vehicle = Product::find($rent->id_veiculo);
        return view('rent.edit', compact('rent', 'vehicle'));
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
        # VEM DO GET
        $valid_inputs = $this->validate($request, [
            'valor_total' => 'required|numeric',
            'data_inicial' => 'required|date',
            'data_final' => 'required|date',
        ]);

        $rent = Rent::find($id);
        $rent->valor_total = $valid_inputs['valor_total'];
        $rent->data_inicial = $valid_inputs['data_inicial'];
        $rent->data_final = $valid_inputs['data_final'];
        $rent->save();

        return redirect()->route('rent.index')->with('success', 'Rent updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("rent")->where('id',$id)->delete();
        return redirect()->route('rent.index')->with('success','Rent deleted successfully');
    }
}
