<?php

namespace App\Http\Controllers;

use App\FichaSelecao;
use Illuminate\Http\Request;

use App\Http\Requests;

class FichaController extends Controller
{
    private $fichaModel;

    public function __construct(FichaSelecao $fichaModel){
        $this->fichaModel = $fichaModel;
    }

    public function create($id){

        //$existe = $this->fichaModel->find($id)

    }
}
