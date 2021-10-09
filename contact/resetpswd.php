<?php

            if (array_key_exists('forgot',$_POST)) {

      $email = $_POST['email']; 

      mysql_select_db($database_speedycms, $speedycms);
      $query_email = "SELECT * FROM tbl_users WHERE email='$email'";
      $email = mysql_query($query_email, $speedycms) or die(mysql_error());
      $row_email = mysql_fetch_assoc($email);
      $totalRows_user = mysql_num_rows($email);

      mysql_query("SELECT * FROM users WHERE email='$email'");

      if($totalRows_user == 0)

      {
      echo "<span class='form2'>We're sorry, but we could not find a user with that email address.<p>Please try again.<p>
      <a href='forgotpassword.php' class='form'>Return</a></span>";
      }

      else

      {


        // create a random password 
      function createRandomPassword() { 
      $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
         srand((double)microtime()*1000000); 
         $i = 0; 
         $pass = '' ; 
      while ($i <= 7) { 
            $num = rand() % 33; 
            $tmp = substr($chars, $num, 1); 
            $pass = $pass . $tmp; 
            $i++; 
          } 
         return $pass; 
      }
      $password = createRandomPassword(); 


      // generate email

      $username = $row_email['username'];
      $msg  = "Your new login information is:\n\n";
      $msg .= "Username: $username\n";
      $msg .= "Password: $password\n";

      mail("$email", "Speedy CMS Login Information", "$msg", "From:noreply@domain.com");

      // display message  

      echo "<span class='form2'>Thanks. Your new password has been sent to <i>".$row_email['email']."</i>.<p>
      <a href='index.php' class='form'>Return</a></span>";

      }

      exit;

      }

    ?>