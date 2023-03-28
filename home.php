<!-- HCI Project: Draft My Schedule -->
<!-- Home -->

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <center>
    <div class="topnav">
        <a class="active" href="home.php">Home</a>
        <a href="myprofile.php">My Profile</a>
        <a href="builddraft.php">Build Draft</a>
        <a href="myschedule.php">My Schedule</a>
        <a href="mydrafts.php">My Drafts</a>
        <a href="signout.php">Sign Out</a>
        <img src="images/logo.png" class="logo" alt="logo">
    </div>
    </center>
    <div class="content">
        <h1>Welcome Amir!</h1>
        <div class="card">
            <p class="purple"><strong>My Faculty:</strong> Faculty of Science</p>
            <p class="purple"><strong>My Program:</strong> Honours Specialization in Computer Science</p>
        </div>
        <h1>View Academic Standing Status</h1>
        <div>
            <form method="post">
                <div class="selectdiv">
                    <label for="faculty" class="purple"><strong>Please select a faculty:</strong></label>
                    <select class="dropdown" name="faculty" id="faculty">
                        <option value="science">Science</option>
                        <option value="arts">Arts and Humanities</option>
                        <option value="eng">Engineering</option>
                    </select>
                </div>
                <div class="selectdiv">
                    <label for="module" class="purple"><strong>Please select a module:</strong></label>
                    <select class="dropdown" name="module" id="module">
                        <option value="hs_cs">Honours Specialization in Computer Science</option>
                        <option value="saab">Honours Specialization in Biology</option>
                    </select>
                </div>
                <br>
                <input type="submit" name="View" value="View">
            </form>
        </div>
        <br>
        <?php
            if (isset($_POST['View'])) {
                echo "hello";
                echo "<div><img class='status' src='images/home_hs_cs.png' alt='status'></div>";
                echo "hello";
            }
        ?>
    </div>
</body>
</html>