<!doctype html>

<!-- this is a comment for human! -->

<html>
 <head>
   <title> Contact Me  </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/master.css">
   <meta name="viewport" content="width=device-width, initial-scale+1, shrink-to-fit=no">
   <meta name="name" content="Tanmay Govil's Portal">
   <meta name="robot" content="noindex, nofollow">
 </head>

 <style>
 h1{
   color: red;
   font-size:70px;
   position: relative;

 }
 h4 {
   color: red;
   font-size:50px;
   position: relative;
 }
 div{
   position: relative;

 }
 footer{
   position: relative;
   top: 500px;
 }

  h3,p,label {
  text-align:center;
  font-family:'Raleway',sans-serif;
  color:#86FF33
  }

  input {
  width:50%;
  margin-bottom:20px;
  padding:5px;
  height:30px;
  box-shadow:1px 1px 12px gray;
  border-radius:3px;
  border:none
  }
  textarea {
  width:50%;
  height:80px;
  margin-top:10px;
  padding:5px;
  box-shadow:1px 1px 12px gray;
  border-radius:3px
  }
  #send {
  width:50%;
  height:45px;
  margin-top:40px;
  border-radius:3px;
  background-color:#cd853f;
  border:1px solid #fff;
  color:#fff;
  font-family:'Raleway',sans-serif;
  font-size:18px
  }
  div#feedback {
  text-align:center;
  height:520px;
  width:50px;
  padding:20px 25px 20px 15px;
  background-color:#f3f3f3;
  border-radius:3px;
  border:1px solid #cd853f;
  font-family:'Raleway',sans-serif;
  float:left
  }
  .container {
  width:960px;
  margin:40px auto
  }

 </style>

<body>

 <h1> Contact</h1>
       <p></p>
       <div>
       <a href="https://www.facebook.com/tanmay.govil.5/" class="fa fa-facebook"></a>

       <a href="https://www.linkedin.com/in/tanmay-govil-6a4a72160/" class="fa fa-linkedin"></a>
       <h3>Email: <a href="mailto:tanmaygovil1999@gmail.com" target="_blank">tanmaygovil1999@gmail.com</a></h3>
   <!-- don't post physical address, personal phone number or other personal information on the web! -->

       <h2>Portfolio</h2>
       <h3>GitHub: <a href="http://github.com/tanmaygovil1999" target="_blank">http://github.com/tanmaygovil1999</a></h3>
     </div>

     <h4>Reach Out to Me</h4>
     <form action="#" id="form" method="post" name="form">
      <input name="vname" placeholder="Your Name" type="text" value="">
      <input name="vemail" placeholder="Your Email" type="text" value="">
      <input name="sub" placeholder="Subject" type="text" value="">

      <textarea name="msg" placeholder="Type your text here..."rows="5" cols="40"></textarea>
      <input id="send" name="submit" type="submit" value="Send Feedback">
      </form>

     <h3><?php include "secure_email_code.php"?></h3>
</body>

<footer>
<hr>
<p><a href="example.html">Back to my portal</a><p>
</footer>

</html>
