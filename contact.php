<?php
$company name= $_POST['companyname'];
$contactperson= $_POST['contactperson'];
$city= $_POST['city'];
$state= $_POST['state'];
$country= $_POST['country'];
$mobile= $_POST['mobile'];
$e-mail= $_POST['e-mail'];
$enquiryfor= $_POST['enquiryfor'];

if(!empty($companyname) II !empty($contactperson) II !empty($city) II !empty($state) II !empty($country) II !empty($mobile) II !empty($e-mail) II !empty($enquiryfor)){
$host = "148.72.232.181:3306";
$dbUsername = "aceneon01";
$dbPassword = "******";
$dbname = "ph12903356123_";

$conn = new mysql i($host, $dbUsername, $dbPassword, $dbname);

if (mysql_connect_error()){
die('Connect Error(' . mysqli_connect_error().')'.mysqli_connect_error());
}else{
$SELECT = "SELECT email From register Where email = khushalkt@gmail.com Limit 1";
$INSERT ="INSERT Into register (companyname, contactperson, city, state, country, mobile, e-mail, enquiryfor) values (?,?,?,?,?,?,?,?)";

$stmt
} else {
echo "All fields are required";
die();
}