<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Submit Form Without Page Refresh</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Lato:100,300,400|Pacifico);
*{margin:0px; padding:0px}
body {  color: #fff;  font-family: 'Lato', 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;   }

h1 {  font-family: Helvetica, Arial, sans-serif;  text-align: center;
	  text-shadow: 2px 2px 0px rgba(255,255,255,.7), 5px 7px 0px rgba(0, 0, 0, 0.1);  font-size:50px; margin:20px;
}

form {  width: 470px;  text-align: center;  margin: 0 auto; }

#wrapper input,#wrapper textarea {
  border: 0;
  outline: 0;
  display: block;
  width: 100%;
  margin-top: 1em;
  font-family: Helvetica, Arial, sans-serif;
  font-weight: 300;
  font-size: 16px;
  border-radius: 6px;
  box-shadow: 0 1px 1px rgba(34,34,34,0.1);
  resize: none;
  padding:12px;
}

textarea {  margin-bottom: 1em;  height: 125px; }

#submit {  color: white;   background-color: rgba(3,201,169,.8);  cursor: pointer; font-size:24px !important; }
#status{text-align:center; font-size:24px; font-family:Helvetica, Arial, sans-serif; color:#fff; margin-top:20px; font-weight:bold}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
function post()
{
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  if(name && email && message)
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_data.php',
      data: 
      {
         user_name:name,
		 user_email:email,
		 user_message:message
      },
      success: function (response) 
      {
	    document.getElementById("status").innerHTML="Form Submitted Successfully";;
  
      }
    });
  }
  
  return false;
}
</script>
</head>

<body>    
<h1>Submit Form Without Page Refresh</h1>
<div id="wrapper" style="border: 6px solid rgba(255,255,255,0.5); margin:40px auto; width:36%; padding:10px 45px 30px 20px">
<form method='post' action="" onsubmit="return post();">
	<input type="text" id="name" placeholder="Name" class="input-box">
	<input type="email" id="email" placeholder="Email address" class="input-box">
	<textarea id="message" placeholder="Add your message here"></textarea>
	<input type="submit" id="submit" value="Submit" >
</form>
<p id="status"></p>
</div>
</body>
</html>