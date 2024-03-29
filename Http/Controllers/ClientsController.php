<?php

namespace Login\Login\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Login\Login\Entities\Clients;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ClientsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all();

        return view('login::clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login::clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $client = new Clients();
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->cep = $request->cep;
        $client->rua = $request->rua;
        $client->numero = $request->numero;
        $client->bairro = $request->bairro;
        $client->cidade = $request->cidade;
        $client->uf = $request->uf;
        $client->complemento = $request->complemento;
        $client->telefone = $request->telefone;
        $client->celular = $request->celular;
        $client->email = $request->email;
        $client->save();

        return redirect(route('clients'));
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
        $client = Clients::find($id);

        return view('login::clients.edit', compact('client'));
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
        $client = Clients::find($id);
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->cep = $request->cep;
        $client->rua = $request->rua;
        $client->numero = $request->numero;
        $client->bairro = $request->bairro;
        $client->cidade = $request->cidade;
        $client->uf = $request->uf;
        $client->complemento = $request->complemento;
        $client->telefone = $request->telefone;
        $client->celular = $request->celular;
        $client->email = $request->email;
        $client->save();

        return redirect(route('clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Clients::find($id);
        $client->delete();

        return redirect(route('clients'));
    }

    public function email($id){
        $cliente = Clients::find($id);
        $user = Auth::user();
//        dd($cliente);
        Mail::to($user)->send(new ServicosMail($cliente));

        return redirect(route('clients'))->with('success', 'Email enviado');
    }
}

