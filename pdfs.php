<?php
// idioma
$availLangs = ['pt','en','de'];
if (!empty($_GET['lang']) && in_array($_GET['lang'], $availLangs)) {
    $lang = $_GET['lang'];
    setcookie('lang',$lang,time()+30*24*60*60,'/');
} elseif (!empty($_COOKIE['lang']) && in_array($_COOKIE['lang'],$availLangs)) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'pt';
}

// modo
$availModes = ['light','dark'];
if (!empty($_GET['mode']) && in_array($_GET['mode'],$availModes)) {
    $mode = $_GET['mode'];
    setcookie('mode',$mode,time()+30*24*60*60,'/');
} elseif (!empty($_COOKIE['mode']) && in_array($_COOKIE['mode'],$availModes)) {
    $mode = $_COOKIE['mode'];
} else {
    $mode = 'light';
}

// mensagens específicas desta página
$msgs = [
    'pt' => [
      'notice' => "página ainda está em construção...\ntalvez uwu",
      'button' => "voltar",
      'title' => "pdfs - hazwitz"
    ],
    'en' => [
      'notice' => "page is still under construction...\nmaybe uwu",
      'button' => "back",
      "title"=> "pdfs - hazwitz"
    ],
    'de' => [
      'notice' => "seite ist noch im aufbau...\nvielleicht uwu",
      'button' => "zurück",
      "title"=> "pdfs - hazwitz"
    ],
  ];

$title  = $msgs[$lang]['title'];
$notice = $msgs[$lang]['notice'];
$btn    = $msgs[$lang]['button'];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang==='de'?'de':($lang==='en'?'en':'pt-br') ?>">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars(strtok($title,"\n"), ENT_QUOTES) ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body<?php echo $mode==='dark'?' class="dark"':'' ?>>

  <div class="index-container">
    <div class="notice"><?php echo nl2br(htmlspecialchars($notice, ENT_QUOTES)) ?></div>
    <a class="real-btn"
       href="starting-point.php?lang=<?php echo $lang ?>&mode=<?php echo $mode ?>">
      <?php echo htmlspecialchars($btn, ENT_QUOTES) ?>
    </a>
  </div>

  <div class="lang-switch">
    <a href="?lang=pt&mode=<?php echo $mode ?>">PT</a>
    <a href="?lang=en&mode=<?php echo $mode ?>">EN</a>
    <a href="?lang=de&mode=<?php echo $mode ?>">DE</a>
  </div>
  <div class="mode-switch">
    <a href="?lang=<?php echo $lang ?>&mode=light">light</a>
    <a href="?lang=<?php echo $lang ?>&mode=dark">dark</a>
  </div>
</body>
</html>
