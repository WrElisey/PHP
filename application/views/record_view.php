<?
/**
 * @var model_record $this;
 */
?>
<div class="post-preview">
    <a href="index/post/<?=$this->getId()?>">
        <h2 class="post-title">
<?=$this->headline?>
        </h2>
    </a>
    <p class="post-meta">Posted by <a href="#"><?=$this->author?></a> on <?=date("Y-m-d H:i:s",$this->time)?></p>
</div>
<hr>

