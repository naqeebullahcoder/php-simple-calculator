<!DOCTYPE html>
<html>
<head>
	    <title> Login Form </title>
	    <link rel="stylesheet" a href="style.css">
</head>
<body>
      <div class="login">
          <div class="form">

            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST" class="login-form" >
              <span class="material-icons">Login</span>
              <input type="text" id="user" name="user" placeholder="username"  required/>
              <input type="password" id="pass" name="pass" placeholder="password" required />
              <button type= "submit " name="submit">login</button>
            </form>  

        </div>
    </div> 
   
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>