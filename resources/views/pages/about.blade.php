{{--  @extends('layout.app')
           
           
            @section('content')
            <div class="container">
                <div class="content">
                    <div class="title m-b-md">
                    About me 
                    </div>
                </div>
            </div>
           @endsection  --}}

           <!DOCTYPE html>
<html>
 <head>
<link type="text/css" rel="stylesheet" href="https://www.dropbox.com/s/trsldt0me90jzs8/resume.css"/>
<style>div
{
    border-radius: 5px;
    }
#header
{
    position: fixed;
    z-index: 1;
    height:40px;
    width: 98%;
    background-color: #668284;
    margin-bottom: 10px
    }

#name {
    float:left;
	margin-left: 20px;
	padding-bottom: 10px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
}

#email{
    float:right;
    margin-right: 20px;
	padding-bottom: 10px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
}

#contact
{
    margin-left:45%;
    padding-bottom: 10px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
    }

a:hover {
    font-weight: bold;
}

.right
{
    float: left;
    margin-top: 50px;
    padding-left:5px;
    /*margin-right: -10px;
    margin-left: 14%;*/
    height: auto;
    width: 99%;
    background-color: #E3EDD8;
    }

/*.left
{
    float: left;
    margin-top: 50px;
    /*margin-right: -90px;
    height: relative;
    width: 10%;
    background-color: #4160E8;
    }*/
    
#footer
{
    height:40px;
    clear:both;
    position: relative;
    background-color: #C1E3E1;
    }
    
h3
{
    text-decoration: underline;
    }

#job-responsibilities
{
    padding: 1px;
    }
.job-title
{
    font-weight: bold;
    }
table
{
    border: 1px dashed black;
    }
td
{
    padding: 2px;
    border: 1px solid #E88741;
    }

#course-name
{
    font-weight:bold;
    }

#company-name
{
    height:2px;
    text-decoration:underline;
    }
#job-title
{
    height: 5px;
    }
.job-duration
{
    float:right;
    }
#heading
{
    font-weight:bold;
    }</style>
