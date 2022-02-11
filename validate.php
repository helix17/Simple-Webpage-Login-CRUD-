<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "phone") {
if (strlen($value) != 10 ) {
echo "Invalid Phone Number";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "mail") {
if (!preg_match("/([w-]+@[w-]+.[w-]+)/", $value)) {
echo "Invalid email";
} else {
echo "<span>Valid</span>";
}
}

?>