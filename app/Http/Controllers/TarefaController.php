<?php

namespace App\Http\Controllers;

require dirname(__FILE__).'/../../../vendor/autoload.php';

use Illuminate\Http\Request;
use AJT\Toggl\TogglClient;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tarefas', ['teste' => 'Testar', 'resposta' => '']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * Testes iniciais
     * 
     * @return \Illuminate\Http\Response
     */
    public function teste()
    {
        /**
         * Consulta a Toggl API em busca da Entrada atual do cronômetro
         */
        $toggl_token = '6025281e2b8ce420e280e9ef5630150c';
        $toggl = TogglClient::factory(array('api_key' => $toggl_token));
        
        $toggl_te_cmd = $toggl->getCommand('getCurrentTimeEntry');
        $time_entries = $toggl_te_cmd->execute();
        $te_body = var_export($time_entries, true);
        $te_id = $time_entries['data']['id'];
        $te_desc = $time_entries['data']['description'];
        $te = compact('te_id', 'te_desc', 'te_body');

        /**
         * Consulta a Habitica API para cadastrar a entrada como Afazer
         */
        $habitica_userid = 'b0120d0b-4867-4e00-b0d2-e76b4f10a2e7';
        $habitica_apitoken = 'asdf';
        $habitica = new \GuzzleHttp\Client();
        
        if ($te_desc == '') {
            $te_desc = 'Cronômetro desligado';
        }
        
        $request = new \GuzzleHttp\Psr7\Request(
            'post', 
            'https://habitica.com/api/v3/tasks/user', 
            (array(
                'Content-Type' => 'application/json',
                'x-api-user' => $habitica_userid,
                'x-api-key' => $habitica_apitoken
            )),
            json_encode(array(
                'text' => $te_desc,
                'type' => "todo",
                'value' => "0",
                'tags' =>  "{$this->getTagFromHabitica(true)}",
                'notes' => "Enviado pelo Toggl API."
            ))
        );
        $response = $habitica->send($request);
        $hr_body = $response->getBody();
        
        $hr = compact('hr_body');

        return view('tarefas', compact('ws', 'te', 'hr'));
    }
    public function getTagFromHabitica ($return = false) {
        $h_userid = 'b0120d0b-4867-4e00-b0d2-e76b4f10a2e7';
        $h_apitoken = 'asdf';
        $h_cliente = new \GuzzleHttp\Client();
        $h_request = new \GuzzleHttp\Psr7\Request(
            'get',
            'https://habitica.com/api/v3/tags',
            array(
                'Content-Type' => 'application/json',
                'x-api-user' => $h_userid,
                'x-api-key' => $h_apitoken
            )
        );
        $h_response = $h_cliente->send($h_request);
        $h_body = $h_response->getBody();
        $h_body = json_decode($h_body, true);
        
        foreach ($h_body['data'] as $tag) {
            if ($tag['name'] == ':o: ClockToggl') {
                $ClockTogglTagID = $tag['id'];
                break;
            }
        }
        #$this->fn_break($ClockTogglTagID);
        if ($return) {
            return $ClockTogglTagID;
        } else {
            return view('tarefas', ['tags' => $h_body['data']]);
        }
    }
    private function fn_break($saida) {
        echo '<pre>';
        print_r($saida);
        die();
    }
}
