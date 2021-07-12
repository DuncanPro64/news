
<?php

include "../connection.php";
if(isset($_POST['submit'])) {


    $name = mysqli_real_escape_string($con, $_POST['firstname']);
    $name2 = mysqli_real_escape_string($con,$_POST['lastname']);
    $campus = mysqli_real_escape_string($con,$_POST['campus']);
    $category = mysqli_real_escape_string($con,$_POST['category']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,$_POST['password']);
    $pass2= mysqli_real_escape_string($con,$_POST['password2']);

    $name =trim($name);
    $name2 =trim($name2);
    $campus = trim($campus);
    $category =trim($category);
    $email =trim($email);
    $pass =trim($pass);
    $pass2=trim($pass2);

    $name =htmlspecialchars($name);
    $name2 =htmlspecialchars($name2);
    $campus ==htmlspecialchars($campus);
    $category ==htmlspecialchars($category);
    $email =htmlspecialchars($email);
    $pass =htmlspecialchars($pass);
    $pass2=htmlspecialchars($pass2);

    $campus = (int)$campus;

    $password = password_hash($pass, PASSWORD_DEFAULT);
    if ($pass != $pass2) {
        echo "password mismatch";
    }else{


        $sql = 'INSERT INTO editor (email,f_name,l_name,campus_id,password,category,profile_pic)
        VALUES("'.$email.'","'.$name.'","'.$name2.'","'.$campus.'" ,"'.$password.'","'.$category.'","gdgfhfh")' ;
        $result = mysqli_query($con,$sql) or die(mysqli_error($con));

        if ($result === FALSE) {
        $con-> error;
    }else{
        echo "record added successfully";
    }

    }

    
}


?>
