<?php
  
namespace App\Http\Controllers;
   
use App\Models\User;
use Illuminate\Http\Request;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'asc')->paginate(10);
    
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birthdate' => 'required',
            'cpf' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $request->merge(["cpf" => preg_replace('/[-\.]+/', '', $request->cpf)]);
        $request->merge(["phone" => preg_replace('/[(\)\-\" "]+/', '', $request->phone)]);

        User::create($request->all());
     
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'birthdate' => 'required',
            'cpf' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $request->merge(["cpf" => preg_replace('/[-\.]+/', '', $request->cpf)]);
        $request->merge(["phone" => preg_replace('/[(\)\-\" "]+/', '', $request->phone)]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Search the users in storage with name.
     *
     * @param  \App\User  $user
     */
    public function search(Request $request) 
    {
        $filters = $request->name;

        $query = User::query();
    
        if ($request->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }
    
        $users = $query->orderBy('id', 'asc')->paginate(10);
    
        return view('users.index',compact('users','filters'))
            ->with('i', (request()->input('page', 1) - 1) * 10);;
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}