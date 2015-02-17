#Form Class
**A simple php class to create easily new forms**

##Basic syntax:
The synatax for input
- text
- password
- textarea
- radio
- checkbox
- number
- all html5 new inputs (color, date, range ...)
is :
```php
$form->add($type, $name, $label, $options)
```
where $type is the type of input (text, textarea, password...)
$name is the name of field
$label is the label for field (default is ucfirst($name) . ' :')
$options is an associative array of field attributes

/!\ The select syntax is different :
```php
$form->add($type, $name, $label, $options)
```
where $options is an associative array of items with options.
Eg :
array('item1' => array('disabled' => 'disabled') , 'item2', 'item3')

##Usage:
Example of code : 
```php
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
	$form->add('radio', 'gender', 'Male :', array('value' => 'male'));
	$form->add('radio', 'gender', 'Female :', array('value' => 'female'));
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
```

This code will output :
```html
<form id="form" action="zoz" method="post" >
   <label>Title :<input type="text" name="title" disabled="disabled" ></label>
   <label>Password :<input type="password" name="password" ></label>
   <label>Content :<textarea name="content" id="efef" ></textarea></label>
   <label>Male :<input type="radio" name="gender" value="male" ></label>
   <label>Female :<input type="radio" name="gender" value="female" ></label>
   <label>Color :<input type="color" name="color" ></label><label>Date :<input type="date" name="date" ></label>
   <label>Number :<input type="number" name="number" min="4" max="18" ></label>
   <label>Search :<input type="search" name="search" ></label>
   <label>Url :<input type="url" name="url" ></label>
   <label>Email :<input type="email" name="email" ></label>
   <label>File :<input type="file" name="file" ></label>
   <label>
      Model :
      <select name="model">
         <option>one</option>
         <option>two</option>
         <option>three</option>
      </select>
   </label>
   <input type="hidden" name="id">
   <input type="submit" name="submit" value="Save :" >
</form>
```

##Support
Email me at hugopb82@gmail.com

Follow me on twitter at https://twitter.com/intent/follow?screen_name=hugopb82

I'm not a professionnal developper, I made it for fun but it was hard and long to do this class. Download the source code with this link and watch an ad for 5 seconds to help me : http://adf.ly/wVRJF

You can also , if you want really help me, make a donation on paypal : https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DYEEWGNMNZMCJ

##Copyright and License
This software is Copyright (c) 2015 by hugopb82

This is free software, licensed under the MIT License.
