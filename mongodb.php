<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDC10 - Fetch Data from MongoDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="m-3 p-2">
        <div class="card mb-4 shadow">
            <div class="card-header">
                Students
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Birthdate</th>
                            <th>Address</th>
                            <th>Program</th>
                            <th>Contact Number</th>
                            <th>Emergency Contact</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($result as $student) { ?>
                        <tbody>
                            <tr class="fst-normal">
                                <th scope="row"><?php echo $student['studentId']; ?></th>
                                <th><?php echo $student['firstName']; ?></th>
                                <th><?php echo $student['lastName']; ?></th>
                                <th><?php echo $student['birthdate']; ?></th>
                                <th><?php echo $student['address']; ?></th>
                                <th><?php echo $student['program']; ?></th>
                                <th><?php echo $student['contactNumber']; ?></th>
                                <th><?php echo $student['emergencyContact']; ?></th>
                            </tr>
                        </tbody>

                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>