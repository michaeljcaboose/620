<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Milestone 4</title>
    <link href="normalize.css" type="text/css" rel="stylesheet" />
    <link href="milestone.css" type="text/css" rel="stylesheet" />
</head>
    <body>
    <div class="navigation">
        <?php include("templates/nav.html"); ?>
    </div>
    <div class="hero">
        <h1>Milestone 4 - Lo-Fi Prototype</h1>
    </div>
    <div class="milestone">
        <h2>Generate a Lo-Fi Prototype of the Munchuria App</h2>
        <img src="media/images/milestone4/flowchart-header-min.png" alt="Flow Chart Header" />
        <div class="milestone-copy">

            <div class="milestone-item">
                <h3>Lo-Fi Diagram</h3>
                <figure>
                    <img src="media/images/milestone4/Lo-Fi-Prototype-01-min.png" alt="LoFi Diagram"/>
                    <figcaption>Our final Lo-Fi Diagram<a href="media/images/milestone4/Lo-Fi-Prototype-01.png">Click here for the full-res photo</a> </figcaption>
                </figure>
            </div>

            <div class="milestone-item">
                <h3>Schedule</h3>
                <div>
                    <h4>October 24th, 2017</h4>

                    <p>The group met up at James Booth Hall to get started with Milestone 4. We started by building the storyboard. We set the scenario as following:
                    </p>
                    <ul>
                        <li>A party of 5 people are deciding which restaurant to go to or order from</li>
                        <li>Discussion in person was not yielding good results.</li>
                        <li>The party turns to the app to help making a decision.</li>
                    </ul>
                    <p>We then build a flow of action from start to finish. The followings are some iterations with the
                        final picture as the version we were comfortable with.
                    </p>
                    <img src="media/images/milestone4/header-min-min.png" alt="Max working on Flow Chart" />
                    <p>We then came up with the roles and grouped the subjects to those roles. (STEP 1)</p>
                    <ol>
                        <li>For the person who generated the voting session:</li>
                        <li>They start a voting session, which will generaate a unique QR code, PIN, and URL for the voting session.</li>
                        <li>The QR code/PIN/URL are then shared with the group for voting.</li>
                        <li>The preferences are input and submit to the app.</li>
                        <li>The app will wait for all the preferences to come in in order to select restaurants for the vote.</li>
                        <li>Once all the preferences are submitted, the app will generated a selection of restaurants and send that to all participants to vote.</li>
                        <li>All participants select all the choices that they are comfortable with and submit their vote.</li>
                        <li>If after a certain amount of time, not all the votes are submitted, the app will remind those who has not done so.</li>
                        <li>Once all the preferences are submitted, the app will pick the majority vote and send the result to all participants.</li>
                        <li>The participants then can proceed to see the customized menu based on their preferences and vote, and select their order.</li>
                        <li>If there is no majority vote, the app will select a different set of restaurants based on the preferences and the vote results.
                            Then the app will send out the selection to all the participants for another round of vote.</li>
                    </ol>
                    <figure>
                        <img src="media/images/milestone4/flowchart-min-min.png" alt="Flowchart" />
                        <figcaption>Original Marker Flowchart <a href="media/images/milestone4/flowchart-full.png">Click here for the full-res photo</a></figcaption>
                    </figure>
                    <p>We then listed out the different preferences that we need to give to the users.
                        The list is at the top right of the whiteboard in the picture.
                    </p>
                    <p>When we agreed on the flow of action, we define the different components of the apps, by using
                        red marker to show what actions are controlled by which components. After some deliberation,
                        the above picture is what we agreed upon. The components that we decided were needed for this
                        app were:
                    </p>
                    <ul>
                        <li>Session generator</li>
                        <li>QR reader</li>
                        <li>Database</li>
                        <li>Blackbox</li>
                        <li>Vote sender</li>
                        <li>Vote handler</li>
                        <li>Vote counter/timer</li>
                        <li>Vote checker</li>
                        <li>Reminder sender</li>
                        <li>Menu display</li>
                        <li>Order selection</li>
                        <li>Order display</li>
                        <li>Session terminator</li>
                    </ul>
                    <p>The meeting ended at 8PM. We were each assigned to create UIs for the flow for as many screens
                        as we interpret from the storyboard. We decided that all the screen will be in portrait mode.
                    </p>
                </div>

                <div>
                    <h4>October 26th, 2017</h4>
                    <p>
                        We met at James Booth Hall again. We each presented our version of the UIs and discussed the differences.
                        We edited the storyboard to add a few more interactions and components which we believe were
                        needed for the app. The updated storyboard is the following image.
                    </p>
                    <img />

                    <p>We added the following interaction in between interaction #5 and #6 in the previous interaction list:</p>
                    <blockquote>If after a certain amount of time, not all the preferences are submitted, the app will remind those who has not done so. </blockquote>
                    <p>As shown, we added the following component to the storyboard:</p>
                    <ol>
                        <li>Preference sender</li>
                        <li>Preference handler</li>
                        <li>Preference counter/timer</li>
                    </ol>
                    <p>The following pictures are the final version of the UIs.</p>
                    <figure>
                        <img src="media/images/milestone4/lofi1-min-min.png" alt="Lo Fi 1"/>
                        <figcaption>Lo-Fi Part 1 <a href="media/images/milestone4/lofi1-full.png">Click here for the full-res photo</a></figcaption>
                    </figure>
                    <figure>
                        <img src="media/images/milestone4/lofi2-min-min.png" alt="Lo Fi 2"/>
                        <figcaption>Lo-Fi Part 2 <a href="media/images/milestone4/lofi2-full.png">Click here for the full-res photo</a></figcaption>
                    </figure>
                    <figure>
                        <img src="media/images/milestone4/lofi3-min-min.png" alt="Lo Fi 3"/>
                        <figcaption>Lo-Fi Part 3 <a href="media/images/milestone4/lofi3-full.png">Click here for the full-res photo</a></figcaption>
                    </figure>
                </div>


            </div>

        </div>
    </div>
    </body>
</html>