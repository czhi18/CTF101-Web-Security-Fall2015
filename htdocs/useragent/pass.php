<div>
	<center>
		<h1>Thou shall not pass</h1>
		<font size="7">!!!</font>
		
		<h1>NOTICE: We only welcome spider here. </h1>
		<a href="pass.txt">Play cheat</a>
	</center>
</div>

<div>
	<center>
		<?php
		
			if (preg_match('/Googlebot/', $_SERVER['HTTP_USER_AGENT'])) {
				echo "<br><br>";
 				echo "Welcome my dear friend. <br>";
				echo "The flag is flag{s3arch_engin3}";
			}
		?>
	</center>
</div>