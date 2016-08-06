<br></br><br></br>

<div class="container text-center">
  <h3><strong>Tipos de Procedimentos Oferecidos<br></strong></h3>
  <center><h3>No Laboratório de Análises Clinicas Viva Bem , você encontra os melhores profissionais e com os menores preços do mercado. Venha Conferir!</h3></center>
  <div class="row">
    <div class="col-sm-12">
      <img src="./img/lab.jpg">

    </div>
  </div>
</div>
<table class="table table-bordered table-hover">

  <tbody>

    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
    </tr>

    <?php foreach($procedimentos as $p): ?>
      <tr>
        <td>
          <?php echo $p['Procedimento']['id']; ?>

          <td>
            <?php echo $p['Procedimento']['nome']; ?>
          </td>
          <td>
            <?php echo $p['Procedimento']['preco']; ?>
          </td>


        </tr>

      </tr>
    <?php endforeach ?>

  </tbody>
</table>
