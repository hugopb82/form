<?php
	require('form.php');
	
	$form = new form(array('id' => 'myform', 'action' => ''));
	
	$form->add(new text('Pseudo : ', 'pseudo', array('disabled' => '1')));
	$form->add(new password('Pass : ', 'pass'));
	$form->add(new file('File : ', 'file'));
	$form->add(new file('Textarea : ', 'textarea'));
	$form->add(new select('Country : ', 'country', array(array('France'), array('France'))));
	$form->add(new radio('Gender : ', 'gender', array(array('man', array('checked' => '1')), array('woman'))));
	$form->add(new checkbox('Gender : ', 'gender', array(array('man', array('checked' => '1')), array('woman'))));
	$form->add(new color('Color : ', 'color'));
	$form->add(new button('Button', 'button'));
	$form->add(new submit('Send', 'submit'));
	$form->add(new reset('Reset', 'reset'));
	
	$html = $form->build();
	
	echo htmlspecialchars($html);
	echo "<hr />";
	echo $html;
?>
