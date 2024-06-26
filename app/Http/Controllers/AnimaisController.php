<?php 

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function index(){
        $dados = Animal::all();
        return view('animais.index', [
            'animais' => $dados,
        ]);
    }

    public function cadastrar(){
        return view('animais.cadastrar');
    }

    public function gravar(Request $form){
        $dados = $form->validate([
            'nome'=> 'required',
            'idade' => 'required|integer'
        ]);
        Animal::create($dados);
       
        return redirect()->route('animais');
    }

    public function apagar(Animal $animal) {
        return view('animais.apagar', [
        'animal' => $animal,
        ]); 
    }
}