<?
$link = $_POST['link'];
$name = 'img/'.md5(time()).'.jpg';

$img = file_get_contents('http://mini.s-shot.ru/1520/1520/JPEG/?'.$link);

file_put_contents($name, $img);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ScreenShot by Gelloiss.ru</title>
  <link rel="stylesheet" href="css/cropper.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <!--[if lt IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../../browsehappy.com/default.htm">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->


  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <!-- <h3>Demo:</h3> -->
        <div class="img-container">
          <img src="<?echo $name;?>" alt="Picture">
        </div>
      </div>
      <div class="col-md-3">
        <!-- <h3>Data:</h3> -->
        <form method="POST" action="Gelloiss.ru.php">
          <div class="docs-data">
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataX">X</label>
              <input name="x" type="text" class="form-control" id="dataX" placeholder="x">
              <span class="input-group-addon">px</span>
            </div>
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataY">Y</label>
              <input name="y" type="text" class="form-control" id="dataY" placeholder="y">
              <span class="input-group-addon">px</span>
            </div>
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataWidth">Width</label>
              <input name="w" type="text" class="form-control" id="dataWidth" placeholder="width">
              <span class="input-group-addon">px</span>
            </div>
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataHeight">Height</label>
              <input name="h" type="text" class="form-control" id="dataHeight" placeholder="height">
              <span class="input-group-addon">px</span>
            </div>
            <input type="hidden" name="img" value="<?echo $name;?>">
            <input type="submit" class="submit">
        </div>
      </form>
    </div>


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="js/cropper.js"></script>
  <script src="js/main.js"></script>
</body>
</html>


<style type="text/css">
body {
  width: 90% !important;
}
</style>