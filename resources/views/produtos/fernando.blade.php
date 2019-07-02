<style>
    table {
        font-family: 'MS Sans Serif',HelveticaNeue,Helvetica,Arial,Sans-serif;
        font-size: 10px;
    }
    table thead th {
        text-align: center;
        vertical-align: middle;
    }
    .td-center {
        text-align: center;
    }
    .td-right {
        text-align: right;
    }
    .i-success {
        color:forestgreen;
    }
    .i-danger {
        color:firebrick;
    }
    .i-warning {
        color:darkorange;
    }
    .i-info {
        color:deepskyblue;
    }
    .i-active {
        color:lightslategrey;
    }
    h4, h5 {
        text-transform: uppercase;
    }
    small {
        text-transform: lowercase;
    }
</style>

<h3>Proposta de Pauta
    <small>Rascunho de pauta para reunião de apresentação do briefing do site da Embalimp</small>
</h3>

<div class="well">
    <h4>#1 Comparativo de Plataformas E-Commerce
        <small>Pesquisa feita em 2014 pela buscapé sobre plataformas e-commerce e seus investimentos x recursos oferecidos</small>
    </h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">Plataforma</th>
                    <th colspan="2">Investimento</th>
                    <th rowspan="2">Quem Monta</th>
                    <th colspan="10">Recursos Oferecidos</th>
                </tr>
                <tr>
                    <th>Implementação</th>
                    <th>Mensalidade</th>
                    <th>Pagamento Integrado</th>
                    <th>Frete Integrado c/ Correios</th>
                    <th>Gestão de Pedidos e Estoque</th>
                    <th>Gestão de Cupons</th>
                    <th>Integraçao ERP</th>
                    <th>Versão Mobile e/ou Responsiva</th>
                    <th>Otimização de SEO</th>
                    <th>Integração com Redes Sociais</th>
                    <th>Atendimento Personalizado</th>
                    <th>Atendimento por E-mail e/ou Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ciashop</td>
                    <?php print_td("variavel") ?>
                    <td class="td-center">R$ 99+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 4) ?>
                </tr>
                <tr>
                    <td>D Loja Virtual</td>
                    <?php print_td("gratuito") ?>
                    <td class="td-center">R$ 49+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 4) ?>
                    <?php print_td("parcial") ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 2) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido") ?>
                </tr>
                <tr>
                    <td>DotStore</td>
                    <?php print_td("gratuito") ?>
                    <td class="td-center">R$ 70+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido") ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 3) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 2) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido") ?>
                </tr>
                <tr>
                    <td>DualStore</td>
                    <?php print_td("variavel", 2) ?>
                    <?php print_td("empresa") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("mobile") ?>
                    <?php print_td("oferecido", 2) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido") ?>
                </tr>
                <tr>
                    <td>E-Hub</td>
                    <?php print_td("variavel", 2) ?>
                    <?php print_td("empresa") ?>
                    <?php print_td("oferecido", 8) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido") ?>
                </tr>
                <tr>
                    <td>Escalena</td>
                    <td class="td-center">R$ 15.000+</td>
                    <td class="td-center">R$ 2.500+</td>
                    <?php print_td("empresa") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 4) ?>
                </tr>
                <tr>
                    <td>EZ Commerce</td>
                    <td class="td-center">R$ 18.000+</td>
                    <td class="td-center">R$ 1.370+</td>
                    <?php print_td("empresa") ?>
                    <?php print_td("oferecido", 10) ?>
                </tr>
                <tr>
                    <td>Fast Commerce</td>
                    <td class="td-center">R$ 400+</td>
                    <td class="td-center">R$ 139+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 8) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido") ?>
                </tr>
                <tr>
                    <td>InfraCommerce</td>
                    <?php print_td("variavel", 2) ?>
                    <?php print_td("empresa") ?>
                    <?php print_td("oferecido", 10) ?>
                </tr>
                <tr>
                    <td>iSet</td>
                    <?php print_td("gratuito") ?>
                    <td class="td-center">R$ 69+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 2) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido") ?>
                </tr>
                <tr>
                    <td>JetCommerce</td>
                    <?php print_td("variavel") ?>
                    <td class="td-center">R$ 199+</td>
                    <?php print_td("usuario-empresa") ?>
                    <?php print_td("oferecido", 10) ?>
                </tr>
                <tr>
                    <td>Localweb/Tray</td>
                    <?php print_td("gratuito") ?>
                    <td class="td-center">R$ 79+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 4) ?>
                </tr>
                <tr>
                    <td>Loja Integrada</td>
                    <?php print_td("gratuito", 2) ?>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 8) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("email") ?>
                </tr>
                <tr>
                    <td>Loja Mestre</td>
                    <?php print_td("gratuito") ?>
                    <td class="td-center">R$ 89+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("mobile") ?>
                    <?php print_td("oferecido", 2) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido") ?>
                </tr>
                <tr class="success">
                    <td>Magento</td>
                    <?php print_td("gratuito-programador", 2) ?>
                    <?php print_td("usuario-empresa") ?>
                    <?php print_td("oferecido") ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 6) ?>
                    <?php print_td("faltante", 2) ?>
                </tr>
                <tr>
                    <td>Moovin</td>
                    <td class="td-center">R$ 18.000+</td>
                    <td class="td-center">R$ 890+</td>
                    <?php print_td("empresa") ?>
                    <?php print_td("oferecido", 10) ?>
                </tr>
                <tr>
                    <td>Nuvem Shop</td>
                    <?php print_td("gratuito") ?>
                    <td class="td-center">R$ 59+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("responsivo") ?>
                    <?php print_td("oferecido", 2) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido") ?>
                </tr>
                <tr class="warning">
                    <td>OpenCart</td>
                    <?php print_td("gratuito-programador", 2) ?>
                    <?php print_td("usuario-empresa") ?>
                    <?php print_td("oferecido") ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("parcial") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("faltante", 2) ?>
                </tr>
                <tr class="warning">
                    <td>Presta Shop</td>
                    <?php print_td("gratuito-programador", 2) ?>
                    <?php print_td("usuario-empresa") ?>
                    <?php print_td("oferecido") ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("parcial") ?>
                    <?php print_td("faltante", 2) ?>
                </tr>
                <tr>
                    <td>Rakuten/Ikeda</td>
                    <td class="td-center">R$ 40.000+</td>
                    <td class="td-center">R$ 5.000+</td>
                    <?php print_td("empresa") ?>
                    <?php print_td("oferecido", 10) ?>
                </tr>
                <tr>
                    <td>SiseCommerce</td>
                    <td class="td-center">R$ 1.500+</td>
                    <td class="td-center">R$ 299+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 5) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 2) ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido") ?>
                </tr>
                <tr>
                    <td>TMW</td>
                    <td class="td-center">R$ 699+</td>
                    <td class="td-center">R$ 99+</td>
                    <?php print_td("usuario") ?>
                    <?php print_td("oferecido", 10) ?>
                </tr>
                <tr>
                    <td>Vannon</td>
                    <?php print_td("variavel", 2) ?>
                    <?php print_td("usuario-empresa") ?>
                    <?php print_td("oferecido", 10) ?>
                </tr>
                <tr>
                    <td>Vertis</td>
                    <?php print_td("variavel", 2) ?>
                    <?php print_td("empresa") ?>
                    <?php print_td("oferecido", 10) ?>
                </tr>
                <tr>
                    <td>Vtex</td>
                    <?php print_td("variavel") ?>
                    <td class="td-center">2% a 4% do orçamento</td>
                    <?php print_td("empresa") ?>
                    <?php print_td("oferecido", 10) ?>
                </tr>
                <tr class="success">
                    <td>WooCommerce</td>
                    <?php print_td("gratuito-programador", 2) ?>
                    <?php print_td("usuario-empresa") ?>
                    <?php print_td("oferecido") ?>
                    <?php print_td("faltante") ?>
                    <?php print_td("oferecido", 6) ?>
                    <?php print_td("faltante", 2) ?>
                </tr>
            </tbody>
        </table>
        <table class="table table-condensed">
            <caption>Legenda</caption>
            <tbody>
                <tr>
                    <?php print_td("oferecido", 1, "right") ?>
                    <td>Oferecido</td>
                </tr>
                <tr>
                    <?php print_td("faltante", 1, "right") ?>
                    <td>Faltante</td>
                </tr>
                <tr>
                    <?php print_td("parcial", 1, "right") ?>
                    <td>Parcial</td>
                </tr>
                <tr>
                    <?php print_td("mobile", 1, "right") ?>
                    <td>Mobile</td>
                </tr>
                <tr>
                    <?php print_td("responsivo", 1, "right") ?>
                    <td>Responsivo</td>
                </tr>
                <tr>
                    <?php print_td("email", 1, "right") ?>
                    <td>Email</td>
                </tr>
                <tr>
                    <?php print_td("gratuito", 1, "right") ?>
                    <td>Gratuíto</td>
                </tr>
                <tr>
                    <?php print_td("variavel", 1, "right") ?>
                    <td>Variável</td>
                </tr>
                <tr>
                    <?php print_td("usuario", 1, "right") ?>
                    <td>Usuário</td>
                </tr>
                <tr>
                    <?php print_td("empresa", 1, "right") ?>
                    <td>Empresa</td>
                </tr>
                <tr>
                    <?php print_td("programador", 1, "right") ?>
                    <td>Programador</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
