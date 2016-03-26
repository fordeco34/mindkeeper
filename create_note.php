<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
  <?php
  include 'common/head.php';
  ?>
</head>

<script type="text/javascript">
  $( document ).ready(function() {
    displaySelectedType();
  });
</script>

<body>
  <div class="container">
    <?php
    include 'common/menu.php';
    ?>

    <div class="row">
      <div class="col-lg-12">
        <h2>Cadastro de Nota</h2>
      </div>        
    </div>


    <div class="row"> 
      <div class="col-lg-5 col-lg-offset-3">
        <form class="form-horizontal">

          <!-- NOME -->
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Nome">
            </div>
          </div>

          <!-- Tipo -->
          <div class="form-group">
            <label for="inputType" class="col-sm-2 control-label">Tipo</label>
            <div class="col-sm-10">
              <select class="form-control" name="inputType" id="inputType" onchange="displaySelectedType();">
                <option value="0">Texto</option>
                <option value="1">Lista</option>
              </select>
            </div>
          </div>         

          <!-- Tipo Texto -->
          <div id="textSection">
            <div class="form-group">
              <label for="inputText" class="col-sm-2 control-label">Descricao</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="inputText" id="inputText"rows="4" placeholder="Insira uma descricao"></textarea>                
              </div>
            </div>
          </div>

          <!-- Tipo Lista -->
          <div id="listSection">
            <div class="form-group">
              <label for="taskName" class="col-sm-2 control-label">Itens</label>              
              <div class="col-sm-7">
                <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Nome">
                
                <br>
                
                <select multiple="" id="listTasks" class="form-control">                  
                </select>
              </div>
              <div class="col-sm-1">
                <button class="btn btn-default" type="button" onclick="addTaskList();">
                  <span aria-hidden="true" class="glyphicon glyphicon-plus"></span>
                </button>

                <br><br>
                <button class="btn btn-default listButton" type="button" onclick="upTaskList();">
                  <span aria-hidden="true" class="glyphicon glyphicon-arrow-up"></span>
                </button>

                <button class="btn btn-default listButton" type="button" onclick="downTaskList();">
                  <span aria-hidden="true" class="glyphicon glyphicon-arrow-down"></span>
                </button>

                <button class="btn btn-default listButton" type="button" onclick="removeTaskList();">
                  <span aria-hidden="true" class="glyphicon glyphicon-minus"></span>
                </button>
              </div>              
              

            </div>    
          </div>

          <!-- Botoes -->      
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Criar</button>
              <a type="button" href="show_notes.php" class="btn btn-success">Voltar</a>
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



