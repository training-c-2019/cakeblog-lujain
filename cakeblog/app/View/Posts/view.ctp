<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

<h3>Comment Post</h3>

<?php
echo $this->Form->create('Comment', ['url' => ['controller' => 'comment', 'action' => 'add']]);
echo $this->Form->input('post_id', array('type' => 'hidden' , 'value' => $post['Post']['id']));
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save comment');
?>

 
 <?php foreach ($post['Comment'] as $comme):   ?>
      <div>
      <h4> comment: <?php echo $comme['body']; ?></h4>
      </div>
  <?php endforeach; ?>
