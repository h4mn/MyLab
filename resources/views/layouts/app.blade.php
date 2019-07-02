<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />

        <title>@yield('titulo')</title>
        
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>

    <body>
        <div>
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">
                            <i class="fa fa-home fa-lg"></i>
                            <strong class="brand-me-1">h<strong class="brand-me-2">4</strong>mn</strong><em class="brand-me-3">soft</em>
                            <sup>
                                <small class="brand-me-1 brand-small">laboratório das <strong>coisas</strong></small>
                            </sup>
                        </a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="#active">
                            <a href="#" data-toggle="modal" data-target="#curioso" class="brand-me-1">My Love: Dedi <3</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="container">
                <div id="curioso" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2><i class="fa fa-heart-o fa-lg"></i>&nbsp;Eu te amo, Vinícius!&nbsp;<i class="fa fa-heart-o fa-lg"></i></h2>
                            </div>
                            <div class="modal-body">
                                <img width="360" alt="Meu bebezão" class="img-circle" src="https://scontent.fcpq5-1.fna.fbcdn.net/v/t1.0-9/21231032_1278393298935806_4386974238075497962_n.jpg?oh=a3888e36038a2f070e7baf25550745a3&oe=5A4D1746">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Concordo</button>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('conteudo')
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>