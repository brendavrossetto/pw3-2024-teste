<?php 

namespace App\Http\Controllers;

use App\Mail\AnimalCadastrado;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AnimaisController extends Controller
{
    public function index()  
    {
        $dados = Animal::get();
        $animaisPorIdade = Animal::groupBy('idade')
        ->selectRaw('idade, count(*) as quantidade')
        ->get();
        return view('animais.index', [
            'animais' => $dados,
        ]);
    }

    public function cadastrar(){
        return view('animais.cadastrar');
    }

    public function gravar(Request $form){
        dd($form);
        $dados = $form->validate([
            'nome'=> 'required',
            'idade' => 'required|integer',
        ]);
        
        // Animal::create($dados);
        Mail::to('alguem@batata.com')->send(new AnimalCadastrado);
        // return redirect()->route('animais');


    }

   

    public function editar(Animal $animais) {
        return view('animais/editar', ['animais' => $animais]);
       }

       public function editarGravar(Request $form, Animal $animais)
        {
        $dados = $form->validate([
        'nome' => 'required|max:255',
        'descricao' => 'required'
        ]);

        // $animal->fill($dados);
        // $animal->save();
        // return redirect()->route('animal');
    }
    public function apagar(Animal $animais) {
        return view('animais.apagar', [
        'animal' => $animais,
        ]); 
    }

    //vai deletar de vez do banco
    public function deletar (Animal $animal) {
        $animal->delete();
        return redirect()->route('animais');
    }


}