<main>


  <section>
    <h2 class="mt-3">titulo</h2>
    <form action="" method="post">

      <div class="form-group">
        <label>titulo</label>
        <input type="text" class="form-control" name="titulo"></input>
      </div>

      <div class="form-group">
        <label>Descrição</label>
        <textarea name="descricao" class="form-control" cols="30" rows="10"></textarea>
      </div>


      <div class="form-group">
        <label>Status</label>
        <div>

          <div class="form-check form-chek-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="s" checked> Ativo</input>
            </label>
          </div>

          <div class="form-check form-chek-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="n"> inativo</input>
            </label>
          </div>


        </div>

      </div>

      <div>
        <button type="submit" class="btn btn-success">Aplicar</button>

        <a href="index.php" class="float-right btn btn-danger">voltar</a>

      </div>

    </form>
  </section>


</main>