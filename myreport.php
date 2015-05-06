<?php
    require_once('authenticate.php');
    require_once('header.php');
    require_once('connectvars.php');
?>


<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <div class="row">
        <div class="u-full-width">
            <div class="white">
                <!-- Put Content Here
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <h2>Report</h2>
                <p>
                    <?php

                    try{
                        $dbc = new PDO('mysql:host=localhost;dbname=[DATABASE NAME HERE]', DB_USER, DB_PASSWORD) or die("error");
                        $dbc->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        $dbc->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                        $query = "SELECT * FROM moments ORDER BY moment_date;";
                        $stmt = $dbc->prepare($query);
                        $stmt->execute();
                        echo "<p></p>";
                        echo "<p><strong>Full Name: </strong></p>";
                        echo "<p><strong>Date of Birth: </strong></p>";
                        echo "<p><strong>Family Physician: </strong></p>";
                        echo "<p><strong>Emergency Contacts: </strong></p>";
                        echo "<p><strong>Current Medications:  </strong><br/>
                        Dosage:<br />
                        Time of day:<br />
                        Set Reminders? <input type='checkbox' name='reminders' value='yes' /> Yes  <input type='checkbox' name='reminders' value='no' checked='checked' />No </p>";


                        echo "<p><em>See below for each of your emotion entries that you have tracked:</em></p>";


                        echo "<table class='u-full-width'><thead><tr>";
                        echo "<th>Date</th><th>Time</th><th>Symptom</th><th>Cause</th><th>Severity</th><th>Place</th><th>Duration</th><th>Coping
Strategies</th><th>Additional thoughts</th></tr></thead>";
                        while($row = $stmt->fetch()){
                            //echo '<option value="'. $row['moment_date']. $row['moment_time'] . $row['symptom'] .'">' . $row['cause'] . $row['severity'] . $row['place']. $row['duration']. $row['coping']. $row['thoughts'] .'</option>';


                            echo "<tbody><tr>";
                                echo "<td>".$row['moment_date']."</td>";
                                echo "<td>".$row['moment_time']."</td>";
                                echo "<td>".$row['symptom']."</td>";
                                echo "<td>".$row['cause']."</td>";
                                echo "<td>".$row['severity']."</td>";
                                echo "<td>".$row['place']."</td>";
                                echo "<td>".$row['duration']."</td>";
                                echo "<td>".$row['coping']."</td>";
                                echo "<td>".$row['thoughts']."</td>";
                            echo "</tr></tbody>";
                        }
                        $dbc = null;
                        echo "</table>";
                    }

                    catch(PDOException $e){
                        echo 'Error: ' . $e->getMessage() . '<br/>';
                        die();
                    }
                        // CONNECT TO DATABASE
                        // QUERY -> SELECT * FROM _________________-
                        // ORDER BY DATE
                        // DISPLAY IN TABLE
                    ?>
                </p>


            </div>
        </div>
    </div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php require_once('footer.php') ?>
