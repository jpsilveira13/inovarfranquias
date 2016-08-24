<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Mensagem;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

class SiteController extends Controller
{
    private $estadoModel;

    public function __construct(Cidade $estado){
        $this->estadoModel = $estado;
    }

    public function testando(){
        return "oiee";
    }

    public function pegaCidade($ufNome){
        $estado = $this->estadoModel->find($ufNome);
        $cidade = Cidade::where('uf','=',$estado)->get();
        return Response::json($cidade);

    }

    public function formFranquia(){
        $inputData = Input::get('formData');

        parse_str($inputData, $formFields);
        $userData = array(

            'nome'                   =>  $formFields['nome'],
            'email'                  =>  $formFields['email'],
            'telefone'               =>  $formFields['telefone'],
            'celular'                =>  $formFields['celular'],
            'estado'                 =>  $formFields['estado'],
            'cidade'                 =>  $formFields['cidade'],
            'capital'                =>  $formFields['capital'],
            'mensagem'               => $formFields['mensagem'],

        );

        $rules = array(
            'nome'          =>  'required',
            'email'         =>  'required',
            'telefone'      =>  'required',
        );
        $validator = Validator::make($userData,$rules);
        if($validator->fails()) {
            return Response::json(array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            ));
        }else{
            $mail = \Mail::send('emails.contactFranquia',$userData,function($message) use ($userData){
                $message->from('naoresponder@inovarfranquias.com.br', 'Inovar Franquias Expansão');

                $message->to($userData['email']);
                $message->subject('Inovar Franquias, enviou uma mensagem para você ');
            });

            if(Mensagem::create($userData)) {
                //return success  message
                return Response::json(array(
                    'success' => true
                ));

            }
        }

    }

    public function mostrarMensagem(){
        $mensagens = Mensagem::get();
        return view('site.mensagem',compact('mensagens'));

    }
    public function sendEmailTest()
    {

        \Mail::send('emails.teste', ['msg' => 'hello'], function ($message) {
            $message->from('suporte@sempredanegocio.com.br', 'João Paulo');

            $message->to('samotinho@gmail.com', 'Pedro 2')->subject('My Test Email!');
        });

        var_dump('sent');
    }

    public function fichaSelecao(){

        return view('site.pages.ficha_selecao');
    }

    public function searchCep(){
        $cep = Input::get('cep');


        $reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);

        $dados['sucesso'] = (string) $reg->resultado;
        $dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
        $dados['bairro']  = (string) $reg->bairro;
        $dados['cidade']  = (string) $reg->cidade;
        $dados['estado']  = (string) $reg->uf;

        return Response::json($dados);

    }
}

