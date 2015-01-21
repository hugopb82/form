Form Class
==========
**A simple php class to create easily new forms**

Example of code : 
'<?php
require('form.php');

$form = new form(array('id' => 'myform', 'action' => ''));

$form->add(new text('Pseudo : ', 'pseudo', array('disabled' => '1')));
$form->add(new password('Pass : ', 'pass'));
$form->add(new file('File : ', 'file'));
$form->add(new textarea('Textarea : ', 'textarea'));
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
?>'

This code will output :

    <form id="myform" action="" >

	<label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" disabled="1" >
	<label for="pass">Pass : </label><input type="password" name="pass" id="pass" >
	<label for="file">File : </label><input type="file" name="file" id="file" >
	<label for="textarea">Textarea : </label><textarea name="textarea" id="textarea" ></textarea>

	<label for="country">Country : </label>
	<select name="country" id="country" >
		<option value="France">France</option>
		<option value="France" >France</option>
	</select>

	<label for="genderman">man</label><input type="radio" value="man" name="gender" id="genderman" checked="1" >
	<label for="genderwoman">woman</label><input type="radio" value="woman" name="gender" id="genderwoman" >
	<label for="genderman">man</label><input type="checkbox" value="man" name="gender" id="genderman" checked="1" >
	<label for="genderwoman">woman</label><input type="checkbox" value="woman" name="gender" id="genderwoman" >

	<label for="color">Color : </label><input type="color" name="color" id="color" >
	<input value="Button" type="button" name="button" id="button" >
	<input value="Send" type="submit" name="submit" id="submit" >
	<input value="Reset" type="reset" name="reset" id="reset" >
</form>
