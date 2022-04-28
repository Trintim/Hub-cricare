<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FuncionarioController extends Controller
{
    private $funcionarios;

    public function __construct(Funcionario $funcionarios)
    {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     $this->funcionarios = $funcionarios;
    }

    public function index()
    {
        $funcionarios = $this->funcionarios->all();
        return view('admin.funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.funcionarios.crud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FuncionarioRequest $request)
    {
        $datas = $request->all();
        if($request->hasFile('image')){
            $datas['image'] = $request->file('image')->store('funcionarios', 'public');
        } else{
            return redirect()->back->withInput($request->all())->with('danger', 'Insira uma Foto valida para o funcionario!');
        }

        $this->funcionarios->create($datas);
        return redirect(route('admin.produtos.index'))->with('success', 'Funcionario cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionario = $this->funcionarios->find($id);
        return json_encode($funcionario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = $this->funcionarios->find($id);
        return view('admin.funcionarios.crud');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FuncionarioRequest $request, $id)
    {
        $datas = $request->all();
        $funcionario = $this->funcionarios->find($id);
        if($request->hasFile('image')){
            Storage::delete('public/'.$funcionario->image);
            $datas['image'] = $request->file('image')->store('funcionario');
        }

        $this->funcionarios->create($datas);
        return redirect(route('admin.produtos.index'))->with('success', 'Funcionario atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = $this->funcionarios->find($id);
        Storage::delete('public/'.$funcionario->image);
        $funcionario->delete();
        return redirect(route('admin.funcionarios.index'))->with('success', 'Funcionario desvinculado com sucesso!');
    }
}
