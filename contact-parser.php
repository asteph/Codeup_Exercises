<?php

function parseContacts($filename, $name = null, $number = null)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'a');
    if(isset($name) && isset($number)){
        fwrite($handle, PHP_EOL . "{$name}|{$number}");
    }
    fclose($handle);
    $handle = fopen($filename, 'r');       
    $contents = trim(fread($handle, filesize($filename)));
    //turns string into array with str of name/number
    $contentArray = explode(PHP_EOL, $contents);
    foreach($contentArray as $contact) {
        $contactsArray = explode('|', $contact);
        $contacts[] = array(
            'name' => $contactsArray[0],
            'number' => formatNumber($contactsArray[1])
        );
    }
    fclose($handle);    
    return $contacts;
}

function formatNumber ($number)
{
    return '(' . substr($number, 0, 3) . ') ' . substr($number, 3, 3) . '-' . substr($number, 6, 4);
}

var_dump(parseContacts('contacts.txt', 'John Smith', '505EXPLORE'));

?>