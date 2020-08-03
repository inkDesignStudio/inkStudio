<?php
$slug = !empty($params['slug']) ? $params['slug'] : '';
?>

<nav class="menu<?= $class ?>">
    <?= get_menu($slug) ?>
</nav>
