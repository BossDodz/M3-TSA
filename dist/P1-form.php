<?php

$value_arr = array();
$value_arr = $_POST;

/* IMG */
$img_dir = "img/";
$img_name = $img_dir . basename($_FILES['image']['name']);
$uploadSuccess = 1;
$img_file_type = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
$check = getimagesize($_FILES["image"]["tmp_name"]);

move_uploaded_file($_FILES["image"]["tmp_name"], $img_name);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/P1-form.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <title>KIT | Student Form</title>
</head>

<body>
    <main id="main-content">
        <div class="title">
            <h1 class="registration-form-title">Confirm Student Registration Form</h1>
        </div>
        <div class="student-details">
            <div class="student-details-container">
                <div class="student-details-title">
                    <h1>1. &nbsp; Student Information</h1>
                </div>
                <div class="student-details-input">

                    <div class="input-flex">
                        <div class="input-fields">
                            <div class="name-field">
                                <div class="img-container">
                                    <?php echo "<img src='$img_name' class='img'>" ?>
                                </div>
                                <label for="name"><strong>Name: </strong></label><?php echo "<span id='name-span' class='span'>" . $value_arr["last-name"] . ", " . $value_arr["first-name"] . " " . $value_arr["middle-name"] . "</span>"; ?></br>
                                <label for="address"><strong>Address: </strong></label><?php echo "<span id='address-span' class='span'>" . $value_arr["address"] . "</span>"; ?></br>
                                <label for="gender"><strong>Gender: </strong></label><?php echo "<span id='gender-span' class='span'>" . $value_arr["gender-list"] . "</span>"; ?></br>
                                <label for="date-of-birth" class="dob"><strong>Date of birth: </strong></label><?php echo "<span id='dob-span' class='span'>" . $value_arr["date-of-birth"] . "</span>"; ?></br>
                                <label for="citizenship"><strong>Citizenship: </strong></label><?php echo "<span id='citizen-span' class='span'>" . $value_arr["citizenship"] . "</span>"; ?></br>
                                <label for="course"><strong>Selected course: </strong></label><?php echo "<span id='course-span' class='span'>" . $value_arr["course-list"] . "</span>"; ?></br>
                            </div>
                        </div>
                    </div>
                    <div class="input-special">
                        <h3 class="special-input"><span class="asterisk">*</span> If you have (a) sibling(s) enrolled in this institution, please list them down below</h3>
                        <?php echo "<span id='sibling-field' class='span'>" . $value_arr["siblings"] . "</span>"; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="school-information">
            <div class="school-details-container">
                <div class="school-details-title">
                    <h1>2. &nbsp; Previous School Information</h1>
                </div>
                <div class="school-details-input">
                    <div class="input-fields form-input">
                        <label for="pos"><strong>Previous school: </strong></label><?php echo "<span id='school-span' class='span'>" . $value_arr["prev-school"] . "</span>"; ?></br>
                        <label for="year-of-graduation" class="yog"><strong>Year of Graduation</strong></label> <?php echo "<span id='span-yog' class='span'>" . $value_arr["year-of-graduation"] . "</span>"; ?></br>
                        <label for="gender"><strong>Teaching language</strong></label><?php echo "<span id='span-lang' class='span'>" . $value_arr["language-list"] . "</span>"; ?></br>
                        <label for="grade"><strong>Grade of previous school</strong></label><?php echo "<span id='span-lang' class='span'>" . $value_arr["grade"] . "</span>"; ?></br>
                    </div>

                    <div class="input-special">
                        <h3 class="special-input"><span class="asterisk">*</span>Plese indicate any academic honors, if applicable</h3>
                        <?php echo "<span id='sibling-field' class='span'>" . $value_arr["siblings"] . "</span>"; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="medical-information">
            <div class="medical-details-container">
                <div class="medical-details-title">
                    <h1>3. &nbsp; Medical Information</h1>
                </div>
                <div class="medical-details-input">
                    <div class="input-special">
                        <h3 class="special-input"><span class="asterisk">*</span>Plese indicate any recurring medical conditions</h3>
                        <?php echo "<span id='sibling-field' class='span'>" . $value_arr["medical"] . "</span>"; ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>