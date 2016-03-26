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

    <div class="jumbotron">
      <h1>Bem Vindo!</h1>
      <p class="lead">
       Faça uso de uma ferramenta de organização de tarefas que vai tornar
       seus dias ainda mais produtivos! Faça o login logo abaixo, ou cadastra-se.
       Aproveite!
     </p>

     <p>
       <form>
         <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </div>
         <a role="button" class="btn btn-primary" href="create_account.php">Criar conta</a>
         <a role="button" class="btn btn-success" href="show_notes.php">Logar</a>
         <!-- <button type="submit" class="btn btn-success">Logar</button> -->
       </form>
     </p>        
   </div>

      <!--
      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>
    -->
    <?php
    include 'common/footer.php';
    ?>

  </div> <!-- /container -->


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>



