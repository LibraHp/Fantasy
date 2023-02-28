<?php

/**
 * 100件事
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$this->need('header.php');

?>
<main>
<div class="wrap min">
<?php $this->widget('Widget_Archive@myCustomCategory', 'type=category', 'mid=3')->to($categoryPosts); ?>
</div>
</main>

<?php $this->need('footer.php'); ?>