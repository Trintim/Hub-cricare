<?php
#sessao tem que vir primeiro
session_start(); #inicia a sessão
?>
    <?php

    /* Nome das variaveis dos formulários: name,email,subject,message, telefone*/

    #pegar os dados do formulario pelo metodo POST

    #laço de verificação se existe algo dentro da variavel
    if (isset($_POST['email']) && !empty($_POST['email'])) {

        #criando e pegando, as variaveis,  os dados do formulario pelo metodo POST
        $nome = addslashes($_POST['name']); #O QUE É ADDLASHES?
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $subject = addslashes($_POST['subject']);
        $message = addslashes($_POST['message']);


        #montando o email para enviar
        $to = "dev.trintim@gmail.com"; #o email que vai receber o email do usuario (MODIFICAR O EMAIL ***)
        $body = "Nome: " . $nome . "\r\n" .
            "E-mail: " . $email . "\r\n" .
            "Telefone: " . $telefone . "\r\n" .
            "Objetivo: " . $subject . "\r\n" .
            "Mensagem: " . $message;

        #from, tem que ser do dominio do e-mail, nesse caso : @hubdocricare.com.br
        $header = "From:hubcricare@gmail.com \r\n" . #VERIFICAR E-MAIL (MODIFICAR *** )
            "Reply-to: " . $email . "\r\n" .
            "X=Mailer:PHP/" . phpversion();
        #Laço para verificação se o e-mail foi enviado com sucesso
        if (mail($to, $subject, $body, $header)) {
            //echo "<h1> E-mail enviado com Sucesso ! </h1>";
            #echo '<h3> Agradecemos pelo contato! Iremos retornar em Breve :) <h3>';
            /*
        echo '
        
        <div class="container">
                      <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-5" data-aos="fade-down">
                            <div></div>
                            <h2 class="section-heading">Contato</h2>
                            <p class="mb-0">Possui alguma duvida ou deseja fazer um orçamento, entre em contato.</p>
                            
                        </div>
                    </div>
        
        
        ';*/
        } else {
            echo "E-mail não pode ser enviado :/";
        }
    }

    ?>