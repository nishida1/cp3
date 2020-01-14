
<?=$this->Form->create($entity, 
['url' => ['controller' => 'Articles', 'action' => 'create'], 'type' => 'post'])?>

title<br>
<?=$this->Form->text('Articles.title');?><br>

content<br>
<?=$this->Form->text('Articles.content');?><br>

<?=$this->Form->submit('送信')?>
<?=$this->Form->end()?>