<div class="well">
    <h4>#2 Categoria de Plataformas
        <small>Plataformas agrupadas por tipo de serviço</small>
    </h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Plataforma</th>
                    <th>Benefícios</th>
                    <th>Dificuldades</th>
                    <th>Produção</th>
                    <th>Exemplos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Marketplaces</td>
                    <td>Menor investimento inicial</td>
                    <td>Sem customização</td>
                    <td rowspan="3">Qualquer um pode fazer o trabalho</td>
                    <td rowspan="3">
                        <a href="https://olxbrasil.zendesk.com/hc/pt-br/sections/202614745-Publicidade">OLX</a>,
                        <a href="http://contato.mercadolivre.com.br/ajuda/vendendo_643">Mercado Livre</a>
                    </td>
                </tr>
                <tr>
                    <td>Menor tempo de lançamento</td>
                    <td>Sem contato direto com o consumidor</td>
                </tr>
                <tr>
                    <td>Menor tempo de aprendizagem</td>
                    <td>Sem opções de concorrência</td>
                </tr>
                <tr>
                    <td rowspan="3">Serviços por Assinatura</td>
                    <td>Custo relativamente baixo</td>
                    <td>Cuidados com taxas e a qualidade da plataforma</td>
                    <td rowspan="3">Depende de funcionário/operador dedicado</td>
                    <td rowspan="3">
                        <a href="http://www.maxistore.com.br/funcionalidades/solucoes-para-ecommerce">Maxistore</a>
                    </td>
                </tr>
                <tr>
                    <td>Tempo de lançamento relativamente baixo</td>
                    <td>Cuidados com a customização</td>
                </tr>
                <tr>
                    <td>Sem preocupações técnicas</td>
                    <td>Cuidados com a segurança</td>
                </tr>
                <tr class="success">
                    <td rowspan="3">Plataformas Proprietárias</td>
                    <td>Independência e controle total</td>
                    <td>Conhecimentos avançados em tecnologias</td>
                    <td rowspan="3">Profissional de TI</td>
                    <td rowspan="3">
                        <a href="https://magento.com/">Magento</a>,
                        <a href="https://woocommerce.com/">WooCommerce</a>,
                        <a href="https://www.opencartbrasil.com.br/o-que-e-opencart">OpenCart</a> e
                        <a href="https://www.prestashop.com/pt/modelos-de-comercio-eletronico">PrestaShop</a>
                    </td>
                </tr>
                <tr class="success">
                    <td>Customização total</td>
                    <td>Agregação de custo da plataforma</td>
                </tr>
                <tr class="success">
                    <td>Gestão total de relacionamento com o cliente</td>
                    <td>Manutenção e dependência de servidor</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
