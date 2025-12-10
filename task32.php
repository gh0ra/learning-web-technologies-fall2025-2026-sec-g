<?php
//session_start();

if(isset($_POST['submit'])){

$nameError = "";
$emailError = "";
$dobError = "";
$genderError = "";
$degreeError = "";
$bgError = "";
$hasError = false;


//nameValidation
$name = $_POST['name'];

if($name == ""){
    echo "Name cannot be empty";
    echo "<br>";
    $hasError = true;
}else{
    $space = false;

    for($i=0; $i<strlen($name); $i++){
        if($name[$i] == " "){
            $space = true;
        }
    }
    if($space == false){
        echo "Name must contain two words";
        echo "<br>";
        $hasError = true;
    }
    
    $firstChar = $name[0];
        if (!(($firstChar >= 'a' && $firstChar <= 'z') || ($firstChar >= 'A' && $firstChar <= 'Z'))) {
            echo "Name haave to start with a letter!";
            echo "<br>";
            $hasError = true;
        }
     $validName = true;
        for ($i = 0; $i < strlen($name); $i++) {
            $char = $name[$i];
            if (!(($char >= 'a' && $char <= 'z') || 
                  ($char >= 'A' && $char <= 'Z') || 
                  $char == '.' || 
                  $char == '-' || 
                  $char == ' ')) {
                $validName = false;
            }
        }
        if ($validName == false) {
            echo "Name can only contain letters, periods, dashes and spaces!";
            echo "<br>";
            $hasError= true;
        }
}

//maiLVAlidation

$email = $_POST['email'];

if ($email == "") {
        echo "Email cannot be empty!";
        echo "<br>";
        $hasError = true;
    } else {
        $hasAt = false;
        $hasDot = false;
        for ($i = 0; $i < strlen($email); $i++) {
            if ($email[$i] == '@') {
                $hasAt = true;
            }
            if ($email[$i] == '.') {
                $hasDot = true;
            }
        }
        if ($hasAt == false || $hasDot == false) {
            echo "Valid email type: anything@example.com";
            echo "<br>";
            $hasError = true;
        }
    }

    //dobVal

    $dob = $_POST['dob'];

    if ($dob == "") {
        echo "Date of birth cannot be empty!";
        echo "<br>";
        $hasError = true;
    } else {
        $year = substr($dob, 0, 4); //cause the frmt is yyyy-mm-dd
        if ($year < 1953 || $year > 1998) {
            echo "Year range 1953 to 1998!";
            echo "<br>";
            $hasError = true;
        }
    }

    //genderVal

    $gender = isset($_POST['Gender']) ? $_POST['Gender'] : "";

    if ($gender == "") {
        echo "Please select a gender.";
        echo "<br>";
        $hasError = true;
    }

    //bgVal
    $bg = $_POST['bg'];

    if ($bg == "") {
        echo "Blood group cant be empty!";
        echo "<br>";
        $hasError = true;
    }

    //ddegreeVal
    $Count = 0;
    if (isset($_POST['ssc'])) $Count++;
    if (isset($_POST['hsc'])) $Count++;
    if (isset($_POST['bsc'])) $Count++;
    if (isset($_POST['msc'])) $Count++;
    
    if ($Count < 2) {
        echo "Please select at least two degrees!";
        echo "<br>";
        $hasError = true;  
    }

    if ($hasError == false) {
        echo "<h2>Form Submitted Successfully!</h2>";
    }

}

?>