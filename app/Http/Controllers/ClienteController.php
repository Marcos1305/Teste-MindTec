<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    protected $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    {
        $clientes = $this->cliente->all();
        return view('clientes.home', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {

        $this->cliente->DataCadastro = date('Y-m-d');

        $saveCliente = $this->cliente->fill($request->all())->save();

        $saveContato = $this->cliente->contato()->create($request->all());

        if($saveCliente && $saveContato)
            return redirect()->route('cliente.index')->with('success', 'Cliente criado com sucesso!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = $this->cliente->find($id);

        return view('clientes.create', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClienteRequest $request)
    {


        $cliente = $this->cliente->find($request->cliente_id);
        $updateCliente = $cliente->update($request->all());
        $updateContato = $cliente->contato->update($request->all());

        if($updateCliente && $updateContato)
            return redirect()->route('cliente.index')->with('success',  "Cliente {$cliente->RazaoSocial} atualizado com sucesso!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = $this->cliente->find($id);
        $deleteCliente = $cliente->delete();
        if($deleteCliente)
            return redirect()->back()->with('success', 'Registro excluido com sucesso!');
    }
}
