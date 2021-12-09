<?php

use micetm\timeline\assets\TimelineAsset;

TimelineAsset::register($this);

?>
<div class="timeline-header">
    <?php foreach ($items as $key => $values): ?>
        <?php
        $old = $values['old'] ?? '';
        if (!is_string($old)) {
            $old = json_encode($old);
        }
        $new = $values['new'] ?? '';
        if (!is_string($new)) {
            $new = json_encode($new);
        }
        ?>
        <div class="diff-row">
            <div class="name"><span class="diff-label">Changed: </span><?php echo $key; ?></div>
            <div class="from"><span class="diff-label">From: </span><?php echo $old; ?></div>
            <div class="to"><span class="diff-label">To: </span><?php echo $new ?></div>
        </div>
    <?php endforeach; ?>
</div>
