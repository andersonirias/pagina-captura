<?php 
$res = null;
$res = $_GET['res'];
?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Irias LAB | Newsletter">
    <meta name="author" content="Anderson Irias">
    <meta name="theme-color" content="#563d7c">
    <title>IriasLab | Newsletter</title>

    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/newsletter.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="newsletter-screen">
        <div class="form shadow-2dp">
          <div>
            <div class="text-center mb-1">
              <a href="/blog">
                <div class="logo_wrapper">
                  <div class="logo">
                    <span></span>
                    Irias Lab
                  </div>
                </div>
              </a>
              <br/>
            </div>
            <?php if ($res == 'falha'): ?>
              <div class="text-center mt-5 alert alert-danger">
                <h4>Falha ao realizar o <br/>cadastro</h4>
              </div>
              <div class="text-center">
                Por favor realize uma nova tentativa.
                <a class="btn botao-irias mt-2" href="/newsletter.php">Tentar novamente</a>
              </div>
            <?php elseif($res == 'sucesso'): ?>
              <div class="text-center mt-5 alert alert-success">
                <h4>Cadastro realizado com sucesso!</h4>
              </div>
            <?php else: ?>
              <div class="text-center mb-3">
                <h6>Inscreva-se em nossa newsletter</h6>
                <div class="text-center">
                  Cadastre-se para receber nossos conteúdos por email.
                </div>
              </div>
              <form action="/sendmail.php" method="POST" accept-charset="utf-8">	
                <fieldset>
                  <div class="control-group mb-2"> 
                    <label for="nome" class="control-label">Nome</label>
                    <div class="controls">
                      <input name="nome" class="form-control" type="text" id="nome" placeholder="Digite seu nome.." required>
                    </div>
                  </div>	
                  <div class="control-group mb-2">
                    <label for="email" class="control-label">E-mail</label>
                    <div class="controls">
                      <input name="email" class="form-control" type="email" id="email" placeholder="Digite seu melhor email..." required> 
                    </div>
                  </div>	          		
                  <button class="btn btn-irias my-4" type="submit">Cadastrar</button>
                </fieldset>
              </form>
            <?php endif; ?>
          </div>
        </div>  
      </div>
    </div>
  </body>
</html>