@extends('site.layout')
@section('content')
    <div id="slider" class="pd128" data-section="home">
        <div class="owl-carousel owl-carousel-fullwidth">
            <!-- You may change the background color here. -->
            <div class="item" style="background-image: url('images/banner-img.jpg');background-repeat: no-repeat;background-position: center center;background-size: cover;">
                <div class="container" style="position: relative;">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="fh5co-owl-text-wrap no-padding-img-principal">
                                <div class="fh5co-owl-text pos-rel">
                                    <h2 id="mt-responsivo"style="font-size: 35px;display: inline-block" class="fh5co-lead to-animate" ><strong>PROCURANDO INVESTIR EM UM NEGÓCIO DE ALTA RENTABILIDADE?</strong>    </h2>

                                    <div class="mt120px no-float center-img-selo hidden-sm hidden-xs hidden-md">
                                        <img class="img-responsive mt60   tam-foto-slider-abf pull-left" src="images/selo-abf.png" />
                                        <img class="img-responsive mt60 ml27 pull-left tam-foto-slider-pn" src="images/selo-empresa.jpg" />
                                    </div>
                                    <!--<p class="to-animate-2"><a href="#" class="btn btn-primary btn-lg">Solicite um orçamento</a></p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-push-1 col-sm-4 col-sm-push-1">
                            <div class="area-box-total">
                                <div id="divSucessoAnuncio">

                                    <p class="text-success mt10">A mensagem foi enviada com sucesso!</p>
                                    <p class="mt30">Em breve entraremos em contato.</p>
                                </div>
                                <form action="" id='formContato' role="form">
                                    <span class="btn-apresentacao">SOLICITE NOSSA APRESENTAÇÃO</span>
                                    <div class="area-box-interno">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required placeholder="Nome" name="nome" id="nome" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" required placeholder="Email" name="email" id="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" required placeholder="Telefone" name="telefone" maxlength="15" onkeypress="mascara(this, mtel); "id='telefone' />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" required placeholder="Celular"  name="celular" maxlength="15" onkeypress="mascara(this, mtel); "  id="celular"/>
                                        </div>
                                        <div class="form-group">
                                            <select  name="estado" class="form-control" id="estado_id">

                                                <option value="">Seleciona o estado</option>
                                                @foreach($estados as $estado)
                                                    <option value="{{$estado->uf}}">{{$estado->uf}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="cidade" id="cidade" placeholder="Cidade"/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="capital" placeholder="Qual o capital disponível para investimento?" required="" name="capital">
                                                <option value="0">Qual o capital disponível para investimento?</option>
                                                <option value="De 250.000 a 350.000 reais">De 250.000 a 350.000 reais</option>
                                                <option value="De 360.000 a 460.000 reais">De 360.000 a 460.000 reais</option>
                                                <option value="De 470.000 a 570.000 reais">De 470.000 a 570.000 reais</option>
                                                <option value="De 580.000 a 680.000 reais">De 580.000 a 680.000 reais</option>
                                                <option value="De 690.000 a 800.000 reais">De 690.000 a 800.000 reais</option>
                                                <option value="De 690.000 a 800.000 reais">De 690.000 a 800.000 reais</option>
                                                <option value="Acima de 800.000 reais">Acima de 800.000 reais</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="2" class="form-control"  name="mensagem" id="Mensagem" placeholder="Mensagem"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-laranja">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- You may change the background color here.  -->
            <div class="item" style="background-image: url(images/02.png);background-repeat: no-repeat;background-position: center center;background-size: cover;">
                <div class="container" style="position: relative;">
                    <div class="row">
                        <div class="col-md-7 col-md-push-1 col-md-push-5 col-sm-7 col-sm-push-1 col-sm-push-5">
                            <div class="fh5co-owl-text-wrap">
                                <div class="fh5co-owl-text">
                                    <h1 class="fh5co-lead to-animate">Comunicação rápida, simples e direta via SMS</h1>
                                    <h2 class="fh5co-sub-lead to-animate">Diretamente conectado com todas as operadoras do Brasil e especialistas em comunicação mobile nos mais variados segmentos do mercado</h2>
                                    <p class="to-animate-2"><a href="#" class="btn btn-primary btn-lg">Solicite um orçamento</a></p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-4 col-md-pull-7 col-sm-4 col-sm-pull-7 iphone-image">
                            <div class="iphone to-animate-2"><img src="images/iphone-1.png" alt="#"></div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-about-us" class="pb0" data-section="about">
        <div class="container">
            <div class="row row-bottom-padded-lg" id="about-us">
                <div class="col-md-12 section-heading text-center bg-quem-somos">
                    <h2 class="to-animate font-laranja text-left pb10">Quem Somos</h2>
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2 to-animate ml0">
                            <p class="estilo-fonte-quem-somos">Fruto de uma longa experiência no setor da construção civil, identificamos oportunidade na locação de equipamentos com qualidade e sustentabilidade.</p>
                            <p class="estilo-fonte-quem-somos">A <strong>Inovar Locações</strong> tem sua missão "Contribuir para o progresso de nossos clientes, com inovação e profissionalismo, buscando cada vez mais atender melhor para servir sempre".</p>
                            <p class="estilo-fonte-quem-somos">Nossa missão é realizada cada dia. Essa prática simples e desprentensiosa contribiu para o sucesso da rede, criando alicerces sólidos de organização, planejamento e responsabilidade social.
                            <p class="estilo-fonte-quem-somos">Hoje a <strong>Inovar Locações</strong> é uma rede sólida com unidades de <s>vários</s> estados e diversos prêmios conquistados, cada vez mais atraentes para locadores independentes que desejam se unir a essa rede pioneira no aluguel de equipamentos de pequeno porte para a construção civil. Somos líderes na maioria das cidades onde atuamos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 section-heading-tamanho to-animate">
                    <h2 class="to-animate font-laranja text-left pb10">O MERCADO</h2>
                    <p class="estilo-fonte-quem-somos text-uppercase ">FORNEÇA EQUIPAMENTOS PARA O DA ECONOMIA BRASILEIRA MAIS CRESCE A 10 ANOS NO PAÍS</p>
                    <p class="estilo-fonte-quem-somos">Um dos setores mais relevantes da economia brasileira, com cerca de 180.000 empresas atuantes no mercado a mais de uma década que é o setor de construção civil e manutenção vem batendo recordes consecutivos, não somente em territórios de implantação através de ações públicas como  <b><i>Minha casa Minha vida</i></b> como de ações particulares com a criação constante e crescente de bairros planejados e grandes edifícios tudo isso além do setor industrial,agronegócios, etc. Todos sem exceção necessitam de alguns equipamentos nossos.</p>

                </div>
                <div class="col-md-5 to-animate">
                    <img src="images/img-mercado.jpg" class="img-responsive img-rounded center-block" alt="Mercado Inovar">
                </div>

            </div>
        </div>
    </div>
    <div id="fh5co-features" class="borda-rodape pt20 animated" data-section="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading pb0 text-center">
                    <h2 class="single-animate animate-features-1 font-laranja text-left pb10 animated fadeIn">Informações de investimentos iniciais</h2>
                </div>
            </div>
            <div class="row row-bottom-padded-sm borda-rodape">
                <div class="col-md-8 col-md-offset-2">
                    <table id="table-inv"class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr >
                            <th class="fontPreta">DESCRIÇÃO DO INVESTIMENTO</th>
                            <th class="fontPreta">HOME OFFICE</th>
                            <th class="fontPreta">LOJA(STANDARD)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="success">
                            <td>Taxa de Franquia</td>
                            <td>R$20.000,00</td>
                            <td>R$30.000,00</td>
                        </tr>
                        <tr class="active">
                            <td>Investimento em Equipamentos</td>
                            <td>R$200.000,00</td>
                            <td>R$340.000,00</td>
                        </tr>
                        <tr class="success">
                            <td>Capital de Giro</td>
                            <td>R$25.000,00</td>
                            <td>R$40.000,00</td>
                        </tr>
                        <tr class="active">
                            <td>Prazo de retorno</td>
                            <td>36 meses</td>
                            <td>32 meses</td>
                        </tr>
                        <tr class="active">
                            <td>Royalties</td>
                            <td>8%</td>
                            <td>8%</td>
                        </tr>
                        <tr class="success">
                            <td>Fundo de Marketing</td>
                            <td>2%</td>
                            <td>2%</td>
                        </tr>
                        <tr class="active">
                            <td>Área necessária </td>
                            <td>A partir de 250 m²</td>
                            <td>A partir de 450 m²</td>
                        </tr>
                        <tr class="success">
                            <td>Funcionário</td>
                            <td>2 na inauguração</td>
                            <td>3 na inauguração</td>
                        </tr>
                        <tr class="active">
                            <td>Faturamento</td>
                            <td>De R$16.000,00 a R$25.000,00</td>
                            <td>De R$30.000,00 a R$90.000,00</td>
                        </tr>
                        <tr class="success">
                            <td>Rentabilidade</td>
                            <td>home de 10.000 a 16.000</td>
                            <td>loja de 18.000 a 39.000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="row" id="team">
        <div class="bg-cinza">
            <div class="container">
                <div class="col-md-12 estilo-fonte-motivo">
                    <h1>CONHEÇA 10 MOTIVOS PARA INVESTIR EM NOSSA FRANQUIA</h1>
                </div>
            </div>
        </div>
        <div class="container mb30 hidden-md hidden-sm hidden-xs">
            <img src="images/img-motivos.jpg" class="img-responsive center-block" alt="10 motivos investir Inovar Locações" />
        </div>
        <div id="motivos" class="owl-carousel">

            @for($i = 1;$i<=10;$i++)
                <div class="item">
                    <img class="" src="{{url('images/motivo')}}<?=$i?>.png" alt="{{$i}} motivo" />
                </div>
            @endfor
        </div>
    </div>
    <div id="fh5co-our-services" class="pt20 pb0" data-section="services">
        <div class="container">
            <div class="row row-bottom-padded-sm">
                <div class="col-md-12 nombpb section-heading text-center">
                    <h2 class="to-animate font-laranja text-left pb10">SOLUÇÃO COMPLETA</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">

                    <div class="box to-animate hover-estilo" >
                        <div class="bg-solucao  bg-container"></div>
                        <h3 class="mt7 estilo-texto-solucao">CONTAINER</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">

                    <div class="box to-animate hover-estilo">
                        <div class="bg-solucao bg-andaime"></div>
                        <h3 class="mt7 estilo-texto-solucao">ANDAIMES & ESCORAS</h3>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">

                    <div class="box to-animate hover-estilo">
                        <div class="bg-solucao bg-betoneira"></div>
                        <h3 class="mt7 estilo-texto-solucao">BETONEIRA</h3>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">

                    <div class="box to-animate hover-estilo">
                        <div class="bg-solucao bg-compactador"></div>
                        <h3 class='mt7 estilo-texto-solucao'>COMPACTADOR</h3>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">

                    <div class="box to-animate hover-estilo">
                        <div class="bg-solucao bg-matelo"></div>
                        <h3 class="mt7 estilo-texto-solucao">MARTELO DEMOLIDOR</h3>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">

                    <div class="box to-animate hover-estilo">
                        <div class="bg-solucao bg-eletrico"></div>
                        <h3 class="mt7 estilo-texto-solucao">ELÉTRICOS</h3>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">

                    <div class="box to-animate hover-estilo">
                        <div class="bg-solucao bg-gerador"></div>

                        <h3 class="mt7 estilo-texto-solucao">GERADORES</h3>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">

                    <div class="box to-animate hover-estilo">
                        <div class="bg-solucao bg-jardinagem"></div>
                        <h3 class="mt7 estilo-texto-solucao">JARDINAGEM</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-features" class="borda-rodape pt20 pb0" data-section="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="single-animate animate-features-1 font-laranja text-left pb10">O QUE ESTÃO FALANDO SOBRE NÓS</h2>
                </div>
            </div>
            <div class="row row-bottom-padded-sm borda-rodape">
                <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12 to-animate mb10">

                    <div class="fh5co-desc">
                        <a href="http://revistapegn.globo.com/Franquias/noticia/2016/01/casal-fatura-r-15-mi-com-franquia-de-aluguel-de-equipamentos.html" title="Matéria Inovar Locações Pequenas Empresas & Grandes Negócios" alt="Matéria Inovar Locações Pequenas Empresas & Grandes Negócios" target="_blank"><img src="{{url('images/pegn.jpg')}}" title="Matéria Inovar Locações Pequenas Empresas & Grandes Negócios"class="center-block img-responsive" /></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12 mb10 to-animate">

                    <div class="fh5co-desc">
                        <img src="{{url('images/logo-dc.png')}}" title="Diário do Comércio"class="center-block img-responsive" />
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12 mb10 to-animate">

                    <div class="fh5co-desc">
                        <a href="http://editoralamonica.com.br/premio-abf-destaque-franchising-2016/" target="_blank"> <img src="{{url('images/logo-lamonica.png')}}" class="center-block img-responsive" title="Matéria Lamonica Inovar Locações" /></a>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 60px" class="col-md-12 to-animate">
                <h2 class="to-animate font-laranja text-left pb10 text-uppercase">Depoimentos de nossos franqueados</h2>
                <div class="responsive">
                    <div class="quote-item">
                        <div class="quote-info">
                            <p class="quote">
                                "Sempre acreditamos na empresa e pudemos acompanhar seu crescimento
                                até agora com muita ética, persistência, simplicidade e
                                capacidade de ouvir o franqueado e aprender com os erros."

                            </p>
                            <div class="author">
                                <img class="author-avatar" src="{{url('images/tavares.jpg')}}" height="48" width="48" alt="">
                                <div class="author-info">
                                    <div class="name">Tavares</div>
                                    <div class="company">Recife - PE</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-item">
                        <div class="quote-info">
                            <p class="quote">
                                "A Franqueadora sempre esteve muito próxima desde o
                                inicio da operação, o que foi essencial para nosso sucesso."

                            </p>
                            <div class="author">
                                <img class="author-avatar" src="{{url('images/elizeu.jpg')}}" height="48" width="48" alt="">
                                <div class="author-info">
                                    <div class="name">ELIZEU ANTONIO</div>
                                    <div class="company">SÃO JOSÉ DO RIO PRETO  - SP</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-item">
                        <div class="quote-info">
                            <p class="quote">
                                "Sou arquiteto de formação e já conhecia o mercado de locação de equipamentos como locatário. Enxerguei um mercado próspero resolvi investir, hoje com 2 anos de atuação como franqueado da Inovar locações, recentemente inaugurei minha terceira unidade”. Destaco o treinamento inaugural, manuais, e o suporte operacional nas áreas comercial, markenting e jurídica como imprescindíveis na parceria, tornando a relação custo benefício muito interessante."
                            </p>
                            <div class="author">
                                <img class="author-avatar" src="{{url('images/opa.jpg')}}" height="48" width="48" alt="">
                                <div class="author-info">
                                    <div class="name">PAULO DIAS</div>
                                    <div class="company">Campos dos Goytacazes, Macaé e Rio das Ostras - RJ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="totop" class="botao-form">
        <i class="fa fa-chevron-right"></i>
        <a class="btn btn-default text-center">Baixar apresentação</a>
        <i class="fa fa-chevron-left"></i>

    </div>
@endsection
