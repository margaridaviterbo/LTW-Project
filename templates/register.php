    <form action="../action/create.php" method="post">
        <input type="text" name="username" required="required"  placeholder= "Username"><br>

        <input type="text" name="name" required="required" placeholder= "Name"><br>

        <input type="e-mail" name="email" required="required" placeholder= "Email address"/><br><!-- nao apagar ^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$ -->
        
        <input type="password"  name="password" required="required" pattern=".{5,}" title="Password must be at least 5 characters long!" placeholder= "Password"/><br>

        <input type="password" name="confirm" required="required" placeholder= "Confirm Password"/><br>

        <input type="date" name="dateBirth" required="required" placeholder= "Date of Birth"/><br>

      <input type="submit" value="Register">
    </form>
