<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index () {
        return view('produtos');
    }
    public function presentation ($id = 0) {
        switch ($id) {
            case 1: // Proposta de pauta Embalimp - Fernando
                $data_com_chave = ['chave1' => 1, 'chave2' => 2, 'chave3' => 3, 'chave4' => 4];
                $data_sem_chave = [1, 2, 3, 4];
                return view('produtos', ['dataC' => $data_com_chave, 'dataS' => $data_sem_chave]);
            case 2: // Teste com alteração de rodapé
                $site_url = 'http://www.akazzomotel.com.br/';
                $ch = curl_init($site_url);
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                
                libxml_use_internal_errors(true);
                $dom = new \DOMDocument();
                $dom->strictErrorChecking = false;
                #$dom->loadHTML(mb_convert_encoding($response, 'HTML-ENTITIES', 'UTF-8'));
                $dom->loadHTML($response);
                libxml_use_internal_errors(false);
                
                curl_close($ch);
                return view('sites', ['xml' => $dom, 'base' => $site_url]);
            default:
                break;
        }
    }
}
