

<div class = "row">
<?php echo $this->Flash->render('message');?>
<h2>View All Posts</h2>
<?php echo $this->Html->link('ADD NEW POST',['action'=>'add'],['class'=>'btn btn-primary']); ?>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>FirstName</th>
            <th>Title</th>
            <th>Email-ID</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($posts)): ?>
        <?php foreach($posts as $fetch): ?>
        <tr>
            <td><?php echo $fetch->FirstName;?></td>
            <td><?php echo $fetch->Title;?></td>
            <td><?php echo $fetch->Email;?></td>
            <td><?php echo $fetch->Image;?></td>
            <td>
                <?php echo $this->html->link('View',['action'=>'view',$fetch->ID],['class'=>'btn btn-primary']); ?>
                <?php echo $this->html->link('Edit',array('action'=>'edit',$fetch->ID),['class'=>'btn btn-success']); ?>
                <?= $this->Form->postLink(
                    'Delete',
                    ['action'=>'delete',$fetch->ID],
                    ['class'=>'btn btn-danger'],
                    ['confirm'=>'Are u Sure?'])
                ?>
            </td>
            
        </tr>
        <?php endforeach;?>
        <?php else:?>
        <td>No Record Found...</td>
        <?php endif;?>
    </tbody>
</table>
</div>