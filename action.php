<?php

  if(isset($_POST['Login']))
  {
  	if(isset($_POST['user_name']) AND isset($_POST['password']))
  	{
  		if(!empty($_POST['user_name']) AND !empty($_POST['password']))
  		{
           $name=htmlspecialchars($_POST['user_name']);
           $email=htmlspecialchars($_POST['password']); 
             
             echo "<h2> Bonjour <mark><b> $name </b></mark> merci pour votre email:<mark><b> $email </b></mark>, nous avons lu votre message: </br></br> $message </h2>";
            
          
  		}
  	}
  }

?>


</body>
</html>

