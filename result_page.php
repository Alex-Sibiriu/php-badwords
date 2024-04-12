<?php

  $paragraph = trim($_POST['paragraph']);
  $banned_word = trim($_POST['banned_word']);
  
  $length_paragraph = strlen($paragraph);
  $censored_paragraph = str_replace($banned_word,'***', $paragraph);
  $length_censored_paragraph = strlen($censored_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>

  <title>Ricevo from GET</title>
</head>
<body class="bg-primary-subtle">

  <div class="container py-5 text-center">

    <div class="bg-info-subtle p-4">
      <h2>Paragrafo Originale</h2>
      <p class="fs-4 py-3"><?php echo $paragraph ?></p>
      <p><strong>Lunghezza:</strong> <?php echo $length_paragraph ?> caratteri</p>
    </div>

    <div class="bg-danger-subtle p-4">
      <h2>Parola da Censurare</h2>
      <p class="fs-4 py-3"><?php echo $banned_word ?></p>
    </div>

    <div class="bg-warning-subtle p-4">
      <h2>Paragrafo Censurato</h2>
      <p class="fs-4 py-3"><?php echo $censored_paragraph ?></p>
      <p><strong>Lunghezza:</strong> <?php echo $length_censored_paragraph ?> caratteri</p>
    </div>

  </div>
  
</body>
</html>