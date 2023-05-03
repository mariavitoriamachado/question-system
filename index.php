<?php include 'templates/head.php' ?>
<section id="upload-section">
    <h1>Meu sistema de questões</h1>
    <form action="listagem.php" enctype="multipart/form-data" method="post">
        <label for="questoes">Faça Upload do arquivo de questões</label>
        <input required id="questoes" type="file" accept=".csv" name="questoes">

        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</section>
<?php include 'templates/footer.php' ?>