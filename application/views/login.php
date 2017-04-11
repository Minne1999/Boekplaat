<?php
    session_start();


    if (isset($_POST['submit'])) {
        $username = strip_tags($_POST['name']);
        $password = strip_tags($_POST['password']);
             
        $query = $this->db->get("accounts");

		foreach ($query->result() as $row)
		{

        if ($username == $row->mail && $password == $row->wachtwoord){
           header('Location: mijnAccount');
        } else {
            echo "Incorrect Password";
        }
		} 

     $_SESSION["username"] = $username;
     $_SESSION["password"] = $password;         
    }

?>

		<form method="post" action="login">
            <input type="text" name="name" placeholder="Name" /><br />
            <input type="text" name="password" placeholder="Password" /><br />
            <input type="submit" name="submit" value="Login" />
        </form>
        <p>heeft u nog geen account?</p>
        <a href="registreren">Registreren</a>
	</div>
</body>
</html>