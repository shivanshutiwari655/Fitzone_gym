<?php
// Database connection details
$servername = "localhost";
$username = "root";         
$password = "";            
$dbname = "gym";         

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Conection is successful !";
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $name =$_POST['name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $address =$_POST['adress'];
    $email =$_POST['email'];
    $contact =$_POST['age'];
    $height =$_POST['height'];
    $weight =$_POST['weight'];
    $country =$_POST['country'];
    $state = $_POST['state'];


    // Prepare the SQL query to insert the data
    $sql = "INSERT INTO 'gym.ragister' (name, father_name, mother_name, dob, address, email, contact, height, weight, country, state,) 
            VALUES ('$name', '$father_name', '$mother_name', '$dob', '$address', '$email', '$contact', '$height', '$weight', '$country', '$state')";

    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo $sql;

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ragister</title>
</head>
<body>
    <header>
        <div data-include="header.html"></div>
    </header>

    <div class="ragister">
        <div class="head">
            <h3>ragister for Join</h3>
        </div>


        <form action="index.html" method="post">
        <main style="margin-left: 200px;">

            <label for="UserName"> Your Name :</label>
                <input type="text" name="name" id="name" placeholder="enter the name" value="" autofocus >
            <label for="Father Name">Father Name :</label>
                <input type="text" name="father_name" id="father_name" placeholder="enter the father name" value="">
            <label for="Mother Name">Mother Name :</label>
                <input type="text" name="mother_name" id="mother_name" value="" placeholder="ente the mother name" >
            <label for="Date of birth">Date Of birth :</label>
                <input type="date" name="dob" id="dob" value="" placeholder="date of birth">
            <label for="Address"> Address :</label>
                <input type="text" value="" name="adress" id="address" placeholder="enter the address" required>
            <label for="Email">Email : </label>
                <input type="email" name="email" id="email" value="" placeholder="enter the email id" required>
            <label for="Contect Number">Conect No. :</label>
                <input type="number" value="" name="age" id="age" placeholder="enter the contect number " maxlength="10" minlength="10">
            <label for="Height">Height :</label>
                <input type="number" value="" name="height" id="height" placeholder="enter your hight in metar">
            <label for="Weight">Weight :</label>
                <input type="number" value="" name="weight" id="weight" placeholder="enter the your weight in kg"><br>
            
            <label for="Country">Country</label>
            <select name="country" id="country" >
                <optgroup label="asia">
                <option value="i">india</option>
                <option value="s">srilanka</option>
                <option value="p">pakistan</option>
                <option value="m">maldeep</option>
                <option value="c">chaina</option>
                </optgroup>
                <option value="u">usa</option>
                <option value="a">austreliya</option>
                <option value="ingland">ingland</option>
            </select><br><br>

            <label for="State">State</label>
            <select name="state" id="state">
                <option value="mp">madhya pradesh</option>
                <option value="up">utter pradesh</option>
                <option value="d">delhi</option>
                <option value="j">jharkhand</option>
                <option value="b">bihar</option>
                <option value="i">india</option>
                <option value="p">panjab</option>
                <option value="k">karnatak</option>
                <option value="m">manipur</option>
                <option value="c">chandigad</option>
                <option value="i">india</option>
                <option value="s">sikkim</option>
                <option value="ap">arunachal pradesh</option>
                <option value="m">maharast</option>
                <option value="h">hariyana</option>
            </select><br>
                <label for="photo">Add photo : </label>
            <input type="file" placeholder="upload the photo" required>

            <input style="background-color: rgb(31, 236, 8); height: 50px;width: 150px; color: red;font-size: x-large;margin-left: 100px;" type="submit" value="submit">
            <input style="background-color: rgb(31, 236, 8); height: 50px;width: 150px; color: red;font-size: x-large;margin-left:100px;" type="reset" value="reset">
    
        </form>

        <div id="account">
            <p><strong>Have an account? </strong><a style="color: brown;" href="index.html">Log in</a></p>
        </div>
    </div>

    <footer>
        <div data-include ="footer.html"></div>
    </footer>

    <script src="script.js"></script>
</body>

</html>