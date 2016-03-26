<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
  <?php
  include 'common/head.php';
  ?>
</head>

<body>
  <div class="container">
    <?php
    include 'common/menu.php';
    ?>
    
    <div class="row">
      <div class="col-lg-12">
        <h2>Cadastro de conta</h2>
      </div>        
    </div>


    <div class="row"> 
      <div class="col-lg-5 col-lg-offset-3">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputName" placeholder="Nome">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Senha</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
              <br>
              <input type="password" class="form-control" id="inputPasswordConfirm" placeholder="Confirmar Senha">
            </div>
          </div>          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
              <a type="button" href="index.php" class="btn btn-success">Voltar</a>
            </div>
          </div>
        </form>
      </div>
    </div>  
    
    <?php
    include 'common/footer.php';
    ?>

  </div> <!-- /container -->


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</body>

</html>



