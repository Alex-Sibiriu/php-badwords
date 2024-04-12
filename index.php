<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-danger-subtle">
    
  <form action="result_page.php" method="POST" class="container pt-5">
    
    <div class="py-5">
      <label class="form-label ms-3 fw-bold">Scrivi una frase</label>
      <textarea name="paragraph" class="form-control bg-info-subtle" placeholder="Leave a comment here"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label ms-3 fw-bold">Inserisci una parola da censurare</label>
      <input name="banned_word" type="textarea" class="form-control bg-warning-subtle">
    </div>

    <button type="submit" class="btn btn-light btn-outline-danger">Submit</button>
  </form>

</body>
</html>