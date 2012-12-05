<?php

require('lib/gantti.php'); 
require('data.php'); 

date_default_timezone_set('Europe/Berlin');
setlocale(LC_ALL, 'de_DE');

$gantti = new Gantti($data, array(
  'title'      => 'ps-webforge',
  'cellwidth'  => 25,
  'cellheight' => 35,
  'today'      => true
));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>ps-webforge - Projekte</title>
  <meta charset="utf-8" />

  <link rel="stylesheet" href="styles/css/screen.css" />
  <link rel="stylesheet" href="styles/css/gantti.css" />

  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>
<header>

</header>

<?php echo $gantti ?>

</body>
</html>