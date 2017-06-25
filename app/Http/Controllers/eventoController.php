<?php

namespace trabalho\Http\Controllers;

use trabalho\evento;
use Illuminate\Http\Request;
use trabalho\categoria;
//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Input;
use trabalho\assento;
use trabalho\Http\Requests\StoreEventoRequest;

class eventoController extends Controller
{
     function __construct() {
//    $this->middleware('admin:gerente',['only'=>['create']]);
//    $this->middleware('admin:supervisor',['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $eventos = Evento::all();
        return view('eventos.index')->withEventos($eventos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = categoria::pluck('tipo','idCategoria')->all();
        return view('eventos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventoRequest $request)
    {
        $image = $request->file('cartaz');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        
        $evento = new evento(array(
        'evento_categoria' => $request->get('evento_categoria'),
        'descricao'  => $request->get('descricao'),
        'data'  => $request->get('data'),
        'QtdAssentos'  => $request->get('QtdAssentos'),
        'cartaz' => $imageName
        ));
        $evento->save();       
        
        for ($i = 1 ; $i <= $request->get('QtdAssentos'); $i++ ){
            
            $assento = new assento();
            
            $assento->numero = $i;
            $assento->assento_evento = $evento->id;
            $assento->save();
            
        }
        
        $msg = "evento cadastrado com sucesso";
        
        return view('eventos.index')->withMensagem($msg);
                
        //return redirect()->route('eventos.create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \trabalho\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(evento $evento)
    {
        dd($evento);
        
         return view('eventos.show')->withEventos($evento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \trabalho\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \trabalho\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \trabalho\evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(evento $evento)
    {
        //
    }
}
