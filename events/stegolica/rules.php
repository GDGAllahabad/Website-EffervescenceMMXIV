<?php 
	
	include "variable.php";
	error_reporting(0);
?>

<html>

    <head>
       
        <title>Stegolica | Effervescence MM14</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Frijole' rel='stylesheet' type='text/css' />

        <style>
            input:not([type=submit]) {
                border: 2px solid white; 
                border-radius:15px;
                padding: 2px;
                background: rgba(255,255,255,0.5);
                margin: 0 0 10px 0;
            }
            input[type=submit]{
                position:absolute;
                width:100px;
                height:30px;
                border:none;
                border-radius:15px;
                padding:6px 25px;
                background-color:#19ABFA;

                margin-left:150px;
                color:white;
                font-weight:bold;
                cursor:pointer;
            }
            input[type=submit]:hover{
                background-color: #118BF8;
            }
        </style>

    </head>

<body>

<div id="wrapper">
	
	<div id="header">
    
    	<div id="site_title">
<img src="images/logo.png" style="margin-top:-200px; padding-top:30px;margin-bottom: -248px; margin-left: -200px; height: 500px; width: 700px;"></img>
		</div>  
        <div id="fb"><a href="https://www.facebook.com/events/339590586223522/" target="_new"><img src="images/fb1.png" height="35px" width="35px" style="border-radius:0px;background-color:rgba(255,255,255,0);padding:2px;margin-top:10px;" title="Visit Us at Facebook"/></a></div>
        <div id="menu">
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li ><a href="question.php">Arena</a></li>
                <li><a href="score.php" >Scores</a></li>
                <li><a href="rules.php" class="current">Rules</a></li>
                <li><a href="contact.php">Contact</a></li>
                
            </ul>    	
        </div> 
        
    </div> 
    

    <div id="main">
    	<div style="width:960;margin:0px;">
		
            <div style="border-radius:15px;background-color:rgba(255,255,255,0.4);padding:25px;min-height:430px;width:600px;float:left;">
           	  	<div class="post_box">
			  
              		<div class="post_header">
                        <h2>Rules : Stegolica</h2>
                        
                    </div>
		

1) All participants need to register prior to the event beginning. <br/>
2) You will be taken to the next question only on correct answer for your present question. <br/>
3) Do not use spaces in answers (Expample: if answer is "you win" then submit your answer as "youwin").<br/>
4) Any user found indulging in foul play will be disqualified immediately. <br/>
5) To be eligible for winning prizes the user must be currently registered in a university. Non students are welcome to participate. <br/>
6) Organizers decision shall be treated as final.<br/>
7) Hints will be given time to time on Our <u><a href="https://www.facebook.com/events/339590586223522/" target="new" style="color:#fff;">Facebook Page </a></u>.

										
                    
					
                    <div class="cleaner"></div>
              	</div>
				
                
            </div>
            
            <div style="border-radius:15px;background-color:rgba(255,255,255,0.4);padding:25px;margin-bottom:30px;width:250px;float:right;">
            	
                <div class="lbe_box" id="lbox">
					<?php
						
						session_start();
						if(isset($_SESSION['isregistered_stegolica']))
							echo '
								<h2>Welcome</h2>'.
								$_SESSION['user_stegolica'].
								'<br /><a href="logout.php">Logout</a>';
						else
							echo '
								<h2>Login</h2>
								<form action="event_login.php" method="post">
									<label>
										Username :
									<input  type="text" id="user" name="user"/>
									</label>
<br/>
									<label>
										Password : 
									<input type="password" id="pass" name="pass" style="margin-left:2px;"/>
									</label>
									<br/>
									<input type="submit" value ="Login" />
								</form>';
					?>
					
                </div>

            </div>
            <br/><br/><br/>
            <div  style="border-radius:15px;background-color:rgba(255,255,255,0.4);padding:25px;width:250px;float:right;">
                
               <h2>Latest Updates</h2>
                <div class="lbe_box">
                    <h3>&bull; Event will begin on 18th October 2014</h3>
                    
                </div>
				
                <div class="lbe_box">
                    <h3>&bull; It will be a 6 hour long event</h3>
                    
                    <div class="cleaner"></div>
                </div>
                <div class="cleaner " style="height:30px;"></div>
            </div>	
        </div>
		
    	<div class="cleaner"></div> 
    </div> 
</div>

<div id="footer_wrapper">
    <div id="footer">
    
     2014 &copy; Effervescence | Indian Institute of Information Technology
    </div>
</div>

</body>

</html>
