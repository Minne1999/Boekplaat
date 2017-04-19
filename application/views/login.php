<?php
    session_start();

    if (isset($_POST['submit'])) {
        $username = strip_tags($this->input->post('name'));
        $password = strip_tags($this->input->post('password'));
             
        $query = $this->db->get("accounts");

		foreach ($query->result() as $row)
		{
            if( $username == $row->mail){
        if ($username == $row->mail && $password == $row->wachtwoord){
           header('Location: account');
        } else {
            echo "Incorrect Password";
        }
        }
		} 

       // $this->session->set_userdata($username);
       // $this->session->set_userdata($password); 

        /* $userLogin = array(
        'username'  => $username,
        'logged_in' => TRUE
        );

        $this->session->set_userdata($userLogin);
    */
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