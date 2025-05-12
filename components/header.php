<?php
if (!isset($messages, $lang, $mode)) {
    return;
}
$menu    = $messages['menu'];
$labels  = $messages['nav'][$lang] ?? [];
$current = basename($_SERVER['PHP_SELF']);
$query   = '?lang=' . $lang . '&mode=' . $mode;
?>
<nav class="site-header">
  <ul>
    <?php foreach ($menu as $key => $url):
      $symbol = basename($url) === $current ? '>' : '+';
      $label  = $labels[$key] ?? $key;
      $href   = htmlspecialchars($url . $query, ENT_QUOTES);
      $text   = htmlspecialchars("$symbol $label", ENT_QUOTES);
    ?>
      <li><a href="<?php echo $href ?>"><?php echo $text ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
