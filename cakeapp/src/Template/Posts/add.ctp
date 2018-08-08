<?php echo $this->Form->create($post,array('enctype'=>'multipart/form-data'));?>
<fieldset>
<legend>Add Post</legend>
    <div class="form-group">
        <div class="col-lg-10">
            <?php echo $this->Form->input('FirstName',['class'=>'form-control','Placeholder'=>'FirstName']); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10">
            <?php echo $this->Form->input('Title',['class'=>'form-control','Placeholder'=>'Title']); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10">
            <?php echo $this->Form->input('Email',['class'=>'form-control','Placeholder'=>'Email-ID']); ?>
        </div>
    </div>
  
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            <?php echo $this->Form->button(__('Add Post'),['class'=>'btn btn-primary']); ?>
            <?php echo $this->html->link('Back',['action'=>'index'],['class'=>'btn btn-primary']);?>
        </div>
    </div>
   
</fieldset>
<?php echo $this->Form->end();?>