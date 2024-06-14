<?php

use App\Http\Controllers\AnimaisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//criar nossa rota

Route::get('/animais',
[AnimaisController::class, 'index'])->name
('animais');
//qnd acessar a rota via get anamisas ele vai pegar  a função classe controler e executar o index, rota index dos nimais se chama anmilais

Route::get('/animais/cadastrar',
[AnimaisController::class, 'cadastrar'])->name
('animais.cadastrar');
//nome da rota p criar o link, vai p CADASTRAT

Route::post('/animais.cadastrar',
[AnimaisController::class, 'gravar'])->name
('animais.gravar');
//VAI PRO GRAVAR (QUE AINDA NN EXISTE)