<?php $this->import('/layout/header');?>
<h3>Product And Service</h3>
<?php
use Main\ThirdParty\Xcrud\Xcrud;

$xcrud = Xcrud::get_instance();
$xcrud->table('productservice');
$xcrud->unset_title();
// $xcrud->where('level_id =', 3);
$xcrud->fields('name,description,detail,type,image');
$xcrud->columns('name,description,detail,type,image');
$xcrud->change_type('image', 'image', '', [
  'path'=> '../../../../../../productservice',
  'thumbs'=> [
    ['width'=> 270, 'height'=> 200, 'crop'=> true, 'folder'=> 'thumbs']
  ]
]);
$xcrud->no_editor('detail');
$xcrud->change_type('type','select','product','product,service');

echo $xcrud->render();
?>
<hr>
<h3>Simple Work</h3>
<?php

$xcrud = Xcrud::get_instance();
$xcrud->table('simplework');
$xcrud->unset_title();
// $xcrud->where('level_id =', 3);
$xcrud->fields('image');
$xcrud->columns('image');
$xcrud->change_type('image', 'image', '', [
  'path'=> '../../../../../../simplework',
  'thumbs'=> [
    ['width'=> 212, 'height'=> 167, 'crop'=> true, 'folder'=> 'thumbs']
  ]
]);

echo $xcrud->render();
?>
<?php $this->import('/layout/footer');?>
