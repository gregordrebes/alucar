<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;

class NavegadorController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function agencia()
    {
        return view('agencia');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => ['required', 'string', 'max:255', 'unique:agency'],
            'endereco' => ['required', 'string', 'max:255'],
            'cidade' => ['required', 'string', 'max:255'],
            
        ]);

        $agency = Agency::create([
            'descricao' => $request->descricao,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
        ]);

        event(new Registered($agency));

        return redirect(RouteServiceProvider::HOME);
    }

    public function index()
    {
        //$agency = Agency::orderBy('id', 'asc')->paginate(10);
    
       // return view('dashboard',compact('agency'))
            //->with('i', (request()->input('page', 1) - 1) * 10);

            $resultado = DB::table('agency')->get('descricao')->all();

            foreach($resultado as $agency)
            {
                echo"<p>$agency->descricao</p>";
            }     
    }
}
