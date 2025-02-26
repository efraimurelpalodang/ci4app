<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $tittle; ?></title>
  </head>
  <body>
    <?= $this->include('layouts/navbar'); ?>

    <?= $this->renderSection('content'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    function previewImg() {
      const sampul = document.querySelector('#sampul');
      const imgPreview = document.querySelector('.input-group .img-preview');
  
      const fileSampul = new FileReader();
      fileSampul.readAsDataURL(sampul.files[0]);
  
      fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }

  </script>
  </body>
</html>