<!DOCTYPE html>
<html>
<head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

input {
    width: 500px;
    height: 45px;
    padding: 8px 12px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    border-radius: 8px;
}

body {
    font-family: 'Poppins', sans-serif;
    background-image: url("health.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container {
    width: 90%;
    max-width: 850px;
    margin: 50px auto;
    padding: 100px 105px;

    background-color: rgba(255, 255, 255, 0.94);

    border-radius: 50px;

    box-shadow: 0 10px 30px rgba(5, 3, 3, 0.2);

    text-align: center;
}

h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 38px;
    font-weight: 700;
    color: #123b63;
    margin-bottom: 40px;
    letter-spacing: 0.5px;
}

h1 i {
    color: #2563EB;
    margin-right: 10px;
}

form strong {
    font-size: 18px;
    font-weight: 600;
    color: #123b63;
}

form > i {
    color: #2563EB;
    margin-right: 7px;
}

button {
    width: 500px;
    height: 50px;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    font-weight: 600;
    border-radius: 8px;
    background-color: #2563EB;
    color: white;
    border: none;
    cursor: pointer;
}

</style>

<title>Hospital Application Form</title>

</head>

<body>

<div class="container">

    <h1>
        <i class="fa-solid fa-heart-pulse"></i>
        Welcome to Our Hospital
    </h1>

    <form method="POST" action="">

        <strong>
            <i class="fa-solid fa-user"></i>
            Patient Name:
        </strong>
        <br>

        <input type="text" name="name">

        <br><br>

        <strong>
            <i class="fa-solid fa-id-card"></i>
            Patient ID:
        </strong>
        <br>

        <input type="text" name="id">

        <br><br>

        <strong>
            <i class="fa-solid fa-calendar-days"></i>
            Appointment Time and Date:
        </strong>
        <br>

        <input type="datetime-local" name="t/d">

        <br><br>

        <strong>
            <i class="fa-solid fa-user-doctor"></i>
            Attending Doctor:
        </strong>
        <br>

        <input type="text" name="doctor">

        <br><br>

        <button type="submit" name="sb">
            <i class="fa-solid fa-paper-plane"></i>
            Submit
        </button>

    </form>

</div>

<?php

$con = mysqli_connect(
    'localhost',
    'root',
    'm1o2i3z4@MOIZ',
    'hospital_data'
);

if (isset($_POST['sb'])) {

    $patient_name = $_POST['name'];
    $patient_id = $_POST['id'];
    $time_and_date = $_POST['t/d'];
    $attending_doctor = $_POST['doctor'];

    $query = "INSERT INTO hospital_foarms
              (patirnt_name, patient_id, time_and_date, attending_doctor)
              VALUES
              ('$patient_name', '$patient_id', '$time_and_date', '$attending_doctor')";

    mysqli_query($con, $query);
}

?>

</body>
</html>