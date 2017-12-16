<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Milestone 5</title>
    <link href="normalize.css" type="text/css" rel="stylesheet" />
    <link href="milestone.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="navigation">
    <?php include("templates/nav.html"); ?>
</div>
<div class="hero">
    <h1>Milestone 5 - Hi-Fi Prototype</h1>
</div>
<div class="milestone">
    <h2>Generate a Hi-Fi Prototype of the Munchuria App</h2>
    <img src="media/images/milestone5/bigscreen-min.jpg" alt="Flow Chart Header" />
    <div class="milestone-copy">

        <div class="milestone-item">
            <h3>Hi-Fi Diagram</h3>
            <p>Our Hi-Fi flow and example can be found by following <a href="https://invis.io/5KERKFMJ6">this link</a> to our InVision example instance.</p>
            <p><a href="https://invis.io/5KERKFMJ6">InVision Example</a></p>
            <div>
                <h4>Note about the Flow Diagram</h4>
                <p>The flow diagram depicts how a user would navigate through the app. The blue lines show where the interaction with button or certain element of each screen would lead to. If there is no connecting blue line between two screens, that means that the screen on the left can only naturally progress to the screen on the immediate right of it through “CONTINUE” or other interactions that we presume as intuitive. The back button also always move the user back to the screen on the immediate left unless indicated otherwise.
                </p>
                <p>It can be seen that some screens displayed here are not the same size. The smaller screens are representations of the possible options from the screen on their immediate left. </p>
                <p>You may notice that there are three separate portions to the flow. The reason that we divided our diagram into three sections is that there are breaks within the user interaction in our app.
                    The first one being the “SETUP AND PREFERENCE” sectio - this is where the user would start a session, set or select their preferences, and submit to the app.
                    The second section is the “VOTE”. This is where they vote for the restaurants. This section can be accessed through the “HISTORY” button or through a notification from the app that the vote is ready. Possible handover from the screen when preferences have been received is also possible in a live setting.
                    The third section is the “RESULT”. This is where they see the result of the vote. This section can be accessed through the “HISTORY” button or through a notification from the app that the result is ready.
                </p>
            </div>
            <div>
                <h4>Note about the InVision Prototype</h4>
                <figure>
                    <img src="media/images/milestone5/flow-min.png" alt="Flowchart" />
                    <figcaption>Hi-Fi Flowchart <a href="media/images/milestone5/flow.png">Click here for the full-res photo</a></figcaption>
                </figure>
                <p>We have created an interactive prototype based on the hi-fi prototype using Invision. However, due to the limited capabilities of Invision, as well as the use of static interfaces, some of the interactions are not shown in Invision prototype due to the flow of our application.</p>
                <p>Please refer to the flow diagram above for the complete set of interactions.</p>
                <p>Please refer to the following list for developer’s notes for certain interactions within Invision prototype.
                </p>
                <ul>
                    <li>Click and hold “SHIFT” to make all the interactive hotspots visible.</li>
                    <li>If you access the prototype on a mobile device, tap anywhere on the screen, and all the hotspots will be visible.</li>
                    <li>Some details on the screen may be incorrect due to screens being static and are used for different scenarios.</li>
                    <li>All input are preset. When you click on an input field, it will auto-populated.</li>
                    <li>Selection is a list is also pre-selected. Click “SHIFT” to see which is the pre-selected choice.</li>
                    <li>When you access the PREFERENCES screen through HISTORY button, clicking the BACK button on PREFERENCES screen will not go to the correct screen, which is HISTORY screen. Instead, it will go to PLAN screen, which is the main flow of the app. We could not fix this issue due to the branch being too complicated to replicated for this scenario.
                    </li>
                    <li>Since the expected experience on the app is not continuous, we had some difficulties showing the entire flow in a continuous form. To combat that, here are how to access the different parts of the app experience:
                        <ul>
                            <li>Start a session: from the beginning</li>
                            <li>Select/set/submit a preference: from the beginning or through HISTORY</li>
                            <li>Vote: through HISTORY</li>
                            <li>View result: through HISTORY</li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>

        <div class="milestone-item">
            <h3>Schedule</h3>
            <div>
                <h4>October 27th - November 5th, 2017</h4>
                <p>We decided to have a short break after Milestone 4 submission since we believed that we
                    deserved a break from the project and from each other to have some breathing room and focus
                    on other classes and lives. We also believe that taking a short break would give us some
                    distance from the work in order to get a better judgement of it later on.
                </p>
            </div>
            <div>
                <h4>November 6th, 2017</h4>
                <p>Team meeting for lo-fi prototype review.</p>
                <p>We had a meeting to take another look at our lo-fi to see what
                    we will do for Milestone 5. We have decided on several logos and
                    a color template for the app. The template is called “Fast Food”
                    and it can be found at <a href="http://www.color-hex.com/color-palette/15880.">http://www.color-hex.com/color-palette/15880</a>.
                </p>
                <figure>
                    <img src="media/images/milestone5/logos.png" alt="Logos" />
                    <figcaption>Applicaiton logo ideas</a></figcaption>
                </figure>
                <p></p>
            </div>

            <div>
                <h4>November 10th, 2017</h4>
                <p>Team meeting. Assign team members to tasks.</p>
                <p>We met up to review the mid-fi prototype and the flow of the app. Once, everyone understood, we assigned different team members with different tasks.
                    Aish, Matthew, and Sovantharith were tasked with getting user feedbacks, one for each team member. Peter was tasked with app benchmark.
                </p>
            </div>

            <div>
                <h4>November 11th, 2017</h4>
                <p>Start user feedback and app benchmark</p>
            </div>

            <div>
                <figure>
                    <img src="media/images/milestone5/aish-testing.jpg" alt="Lo-Fi Testing" />
                    <figcaption>Aish doing follow-up interviews for the Lo-Fi prototype</a></figcaption>
                </figure>
                <h4>November 15th, 2017</h4>
                <p>The team has considered several prototype software for the hi-fi prototype. Sketch was one of the options.
                    Fortunately, there was a introductory Sketch workshop held in Golisano. Matthew and Sovantharith attended the
                    workshop. We concluded that Sketch was very likely the chosen application due to its simplicity and similar
                    use to XCode, which Matthew has experience with.
                </p>
            </div>
            <div>
                <h4>November 16th, 2017</h4>
                <p>Unfortunately, Sketch is only available on Mac. Since Aish (the design lead) does not own a Mac computer,
                    we decided to use Adobe Illustrator for this prototype since Aish has the most experience with that.
                    Aish started developing the 1st version of the hi-fi prototype.
                </p>
            </div>
            <div>
                <h4>November 17th, 2017</h4>
                <p>User feedback and app benchmark due. Matthew, Sovantharith, and Peter submitted their findings to the team Google Drive.
                </p>
            </div>
            <div>
                <h4>November 20th, 2017</h4>
                <p>Hi-Fi version 1 completed and ready for user testing, screens developed along with a rough layout for reference which conveys how each button links to the other screen. Some groups of screens denote the same screen with changed elements (for prototype development purpose) Some original concepts were explored to denote data in a visual manner.</p>
            </div>
            <div>
                <h4>November 21st, 2017</h4>
                <p>Start collecting user feedbacks for Hi-Fi version 1. Aish, Matthew, and Sovantharith were tasked with collecting user feedbacks to be submitted during the Thanksgiving break.
                </p>
            </div>
            <div>
                <h4>November 22nd - November 26th, 2017</h4>
                <p>Thanksgiving break</p>
            </div>
            <div>
                <h4>November 27th, 2017</h4>
                <figure>
                    <img src="media/images/milestone5/bigscreen-min.jpg" alt="Going over Lo-Fi Testing" />
                    <figcaption>Group reviewing our Mid-Fi design and flowchart</a></figcaption>
                </figure>
                <p>Review user feedback</p>
                <p>The team reviewed the collected feedbacks and made notes of changes that needed to me applied to the prototype.
                </p>
                <ul>Some changes were:
                    <li>A uniformity of buttons through screens - Most users had complained of being lost with the navigation buttons, either these buttons jumped places for certain screens or they weren’t visible with other content for others.</li>
                    <li>Solid colors in buttons to separate them from other text - one of the users considered the boxes around the text to be a mere highlight</li>
                    <li>Splitting the preferences to individual screens to reduce the visual noise that might influence decision making.</li>
                    <li>Since certain screens were repetitive and were causing confusing loops that would be hard to prototype, these were removed or merged with existing.</li>
                    <li>The fonts needed to follow a hierarchy - the sizes had been too close to each other and small.
                    </li>
                </ul>
            </div>
            <div>
                <h4>November 28th, 2017</h4>
                <p>Start Hi-Fi version 2</p>
            </div>
            <div>
                <h4>November 29th, 2017</h4>
                <p>Finalized version 2 and start Invision prototype. Peter and Sovantharith were tasked with creating the interactive Invision prototype.
                </p>
            </div>
            <div>
                <h4>November 30th, 2017</h4>
                <p>Finalized write-up and Invision prototype</p>
                <p>All the members went through the design flow, the Invision prototype, and the write-up to ensure completeness and accuracy.
                </p>
            </div>
            <div>
                <h4>December 1st, 2017</h4>
                <p>Matthew put together the write-up and supplemental materials onto the website.</p>
            </div>


        </div>
        <div class="milestone-item">
            <h3>Lessons Learned</h3>
            <ul>
                <li>It is a lot harder than we thought to create a prototype with elements that are consistent and intuitive.</li>
                <li>User feedbacks give a lot of insight to the design and how the outsiders interpretes the tasks and our design.</li>
                <li>InVision is an easy software to use for an interactive prototype. However, its capabilities are very limited,
                    especially for an app like ours, where the flows are not continuous and contain many branches.</li>
                <li>It brings in us a newfound appreciation for existing apps which are crafted with so much detail in mind for a certain task. Even these apps show up with some bug or flaw every now and then, this only demonstrates the ever-going pursuit of perfectly modelling real world scenarios into an interactive experience between a human and a machine.</li>
            </ul>
        </div>

    </div>
</div>
</body>
</html>