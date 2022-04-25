<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Angelo Makory</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        <meta name="viewport" content="width=device-width">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
    </head>

    <body>
        <div class="navbar">
            <ul>
                <li onclick="location.href='index.php'"><span class="home-icon">&#x2302;</span></li>
                <li onclick="document.getElementById('about').style.display='block'">About me</li>
                <li onclick="document.getElementById('achievements').style.display='block'">My Achievements</li>
                <li onclick="document.getElementById('contacts').style.display='block'">Contact me  &#9742;</li>
                <li>Profile</li> 
            </ul>
        </div>
        
        <div class="landing">
            <h1>Angelo Kizito Makory</h1>
            <br>
            
            <p>Welcome to my profile. Here, you would find a brief outlook on my CV as well as my strengths.</p>
            <br>

            <p style="font-style:oblique;">Please use the navbar above to navigate for more &#128515; </p>
            <br>

            <div class='decision-box'>
                <div class='action-buttons'>
                    <!-- Button to open the modal login form -->
                    <button onclick="document.getElementById('login').style.display='block'">Login</button>
                    <!-- Opens register form-->
                    <button onclick="document.getElementById('register').style.display='block'">Register</button>
                </div>
            </div>

            <!-- The login Modal -->
            <div id="login" class="modal">
                <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
                <!-- Modal Content -->
                <form class="modal-content animate" action=" " name="login" onsubmit="return formValidate()">

                    <!-- <div class="imgcontainer">
                    <img src="img_avatar2.png" alt="Avatar" class="avatar">
                    </div> -->

                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <br>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <br>

                        <button type="submit">Login</button>
                        <br>

                        <label>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                    </div>

                    <div class="container">
                        <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>

                </form>
            </div>
            
            <!-- Register modal form -->
            <div id="register" class="modal">
                <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form class="modal-content-animate" action="/action_page.php" name="register" onsubmit="return formValidate()">
                    <div class="container">
                        <label for="fname"><b>First Name</b></label>
                        <input type="name"  name="fname" required>
                        <br>

                        <label for="lname"><b>Last Name</b></label>
                        <input type="name"  name="lname" required>
                        <br>

                        <label for="dateofbirth"><b>Date of Birth</b></label>
                        <input type="date"  name="dateofbirth" required>
                        <br>

                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Your Username" name="uname" required>
                        <br>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Your Password" name="psw" required>
                        <br>

                        <label>
                            <div class="gender-radios">
                                <input type="checkbox" checked="checked" name="gender">Male    
                                <input type="checkbox" checked="checked" name="gender">Female   
                                <input type="checkbox" checked="checked" name="gender">Prefer not to say 
                            </div>          
                        </label>

                        <button type="submit">Register</button>
                    </div>
                    
                    <div class="container">
                        <button type="button" onclick="document.getElementById('register').style.display='none'" class="cancelbtn">Cancel</button>
                    </div>

                </form>
            </div>

            <!-- About modal -->
            <div id="about" class="modal">
                <span onclick="document.getElementById('about').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h3>Who is Angelo Makory?</h3>
                <br>

                <p>Angelo is a person who is motivated and fuelled with the passion to make the world a better place by providing solutions using my skills.</p>
                <br>
            </div>

            <!-- Achievements modal -->
            <div id="achievements" class="modal">
                <span onclick="document.getElementById('achievements').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h3>My Achievements</h3>
                <br>

                <p>To view my full certificates, kindly click below :) </p>
                <br>

                <button onclick="location.href='documents.php'">My qualifications</button>
            </div>
            
            <!-- Contacts modal -->
            <div id="contacts" class="modal">
                <span onclick="document.getElementById('contacts').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h3>Trying to reach me?</h3>
                <br>
                <p>My contact details are below :)</p>
                <table>
                    <tr>
                        <td>Phone &#128241;</td>
                        <td>+254717117115</td>
                    </tr>
                    <tr>
                        <td>Email &#128231;</td>
                        <td>angelomakory@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Linkedin </td>
                        <td>TBD</td>
                    </tr>
                    <tr>
                        <td>GitHub</td>
                        <td>AngeloMakory</td>
                    </tr>
                </table>
            </div>
        </div>  
    </body>

    <script>
        // Get the modals and initialize to js variables.
        var modalLogin = document.getElementById('login');
        var modalReg = document.getElementById('register');
        var modalAbout = document.getElementById('about');
        var modalAchievements = document.getElementById('achievements');
        var modalContacts = document.getElementById('contacts');
        var modalProfile = document.getElementById('profile');
        
        // When the user clicks anywhere outside of the modal, close it.
        window.onclick = function(event) {
            if (event.target == modalLogin){
                modalLogin.style.display = "none";
            }
            else if(event.target == modalReg){
                modalReg.style.display ="none";
            }
            else if(event.target==modalAbout){
                modalAbout.style.display ="none";
            }
            else if(event.target==modalAchievements){
                modalAchievements.style.display ="none";
            }
            else if(event.target==modalProfile){
                modalProfile.style.display="none";
            }
            else if(event.target==modalContacts){
                modalContacts.style.display="none";
            }
        }

        //form validation -> login form
        function formValidate(){
            //x can be for username login, and y for pass login.
            let x = document.forms['login']['uname'].value;
            let y = document.forms['login']['psw'].value;

            if(x==""){
                alert("Enter your username!")
            }
            return false;

            if(y==""){
                alert("Enter your password appropriately")
            }
            return false;
        }

        //Form validation for register form. to be done later on
        function regValidate(){

        }

        //Form text area->autoexpand
        // function adjust_textarea(h) {
        //     h.style.height = "20px";
        //     h.style.height = (h.scrollHeight)+"px";
        // }

    </script>

</html>

