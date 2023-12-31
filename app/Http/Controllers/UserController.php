<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::get();
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'email'      => $request->email,
            'name'       => $request->name,
            'password'   => Hash::make($request->password),
            'user_alamat' => $request->user_alamat,
            'user_hp'     => $request->user_hp,
            'user_pos'    => $request->user_pos,
            'user_role'   => $request->user_role, // Make sure to provide a value for 'user_role'
            'user_aktif'  => $request->user_aktif,
        ];
    
        User::create($data);
        return redirect()->route('user');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::find($id);
        return view('users.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data['email']      = $request->email;
        $data['name']       = $request->name;
        $data['password']   = Hash::make($request->email);
        $data['user_alamat']      = $request->user_alamat;
        $data['user_hp']      = $request->user_hp;
        $data['user_pos']      = $request->user_pos;
        $data['user_role']      = $request->user_role;
        $data['user_aktif']      = $request->user_aktif;

        User::whereId($id)->update($data);
        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('user');
    }
}
