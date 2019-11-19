<?php
    session_start();
    if($_SESSION['user']){
    }
    else{ 
       header("location:index.php");
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
       $details = $_POST['details'];
       $time = strftime("%X"); //time
       $date = strftime("%B %d, %Y"); //date
       $decision = "no";
   
       $mysqli = mysqli_connect("localhost", "root", ""); //connects to server
       mysqli_select_db($mysqli,"first_db"); //connects to database
       $order = "INSERT INTO list(details, date_posted, time_posted, public) VALUES ('$details','$date','$time','$decision')"; //SQL query
       $result = mysqli_query($mysqli,$order);
       header("location:home.php"); //redirects to home page
       
       //need to figure out how to convert foreach method for my syntax

       /* foreach($_POST["public"] in $each_check) //gets the data from the checkbox
       {
          if($each_check != null){ //checks if checkbox is checked
             $decision = "yes"; // sets the value
          }
       }

       mysqli_query("INSERT INTO list(details, date_posted, time_posted, public) VALUES ('$details','$date','$time','$decision')"); //SQL query
       header("location:home.php");
    }
    else
    {
       header("location:home.php");
    }*/
}
?>