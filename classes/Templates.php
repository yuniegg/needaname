<?php

class Templates {
	
	private $arrTemplatesNames = Array(
		'test',
		'user_signed_in'
		);

	private $arrTemplates = Array();

	public function loadAllTemplates()
	{
		foreach ($this->arrTemplatesNames as $value) {
			$tmpFilePath = "../templates/".$value.".html";
			if(file_exists($tmpFilePath)){
				$arrTemplates[$value] = file_get_contents($tmpFilePath);
			}
		}
	}

	public function getTemplates()
	{
		return json_encode($this->arrTemplates);
	}
}

?>
