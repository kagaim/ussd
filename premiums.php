<?php
require('connect.php');
//get users phone
//$phone = $_REQUEST['from'];
$phone = '0723634326';
//kagai's story:

//The normal sales cycle of insurance.

//Agent approaches you with a product and gives you details

//User register by SMS (Name, age, Id). Confirmation message is here

//pay 100 bob per month via MPESA

//Receive confirmation that insurance is active

//5 days to expiry it should send an alert message for renewal

//insured person should query on the status of the insurance. Send STATUS you
//insurance is active or the next x days.

//Ask questions, feedback, idea to insurance company.

//send a renewal message 5 days before expiry of insurance.

//Nouns

/*
 * 1. User, message(phone,message,timestamp,type), payment(amount,user,what),
 *  insurance (status, expiry date), questions(user), fb (user),idea (user)
 */

//Verbs
/*
 * 2. (user) register, (system) sendConfirmation, (user) pays, (system)
 * sends renewal message
 *
 *
 */


//assume a user will register by sending name#id#age   for example Leo Korir#3423423#25

//read about explode in php
//explode the message Leo Korir#34343#25
$message = 'Leo Korir#34343#25';

//array of items 0 - name, 1 - id, 2 - age

$messageChunks = explode("#", $message);
$userName = $messageChunks[0];
//print_r($userName);
$userID = $messageChunks[1];
//print_r($userID);
$userAge = $messageChunks[2];
//print_r($userAge);

//createUser with the above details.
$query = "SELECT `national_id` FROM `users` WHERE `national_id` = '$userID'";
$check = mysqli_query($connection, $query);
if( mysqli_num_rows($check) > 0 ) {
    //Send Error message
    print_r('You are already registered');
} else {
    //Create User
    $query = "INSERT INTO users(name,age,national_id,phone) VALUES('$userName','$userAge','$userID','$phone')";
    $register = mysqli_query($connection, $query);
}




