@extends('_include.system')

@section('title', 'Timeeat')

@section('body')
    @extends('_include.navbar')

    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase text-home">
                        <!--<img src="{{ asset("/img/logo-timeeat.png") }}" alt="" class="imgresponsive" width="650px">-->
                        <strong>Time Eat</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto text-home">
                    <h2>Onde o horário de trabalho fica mais agradavel com as delicias de TimeEat</h2>
                    {{--<p class="text-faded mb-5" style="font-size: 2.15rem">Onde o horário de trabalho fica mais agradavel com as delicias de TimeEat</p>--}}
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Saiba Mais</a>
                </div>
            </div>
        </div>
    </header>


    <section class="fundo-timeeat" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white">SOBRE</h2>
                    <hr class="light my-4">
                        <p class="text-faded mb-4">
                    Sabe quando você está no escritório e bate aquela fome e não tem nada por perto para comer?!
                    Pois é, foi pensando nisso que surgiu a Time Eat.
                        <br />Nós fornecemos diversos alimentos no ambiente corporativo
                        <br />Entendemos a importância de ter uma alimentação saudável e equilibrada, e buscamos trazer isso para a sua empresa com muita praticidade, qualidade e conveniência</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#modal-sobre">Saiba Mais</a>
                        @section('modal-name', 'modal-sobre')
                        @section('modal-title', 'Sobre')
                        @section('modal-dialog', 'modal-dialog modal-lg')
                    @section('modal-body')
                        <div class="container">
                            <div class="row container-fluid text-center no-padding">
                                <div class="col-lg-12">
                                    <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#carrinho" aria-expanded="false" aria-controls="carrinho">
                                    O carrinho
                                  </button>
                                  <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#missao" aria-expanded="false" aria-controls="missao">
                                  Missão
                                  </button>
                                  <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#visao" aria-expanded="false" aria-controls="visao">
                                      Visão
                                  </button>
                                  <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#valores" aria-expanded="false" aria-controls="valores">
                                      Valores
                                  </button>
                                </div>
                                {{--<div class="collapse text-center" id="carrinho">--}}
                                    {{--<div class="text-white"><br />--}}
                                  {{--<h3><strong>O carrinho</strong></h3>--}}
                                  {{--O carrinho fica disponível na empresa todos os dias e percorre diariamente os corredores em horários estabelecidos pela empresa.--}}
                                  {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="collapse text-center" id="missao">--}}
                                    {{--<div class="text-white"><br />--}}
                                  {{--<h3><strong>Missão</strong></h3>--}}
                                  {{--Oferecer um excelente serviço e superar as expectativas dos nossos parceiros, agregando produtividade, praticidade e qualidade.--}}
                                  {{--</div>--}}
                                {{--</div>--}}

                                {{----}}
                                {{--<div class="col-lg-12">--}}
                                    {{--<div class="collapse text-center" id="visao">--}}
                                        {{--<div class="text-white"><br />--}}
                                            {{--<h3><strong>  Visão</strong></h3>--}}
                                            {{--Ser uma referência em fornecimento de alimentos dentro do mercado corporativo.--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-12">--}}
                                    {{--<div class="collapse text-center" id="valores">--}}
                                        {{--<br /><h3><strong class="text-center text-white">Valores</strong></h3>--}}
                                        {{--<div class="text-white text-left">--}}
                                            {{--T   -   Transparência em nosso trabalho.<br />--}}
                                            {{--I   -   Incentivo e reconhecimento individual.<br />--}}
                                            {{--M   -   Motivação em servir.<br />--}}
                                            {{--E   -   Excelência no atendimento.<br />--}}
                                            {{--E   -   Ética é tudo.<br />--}}
                                            {{--A   -   Amor pelo o que fazemos.<br />--}}
                                            {{--T   -   Trabalhamos duro para trazer as melhores experiências para nossos parceiros.--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="collapse text-center" id="carrinho">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="img-responsive" src="{{asset('img/img-modal/em_construcao.jpeg')}}" width="150px" alt="Generic placeholder image">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="text-white"><br />
                                                <h3><strong>O carrinho</strong></h3>
                                                O carrinho fica disponível na empresa todos os dias e percorre diariamente os corredores em horários estabelecidos pela empresa.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse text-center" id="missao">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="img-responsive" src="{{asset('img/img-modal/missao.png')}}" width="150px" alt="Generic placeholder image">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="text-white"><br />
                                                <h3><strong>Missão</strong></h3>
                                                Oferecer um excelente serviço e superar as expectativas dos nossos parceiros, agregando produtividade, praticidade e qualidade.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse text-center" id="visao">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="img-responsive" src="{{asset('img/img-modal/visao.png')}}" width="150px" alt="visao timeeat">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="text-white"><br />
                                                <h3><strong>Visão</strong></h3>
                                                Ser uma referência em fornecimento de alimentos dentro do mercado corporativo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse text-center" id="valores">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="img-responsive" src="{{asset('img/img-modal/visao.png')}}" width="150px" alt="missao timeeat">
                                        </div>
                                        <div class="col-md-6 offset-md-2">
                                            <div class="text-white"><br />
                                                <br /><h3><strong class="text-center text-white">Valores</strong></h3>
                                                <div class="text-white text-left">
                                                    T   -   Transparência em nosso trabalho.<br />
                                                    I   -   Incentivo e reconhecimento individual.<br />
                                                    M   -   Motivação em servir.<br />
                                                    E   -   Excelência no atendimento.<br />
                                                    E   -   Ética é tudo.<br />
                                                    A   -   Amor pelo o que fazemos.<br />
                                                    T   -   Trabalhamos duro para trazer as melhores experiências para nossos parceiros.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="text-white"><br />
                                <h3><strong>Como Funciona</strong></h3>
                                Nosso Time é treinado para melhor atender a todos os colaboradores, sem intervir no cotidiano da empresa.
                                A logística, que tem um papel fundamental, está preparada para trazer todos os dias as melhores opções de alimentos para o carrinho
                                <br />O pagamento pode ser feito em dinheiro, cartões de crédito, débito e também todos os tipos de vale-refeição
                            </div>
                        </div>
                    @stop


                </div>
            </div>
        </div>
    </section>

    {{--<section class="janela">
        <div>
            <h1>Teste</h1>
        </div>
    </section>--}}

            <section id="services">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Serviços</h2>
                    <hr class="my-4">
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                      <!--<i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>-->
                      <img src="{{ asset('img/services/frutas-timeeat.jpg')}}" class="img-fluid img-services" alt="Frutas naturais" width="250px">
                      <h3 class="mb-3">Frutas</h3>
                      <p class="text-muted mb-0">Frutas da melhor qualidade, prontos para o consumo a qualquer hora do dia.</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                      <!--<i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>-->
                      <img src="{{ asset('img/services/sucos-timeeat.jpg')}}" class="img-fluid img-services" alt="Frutas naturais" width="250px">
                      <h3 class="mb-3">Sucos</h3>
                      <p class="text-muted mb-0">Sucos funcionais, práticos para o dia a dia com a qualidade timeeat.</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                      <!--<i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>-->
                        <img src="{{ asset('img/services/lanches-timeeat.jpg')}}" class="img-fluid img-services" alt="Lanches naturais" width="250px">
                      <h3 class="mb-3">Lanches</h3>
                      <p class="text-muted mb-0">Além de contar com uma variedade de lanches, você vai saborear o melhor sabor do dia.</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                      <!--<i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>-->
                        <img src="{{ asset('img/services/balas-e-doces-timeeat.jpg')}}" class="img-fluid img-services" alt="Doces e balas" width="250px">
                      <h3 class="mb-3">Doces</h3>
                      <p class="text-muted mb-0">Tudo parece ser mais gostoso, com nossos doces variados timeeat.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            <section class="p-0" id="portfolio">
              <div class="container-fluid p-0">
                <div class="row no-gutters popup-gallery">
                  <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
                      <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
                      <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                            Category
                          </div>
                          <div class="project-name">
                            Project Name
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
                      <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
                      <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                            Category
                          </div>
                          <div class="project-name">
                            Project Name
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
                      <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
                      <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                            Category
                          </div>
                          <div class="project-name">
                            Project Name
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
                      <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
                      <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                            Category
                          </div>
                          <div class="project-name">
                            Project Name
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
                      <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
                      <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                            Category
                          </div>
                          <div class="project-name">
                            Project Name
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
                      <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
                      <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                            Category
                          </div>
                          <div class="project-name">
                            Project Name
                          </div>
                        </div>
                      </div>
                    </a>
°   ─çç ,
                  ];</div>
                </div>
              </div>
            </section>

                <section class="bg-dark text-white janela" >
                  <div class="container text-center">
                    <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                    <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
                  </div>
                </section>

                <section class="fundo-timeeat" id="contact">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading">Let's Get In Touch!</h2>
                        <hr class="my-4">
                        <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 ml-auto text-center">
                        <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                        <p>123-456-6789</p>
                      </div>
                      <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                        <p>
                          <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </section>


@stop

@section('style')
    .masthead .row .text-home{
        color: white;
        text-shadow: -1px -1px white, 1px 1px #333
    }

    .img-services {
    width: 250px;
    height: 200px;
    border-radius: 30% 30%;
    background-repeat: no-repeat;
    background-attachment: unset;
    background-position: center center;
    }

    .fundo-timeeat {
      height: 550px;
      overflow: hidden;
      background: url('img/services/teste.png') top left #34130A;
      box-shadow: inset 0 -6px 0 rgba(0,0,0,.26);
}
@stop    