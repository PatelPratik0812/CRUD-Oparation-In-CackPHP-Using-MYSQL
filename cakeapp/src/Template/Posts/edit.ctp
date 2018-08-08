<?php echo $this->Form->create($User);?>
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
            <?php echo $this->Form->button(__('Save Post'),['class'=>'btn btn-primary']); ?>
            <?php echo $this->html->link('Back',['action'=>'index'],['class'=>'btn btn-primary']);?>
        </div>
    </div>
</fieldset>
<?php echo $this->Form->end();?>