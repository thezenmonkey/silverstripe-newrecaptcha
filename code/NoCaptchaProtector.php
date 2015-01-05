<?php

class NoCaptchaProtector implements SpamProtector {
	function getFormField($name = "NoCaptchaField", $title = "Captcha", $value = null, $form = null, $rightTitle = null) {
		
		Requirements::javascript("https://www.google.com/recaptcha/api.js");
		// load servers. Needs to be called before validKeys() 
		

		return new NoCaptchaField($name, $title, $value, $form, $rightTitle);
	}
	
	public function setFieldMapping($fieldMapping){
		return true;
	}
}