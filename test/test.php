<?php
require '../src/form.php';

// form attributes
$data = array(
	'id' => 'form',
	'action' => 'zoz',
	'method' => 'post'
	);


$form = new Form($data);

// Syntax : $form->add(type, name, label, options)
// Exception for select : $form->add('select', name, label, array(item' => array(options), item, item))
$form->add('text', 'title', null, array('disabled' => 'disabled'));
$form->add('password', 'password');
$form->add('textarea', 'content', 'Content :', array('id' => 'efef'));
$form->add('radio', 'gender',	'Male :', array('value' => 'male'));
$form->add('radio', 'gender',	'Female :', array('value' => 'female'));
$form->add('color', 'color');
$form->add('date', 'date');
$form->add('number', 'number', null, array('min' => '4', 'max' => '18') );
$form->add('search', 'search');
$form->add('url', 'url');
$form->add('email', 'email');
$form->add('file', 'file');
$form->add('select', 'model', null, array('one', 'two', 'three'));
$form->add('hidden', 'id');
$form->add('submit', 'submit', 'Save :');
echo($form->end());
?>
