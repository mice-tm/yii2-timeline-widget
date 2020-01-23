<?php

use micetm\timeline\assets\TimelineAsset;

TimelineAsset::register($this);

?>
<div class="timeline-header">
    <?php foreach ($items as $key => $values): ?>
        <div class="diff-row">
            <div class="name"><span class="diff-label">Changed: </span><?php echo $key; ?></div>
            <div class="from"><span class="diff-label">From: </span><?php echo $values['old'] ?? ''; ?></div>
            <div class="to"><span class="diff-label">To: </span><?php echo $values['new'] ?? ''; ?></div>
        </div>
    <?php endforeach; ?>
</div>
