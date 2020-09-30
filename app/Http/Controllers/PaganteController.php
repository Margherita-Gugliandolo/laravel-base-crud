<?php

namespace App\Http\Controllers;

use App\Pagante;
use Illuminate\Http\Request;

class PaganteController extends Controller
{
    public function index(){

      $paganti = Pagante::all();
      return view('paganti', compact('paganti'));
    }

    public function show($id){

      $pagante = Pagante::findOrFail($id);

      return view('pagante', compact('pagante'));
    }

    public function create(){
      return view('create-pagante');
    }

    public function store(Request $request){

      $data = $request -> all();
      $pagante = Pagante::create($data);

      return redirect() -> route('paganti-index');
    }

    public function destroy($id){
      $pagante = Pagante::findOrFail($id);
      $pagante -> delete();

      return redirect() -> route('paganti-index');
    }

    public function edit($id){

      $pagante = Pagante::findOrFail($id);

      return view('pagante-edit', compact('pagante'));
    }

    public function update(Request $request, $id){
      $pagante = Pagante::findOrFail($id);
      $data = $request -> all();
      $pagante -> update($data);

      return redirect() -> route('paganti-index');
    }
}
