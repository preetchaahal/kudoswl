<?php

	/**
	*
	* This file gets the "quote forms" from the 'quote-forms' folder
	* removes formatting like newline chars and tabs and indentations
	* and stores each form into separate variables
	*
	*/


	function remove_formatting($file)
	{
		$file_formatted = $file;
		
		$file_formatted = preg_replace("/[\n\r]/","",$file_formatted); //removes "\n" : new line chars

		$file_unformatted = preg_replace('/\s+/', ' ', $file_formatted); //removes "\t" : tabs and extra white spaces

		return($file_unformatted);
	}

	
	$quote_form_1_untrimmed = file_get_contents("quote-forms/form1.html");
	$quote_form_15_untrimmed = file_get_contents("quote-forms/form15.html");
	$quote_form_2_untrimmed = file_get_contents("quote-forms/form2new.html");
	$quote_form_2_old_untrimmed = file_get_contents("quote-forms/form2old.html");
	$quote_form_5_untrimmed = file_get_contents("quote-forms/form5.html");

	$quote_form_1 = remove_formatting($quote_form_1_untrimmed);
	$quote_form_15 = remove_formatting($quote_form_15_untrimmed);
	$quote_form_2 = remove_formatting($quote_form_2_untrimmed);
	$quote_form_2_old = remove_formatting($quote_form_2_old_untrimmed);
	$quote_form_5 = remove_formatting($quote_form_5_untrimmed);

?>