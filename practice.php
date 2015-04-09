<?php
    
    //echo "Hello world";
    
    //declaring variables:
    
    //integer declaration
    //$i = 1;
    //echo $i;
    
    //string
    $name = "Steve";
    showOutput($name);

    //logical operations
    //$i = 1;
    //$j = 2;
    
    //$z = $i + $j;
    
    //echo $z;

    $message = "Download ringtone from www.legibra.com/ringtone.mp3";
   $phone_no = array("121212","324545","32453434");
//    
//    $output = array('numbers'=>$phone_no,'message'=>$message);
//    print_r($output);
    
    for($i =0;$i<=count($phone_no);$i++) {
        echo "<br> Message sent successfully to ".$phone_no[$i];
    }
    

function showOutput($output) {
    print_r($output);
}

?>

