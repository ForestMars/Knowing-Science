<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php
  echo"<pre>";
  print_r($node);
  echo"</pre>";
?>

  <?php print render($content['comments']); ?>

</article>