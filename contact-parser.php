<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    //turns string into array with str of name/number
    $contentArray = explode(PHP_EOL, $contents);
    //splits up phone number with '-'s
    foreach($contentArray as $content){
    	$phoneNumber = substr($content, -10);
    	$phoneEnd = substr($phoneNumber, -4);
    	$phoneMiddle = substr($phoneNumber, -4, 3); 
    	$phoneBeginning = substr($phoneNumber, -7, 3);
    	$newContentArray[] = substr_replace ($content , $phoneBeginning . '-' . $phoneMiddle . '-' . $phoneEnd , -10); 	 
    }
    $keys = ["name", "number"];
    //seperates name and number into array and assigns keys at same time
    foreach($newContentArray as $content){
    	$contacts[] = array_combine ($keys, explode ('|' , $content));
    }

    fclose($handle);
    
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));

?>