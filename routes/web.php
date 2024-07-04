<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('index');

//criar nossa rota

Route::get('/animais',
[AnimaisController::class, 'index'])->name
('animais');
//qnd acessar a rota via get anamisas ele vai pegar  a função classe controler e executar o index, rota index dos nimais se chama anmiais

Route::get('/animais/cadastrar',
[AnimaisController::class, 'cadastrar'])->name
('animais.cadastrar');
//nome da rota p criar o link, vai p CADASTRAT

Route::post('/animais.cadastrar',
[AnimaisController::class, 'gravar'])->name
('animais.gravar');
//VAI PRO GRAVAR (QUE AINDA NN EXISTE)

Route::get('/animais/apagar/{animal}', 
[AnimaisController::class,'apagar']) -> name('animais.apagar');

Route::get('/usuarios',
[UsuariosController::class, 'index'])->name
('usuarios');

Route::post('/usuarios.cadastrar',
[UsuariosController::class, 'gravar'])->name
('usuarios.gravar');