		<div id="contactForm">
		<form action="" method="post">
			<legend>Stuur een bericht naar onze admin:</legend> 
			<input type="text" placeholder="leerlingnummer" Name="llnummer" id="llnummer"> <br/>
			<textarea id=Textarea name="message"></textarea> <br/>
			<input type="submit" id="contactButton">

		</form>

		<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = array(
	                'LeerlingNummer' => $_POST["llnummer"],
	                'Bericht' => $_POST["message"],
	                'Datum' => date("Y-m-d")
	            );

	            if ($this->db->insert('contactmessage', $data))
	            {
	                echo '<div style="
	                	margin-top: 10px;
						margin-bottom: 10px;
						height: 30px;
						width: 200px;
						text-align: center;
						font-size: 20px;
						border-radius: 3px;
						border: 2px solid #0DA6E0;
					">';
	                echo 'Bericht verzonden!';
	                echo '</div>';
	            }
	            else
	            {
	                // error
	                echo '<div style="
	                	margin-top: 10px;
						margin-bottom: 10px;
						height: 30px;
						width: 200px;
						text-align: center;
						font-size: 20px;
						border-radius: 3px;
						border: 2px solid #0DA6E0;
					">';
	                echo 'Verzenden mislukt!';
	                echo '</div>';
	            }
        	}
		?>
		</div>

	</div>
</body>
</html>