<div class="well">
    <h4>#3 Planos de Serviços
        <small>Pacotes de serviços de tecnologia da informação oferecidos</small>
    </h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="info">
                    <td><h5>Plano 1: R$ 499,00/mês</h5></td>
                    <td><h5>Plano 2: R$ 1.299,00/mês</h5></td>
                    <td><h5>Plano 3: R$ 2.000,00/mês</h5></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>Pacote de Serviços:</p>
                        <ul class="">
                            <li>Criação de pautas/Linha editorial;</li>
                            <li>Criação de artes;</li>
                            <li>Site institucional;</li>
                            <li>Gestão de Fanpage;</li>
                            <li>4 Publicações Mensais;</li>
                            <li>1 Reunião Mensal Online (skype);</li>
                        </ul>
                    </td>
                    <td>
                        <p>Pacote de Serviços:</p>
                        <ul class="">
                            <li>Criação de pautas/Linha editorial;</li>
                            <li>Criação de artes;</li>
                            <li>Site institucional;</li>
                            <li>Blog;</li>
                            <li>Produção de conteúdo;</li>
                            <li>Gestão de Fanpage;</li>
                            <li>15 Publicações Mensais;</li>
                            <li>Gestão Facebook Ads;</li>
                            <li>Relatórios;</li>
                            <li>2 Reuniões Mensais Online (skype);</li>
                        </ul>
                    </td>
                    <td>
                        <p>Pacote de Serviços:</p>
                        <ul class="">
                            <li>Criação de pautas/Linha editorial;</li>
                            <li>Criação de artes;</li>
                            <li>Site institucional;</li>
                            <li>Loja Virtual;</li>
                            <li>Processamento de dados;</li>
                            <li>Análise de concorrência;</li>
                            <li>Blog;</li>
                            <li>Produção de conteúdo;</li>
                            <li>Gestão de Fanpage;</li>
                            <li>30 Publicações Mensais;</li>
                            <li>Gestão Facebook Ads;</li>
                            <li>Captação de seguidores;</li>
                            <li>E-mail Marketing;</li>
                            <li>Gestão de SEO;</li>                            
                            <li>Relatórios;</li>
                            <li>4 Reuniões Mensais Online (skype);</li>
                            <li>1 Reunião Mensal Presencial;</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Sem investimento em anúncios</td>
                    <td>O valor de R$ 50,00 será destinado ao Facebook, para pagamento de anúncios</td>
                    <td>O valor de R$ 100,00 será destinado ao Facebook, para pagamento de anúncios</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php 
