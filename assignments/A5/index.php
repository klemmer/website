<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment 5">
    <title>Intro to HCI: Assignment 5</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../css/hci.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target=".sidenav" data-offset=40>

    <!--
    IntroHCI assignment template
    ------------------
    To create a new assignment:
    1) Write all the HTML as you normally would underneath the #assignment-description div.
    2) Anything that you want to appear in the navbar on the left needs to be enclosed
        in a <div id="unique-id" class="sidenav-anchor">. On page load, hci.js will look up
        anything enclosed in .sidenav-anchor, find the first header (h1-h6) inside it, and add
        it to the navigation pane on the left. Make sure it has a unique div id so that there is something
        to anchor the hyperlink to.
    3) I recommend going with Bootstrap's recommendation and putting any <table class="table"> elements enclosed in a
        <div class="table-responsive">.
    -->


    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../index.html">Intro to HCI</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="../../index.html">Home</a></li>
            <li><a href="../../index.html#calendar">Calendar</a></li>
            <li><a href="../../studio.html">Studio</a></li>
            <li ><a href="../../mobile_app_tips.html">Development Resources</a></li>
            <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logistics <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="../../logistics.html#prereqs">Prerequisites</a></li>
                  <li><a href="../../logistics.html#lab">Lab</a></li>
                  <li><a href="../../logistics.html#grading">Grading</a></li>
                  <li><a href="../../logistics.html#attendance">Attendance</a></li>
                  <li><a href="../../logistics.html#faq">FAQ</a></li>
                </ul>
            </li>
            <li><a href="../../index.html#calendar">Submit work</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://piazza.com/ucsd/winter2015/cogs120/home">Questions(Piazza forum)</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidenav" data-spy="affix">
                    <ul class="nav nav-stacked" id="sidenav-content">
                    </ul>
                </div> <!-- /sidenav -->
            </div> <!-- /col-md-3 -->
            <div class="col-md-9" id="assignment-description">
                <div>
                    <h1>Assignment 5: Skeleton and a plan</h1>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                </div>

                <div id="revisithe" class="sidenav-anchor">
                    <h4>Step 1: Revisit Heuristic Evaluations</h4>
                    <p>Review and write a list of HE violations from the feedback you got last week. Distill the HE results into a list of concrete changes you want to make to your prototype. Use what worked, and improve what didn't. If you haven't already, make a decision about the prototype you are going with. This could be one of the two you tested or a combination of them. Again, take the time you need. This is what you will be working on for the rest of the course, so make sure you will feel invested in it. Your team may decide to pivot your prototype idea and go in a different direction. Review your studio brief. As you revise your ideas and designs, make sure your project serves a task for a user, and connects to the studio brief.</p>
                </div>

                <div id="developplan" class="sidenav-anchor">
                    <h4>Step 2: Make a Development Plan</h4>
                    <p>Create a development plan for building your interactive prototype. Provide a detailed and comprehensive plan for the next three weeks (A5-A7: interaction design), and briefly summarize goals for the final three weeks (A8-A10: polish, back end, and testing). By the end of A7, you'll have a prototype that is interaction-design complete and ready for testing. For A7, back-end functionality isn't required. (Though you're of course welcome to include it.) In the final three weeks, you'll implement any needed back-end functionality. Remember, when functionality is peripheral to your application, <a href=http://www.youtube.com/watch?v=_lawz2ueY9M&list=PLNtQfKgd43l36p1zkq481yjwMxa1KRxsW&feature=c4-overview-vl>you may Wizard of Oz it</a>; <a href=http://d.ucsd.edu/class/intro-hci/2015/logistics.html#final-project>see the FAQ for guidance</a>.
                    <p>To be organized and ready for programming, write down all the different components of your prototype. For each component, clearly state what needs to get done, by whom, what deadline, and how long you estimate it will take. Make two task groups: 1) a conservative set that gives you a basic, design-complete application for testing; and 2) a stretch goal that you hope to accomplish. Write your component tasks so they are actionable and can be easily verified. They should be concrete enough for your peers to actually do and assess if it has been completed. "Set up results page" is too vague. "Display train times on results page" is better. Compose your plan in a spreadsheet; we recommend Google spreadsheets because they're easy to share. The exact structure/layout of the plan is up to you; <a href="https://docs.google.com/spreadsheet/ccc?key=0AjrnWBpw0TGqdEtTNFZjV2hPTEc1WWdHMUFvSVZoZnc#gid=0" target="_blank">here is a template</a> to get you started. See the Student Examples section for more. Space out deadlines--don't have everything due Thursday night every week!</p>
                    <p>Your plan should also list one or two outside constraints. These could include other course projects/exams, work, travel, job interviews, a hot date... whatever's most important for you to account for in the next few weeks. As things evolve, you're welcome to change/update your plan at any time. Each week, you'll submit a PDF snapshot of your plan. Your next week's progress will be measured by whether you completed the goals you set for yourself -- or revised them to something equally or more awesome.</p>
                </div>

                <div id="createlinks" class="sidenav-anchor">
                    <h4>Step 3: Complete Home Screen &amp; Key Links</h4>
                    <p>Complete your home screen with a full set of navigational links, and flesh out two additional major screens. The remaining screens can be placeholders; the goal is to get a navigational skeleton up there that someone can click around and get a good feel of the application's flow. Make sure that if you have a button or icon, it links to something, whether it’s an implemented page or simply a holding page. You will fill in the blanks and flesh out the details later. You're of course welcome and encouraged to get more done this week.</p>
                    <p>You can use the HTML, CSS, Bootstrap, and Javascript skills you've learned in lab. Say, for example, your project was this course site. For A5, you might make the home page, the submission page, and the logistics page. For A5, you could have empty, dummy stub pages for the other things that the nav links to. You'll flesh those out in A6/7. Using your lab skills, source control and update your project with your team through github.</p>
                </div>
				<div id="revisitthebrief" class="sidenav-anchor">
					<h4>Step 4: Revisit the Brief</h4>
					<p>Write a paragraph summarizing how your team has used the tools you’ve learned so far to meet your studio’s brief, how well your project fits the brief, and why. Summarize the user and task that you are designing for.</p>
				</div>
				<div id="instudio" class="sidenav-anchor">
					<h4>In Studio</h4>
                    <p>When you arrive to studio this week, your studio leader will have your design loaded on a mobile device, plugged into the shared display. You'll use this to present your in-progress design work, then you'll discuss your development plan with your studio.</p>
				</div>
                <div id="thinkingahead" class="sidenav-anchor">
                    <h4>Looking Ahead</h4>
                    <p>We know that many of you have midterms or major projects this week, so this week's assignment is lighter than the next two. Despite this, we <b>strongly</b> encourage you to use this time to start working on the functionality of your prototype. It is in your own best interests to get started on the functionality as soon as possible.</p>
					<p>Some teams may also be pivoting the direction of their projects, and the coding will only get harder later. Now is the opportunity to implement any major changes or reinvisionings to the direction of your projects. Remember you can also spend time needfinding, storyboarding, and paper prototyping, revisiting the previous assignments for inspiration and guidance. There is an <a href ="http://d.ucsd.edu/class/intro-hci/2015/assignments/extracredit.html" target = "_blank">extra credit assignment</a> titled "Revisit Inspiration" to motivate this.</p>
                </div>
                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
					<p>
					Here are some examples of development plans:<a href="https://docs.google.com/spreadsheet/ccc?key=0Ame-4omKIpLddDlvTGFqN0JqNEVXbGRGSndLc2NuTUE&usp=sharing" target="_blank"> (1)</a> is very stylized, dynamic, and mostly thorough,<a href="https://docs.google.com/spreadsheet/ccc?key=0AlCum_THvFsddGJlR1FrZ2xiSzlRdFZfUHBKcm9HUVE#gid=0" target="_blank"> (2)</a> is fairly thorough, colorful, but is missing time estimates and has only one stretch goal listed,
					<a href="https://docs.google.com/spreadsheet/ccc?key=0AkDAkl06cS84dDdoWnJKNmFPLVhNTUx4Ry1mYWZob2c&hl=en_US#gid=0" target="_blank"> (3)</a> is a mediocre plan that's mostly thorough, where most tasks are broken down into less than 1 hour chunks,
					<a href="https://docs.google.com/spreadsheet/ccc?key=0AnCm_JDaoi7ndG5fNl92YUFrWDgwdUxyVVB2azg5SVE#gid=2" target="_blank"> (4)</a> is very thorough, with time estimates and time costs, but some tasks could be more actionable,
					<a href="http://www.google.com/url?q=http%3A%2F%2Fspark-public.s3.amazonaws.com%2Fhci%2Fsource_videos%2FEvolutionOfAProjectPlan.mp4&sa=D&sntz=1&usg=AFQjCNECkSqe0VFyN4wOICycQIFhJoAslg" target="_blank"> (5)</a> is a great video of the dynamic nature of implementation plans throughout the project.</p>
					
					<p>Stay tuned for an example of a complete home screen, key screens, and navigational skeleton. </p>
                </div>
				<div id="whatsthisfor" class="sidenav-anchor">
                    <h2><i>What’s this for? A UX agency perspective</i></h2>
                    	<i><p>The prototype is a very powerful tool, but it can also be a nightmare to implement and demonstrate to a client. Often they will approach it like they would a finished product, and expect every link, every tool and every function to work. If it did....we may as well just build the final product, and it can be hard to find the balance.</p>
						<p>Always remember; a prototype is a mock up, it’s to test a solution. Prototypes can be incredibly comprehensive, or very basic - it depends on what you want to test. However, make sure it is clear - using comment bubbles, instructions or tool tips - what functionality you are trying to test.</p>
						<p>DON’T tell a user how your application is supposed to work, of course....a good prototype will be intuitive. We have experienced "spot-the-click" with some users, who will simply move their mouse around until the pointer turns to the tell tell finger appego, a working link! Users will often work their way along a navigation bar in a prototype, clicking each button from one end to the other.</p>
						<p>Make sure that your application isn’t going to throw an error because you forgot to implement a holding page - make it feel real, even if it’s not! If you have an online store where only one product works for testing purposes, make sure that is clear to your user.</p></i>
                </div>
                <div id="submit" class="sidenav-anchor">
                    <h2>Team Submission</h2>
                    <ul>
                        <li>A list of HE violations</li>
                        <li>A list of changes your team has made and will make to your prototype. <b>(List of Changes)</b></li>
                        <li>A link to a PDF of your development plan. (<i>We recommend making a Google spreadsheet and saving it as a pdf; this gives you a snapshot for comparison.</i>) <b>(Development Plan)</b> </li>
                        <li>URL of your prototype. <b>(Home Screen & Key Screens, Navigational Skeleton)</b></li>
						<li>A paragraph summarizing the user, task, and how your project meets the studio brief. <b>(Brief Revisit Summary)</b></li>
                    </ul>
                    <a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>

                </div>

                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation Criteria &amp; Grading Rubric</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th id="guiding" valign="top">Category</th>
                                    <th id="unsatisfactory" valign="top">Nope</th>
                                    <th id="minimum" valign="top">Weak</th>
                                    <th id="satisfactory" valign="top">Proficient</th>
                                    <th id="above" valign="top">Mastery</th>
                                </tr>
                                <tr>
                                    <td>List of Changes<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>No changes or completely irrelevant changes.</td>
                                    <td>The student only identified a few changes from the heuristic evaluation feedback and a large amount of feedback is ignored in the prototype without justification; or the changes would introduce some HE violations.</td>
                                    <td>Many of the simpler suggested changes were made, but some of the more complex or difficult issues were not addressed without justification; the changes would not introduce any obvious HE violations.</td>
                                    <td>Made several thoughtful and specific changes based on the heuristic evaluation feedback. Few, if any, HE violations remain.</td>
                                </tr>
                                <tr>
                                    <td>Development Plan<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>No development plan or development plan without deadlines.</td>
                                    <td>The student's development plan does not address every step of development and does not create clear actionable tasks. The timeline seems haphazard and the deadlines are obviously impossible to follow.</td>
                                    <td>The development plan has several reasonable steps for development, but they are not clearly defined or do not cover all aspects of development. The timeline is well-organized and mostly doable, although a few of the deadlines seem idealistic or unreasonable.</td>
                                    <td>The development plan has many distinct, logical steps that give a clear path for development. The timeline is well-organized, has feasible deadlines, and takes into account time for unforeseen issues.</td>
                                </tr>
                                <tr>
                                    <td>Home Screen &amp; Key Screens<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>No home screen or additional screens.</td>
                                    <td>Home screen has little content. Only one additional screen fleshed out.</td>
                                    <td>The home screen and two additional screens appear to have most of their content.</td>
                                    <td>Home screen and two additional screens are very thorough.</td>
                                </tr>
                                <tr>
                                    <td>Navigational Skeleton<br /><span style="color:lightGray;">3 points</span></td>
                                    <td>No navigational skeleton.</td>
                                    <td>Navigation does not work. </td>
                                    <td>The major navigations are present.</td>
                                    <td>Navigational skeleton is very thorough and well planned. It gives a real feel for the flow of the application and is clearly thought through.</td>
                                </tr>
								<tr>
                                    <td>Revisit the Brief<br /><span style="color:lightGray;">2 points</span></td>
                                    <td>No paragraph submitted.</td>
                                    <td>Paragraph doesn't clearly explain the user, task, and/or relationship of the project to the brief.</td>
                                    <td>The paragraph is written with insight, and changes to the project were made to reflect these insights if necessary.</td>
                                    <td>The paragraph is a thoughtful reflection of the project’s trajectory so far, and how it has fit into the brief. The project meets the brief's constraints well.</td>
                                </tr>
                                <tr>
                                    <td headers="guiding" colspan=2><br>Outside the Box<br><span style="color:lightGray;"><span style="color:lightGray;">+1. Reserved for unusually impressive submissions.</span></td>
                                    <td colspan=3 align=right>The changes based on the heuristic evaluation are not only insightful and specific, but show creativity and thought in the changes that are made. These changes do not just change the prototype in the most obvious manner to get rid of the HE violation, but reflect careful design to avoid HE violations in the future.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor'>
                    <h2>Self Assessment</h2>
                    <p>
                        <a class='btn btn-primary' target='_blank' href="https://docs.google.com/a/eng.ucsd.edu/forms/d/19Et3tBnycWHAZvNzeZdYoWlTWm9R-glF0Mlja1fwRp4/edit">During studio, click here to assess your group's work as a collective unit.</a>
                        </br>
                        <a style="margin-top: 10px;" class='btn btn-primary' href="https://docs.google.com/a/eng.ucsd.edu/forms/d/1a2auR3dC5YUTmrCjJhkUHPSq8EhoN5kPJymHOWRDaH0/edit"> During studio, click here to assess your own work and each of your team member's work.</a>
                    </p>
                </div>
				<br>
				<footer>
					<p>This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, and revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and our teaching staffs. Instructors: you are welcome to use these materials for your own class, and dozens of courses around the world do. We share all course materials <a href=https://creativecommons.org/licenses/by/4.0/deed.en_US
					>through a CC-BY license</a>. Please let Scott know if you use them, and also any suggestions you have. We thank <a href=http://www.calit2.net/>CalIT2</a> and the <a href=http://www.jacobsschool.ucsd.edu/moxiecenter>Moxie Center</a> for helping support our studios.</p>
				</footer>   

            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/hci.js"></script>
  </body>
</html>