<title></title>
</head>
<body>
<div id="header">
<p id="name">Deep Laxman Sukhwani</p>
         <a href="mailto:deepsukhwani@gmail.com" target="_blank"><p id="email">deepsukhwani@gmail.com</p></a>
         <p id="contact">+91 75036 10708</p>
     </div>
     <div class="left">
     </div>
     <div class="right">
            <h3>CV Highlights</h3>
            <p>
            <ul>
                <li>Currently going through CS253 – Web Application Engineering and CS61A – Structure & Interpretation of Computer Programs</li>
                <li>Learnt basic Python, JavaScript, HTML, CSS on Codecademy.com.</li>
                <li>An independent, dedicated, efficient person. These attributes are proved through the series of courses I have taken or I am taking as of now independently through online platforms.</li>
                <li>Good Communication Skills, Presentation Skills, attitude towards leadership, authorisation and delegation, conflict resolution and negotiation and a very good team worker.</li></ul>
            </p>
            <h3>Professional Experience</h3>
            <h4 id="company-name">Wingify Software Pvt Ltd</h4>
            <p id="job-title"><strong>Support Engineer (Technical Support)</strong></p>
            <p id="job-responsibilities">Job Responsbilities</p>
            <p>
            <ul>
                <li>Answer customer queries over email / ticketing system</li>
                <li>Interact with our engineering team to get software issues and bugs resolved</li>
                <li>Occasionally interact with customers over Skype or telephone</li>
                <li>Contribute ideas to the team on how customers can be delighted</li></ul>
            </p>
            <h3>Educational Qualifications</h3>
            <table>
                <tr id="heading">
                    <td>Qualification</td>
                    <td>Board</td>
                    <td>Percentage / Grades</td>
                    <td>Year</td>
                </tr>
                <tr>
                    <td>S.S.C</td>
                    <td>G.S.E.B India</td>
                    <td>75.57%</td>
                    <td>2004</td>
                </tr>
                <tr>
                    <td>H.S.C (Science Stream)</td>
                    <td>G.S.E.B India</td>
                    <td>72.40%</td>
                    <td>2006</td>
                </tr>
                <tr>
                    <td>GDCA (Grad. Dipl in Computer Applications)</td>
                    <td>NIE (National Institute Of Engineering), Mumbai, India</td>
                    <td>A Grade</td>
                    <td>2008</td>
                </tr>
                <tr>
                    <td>B.Sc. (Hons) - Applied Accounting</td>
                    <td>Oxford Brookes University</td>
                    <td>2:1 – Upper Second Class Honours</td>
                    <td>2012</td>
                </tr>
                <tr>
                    <td>Chartered Accounting - ACCA</td>
                    <td>ACCA Glasgow, UK</td>
                    <td>Passed (1st Attempt)</td>
                    <td>2013</td>
                </tr>
            </table>
            <h3>Independent Courses</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">HTML & CSS for Beginners – Web Fundamentals</span> – Codecademy.com</li>
                <li>
                <span id="course-name">Python – Fundamentals and Dynamic Programming </span> - Codecademy.com</li>
                <li>
                <span id="course-name">JavaScript – Programming Basics, JS Apps and Build Games </span> - Codecademy.com</li>
                <li>
                <span id="course-name">CS101: Introduction to Computer Science - Building a Web Crawler</span> - Udacity.com</li>
                <li>
                <span id="course-name">CS50x – Introduction to Computer Science I</span> – edX.org & Harvard University</li>
                <li>
                <span id="course-name">Calculus One</span> - Ohio State University & Coursera.org</li>
                <li>
                <span id="course-name">Introduction to Finance</span> - Coursera.org & University of Michigan</li>
            </ul>
            <h3>Technical Skills</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Operating Systems:</span> DOS, Windows 98, Windows 2000, Windows XP, Windows NT, Windows Server 2003, Windows Vista, Windows 7, Macintosh Computers (OS X), Linux (Ubuntu, Fedora)</li>
                <li>
                <span id="course-name">Application Software:</span> Office 97-2003; Office XP, Office 2007, Office for Mac 2011, iWork ’09, Sage Accounting Software, Sage 50 (Accounting Software), Excel 2003/2007 for Financial Modelling spreadsheets.</li>
                <li>
                <span id="course-name">Programming Skills:</span>HTML, CSS, Python, JavaScript, learning C and C++</li></ul>
            </p>
            <h3>Certifications / Awards:</h3>
            <p>
            <ul>
                <li>Scored highest in ACCA P1 – Governance, Risk & Ethics exam – June 2012 session amongst full time international students at Kaplan Financial, London.</li>
                <li>Interviewed by ACCA for “international ACCA student in UK”, interview published in January 2012 edition of ACCA Student Accountant Magazine.</li>
                <li>Interviewed by ACCA for “international ACCA student in UK”, interview published in January 2012 edition of ACCA Student Accountant Magazine.</li></ul>
            </p>
            <h3>Personal Information:</h3>
            <p>
            <ul>
                <li>
                A young, determined hard and smart working person. I believe in task based roles and complete ownership of work.
                <li>
                <span id="course-name">Languages Known:</span>English, Hindi, Gujarati and Sindhi</li>
                <li>
                <span id="course-name">Hobbies:</span>I love reading Finance and IT related books / magazines, playing Chess, swimming, listening music, surfing Internet, self-learning through e-courses.</li> </ul>
            </p>
            <h3>Other Information</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Expected Salary:</span>As per company standards</li>
                <li>
                <span id="course-name">Area of Interest:</span>Software Development, Programming, Start-ups, Coding, App Development, Technical Support, Support Engineer, Customer Happiness, Client service, Investment Banking, Corporate Finance, Hedge Funds, Mergers & Acquisitions, Analyst, Equity Research, Business Analysis</li>
                <li>
                <span id="course-name">Joining Date:</span>Immediate</li></ul>
            </p>
            <h3>Declaration</h3>
            <p>
            I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief.</p>
     </div>
     <div id="footer"></div>
    </body>
</html>