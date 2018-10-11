<?php
/**
 * @var model_record[] $dRecords
 */
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?
        foreach ($dRecords as $record) {
            $record->show();
        }
        ?>
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="/index/index/<?=($args[0]+10)?>">Older Posts &rarr;</a>
            </li>
        </ul>
    </div>
</div>