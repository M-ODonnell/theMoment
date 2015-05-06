<?php
    require_once('authenticate.php');
    require_once('header.php');
?>


<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <div class="row">
        <div class="u-full-width">
            <div class="white">
                <!-- Put Content Here
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->

                <h2>Customize Your Tracker</h2>
                <p>
                    Change what is visible in the tracking settings. Check all of the emotions you want to track.
                </p>

                    <table>
                        <tr>
                            <th>
                                <input type="checkbox" name="toTrack" value="depressed" checked="checked"/>Depressed<br />
                                <input type="checkbox" name="toTrack" value="unhappy" />Unhappy<br />
                                <input type="checkbox" name="toTrack" value="anxious" checked="checked"/>Anxious<br />
                                <input type="checkbox" name="toTrack" value="stressed" checked="checked"/>Stressed<br />
                                <input type="checkbox" name="toTrack" value="negative" />Negative<br />
                                <input type="checkbox" name="toTrack" value="mad" checked="checked"/>Mad<br />
                                <input type="checkbox" name="toTrack" value="frustrated" checked="checked"/>Frustrated<br />
                            </th>
                            <th>
                                <input type="checkbox" name="toTrack" value="irritable" />Irritable<br />
                                <input type="checkbox" name="toTrack" value="abandoned" />Abandoned<br />
                                <input type="checkbox" name="toTrack" value="lonely" checked="checked"/>Lonely<br />
                                <input type="checkbox" name="toTrack" value="hopeless" />Hopeless<br />
                                <input type="checkbox" name="toTrack" value="empty" />Empty<br />
                                <input type="checkbox" name="toTrack" value="distant" />Distant<br />
                                <input type="checkbox" name="toTrack" value="embarrassed" />Embarrassed<br />
                            </th>
                            <th>
                                <input type="checkbox" name="toTrack" value="afraid" checked="checked"/>Afraid<br />
                                <input type="checkbox" name="toTrack" value="scattered" />Scattered<br />
                                <input type="checkbox" name="toTrack" value="paranoid" checked="checked"/>Paranoid<br />
                                <input type="checkbox" name="toTrack" value="seeingThings" checked="checked"/>Seeing Things<br />
                                <input type="checkbox" name="toTrack" value="hearingThings" checked="checked"/>Hearing Things<br />
                                <input type="checkbox" name="toTrack" value="lowSelfEsteem" />Low Self Esteem<br />
                                <input type="checkbox" name="toTrack" value="unappreciated" />Unappreciated<br />
                            </th>
                            <th>
                                <input type="checkbox" name="toTrack" value="invisible" />Invisible<br />
                                <input type="checkbox" name="toTrack" value="offended" />Offended<br />
                                <input type="checkbox" name="toTrack" value="substanceUse" checked="checked"/>Substance Use<br />
                                <input type="checkbox" name="toTrack" value="alcoholUse" checked="checked"/>Alcohol Use<br />
                                <input type="checkbox" name="toTrack" value="selfHarm" />Self Harm<br />
                                <input type="checkbox" name="toTrack" value="suicidalThoughts" checked="checked"/>Suicidal Thoughts<br />
                            </th>


                        </tr>
                    </table>

                <h3>Edit <a href="myprofile.php">My Profile</a></h3>
                <h3>View <a href="myreport.php">My Report</a></h3>




            </div>
        </div>
    </div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php require_once('footer.php') ?>

