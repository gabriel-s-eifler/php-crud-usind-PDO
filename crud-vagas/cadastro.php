 <?php
  require_once __DIR__ . '/config.php';
  require __DIR__ . '/vendor/autoload.php';

  use App\entity\Vaga;


  require_once __DIR__ . 'filter-input.php';

  // if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {

  //   $obvaga = new Vaga();
  //   $obvaga->titulo     = $_POST['titulo'];
  //   $obvaga->descricao  = $_POST['descricao'];
  //   $obvaga->ativo      = $_POST['ativo'];
  //   $obvaga->cadastrar();

  //   echo "<pre>";
  //   print_r($obvaga);
  //   echo "</pre>";

  // header('location: index.php?status=success');
  // exit;
  //}
  require_once __DIR__ . '/includes/header.php';
  include __DIR__ . '/includes/formulario.php';
  require_once __DIR__ . '/includes/footer.php';
