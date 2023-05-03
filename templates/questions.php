<div class="<?php echo $is_question ? 'question' : 'response'; ?>">
    <?php if ($is_question) : ?>
        <h2><?php echo $data ?></h2>
    <?php else : ?>
        <p><?php echo $data ?></p>
    <?php endif; ?>
</div>