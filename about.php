<?php
require_once 'config/messages.php';
$messages = require 'config/messages.php';

// idioma
$availLangs = ['pt','en','de'];
if (!empty($_GET['lang']) && in_array($_GET['lang'], $availLangs)) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time()+30*24*60*60, '/');
} elseif (!empty($_COOKIE['lang']) && in_array($_COOKIE['lang'], $availLangs)) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'pt';
}

// modo
$availModes = ['light','dark'];
if (!empty($_GET['mode']) && in_array($_GET['mode'], $availModes)) {
    $mode = $_GET['mode'];
    setcookie('mode', $mode, time()+30*24*60*60, '/');
} elseif (!empty($_COOKIE['mode']) && in_array($_COOKIE['mode'], $availModes)) {
    $mode = $_COOKIE['mode'];
} else {
    $mode = 'light';
}

// títulos específicos da página
$msg = [
  'pt' => ['pageTitle' => "sobre - hazwitz"],
  'en' => ['pageTitle' => "about - hazwitz"],
  'de' => ['pageTitle' => "über - hazwitz"],
];

// dados da página
$pageKey     = 'sobre';
$pageData    = $messages['pages'][$pageKey][$lang] 
               ?? $messages['pages'][$pageKey]['pt'];
$title       = $pageData['title'];
$title2      = $pageData['title2']    ?? '';
$comment1    = $pageData['comment1']  ?? '';
$placeholder = $pageData['placeholder'];
$aboutTitle2      = $pageData['aboutTitle2']     ?? '';
$aboutTitle3      = $pageData['aboutTitle3']     ?? '';
$aboutSection1    = $pageData['aboutSection1']   ?? '';
$aboutMidSection1 = $pageData['aboutMidSection1']    ?? '';
$aboutSection2    = $pageData['aboutSection2']    ?? '';
$aboutMidSection2 = $pageData['aboutMidSection2']   ?? '';
$aboutSection3    = $pageData['aboutSection3']    ?? '';
$aboutMidSection3 = $pageData['aboutMidSection3']   ?? '';
$aboutSection4    = $pageData['aboutSection4']    ?? '';
$pageTitle   = $msg[$lang]['pageTitle'] 
               ?? $msg['pt']['pageTitle'];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang==='de' ? 'de' : ($lang==='en' ? 'en' : 'pt-br'); ?>">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES); ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body<?php echo $mode==='dark' ? ' class="dark"' : ''; ?>>

  <?php include_once 'components/header.php'; ?>

  <div class="content-frame">
    <main class="site-content">
      <h1><?php echo htmlspecialchars($title, ENT_QUOTES); ?></h1>
      <p><?php echo nl2br(htmlspecialchars($placeholder, ENT_QUOTES)); ?></p>
      <hr class="section-separator">
      <h1><?php echo htmlspecialchars($aboutTitle2, ENT_QUOTES); ?></h1>
      <p><?php echo nl2br(htmlspecialchars($aboutSection1, ENT_QUOTES)); ?></p>
      <hr class="section-separator">
      <h1><?php echo htmlspecialchars($aboutTitle3, ENT_QUOTES); ?></h1><br>
      <h2><?php echo htmlspecialchars($aboutMidSection1, ENT_QUOTES); ?></h2>
      <p><?php echo nl2br(htmlspecialchars($aboutSection2, ENT_QUOTES)); ?></p><br>
      <h2><?php echo htmlspecialchars($aboutMidSection2, ENT_QUOTES); ?></h2>
      <p><?php echo nl2br(htmlspecialchars($aboutSection3, ENT_QUOTES)); ?></p><br>
      <h2><?php echo htmlspecialchars($aboutMidSection3, ENT_QUOTES); ?></h2>
      <p><?php echo nl2br(htmlspecialchars($aboutSection4, ENT_QUOTES)); ?></p><br>
    </main>
  </div>

  <div class="lang-switch">
    <a href="?lang=pt&mode=<?php echo $mode; ?>">PT</a>
    <a href="?lang=en&mode=<?php echo $mode; ?>">EN</a>
    <a href="?lang=de&mode=<?php echo $mode; ?>">DE</a>
  </div>
  <div class="mode-switch">
    <a href="?lang=<?php echo $lang; ?>&mode=light">light</a>
    <a href="?lang=<?php echo $lang; ?>&mode=dark">dark</a>
  </div>
</body>
</html>
