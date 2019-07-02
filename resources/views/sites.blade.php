<?php
/**
 * Variáveis recebidas do Controller
 * @var $xml(DOM) Objeto DOM contendo os Nodes
 * @var $base(STRING) Variável contendo a URL Base
  */

/**
 * Pesquisa por URLs Relativas e as torna em URLs Absolutas nos Nodes
 */
if (true) {
$tags = $xml->getElementsByTagName('*');
foreach ($tags as $node) {
    if($node->hasAttribute('src')) {
        $url = $node->getAttribute('src');
        if(substr($url, 0, 7) != 'http://') {
            $node->setAttribute('src',$base.$url);
        }
    }
    if($node->hasAttribute('href')) {
        $url = $node->getAttribute('href');
        if(substr($url, 0, 7) != 'http://') {
            $node->setAttribute('href',$base.$url);
        }
    }
    if($node->hasAttribute('http-equiv')) {
        $node->setAttribute('content','text/html; charset=utf-8');
    }
}
}

/**
 * Substitui o conteúdo do rodapé
 */
$link = '/';
$bloco_a = $xml->getElementsByTagName('td')->item(23)->firstChild;
$bloco_a->setAttribute('href',$link);
$bloco_a->setAttribute('class','navbar-brand');
$bloco_a->setAttribute('style','margin-top:15px');
$bloco_a->removeChild($xml->getElementsByTagName('img')->item(7));
    $i_fa = $bloco_a->appendChild($xml->createElement('i'));
    $i_fa->setAttribute('class','fa fa-home fa-lg');
    $strong_h = $bloco_a->appendChild($xml->createElement('strong'));
    $strong_h->setAttribute('class','brand-me-1');
    $strong_h->appendChild($xml->createTextNode('h'));
        $strong_4 = $strong_h->appendChild($xml->createElement('strong'));
        $strong_4->setAttribute('class','brand-me-2');
        $strong_4->appendChild($xml->createTextNode('4'));
    $strong_h->appendChild($xml->createTextNode('mn'));
    $em_soft = $bloco_a->appendChild($xml->createElement('em'));
    $em_soft->setAttribute('class','brand-me-3');
    $em_soft->appendChild($xml->createTextNode('soft'));
    $sup = $bloco_a->appendChild($xml->createElement('sup'));
        $small_lab = $sup->appendChild($xml->createElement('small'));
        $small_lab->setAttribute('class','brand-me-1 brand-small');
        $small_lab->appendChild($xml->createTextNode('laboratório das '));
            $strong_coisas = $small_lab->appendChild($xml->createElement('strong'));
            $strong_coisas->appendChild($xml->createTextNode('coisas'));
$bloco_body = $xml->getElementsByTagName('body')->item(0);
    $bloco_script = $bloco_body->appendChild($xml->createElement('script'));
    #$bloco_script->appendChild($xml->createTextNode('window.location.href="'.$base.'";'));

/*
 * Adiciona estilo local
 */
if (true) {
$head = $xml->getElementsByTagName('head')->item(0);
$link_css_1 = $head->appendChild($xml->createElement('link'));
$link_css_1->setAttribute('href', '/css/font-awesome.min.css');
$link_css_1->setAttribute('rel', 'stylesheet');
$link_css_2 = $head->appendChild($xml->createElement('link'));
$link_css_2->setAttribute('href', '/css/app.css');
$link_css_2->setAttribute('rel', 'stylesheet');
}

/*
 * Transforma o objeto DOM em variável e Pesquisa/Substitui por URLs Relativas/URLs Absolutas em conteúdo não DOM
 */
$html = implode('\n', preg_replace('/()("|\()(imagens\/[\w]+.(jpg|swf)|[\w]+.jpg)("|\))/i', "$2$base$3$5", explode('\n', $xml->saveHTML())));

echo $html;