<?php

    $connection - mysqli_connect('localhost',;'root','','book_bd');

    if(isset($_POST['send'])))(
        $name -$_POST['name'];
        $email -$_POST['email'];
        $phone -$_POST['phone'];
        $address -$_POST['address'];
        $guests -$_POST['guests'];
        $arrivals -$_POST['arrivals'];
        $leaving -$_POST['leaving'];

        $request = " inserrt into book_form(name, email, Phone, address, guests, arrivals, leaving) values 
        ('$name','$email','$phone','$address','$guests','$arrivals','$leaving')";

        mysqli_query($connection,$request);
        echo "Form submitted successfully!";

        header('location:book.php');
    )else{
        echo 'sumthing want wrong try again';
    }

?>