<?php
$data = $_POST;
switch($data['action']){
	case 'process_regex':

		$content = $data['content'];
		$regex   = $data['regex'];
		$result  = '';

		if(!empty($content) && !empty($regex)){
			$regex = str_replace('/','\/',$regex);
			@preg_match_all('/'.trim($regex).'/', $content, $matches);
			$result = @implode("<br>", $matches[0]);
		}

		echo $result;
	break;
}