<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $users = User::all();

        return view('usuarios.indexusuarios', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('usuarios.crearusuarios');
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
            
            'name'=>'required',
            'email'=>'required',
            'descripcion_usuario'=>'required',
            'password'=>'required'
        ]);
        
        $passAux=$request->get('password');
        $emailAux=$request->get('email');
        
        $user = new user([
        
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'descripcion_usuario' => $request->get('descripcion_usuario'),
            'password' =>  Hash::make($passAux)
        ]);
        $user->save();
        $idRol=$request->get('rol');
         $idAux = DB::table('users')->where('email', $emailAux)->first();
        
        DB::table('role_user')->insert(['user_id' => $idAux->id, 'role_id' =>$idRol]);
        
        return redirect('/usuarios')->with('success', '¡Usuario Guardado!');
        
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
                $users = user::find($id);
		return view('usuarios.editarusuarios', compact('users'));
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
        		$request-> validate([
		'name'=>'required',
		'email'=>'required',
		'descripcion_usuario'=>'required',
                ]);
		$user = user::find($id);
		//$user->user = $request->get('id');
		$user->name = $request->get('name');
		$user->email = $request->get('email');
		$user->descripcion_usuario = $request->get('descripcion_usuario');
		//$user->password = $request->get('password');
//		$user->cargo = $request->get('cargo');

		$user->save();
		
		return redirect('/usuarios')->with('succes', '¡Usuario actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user = user::find($id);
        $user->delete();

        return redirect('/usuarios')->with('success', '¡Usuario eliminado!');
    }
}
