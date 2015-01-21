<?php
	
	/*
	*	Form class by hugopb82
	*	Follow me on twitter @hugopb82
	*	Fork me on github
	*/
	
	// Main class
	class form{
		private $FORM_ATTRIBUTES = array('accept-charset', 'action', 'autocomplete', 'enctype', 'method', 'name', 'novalidate', 'target', 'id', 'class');
		
		public $html = "";
		public $params = array();
		
		/**
		* Set form attributes
		* @params	text/array	$data	list of form parameters
		*/
		public function __construct($data = null){
			if($data == null){
				return false;
			}elseif(is_array($data)){
				foreach($data as $k => $v){
					if(in_array(strtolower($k), $this->FORM_ATTRIBUTES)){
						$this->params[strtolower($k)] = $v;
					}
				}
			}else{
				$this->params['id'] = $data;
			}
		}
		
		/**
		* Add code to form
		* @params	text	$object		html code the form object return
		*/
		public function add($object){
			$this->html .= $object;
		}
		
		/**
		* Add code to form
		* @return	text/html	the html form code
		*/
		public function build(){
			$html = '<form ';
			foreach($this->params as $k => $v){
				if(in_array($k, $this->FORM_ATTRIBUTES)){
					$html .= $k.'="'.$v.'" ';
				}
			}
			$html .= '>'.$this->html.'</form>';
			return $html;
		}
	}
	
	
	
	// Html forms elements
	
	// Main form elements function
	class Elements{
		
		public $html;
		
		/**
		* Return the code when object called
		* @return	text/html	the html element code
		*/
		function __toString() {
			return $this->html;
		}
	
	}
	
		// Add html to form
		class html extends Elements{
			
			public function __construct($code){
				$this->html = $code;
			}
			
		}
		
		// Add submit button to form
		class submit extends Elements{
			
			public function __construct($label, $name, $options = null){
				$atrr = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				$html = '<input value="'.$label.'" type="submit" name="'.$name.'" id="'.$name.'" '.$atrr.'>';
				$this->html = $html;
			}
			
		}
		
		// Add reset button to form
		class reset extends Elements{
			
			public function __construct($label, $name, $options = null){
				$atrr = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				$html = '<input value="'.$label.'" type="reset" name="'.$name.'" id="'.$name.'" '.$atrr.'>';
				$this->html = $html;
			}
			
		}
		
		// Add button to form
		class button extends Elements{
			
			public function __construct($label, $name, $options = null){
				$atrr = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				$html = '<input value="'.$label.'" type="button" name="'.$name.'" id="'.$name.'" '.$atrr.'>';
				$this->html = $html;
			}
			
		}
		
		// Add text field to form
		class text extends Elements{
			
			public function __construct($label, $name, $options = null){
				$atrr = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				$html = '<label for="'.$name.'">'.$label.'</label><input type="text" name="'.$name.'" id="'.$name.'" '.$atrr.'>';
				$this->html = $html;
			}
			
		}
		
		// Add password field to form
		class password extends Elements{
			
			public function __construct($label, $name, $options = null){
				$atrr = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				$html = '<label for="'.$name.'">'.$label.'</label><input type="password" name="'.$name.'" id="'.$name.'" '.$atrr.'>';
				$this->html = $html;
			}
			
		}
		
		// Add file field to form
		class file extends Elements{
			
			public function __construct($label, $name, $options = null){
				$atrr = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				$html = '<label for="'.$name.'">'.$label.'</label><input type="file" name="'.$name.'" id="'.$name.'" '.$atrr.'>';
				$this->html = $html;
			}
			
		}
		
		// Add textarea field to form
		class textarea extends Elements{
			
			public function __construct($label, $name, $options = null){
				$atrr = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				$html = '<label for="'.$name.'">'.$label.'</label><textarea name="'.$name.'" id="'.$name.'" '.$atrr.'></textarea>';
				$this->html = $html;
			}
			
		}
		
		// Add select field to form
		class select extends Elements{
			
			public function __construct($label, $name, $list, $options = null){
				$atrr = "";
				$list_options = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				foreach($list as $v){
					$attr2 = "";
					if(isset($v[1]) && is_array($v[1])){
						foreach($v[1] as $w => $x){
							$attr2 .= $w.'="'.$x.'" ';
						}
					}
					$list_options .= '<option value="'.$v[0].'" '.$attr2.'>'.$v[0].'</option>';
				}
				$html = '<label for="'.$name.'">'.$label.'</label><select name="'.$name.'" id="'.$name.'" '.$atrr.'>'.$list_options.'</select>';
				$this->html = $html;
			}
			
		}
		
		// Add radio field to form
		class radio extends Elements{
			
			public function __construct($label, $name, $list, $options = null){
				$atrr = "";
				$html = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				foreach($list as $v){
					$attr2 = "";
					if(isset($v[1]) && is_array($v[1])){
						foreach($v[1] as $w => $x){
							$attr2 .= $w.'="'.$x.'" ';
						}
					}
					$html .= '<label for="'.$name.$v[0].'">'.$v[0].'</label><input type="radio" value="'.$v[0].'" name="'.$name.'" id="'.$name.$v[0].'" '.$attr2.'>';
				}
				$this->html = $html;
			}
			
		}
		
		// Add checkbox field to form
		class checkbox extends Elements{
			
			public function __construct($label, $name, $list, $options = null){
				$atrr = "";
				$html = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				foreach($list as $v){
					$attr2 = "";
					if(isset($v[1]) && is_array($v[1])){
						foreach($v[1] as $w => $x){
							$attr2 .= $w.'="'.$x.'" ';
						}
					}
					$html .= '<label for="'.$name.$v[0].'">'.$v[0].'</label><input type="checkbox" value="'.$v[0].'" name="'.$name.'" id="'.$name.$v[0].'" '.$attr2.'>';
				}
				$this->html = $html;
			}
			
		}
		
		// Add color field to form
		class color extends Elements{
			
			public function __construct($label, $name, $options = null){
				$atrr = "";
				if($options != null && is_array($options)){
					foreach($options as $k => $v){
						$atrr .= $k.'="'.$v.'" ';
					}
				}
				$html = '<label for="'.$name.'">'.$label.'</label><input type="color" name="'.$name.'" id="'.$name.'" '.$atrr.'>';
				$this->html = $html;
			}
			
		}
