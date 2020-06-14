<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tareas;
use App\User;
use Illuminate\Support\Facades\DB;

class tareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$tareas= tareas::all();
        $users=User::all();
		
		return view ('tareas.index', compact('tareas'), compact('users'));
    }
    
    public static function listausers()
    {
        //
        $users=DB::table('users')
            ->select('users.id', 'users.name')
            ->join('role_user','role_user.user_id','=','users.id')
            ->where(['role_user.role_id' => '2'])
            ->get();
		
		return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tareas.anadir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $request->validate([
            'id_empleado' => 'required',
            'descripcion_tarea' => 'descripcion_tarea',
            'estado_tarea' => 'estado_tarea',
            'id_cliente' => 'id_cliente',
            'titulo_tarea' => 'titulo_tarea'
        ]);*/
        
        $tareas = new tareas([
            'id_empleado' => $request->get('id_empleado'),
            'descripcion_tarea' => $request->get('descripcion_tarea'),
            'estado_tarea' => $request->get('estado_tarea'),
            'id_cliente' => $request->get('id_cliente'),
            'precio' => $request->get('precio'),
            'titulo_tarea' => $request->get('titulo_tarea')
            
            
        ]);
        $tareas->save();
        return redirect('/tareas')->with('success', 'Tarea guardada');
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
		$tareas = tareas::find($id);
		return view ('tareas.editar', compact('tarea'));
        		$tareas = tareas::find($id);
    }
    
    
       public function imprimir($id)
    {
		$tareas = tareas::find($id);
		return view ('tareas.factura', compact('tareas'));
        		$tareas = tareas::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tareas = tareas::find($id);
		return view('tareas.editar', compact('tareas'));
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
        //
		$request-> validate([
		'id_empleado'=>'required',
		'descripcion_tarea'=>'required',
		'estado_tarea'=>'required',
		'id_cliente'=>'required',
		'precio'=>'required',
		'titulo_tarea'=>'required']);
		$tarea = tareas::find($id);
		$tarea->id_empleado = $request->get('id_empleado');
		$tarea->descripcion_tarea = $request->get('descripcion_tarea');
		$tarea->estado_tarea = $request->get('estado_tarea');
		$tarea->id_cliente = $request->get('id_cliente');
		$tarea->titulo_tarea = $request->get('titulo_tarea');
		$tarea->precio = $request->get('precio');
		$tarea->save();
		
		return redirect('/tareas')->with('succes', 'Tarea actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $tarea = tareas::find($id);
        $tarea->delete();

        return redirect('/tareas')->with('success', 'Tarea eliminada!');
    }
}
