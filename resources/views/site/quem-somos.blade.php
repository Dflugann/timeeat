@extends('_include.system')

@section('title', 'Timeeat')

@section('body')
    @extends('_include.navbar')
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" style="width: 100%;height: 400px;background-image: url('https://i0.wp.com/montarumnegocio.com/wp-content/uploads/2013/11/fazer-lanche-natural-para-vender.jpg');background-size: cover;">
            <div class="container">
                <!--<h3 class="display-4">Quem Somos</h3>-->
                <p><br></p>
                <p><br></p>
                <p>
                    Sabe quando você está no escritório e bate aquela fome e não tem nada por perto para comer?! 
                    <br>Pois é, foi pensando nisso que surgiu a Time Eat.
                    <br>Nós fornecemos diversos alimentos no ambiente corporativo 
                    Entendemos a importância de ter uma alimentação saudável e equilibrada, e buscamos trazer isso para a sua empresa com muita praticidade, qualidade e conveniência
                </p>
                <a class="btn btn-quem-somos btn-lg" href="#" role="button"><< Voltar</a>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-3 carrinho">
                    <h2>Carrinho</h2>
                    <p>O carrinho fica disponível na empresa todos os dias em horários estabelecidos.</p>
                    <p><a class="btn btn-carrinho" href="#" role="button">View details »</a></p>
                </div>
                <div class="col-md-3 missao">
                    <h2>Missão</h2>
                    <p>Oferecer um excelente serviço e superar as expectativas dos nossos parceiros.</p>
                    <p><a class="btn btn-missao" href="#" role="button">Leia Mais »</a></p>
                </div>
                <div class="col-md-3 visao">
                    <h2>Visão</h2>
                    <p>Ser uma referência em fornecimento de alimentos dentro do mercado corporativo.</p>
                    <p><a class="btn btn-visao" href="#" role="button">Leia Mais »</a></p>
                </div>
                <div class="col-md-3 valores">
                    <h2>Valores</h2>
                        <p>
                            Trabalhamos duro para trazer as melhores experiências para nossos parceiros.  
                        </p>
                    <p><a class="btn btn-valores" href="#" role="button">Leia Mais »</a></p>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->
    </main>
@stop
@section('style')
    .jumbotron .container p{
        color: white;
        text-shadow: -1px -1px white, 1px 1px #333
    }

    .jumbotron .container h3{
        color: #872318;
    }

    .jumbotron .container a.btn-quem-somos{
        color: #fff;
        background-color: #872318;
        border-color: #872318;
    }

    .container .carrinho H2{
        color: #5C9DA8;
    }

    .container p a.btn-carrinho{
        color: #fff;
        background-color: #5C9DA8;
        border-color: #6c757d;
    }

    .container .missao H2{
        color: #9E6237;
    }

    .container p a.btn-missao{
        color: #fff;
        background-color: #9E6237;
        border-color: #6c757d;
    }

    .container .visao H2{
        color: #E2AF2E;
    }

    .container p a.btn-visao{
        color: #fff;
        background-color: #E2AF2E;
        border-color: #6c757d;
    }

    .container .valores H2{
        color: #AE3B23;
    }

    .container p a.btn-valores{
        color: #fff;
        background-color: #AE3B23;
        border-color: #6c757d;
    }
@stop