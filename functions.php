<?php
function vva_random()
	{
		$random_str = '';
		for($i=0; $i<8; $i++) {
		$random_str .= chr(mt_rand(33,126)); //символ из ASCII-table
		}
		return $random_str;
	}