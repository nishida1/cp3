<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Test</title>

  <!-- Custom styles for this template
  <link href="style.css" rel="stylesheet">
　-->
  <?= $this->Html->css('bs.css') ?>

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="">Test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="./articles">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Category</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Category#1</a>
            <a class="dropdown-item" href="#">Category#2</a>
            <a class="dropdown-item" href="#">Category#3</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-5">Contact</h1>
        <p>This is a template
        </p>

 
                 <?=$this->Form->create(null, ['url' => ['controller' => 'contact', 'action' => 'index'], 'type' => 'post'])?>
                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>

                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="">

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">email</label>
                        

                        <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="">


                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>

                    </div>

                    <button type="submit" class="btn btn-secondary">Add</button>

                <?=$this->Form->end()?>

      </div>
    </div>




  </main>

  <hr>

  <footer class="container">
    <p>&copy; Company 2020</p>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  
  <script>

  function delItem(id){
    if(window.confirm('delete?')){
      location.href="<?=$this->Url->build(['controller'=>'Articles', 'action'=>'delete']); ?>?id="+id;
    }
  }

  </script>

</body>
</html>