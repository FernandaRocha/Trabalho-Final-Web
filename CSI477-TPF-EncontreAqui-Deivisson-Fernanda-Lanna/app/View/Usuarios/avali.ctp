<br><br>

<h2>Minhas Avaliações</h2>
<hr/>
<table class="table table-bordered table-hover">
  <tbody>
    <tr>
      <th>ID</th>
      <th>Nota</th>
      <th>Preço</th>
      <th>Data</th>
    </tr>

    <?php foreach($avalias as $e): ?>
      <tr>
        <td>
          <?php echo $e['Avalia']['id']; ?>
        </td>
        <td>
          <?php echo $e['Usuario']['nome']; ?>
        </td>
        <td>
          <?php echo $e['Avalia']['nota']; ?>
        </td>
        <td>
          <?php echo $e['Avalia']['data']; ?>
        </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
