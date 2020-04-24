<?php
include("conn.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $errors = [];
    $customer_name_err = $customer_address_err = $customer_phone_err = $movie_name_err = $date_rented_err = $return_date_err = $date_error = "";
    $customer_name = trim($_POST['customer_name']);
    $customer_address = trim($_POST['customer_address']);
    $customer_phone = trim($_POST['customer_phone']);
    $movie_name = trim($_POST['movie_name']);
    $date_rented = trim($_POST['date_rented']);
    $return_date = trim($_POST['return_date']);
    
    if(empty($customer_name)){
        $customer_name_err = "Please type in the customer's name";
        array_push($errors, $customer_name_err);
    }

    if(empty($customer_address)){
        $customer_address_err = "Please type in the customer's address";
        array_push($errors, $customer_address_err);
    }

    if(empty($customer_phone)){
        $customer_phone_err = "Please type in a phone number for the customer";
        array_push($errors, $customer_phone_err);
    }

    if(empty($movie_name)){
        $movie_name_err = "Please type in the name of the movie";
        array_push($errors, $movie_name_err);
    }

    if(empty($date_rented)){
        $date_rented_err = "Date rented field cannot be empty";
        array_push($errors, $date_rented_err);
    }

    if(empty($return_date)){
        $return_date_err = "Return Date field cannot be empty";
        array_push($errors, $return_date_err);
    }

    if(empty($customer_name_err)){
        $sql = "select customer_name, customer_phone, movie_name from customer_info where customer_name = :customer_name and movie_name = :movie_name and customer_phone = :customer_phone and customer_status = 0";
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":customer_name", $customer_name, PDO::PARAM_STR);
            $stmt->bindParam(":customer_phone", $customer_phone, PDO::PARAM_INT);
            $stmt->bindParam(":movie_name", $movie_name, PDO::PARAM_STR);
            if($stmt->execute()){
                $count = $stmt->rowCount();
                if($count > 0){
                    $customer_name_err = "Sorry, this user already exist with this movie name";
                    array_push($errors, $customer_name_err);
                }
            }
        }
    }

    $date1 = date_create($date_rented);
    $date2 = date_create($return_date);
    if($date1 > $date2){
        $date_error = "Your return date must be atleast a day after the collection date";
        array_push($errors, $date_error);
    }
    //print_r(date_diff($date2, $date1));
    //return false;
    //$date_error = date_diff($date1, $date2);


    foreach($errors as $error){
        echo $error."<br>";
        return false;
    }


    if(empty($customer_name_err) and empty($customer_address_err) and empty($customer_phone_err) and empty($movie_name_err) and empty($date_rented_err) and empty($return_date_err)){
        $query = "insert into customer_info(customer_name, customer_address, customer_phone, movie_name, date_rented, return_date, customer_status) values (:customer_name, :customer_address, :customer_phone, :movie_name, :date_rented, :return_date, 0)";
        if($stmt = $pdo->prepare($query)){
            $stmt->bindParam(":customer_name", $customer_name, PDO::PARAM_STR);
            $stmt->bindParam(":customer_address", $customer_address, PDO::PARAM_STR);
            $stmt->bindParam(":customer_phone", $customer_phone);
            $stmt->bindParam(":movie_name", $movie_name, PDO::PARAM_STR);
            $stmt->bindParam(":date_rented", $date_rented);
            $stmt->bindParam(":return_date", $return_date);
            if($stmt->execute()){
            echo "Customer record successfully added";
                
            } else {
                
                echo "something went wrong";
            }
        }
    }

   

}

?>