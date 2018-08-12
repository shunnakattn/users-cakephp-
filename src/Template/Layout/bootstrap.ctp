
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      
        <?= $this->fetch('title') ?>
    </title>
   

     <?= $this->Html->css('style.css') ?>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <?= $this->fetch('script') ?>
    </head>
    <style>
     body{
         /* background:#000; */
         font-family:'Impact';
     }
     td{
         padding:15px;
     }
     navbar-light{
      background-color: #ffc107!important;
     }
     #navbarNavAltMarkup{
      background-color: #0080ff
     }
     nav-link{
      font-weight: bold;}
     }
    </style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#">Todolist</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="#">Home <!--<span class="sr-only">(current)</span>=--></a>
      <a class="nav-link" href="#">Features</a>
      <?= $this->Html->link(__('新規タスク追加'), ['action' => 'add'], ['class' => 'nav-link']) ?>
    </div>
  </div>
</nav>
    <?= $this->Flash->render() ?> 
    <div class="container">
      <div class="row">
       <div class="col-xs-3">
        <?= $this->fetch('content') ?>
      </div>
     
      
      </div><!-- /.row -->
    </div><!-- /.container -->

    
</body>
</html>
