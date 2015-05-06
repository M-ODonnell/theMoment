<?php
    require_once('authenticate.php');
    require_once('header.php');
    require_once("connectvars.php");
?>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <div class="row">
        <div class="u-full-width">
            <div class="white">
                <!-- Put Content Here
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<h2>How Are You Feeling Today?</h2>
<h3>Keep Track of Your Emotional Well-being</h3>
                <!-- CONNECT TO SERVER
                ACTION POINT TO SELF (CONFIRMATION - OR ERROR - PAGE, LINK TO "Track another emotion" and "View my report"
                ----------------------------------------------------------->
<?php
try{
    $dbc = new PDO('mysql:host=localhost;dbname=[DATABASE NAME HERE]', DB_USER, DB_PASSWORD) or die("error");
    $dbc->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbc->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    //$query = "SELECT * FROM moments ORDER BY moment_date";
    //$stmt = $dbh->prepare($query);
    //$stmt->execute();
//while($row = $stmt->fetch()){
  //  echo '<option value="'. $row['moment_date']. $row['moment_time'] . $row['symptom'] .'">' . $row['cause'] . $row['severity'] . $row['place']. $row['duration']. $row['coping']. $row['thoughts'] .'</option>';
//}
$dbc = null;
}
catch(PDOException $e){
    echo 'Error: ' . $e->getMessage() . '<br/>';
    die();
}


if (isset($_POST['submitTrack'])) {
    echo "<p>Thank you for tracking your current emotions. If you feel like you require immediate medical assistance, please refer to a local medical professional (See <a href='coping.php#help_contact'>Help</a>).</p>";
    echo "<p><a href='emotrack.php'>Track Another Emotion</a></p>";
    echo "<p><a href='myreport.php'>View your current report</a></p>";
}
else { ?>
        <form action="<?php echo 'emotrack.php'//echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="q1">What's Wrong?</label>
        <select name="q1">
            <option value="anxious">Anxious</option>
            <option value="stressed">Stressed</option>
            <option value="mad">Mad</option>
            <option value="frustrated">Frustrated</option>
            <option value="lonely">Lonely</option>
            <option value="depressed">Depressed</option>
            <option value="afraid">Afraid</option>
            <option value="paranoid">Paranoid</option>
            <option value="seeingThings">Seeing Things</option>
            <option value="hearingThings">Hearing Things</option>
            <option value="substanceUse">Substance Use</option>
            <option value="alcoholUse">Alcohol Use</option>
            <option value="suicidal">Suicidal Thoughts</option>
            <option value="other">Other</option>
        </select>
    <?php
            // NEEDS AN "ON CHANGE" FUNCTION ------------------------------------------------------------
        if ('q1' == 'other') {
            echo "Please specify: <input type='text' name='q1other' /> <br /><br />";
        } else {
            echo "<br /><br />";
        }
    ?>

        <label for="q2">Rate Your Level of Emotion:</label>
        <div id="moods">
            <ul>
                <li><img src="images/mood01.png" alt="Happy" /></li>
                <li><img src="images/mood02.png" alt="Content" /></li>
                <li><img src="images/mood03.png" alt="Ok" /></li>
                <li><img src="images/mood04.png" alt="Depressed" /></li>
                <li><img src="images/mood05.png" alt="Sad" /></li>
            </ul>
        </div>
        <input type="range" name="q2" min="1" max="10" id="q2" />
        <br /><br />


        <label for="q3">Trigger:</label>
        <select name="q3">
            <option value="self">Self</option>
            <option value="family">Family</option>
            <option value="work">Work</option>
            <option value="school">School</option>
            <option value="friends">Friends</option>
            <option value="relationships">Relationships</option>
            <option value="other">Other</option>
        </select>
    <?php
        if ('q3' == 'other') {
            echo "Please specify: <input type='text' name='q3other' /> <br /><br />";
        } else {
            echo "<br /><br />";
        }
    ?>

        <label for="q4">Date:</label>
        <input type="date" name="q4" />
        <br /><br />

        <label for="q5">Current Time:</label>
        <input type="time" name="q5" />
        <br /><br />

        <label for="q6">Duration:</label>
        <select name="q6">
            <option value="allDay">All Day</option>
            <option value="momentary">Momentary</option>
            <option value="halfHour">Half an Hour</option>
            <option value="oneHour">One Hour</option>
            <option value="twoHours">Two Hours</option>
            <option value="threeHours">Three Hours</option>
            <option value="fourHours">Four Hours</option>
            <option value="fiveHours">Five Hours</option>
            <option value="sixHours">Six Hours</option>
            <option value="sevenHours">Seven Hours</option>
            <option value="eightHours">Eight Hours</option>
            <option value="other">Other</option>
        </select>
        <?php
        if ('q6' == 'other') {
            echo "Please specify: <input type='text' name='q6other' /> <br /><br />";
        } else {
            echo "<br /><br />";
        }
        ?>

        <label for="q7">Place:</label>
        <select name="q7">
            <option value="home">Home</option>
            <option value="school">School</option>
            <option value="work">Work</option>
            <option value="other">Other</option>
        </select>
        <?php
        if ('q7' == 'other') {
            echo "Please specify: <input type='text' name='q7other' /> <br /><br />";
        } else {
            echo "<br /><br />";
        }
        ?>

        <label for="q8">Coping Strategies:</label>
        <input type="text" name="q8" maxlength="40" />
        <br /><br />

        <label for="q9">Any Other Thoughts or Information:</label>
        <textarea cols="30" rows="2" maxlength="350"></textarea>
        <br /><br />

        <input type="submit" name="submitTrack" value="Track This Information" />

    </form>
<?php
}
?>




            </div>
        </div>
    </div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php require_once('footer.php') ?>

