<?php
include('header.php');
?>
   <form action="SuccessfulRegistration.php" method="post"> 
      <div class="user-register-center">
         <fieldset>
            <legend>Personal Information:</legend>
            <input type="text" name="firstname" placeholder="First name" size="20" required autocomplete="off">
            <input type="text" name="middlename" placeholder="Middle name" size="20" required autocomplete="off">
            <br><br>
			<input type="text" name="lastname" placeholder="Last name" size="20" required autocomplete="off">
			<input style="font-size: 15px" type="date" name="DOB" required>
            <br><br>
			<label>Gender:</label><br>
            <select name="blood_group">
               <option value="none">None</option>
               <option value="male">Male</option>
               <option value="female">Female</option>
               <option value="transgender">Transgender</option>
            </select>
			<br><br>
            <input type="text" name="mob_number" placeholder="7022358501" maxlength="10" size="10" required autocomplete="off">   
            <input type="email" name="email" placeholder="jaywanttopno@yahoo.com" size="30" required autocomplete="off">
            <br><br>
            <input type="password" name="pass1" placeholder="password">	
            <input type="password" name="pass2" placeholder="Retype password">	
            <br><br>			
         </fieldset>
         <fieldset>
            <legend>Physical Information:</legend>
            <input type="text" name="height" maxlength="3" size="3"placeholder="height">
            <input type="text" name="weight" maxlength="3" size="3" placeholder="weight">
			<br><br>
			<label>Blood Group:</label>
            <select name="blood_group">
               <option value="none">None</option>
               <option value="A">A</option>
               <option value="B">B</option>
               <option value="AB">AB</option>
               <option value="O">O</option>
            </select>
			<br><br>
         </fieldset>
		 <?php
		        $a = rand(2,9);
				$b = rand(2,9);
                $c = $a+$b;		 
    	        echo ''.$a."+".$b."=";?>
				 <input type="text" name="recaptcha" />
		 
		 <button input type="submit" class="btn btn-default">Register</button>
<?php include('footer.php')?>