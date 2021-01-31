<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/P1.css">
    <title>KIT - Register</title>
</head>

<body>
    <header id="main-header">
        <div class="headings">
            <h1 class="bg-header">King Institute of Technology (<span class="bg-header-abrv">KIT</span>)</h1>
        </div>
    </header>
    <main id="main-content">
        <div class="title">
            <h1 class="registration-form-title">Student Registration Form</h1>
            <p class="instructions">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente enim debitis commodi deserunt fugiat quo ut nesciunt voluptate, architecto ipsam.
            </p>
        </div>
        <form action="P1-form.php" method="post">
            <div class="student-details">
                <div class="student-details-container">
                    <div class="student-details-title">
                        <h1>1. &nbsp; Student Information</h1>
                    </div>
                    <div class="student-details-input">

                        <div class="input-fields">
                            <input type="text" autocomplete="off" name="first-name" required placeholder="First Name">

                            <input type="text" autocomplete="off" name="middle-name" required placeholder="Middle Name">

                            <input type="text" autocomplete="off" name="last-name" required placeholder="Last Name">
                        </div>
                        <div class="input-options">
                            <div class="radios">
                                <label for="gender">Gender</label>
                                <input type="radio" name="gender-list" value="male" required> Male
                                <input type="radio" name="gender-list" value="female" required> Female
                            </div>
                            <div class="datepicker">
                                <label for="date-of-birth" class="dob">Date of birth</label>
                                <input type="date" name="date-of-birth" id="date-of-birth" required>
                            </div>
                            <div class="citizenship">
                                <input type="text" name="citizenship" id="" autocomplete="off" placeholder="Citizenship" required>
                            </div>
                        </div>
                        <div class="course">
                            <label for="course">Course</label>
                            <input type="radio" name="course-list" value="cs-se" required> CS-SE
                            <input type="radio" name="course-list" value="bsit-agd" required> BSIT-AGD
                            <input type="radio" name="course-list" value="bsit-da" required> BSIT-DA
                            <input type="radio" name="course-list" value="bsit-smba" required> BSIT-SMBA
                            <input type="radio" name="course-list" value="bsit-wma" required> BSIT-WMA
                        </div>
                        <div class="input-special">
                            <h3 class="special-input"><span class="asterisk">*</span> If you have (a) sibling(s) enrolled in this institution, please list them down below</h3>
                            <input type="text" name="siblings" id="sibling-field">
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
                        <div class="input-fields">
                            <input type="text" autocomplete="off" name="prev-school" required placeholder="Name of Previous School">
                            <label for="year-of-graduation" class="yog">Year of Graduation</label>
                            <input type="date" name="year-of-graduation" id="yog" required>

                        </div>
                        <div class="input-options">
                            <div class="checkboxes">
                                <label for="gender">Teaching language</label>
                                <input type="radio" name="language-list" value="english" required> English
                                <input type="radio" name="language-list" value="tagalog" required> Tagalog
                            </div>
                            <div class="grades">
                                <label for="grade">Grade of previous school</label>
                                <input type="number" name="grade" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="input-special">
                            <h3 class="special-input"><span class="asterisk">*</span>Plese indicate any academic honors, if applicable</h3>
                            <input type="text" name="honors" id="sibling-field">
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
                            <input type="text" name="medical" id="medical-field" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>

            <div class="submit-button">
                <input type="submit" value="Submit" id="button">
            </div>
        </form>

        <footer id="main-footer">
            <h3>&copy; 2021, Charles King</h3>
        </footer>

    </main>
</body>

</html>