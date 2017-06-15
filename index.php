<html>
    <head>
        <link rel="stylesheet" href="src/style.css" type="text/css">
        <script src="src/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#login").mouseenter(function(){
                $("#login").css("box-shadow", "10px 10px 5px #888888").css("width","34%");
                });
            $("#login").mouseleave(function(){
                $("#login").css("box-shadow", "0px 0px 0px #888888").css("width","30%");
            });
        });
        function capLock(e)
        {
            kc = e.keyCode?e.keyCode:e.which;
            sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
            if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
                document.getElementById('msg').innerHTML = 'CapsLock On';
            else
                document.getElementById('msg').innerHTML = '';
        }
        function validateForm() 
        {   
            var uname = document.form.rollnumber.value; 
            if(uname.length!=10)
            {
                document.getElementById('msg').innerHTML='Incorrect Username';
                return false;
            }
            else if(document.form.password.value.length<8)
            {
                document.getElementById('msg').innerHTML='Incorrect password';
                return false;
            }
            return true;
        }
        function repassopen()
        {
            document.getElementById('resetpasswd').style.display='block';
        }
        function repassclose()
        {
            document.getElementById('resetpasswd').style.display='none';
        }
      </script>
      <style>
          @keyframes colorchange
          {
              0%   {background: #FFA07A;}
              25%  {background: #38ACEC;}
              50%  {background: #DCDCDC;}
              75%  {background: #FF69B4;}
              100% {background: #90EE90;}
          }
          @-webkit-keyframes colorchange /* Safari and Chrome - necessary duplicate */
          {
               0%   {background: #FFA07A;}
               25%  {background: #38ACEC;}
               50%  {background: #DCDCDC;}
               75%  {background: #FF69B4;}
               100% {background: #90EE90;}
          }
           .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
}


      </style>
    </head>
    <body>
        <center>
            <div style="width:90%;height:90%;">
                <div id="login" style="width:30%;"><br><br><br><br>
                    <img  src="http://www.iconsfind.com/wp-content/uploads/2016/10/20161014_58006bff8b1de.png" width="180" height="180">
                    <form name="form" action="check.php" method="post" onSubmit="return validateForm();">
                            <br>
                            <input class="input1"  style="width:75%;height:5%;font-size:20;text-transform: uppercase;" type="text" maxlength="10" name="rollnumber" placeholder="Rollnumber">
                            <br>
                            <label style="color:;line-height: 300%;color:#8E8C8C;">&nbsp;&nbsp;Ex:14KN1A0554</label><br>
                            <input class="input1" style="width:75%;height:5%;font-size:20;" type="password" onkeypress="capLock(event)" name="password" placeholder="Password"><br>
                            <input class="button" style="background-color: green;" type="submit" name="submit" value="Go!">
                            <input class="button" style="background-color: #f4511e;" type="reset" name="reset" value="Reset"><br>
                       <label id="msg" style="line-height:300%;"></label><br>
                    </form>
                    <button onclick="repassopen();" style="background-repeat:no-repeat;overflow: hidden;border:none;cursor:pointer;"><img src="http://squares.thinkcommand.com/images/forgot_pass/ForgotPasswordIcon.png" width="100px height="100px""></button><br>
                </div>
            </div>
            <div id="resetpasswd" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                  <span class="closem" onclick="repassclose();">&times;</span>
                    <form method="post" action="reset.php">
                       <br><input type="text" name="sendotp" placeholder="Enter your Rollnumber"><button>Send OTP</button><br>
                    </form>
                </div>
            </div>
          </div>
        </center>
</body>
</html>