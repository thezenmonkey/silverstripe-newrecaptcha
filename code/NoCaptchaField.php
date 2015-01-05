<?php

class NoCaptchaField extends FormField {
	
	
	function Field($properties = array()) {
		
		
		$api_key = $this->config()->PublicKey;
		
		return <<<HTML
<div class="g-recaptcha" data-sitekey="$api_key"></div>
HTML;
	}
	
	public function validate($validator) {
		
		if(
			!isset($_REQUEST['g-recaptcha-response']) 
			|| empty($_REQUEST['g-recaptcha-response'])
		) {
			$validator->validationError(
				$this->name, 
				_t(
					'RecaptchaField.EMPTY', 
					"Please check the 'I am not a robot' box"
				), 
				"validation", 
				false
			);
			
			return false;
		}
		
		return true;
		
	}
	
	public function setFieldMapping($array) {
		$this->spamFieldMapping = $array;
	}
	
}