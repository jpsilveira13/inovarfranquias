@extends('layout')
@section('content')
    <div id="form-selecao" class="container">
        <div class="row">
            <section>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Identificação">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Experiência profissional">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-briefcase"></i>
                            </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Investimento">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-usd"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form data-toggle="validator" class="form-group" role="form">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <h3>Identificação</h3>
                                <p>Informe seus dados</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Nome Completo:</label><br />
                                            <input type="text" class="form-control input-lg" required id="nome" name="nome" data-error="Campo não pode está vazio!" placeholder="Ex:. Fulano Ciclano">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="nome">CEP: *</label><br />
                                            <input type="text" class="cep form-control input-lg" id="cepEnvia" maxlength="9" data-error="Campo não pode está vazio!" name="cep" placeholder="Ex:. 33333-33">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="nome">Estado: *</label><br />
                                            <input type="text" class="form-control input-lg" required id="estado" maxlength="2" name="estado" placeholder="Ex:. MG" data-error="Campo não pode está vazio!">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nome">Cidade: *</label><br />
                                            <input type="text" class="form-control input-lg" required id="cidade" data-error="Campo não pode está vazio!" name="cidade" placeholder="Ex:. São Paulo">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="nome">Zona/Bairro: *</label><br />
                                            <input type="text" class="form-control input-lg" required id="bairro"  data-error="Campo não pode está vazio!" name="bairro" placeholder="Ex:. Morumbi">
                                            <div class="help-block with-errors"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="nome">Endereço: *</label><br />
                                            <input data-error="Campo não pode está vazio!" type="text" class="form-control input-lg" required id="rua"  name="endereco" placeholder="Ex:. Rua Fulano de Souza">
                                            <div class="help-block with-errors"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="nome">Número: </label><br />
                                            <input type="text" class="form-control input-lg"  id="numero"  name="numero" placeholder="Ex:. 33333">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Telefone(fixo e celular): *</label><br />
                                            <input type="text" class="telefone form-control input-lg" required   name="telefone" id="telefone" maxlength="15" placeholder="Ex:. (xx)xxxx-xxxx">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Cédula Identidade: *</label><br />
                                            <input type="text" class="form-control input-lg" required id="identidade" data-error="Campo não pode ser vazio!"  name="identidade">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">CPF/MF: *</label><br />
                                            <input type="text" class="cpf form-control input-lg" required  id="cpf" name="cpf" placeholder="Ex:. xxx.xxx.xxx.xx">
                                            <div class="help-block with-errors"></div>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Data de nascimento: *</label><br />
                                            <input type="text" class="data form-control input-lg" required   name="data" placeholder="Ex:. xx/xx/xxxx">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Estado Civil: *</label><br />
                                            <select class="form-control input-lg" required id="estado_civil"  name="estado_civil">
                                                <option value="" selected="selected">Seleciona uma opção</option>
                                                <option value="Solteiro" selected="selected">Solteiro</option>
                                                <option value="Casado" selected="selected">Casado</option>
                                                <option value="Viúvo" selected="selected">Viúvo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Grau de Instrucao: *</label><br />
                                            <input type="text" class="form-control input-lg" required id="grau_instrucao" name="grau_instrucao" placeholder="Ex:. Superior, Ensino médio...">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Email: *</label><br />
                                            <input type="email" class="form-control input-lg" required id="email"  name="email" placeholder="Ex:. fulano@fulano.com">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Qual é o seu grau de escolaridade?</label><br />
                                            <label class="radio-inline"><input type="radio" value="Curso Superior" name="escolaridade">Curso Superior</label>
                                            <label class="radio-inline"><input type="radio" value="Ensino Médio" name="escolaridade">Ensino Médio</label>
                                            <label class="radio-inline"><input type="radio" value="Ensino Fundamental" name="escolaridade">Ensino Fundamental</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observacao">Observação:</label>
                                            <textarea class="form-control" rows="5" id="" name="observacao_escolaridade" data-minlength="12"></textarea>
                                            <span class="help-block">Mínimo de doze (12) digitos</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observacao">Possui cursos de Aperfeiçoamento, Pós Graduação, Seminários, Palestras, etc?</label>
                                            <textarea name="cursos_aperfeicoamento" class="form-control" rows="2" data-minlength="12" id="observacao"></textarea>
                                            <span class="help-block">Mínimo de seis (6) digitos</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button id="etapaPrimeira" type="button" class="btn btn-primary next-step">Salva e continua</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <h3>Experiência Profissional</h3>
                                <p>Informe sua experiência profissional</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Empresa:</label><br />
                                            <input type="text" class="form-control input-lg" required id="empresa" name="nome_empresa" placeholder="Ex:. Empresa Fulano">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Endereco:</label><br />
                                            <input type="text" class="form-control input-lg" required id="end" name="end_empresa" placeholder="Ex:. Rua Fulano Ciclano">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Bairro:</label><br />
                                            <input type="text" class="form-control input-lg" required id="bairro" name="bairro_empresa" placeholder="Ex:. São Fulano">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Cidade:</label><br />
                                            <input type="text" class="form-control input-lg" required id="cidade" name="cidade_empresa" placeholder="Ex:. São Paulo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Estado:</label><br />
                                            <input type="text" maxlength="2" class="form-control input-lg" required id="estado" name="estado_empresa" placeholder="Ex:. SP">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">Período Completo:</label><br />
                                            <input type="text" class="form-control input-lg" required  name="periodo_empresa" placeholder="Ex:. 2 anos">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">Cargo:</label><br />
                                            <input type="text" class="form-control input-lg" required id="cargo" name="cargo_empresa" placeholder="Ex:. Engenheiro">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observacao">Observacao: </label>
                                            <textarea class="form-control" name="observacao_empresa" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr />
                                    </div>
                                </div>
                                <!-- coloca aqui empresa 2 -->
                                <p>Informe os dados 2 º empresa</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Endereco:</label><br />
                                            <input type="text" class="form-control input-lg" required id="end" name="end_empresa2" placeholder="Ex:. Rua Fulano Ciclano">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Bairro:</label><br />
                                            <input type="text" class="form-control input-lg" required id="bairro" name="bairro_empresa2" placeholder="Ex:. São Fulano">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Cidade:</label><br />
                                            <input type="text" class="form-control input-lg" required id="cidade" name="cidade_empresa2" placeholder="Ex:. São Paulo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Estado:</label><br />
                                            <input type="text" maxlength="2" class="form-control input-lg" required id="estado" name="estado_empresa2" placeholder="Ex:. SP">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">Período Completo:</label><br />
                                            <input type="text" class="form-control input-lg" required  name="periodo_empresa2" placeholder="Ex:. 2 anos">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">Cargo:</label><br />
                                            <input type="text" class="form-control input-lg" required id="cargo" name="cargo_empresa2" placeholder="Ex:. Engenheiro">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observacao">Observacao: </label>
                                            <textarea class="form-control" name="observacao_empresa2" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Você possui experiências no setor de Construção Civil / Locações de Equipamentos?</label><br />
                                            <label class="radio-inline"><input type="radio" name="exp_civil" value="Sim">Sim</label>
                                            <label class="radio-inline"><input type="radio" name="exp_civil" value="Não">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observacao">Se sim, explique:</label>
                                            <textarea class="form-control" name="sim_exp" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <h3>Investimento</h3>

                                <div class="row">
                                    <div class="col-md-12">
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
                                            <small>* O valor assinalado acima contempla a somatória de capital disponível para abertura da franquia, caso o investimento seja feito com sócios, favor qualifica-los abaixo:</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Pretende ter sócios?</label><br />
                                            <label class="checkbox-inline"><input type="checkbox" name="socio" value="Sim">Sim</label>
                                            <label class="checkbox-inline"><input type="checkbox" name="socio" value="Não">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Dados Sócio 1</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Nome Completo:</label><br />
                                            <input type="text" class="form-control input-lg" required id="" name="nome_socio" placeholder="Ex:. Fulano Ciclano">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">RG:</label><br />
                                            <input type="text" class="form-control input-lg" required  name="rg_socio" placeholder="Ex:. xx.xx-xxx">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">CPF:</label><br />
                                            <input type="text" class="form-control input-lg" required name="cpf_socio" placeholder="Ex:. xxx.xxx.xxx-xx">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nome">Endereço Residencial:</label><br />
                                            <input type="text" class="form-control input-lg" required id="nome" name="end_socio" placeholder="Ex:. Rua Fulano Ciclano">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Valor disponível: R$</label><br />
                                            <input type="text" class="money form-control input-lg" required maxlength="15"  name="valor_socio" placeholder="Ex:. 150.000">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <hr />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Dados Sócio 2</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Nome Completo:</label><br />
                                            <input type="text" class="form-control input-lg" required id="" name="nome_socio2" placeholder="Ex:. Fulano Ciclano">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">RG:</label><br />
                                            <input type="text" class="form-control input-lg" required  name="rg_socio2" placeholder="Ex:. xx.xx-xxx">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">CPF:</label><br />
                                            <input type="text" class="cpf form-control input-lg" required name="cpf_socio2" placeholder="Ex:. xxx.xxx.xxx-xx">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nome">Endereço Residencial:</label><br />
                                            <input type="text" class="form-control input-lg" required name="end_socio2" placeholder="Ex:. Rua Fulano Ciclano">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Valor disponível: R$</label><br />
                                            <input type="text" class="money form-control input-lg" required maxlength="15" name="valor_socio2" placeholder="Ex:. 150.000">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <hr />
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Informações relacionadas ao Negócio</h3>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control" id="capital" placeholder="Como soube do Processo de Seleção de Franqueados da Inovar Locações?" required="" name="conheceu_forma">
                                                <option value="0">Como soube do Processo de Seleção de Franqueados da Inovar Locações?</option>
                                                <option value="Loja">Loja</option>
                                                <option value="Jornal / Revista / Internet">Jornal / Revista / Internet</option>
                                                <option value="Evento / Feira">Evento / Feira</option>
                                                <option value="Indicação">Indicação</option>
                                                <option value="Outros">Outros</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observacao">Porque você escolheu a Inovar Locações?</label>
                                            <textarea class="form-control" rows="5" name="escolheu_inovar"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observacao">Qual a cidade / região de interesse para abertura da Franquia?</label>
                                            <textarea name="interesse_abertura" class="form-control" rows="5" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Você possui ponto comercial?</label><br />
                                            <label class="radio-inline"><input type="radio" name="ponto_comercial" value="Sim">Sim</label>
                                            <label class="radio-inline"><input type="radio" name="ponto_comercial" value="Não">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Se sim:</label><br />
                                            <label class="radio-inline"><input type="radio" name="comercial_possui" value="Próprio">Próprio</label>
                                            <label class="radio-inline"><input type="radio" name="comercial_possui" value="Alugado">Alugado</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- coloca um outro campo -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observacao">Observação:</label>
                                            <textarea name="observacao_comercial" class="form-control" rows="5" id="observacao"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>

                                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Salvar e Continuar</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <h3>Completado!</h3>
                                <p>Ficha seleção completada. Logo entraremos em contato!</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
