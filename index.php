<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Agência Paranoid</title>
  </head>
  <body>
      <header>
        <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <img src="img/Paranoid-logo.png" alt="Logo do site">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#servicos">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contato">Contato</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    <section id="banner">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/girl.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/bike.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/talent.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </section>
    <section id="servicos">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="mb-5">Serviços</h2>
          </div>
        </div>
        <div class="row">
            <div class="col">
              <div class="card">
              <img src="img/people.svg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text text-center">Consultoria de Marketing Digital.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
              <img src="img/professional.svg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text text-center">Consultoria de Marketing Digital.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
              <img src="img/information.svg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text text-center">Consultoria de Marketing Digital.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <section id="sobre">
      <div class="container">
        <div class="row">
          <div class="col">
            <img src="img/book.svg" alt="" class="img-fluid">
          </div>
          <div class="col">
            <h2>Sobre</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="contato">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>Entre em contato</h2>
            <form>
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="mensagem">E-mail</label>
                <textarea name="mensagem" class="form-control" id="mensagem"> </textarea>
              </div>
              <div class="form-group">
              <button type="button" name="button" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
          <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.8809969988356!2d-46.371079085481384!3d-23.5007954847129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce64aef6ce3509%3A0x95ef72188c23a507!2sR.%20J%C3%BAlio%20Barbosa%20de%20Lima%2C%2010%20-%20Cidade%20Kemel%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008130-430!5e0!3m2!1spt-BR!2sbr!4v1569681979050!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