function print_td ($icone = "oferecido", $limit = 1, $align = "center") {
    for ($i = 1; $i <= $limit; $i++) {
        switch ($icone) {
            case 'oferecido':
                echo '<td class="td-'.$align.'"><i class="fa fa-check fa-lg i-success" title="Recurso oferecido"></i></td>';
                break;
            case 'faltante':
                echo '<td class="td-'.$align.'"><i class="fa fa-times fa-lg i-danger" title="Recurso ausente"></i></td>';
                break;
            case 'parcial':
                echo '<td class="td-'.$align.'"><i class="fa fa-star-half-o fa-lg i-danger" title="Parcial"></i></td>';
                break;
            case 'mobile':
                echo '<td class="td-'.$align.'"><i class="fa fa-mobile fa-lg i-danger" title="Apenas versão Mobile"></i></td>';
                break;
            case 'responsivo':
                echo '<td class="td-'.$align.'"><i class="fa fa-desktop fa-lg i-danger" title="Apenas versão Responsiva"></i></td>';
                break;
            case 'email':
                echo '<td class="td-'.$align.'"><i class="fa fa-envelope fa-lg i-danger" title="Apenas por E-mail"></i></td>';
                break;
            case 'gratuito':
                echo '<td class="td-'.$align.'"><i class="fa fa-tags fa-lg i-info" title="Recurso grátis"></i></td>';
                break;
            case 'variavel':
                echo '<td class="td-'.$align.'"><i class="fa fa-line-chart fa-lg i-warning" title="Valor variável"></i></td>';
                break;
            case 'usuario':
                echo '<td class="td-'.$align.'"><i class="fa fa-user fa-lg i-success" title="Implementado pelo Usuário"></i></td>';
                break;
            case 'empresa':
                echo '<td class="td-'.$align.'"><i class="fa fa-building fa-lg i-danger" title="Implementado pela Empresa"></i></td>';
                break;
            case 'programador':
                echo '<td class="td-'.$align.'"><i class="fa fa-coffee fa-lg i-active" title="Custo com Programador"></i></td>';
                break;
            case 'gratuito-programador':
                echo '<td class="td-'.$align.'"><i class="fa fa-tags fa-lg i-info" title="Recurso grátis"></i> + <i class="fa fa-coffee fa-lg i-active" title="Custo com Programador"></i></td>';
                break;
            case 'usuario-empresa':
                echo '<td class="td-'.$align.'"><i class="fa fa-user fa-lg i-success" title="Implementado pelo Usuário"></i> / <i class="fa fa-building fa-lg i-danger" title="Implementado pela Empresa"></i></td>';
                break;
            default:
                echo '<td class="td-'.$align.'"><i class="fa fa-exclamation-triangle fa-lg i-warning" title="Erro"></i></td>';
                break;
        }
    }
}