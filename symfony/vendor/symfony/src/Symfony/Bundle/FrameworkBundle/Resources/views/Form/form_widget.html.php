<div<?php echo $view['form']->attributes() ?>>
    <?php echo $view['form']->errors($form); ?>
    <?php foreach ($form->getChildren() as $child): ?>
        <?php echo $view['form']->row($child); ?>
    <?php endforeach; ?>
    <?php echo $view['form']->rest($form) ?>
</div>

