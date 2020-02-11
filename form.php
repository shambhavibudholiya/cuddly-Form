
<?php
$connection = mysqli_connect("localhost","root","","form");
print_r($_REQUEST);
if($_POST){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$sql="insert into form_one (first_name,last_name,gender) values ('$firstname','$lastname','$gender')";
$result=mysqli_query($connection,$sql);
}
?>
<html>
    <head>
        <title>
         Form
        </title>
        <style>
            .btn {
              border: none;
              color:rgb(31, 30, 32);
              padding: 14px 28px;
              font-size: 16px;
              cursor: pointer;
            }
        </style>
    </head>
    <body>
        <form method= "POST" action="<?= $_SERVER['PHP_SELF']?>" >
            First name:<br>
            <input type="text" name="firstname"><br>
            Last name:<br>
            <input type="text" name="lastname"><br>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other<br>
            <button class="btn submit" name="submit">Submit</button>
        </form>
    </body>
</html>