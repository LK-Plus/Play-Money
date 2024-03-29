<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/cropped-Suprema-Logo.png" />
    <link rel="stylesheet" href="https://pokerbyte.com.br/assets/vendors/intl-tel-input/css/intlTelInput.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/button.css">
    <title>Bem vindo - Suprema Online</title>
</head>
<body style="background-image: url('assets/img/TV_DIVIRTA-SE_SPRM.png');">

    <main>
        <section class="modal-cad">
            <form id="userRegister">
                <div class="inputs-cad">
                    <input type="text" name="cpf" id="recipient-cpf" maxlength="14" placeholder="CPF" required/>
                </div>
                <div class="inputs-cad">
                    <input type="text" name="name" id="recipient-name" placeholder="NOME COMPLETO" onkeypress="return validateName(event)" required/>
                </div>
                <div class="inputs-cad">
                    <input type="email" name="email" id="recipient-email" placeholder="E-MAIL" required/>
                </div>
                <div class="inputs-cad">
                    <input width="100%" name="tel" type="text"  id="recipient-fone" placeholder="" maxlength="15" required/>
                </div>
                <div class="inputs-cad">
                    <input type="text"  name="username" id="recipient-nick" maxlength="15" placeholder="NICK" onkeypress="return validateNick(event)" required/>
                </div>
                <div class="inputs-cad">
                    <input type="password" name="password" class="validate password" id="recipient-pw" placeholder="SENHA" required />
                    <button type="button" id="btnToggle" class="toggle">
                        <img id="eyeIcon" src="assets/img/view.png" alt="">
                        <img id="eyeIconHide" class="hide toggle" src="assets/img/hide.png" alt="">
                    </button>
                </div>
                <div class="inputs-cad">
                    <input type="password" class="validate passwordConfirm" id="recipient-pwConf" placeholder="REPETIR SENHA" required />
                </div>
                <div id="password_rules">
                    <h4>As senhas devem atender a estes requisitos:</h4>
                    <ul>
                        <li class="password_length">Pelo menos 8 caracteres</li>
                        <li class="password_uppercase">Pelo menos 1 letra maiúscula</li>
                        <li class="password_number">Pelo menos um numero</li>
                        <li class="password_match"></li>
                    </ul>
                </div>
                <section>
                    <a type="button" id="button-register" class="animated-button1" >
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        CADASTRE-SE GRÁTIS
                    </a>
                </section>
            </form>
            <form id="userCode" class="hide" style="margin-top: 50%;">
                <div id="tokenPass">
                    <div class="cs_modal">
                        <div class="modal-header" style="flex-direction: column;">
                            <h2 style="color: #fff;">Insira seu Código</h2>
                            <div>
                                <p style="color: #fff;">Enviamos um código de verificação em seu email.</p>
                            </div>
                        </div>
                        <div  style="margin-top: 0em;" class="modal-body">
                            <form id="registerform" name="redePass" onsubmit="return false;">
                                <div id="inputCod">
                                    <input name="chars[1]" class="inputs" onkeypress="return numberOnly(event);">
                                    <input name="chars[2]" class="inputs" onkeypress="return numberOnly(event);">
                                    <input name="chars[3]" class="inputs" onkeypress="return numberOnly(event);">
                                    <input name="chars[4]" class="inputs inputFinal" onkeypress="return numberOnly(event);">
                                </div>
                                <section>
                                    <a type="button" id="button-code" class="animated-button1" >
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        CONFIRMAR CÓDIGO
                                    </a>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </form>

            <form id="download-app" class="hide">
                <div class="component-download">
                    <div class="download-title">
                        <p>Baixe o nosso App agora e conheça a melhor experiência on-line já feita! Entre para a comunidade mais divertida do esporte da mente, através de um layout que se encaixa em seu aparelho.</p>
                        <h1 style="margin: 0.5em 0em">Disponível nas plataformas</h1>
                        <figure class="hr-img" >
                            <img src="assets/img/hr-esq.png" alt="">
                        </figure>
                    </div>
                    <div>
                        <figure class="img-app">
                            <img src="assets/img/suprema_poker_app.png" alt="">
                        </figure>
                    </div>
                    <div class="download-content">
                        <a target="_blank" href="https://www.supremapoker.net/download/supremapoker.exe">
                            <img width="133px" src="assets/img/windows.png" alt="">
                        </a>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.opt.supremapoker">
                            <img width="133px" src="assets/img/play_store.png" alt="">
                        </a>
                        <a target="_blank" href="https://apps.apple.com/br/app/suprema-poker/id1583176410">
                            <img width="133px" src="assets/img/app_store.png" alt="">
                        </a>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <section class="modal-cook">
        <div class="cookies-container white_box hide" style="width: 68%; margin: 0 auto; position: fixed; bottom: 2em; left: 17%; z-index: 1000;display: none;">
            <div class="cookies-content" style="display: flex; gap: .5em; align-items: center;">
                <p style="color: black">Usamos cookies essenciais e tecnologias semelhantes de acordo com nossa <a href="https://supremapoker.com.br/policy.html" target="_blank" style="color: rgb(54, 54, 54);">Política de Privacidade</a> e, ao continuar navegando, você concorda com estes termos.</p>
                <div class="btns" style="display: flex; gap: .5em;">
                    <button class="btn btn-primary form-control-sm" id="saveCookies">ACEITAR</button>
                    <button class="btn btn-primary form-control-sm" id="rejCookies">REJEITAR</button>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="assets/js/libs/jquery/jquery.js"></script>
<script src="assets/js/libs/jquery/jquery-mask.js"></script>
<script src="https://pokerbyte.com.br/assets/vendors/intl-tel-input/js/intlTelInput.js"></script>
<script src="https://kit.fontawesome.com/fe191507c0.js" crossorigin="anonymous"></script>
<script src="assets/js/main.js?v=<?=time()?>"></script>
<script src="assets/js/libs/SweetAlert/sweetalert.min.js"></script>
</html>