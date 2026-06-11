<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $pdo = new PDO(
        'firebird:dbname=portal-estudos-firebird:/firebird/data/portal_estudos.fdb',
        'SYSDBA',
        'masterkey'
    );

    $dados = $pdo
        ->query('SELECT * FROM ALUNOS')
        ->fetchAll(PDO::FETCH_ASSOC);

    dd($dados);
});
