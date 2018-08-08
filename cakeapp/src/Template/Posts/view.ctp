<div class="row" style="aling:center;"> 
<p>FirstName:-><?php echo $post->FirstName;?></p>
<p>Title:-><?php echo $post->Title;?></p>
<p>Email-ID:-><?php echo $post->Email;?></p>

<?php echo $this->html->link('Back',['action'=>'index'],['class'=>'btn btn-primary']);?>
</div>