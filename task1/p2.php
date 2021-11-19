



<!Doctype html>
<html>
   <head>
      <title>project</title>
      <style>
         .a{
         position: absolute;
         left: 50%;
         top: 50%;
         transform: translate(-50%,-50%);
         width: 380px;
         height: 480px;
         padding: 5px;
         margin: 6% auto;
         background:#fff;
         text-align: center;
         overflow: hidden;
         }
         .button-box{
         width: 220px;
         margin: 35px auto;
         position: relative;
         box-shadow: 0 0 20px 9px #ff61241f;
         border-radius: 30px;
         }
         #bt{
         top: 0;
         left: 0;
         position: absolute;
         width: 110px;
         height: 100%;
         background-color:linear-gradient(to right,#ff105f,#ffad06);
         border-radius: 30px;
         transition: 0.5s;
         }
         .f{
         top: 180px;
         position: absolute;
         width: 280px;
         transition: .5s;
         }
         .if{
         width: 100%;
         padding: 10px 0;
         margin: 5px 0;
         border-top: 0;
         border-left: 0;
         border-right: 0;
         border-bottom: 1px solid #999;
         background: transparent;
         outline: none;
         }
         .sb{
         width: 85%;
         padding: 10px 30px;
         cursor: pointer;
         display: block;
         margin: auto;
         background: linear-gradient(to right,#ff105f,#ffad06);
         border: 0;
         outline:none;
         border-radius: 30px;
         }
         .cb{
         margin:30px 10px 30px 0;
         }
         span{
         color: #777;
         font-size: 12px;
         bottom: 68px;
         position: absolute;
         }
         #login{
         left: 50px;
         }
         #register{
         left: 450px;
         }
         .b{
         padding: 10px 30px;
         cursor: pointer;
         background: transparent;
         border:0;
         outline:none;
         position: relative;
         } 
         video{
         object-fit: cover;
         width: 100%;
         height: 100%;
         position: fixed;
         z-index: -1;
         }
      </style>
   </head>
   <body>
      <video poster="JPG" autoplay muted loop >
         <source src="http://localhost/phptask/task1/Video_125729_251020.mp4"type="video/mp4">
      </video>
      <div class="a">
         <div class="button-box">
            <div id="bt"style="background:linear-gradient(to right,#ff105f,#ffad06)"></div>
            <button class=b type="button" onclick="login()"><b>Log In</b></button>
            <button class=b type="button" onclick="register()"><b>Register</b></button>
         </div>

         <!-- login form -->

         <form id="login" class="f"method="post"action ="log.php">
            <input type="text"class="if"placeholder="user name"name="usnm"required>
            <input type="password"class="if"placeholder="enter password"name="pss"required>
          <!--  <input type="checkbox"class="cb"><span>Remember password</span>     -->
          
          <br><br><br>


          <button type="submit"class="sb"name="login">Log in</button>
         </form>
         
         <!-- signup form -->
         

         <form id="register" class="f" method="post"action ="conn.php">


            <input type="text"class="if"placeholder="user name"name="usnm"required>


            <input type="tel"class="if"placeholder="enter mobile no."maxlength="10"name="pn" required>


            <input type="email"class="if"placeholder="email id"name="email"required>


            <input type="password"class="if"placeholder="enter password"name="pss"required>


            <input type="password"class="if"placeholder="conform password"name="cpss"required>


            <br><br>
            <button type="submit" name="reg" class="sb">register</button>
         </form>
      </div>
      <script>
         var x=document.getElementById("login");
         var y=document.getElementById("register");
         var z=document.getElementById("bt");
         
         function register()
         {
          x.style.left="-400px"
          y.style.left="50px"
          z.style.left="110px"
         }
         
         function login()
         {
          
          x.style.left="50px"
          y.style.left="450px"
          z.style.left="0"
         }
      </script>
   </body>
</html>

 