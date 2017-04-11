<?php 

if(isset($_POST['submit'])){

	$data = array(
        'mail' => $this->input->post('mail') . '@edu.rocfriesepoort.nl',
        'wachtwoord' => $this->input->post('wachtwoord')
);

$this->db->insert('accounts', $data);
}

?>

		<form method="post" action="registreren">
        leerlingnummer:    <input type="text" name="mail" /><br />
        wachtwoord:    <input type="text" name="wachtwoord"/><br />
            <input type="submit" name="submit" value="registreren" />
        
        </form>	</div>
</body>
</html>