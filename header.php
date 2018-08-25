<?php 
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title> Limbajul C++ </title>
	<link href="resurse/style.css" type="text/css" rel="stylesheet">
	<link href="resurse/style_login.css" type="text/css" rel="stylesheet">
	<script src="resurse/login.js" type="text/javascript"></script>
</head>
<body>

<header>
	<div id="antet">
			PROIECT HTML / CSS / JAVA SCRIPT
		</div>

		<div id="meniu">
			<table><tr>
				<td><img src="resurse/cpp_programming.png" height="45px" width="70px" /></td>
				<td><ul>

						<li><a href="index.php">
							<img class="acasa" src="resurse/homepageicon.png"\>
						</a></li>

						<li><a> Lectii</a>

							<ul>

								<li><a> Tutoriale C++</a>
									<ul>

										<li><a href="resurse/Structura unui program C++.html"> Structura unui program C++</a></li>
										<li><a href="resurse/Identificatori - Variabile - Atribuire.html"> Identificatori - Variabile - Atribuire</a></li>
										<li><a href="resurse/Constante - Operatori Aritmetici - Atribuire compusă.html"> Constante - Operatori Aritmetici - Atribuire compusă</a></li>
										<li><a href="resurse/Input Output cu CIN şi COUT.html"> Input / Output cu CIN şi COUT</a></li>
										<li><a href="resurse/Booleeni şi Structuri de Control.html"> Booleeni şi Structuri de Control</a></li>
										<li><a href="resurse/Vectori - Tablouri de memorie.html"> Vectori - Tablouri de memorie</a></li>
										<li><a href="resurse/Funcţii (Subprograme).html"> Funcţii (Subprograme)</a></li>
										<li><a href="resurse/Pointeri, Memorie Dinamică, Referinţe.html"> Pointeri, Memorie Dinamică, Referinţe</a></li>

									</ul>
								</li>
								<li><a> Algoritmi</a>
									<ul>

										<li><a href="resurse/Primalitatea unui număr.html"> Primalitatea unui număr</a></li>
										<li><a href="resurse/Generarea Numerelor Prime.html"> Generarea Numerelor Prime</a></li>
										<li><a href="Algoritmul lui Euclid (CMMDC).php"> Algoritmul lui Euclid (CMMDC)</a></li>
										<li><a href="resurse/Căutarea Binară.html"> Căutarea Binară</a></li>
										<li><a href="resurse/Metoda bisecţiei.html"> Metoda bisecţiei</a></li>

									</ul>
								</li>
								<li><a> Structuri de date</a>
									<ul>

										<li><a href="resurse/Lista Liniară Simplu Înlănţuită.html"> Lista Liniară Simplu Înlănţuită</a></li>
										<li><a href="resurse/Lista Liniară Dublu Înlănţuită.html"> Lista Liniară Dublu Înlănţuită</a></li>
										<li><a href="resurse/Lista Circulară Simplu Înlanţuită.html"> Lista Circulară Simplu Înlanţuită</a></li>
										<li><a href="resurse/Stiva (Stack).html"> Stiva (Stack)</a></li>
										<li><a href="resurse/Coada (Queue).html"> Coada (Queue)</a></li>

									</ul>
								</li>

							</ul>

						</li>

						<li><a> Probleme</a>

							<ul>

								<li><a href="resurse/Tinta.html"> Tinta</a></li>
								<li><a href="resurse/Problema_2.html"> Problema_2</a></li>
								<li><a href="resurse/Problema_3.html"> Problema_3</a></li>
								<li><a href="resurse/Problema_4.html"> Problema_4</a></li>
								<li><a href="resurse/Problema_5.html"> Problema_5</a></li>
								<li><a href="resurse/Problema_6.html"> Problema_6</a></li>
								<li><a href="resurse/Problema_7.html"> Problema_7</a></li>

							</ul>

						</li>

						<li><a href="resurse/Test.html"> Test</a></li>

					</ul></td></tr></table>
					<?php 
	if (!isset($_SESSION['u_id'])) {
		echo '<div id="id01" class="ecran">
				<div id="conecteazate" class="login">
					<img src="resurse/avatar_login.png" class="avatar">
					<h2>Login Here</h2>
					<form action="include/login.inc.php" method="POST">
						<p>Username</p>
						<input type="text" name="uid" placeholder="Enter Username / E-mail">
						<p>Password</p>
						<input type="password" name="pwd" placeholder="Enter Password">
						<button type="submit" name="submit" class="cancelbtn">Login</button><br><br>
						<a href="#">Lost your password?</a><br>
						<button type="button" onclick="create()" class="creare_cont">Do not have an account?</button>
					</form>
				</div>
				<div id="creaza_cont" class="new_cont">
					<img src="resurse/avatar_login.png" class="avatar">
					<form action="include/signup.inc.php" method="POST">
						<p>First name</p>
						<input type="text" name="first" placeholder="Enter your first name">
						<p>Last name</p>
						<input type="text" name="last" placeholder="Enter your last name">
						<p>Username</p>
						<input type="text" name="uid" placeholder="Your username is...">
						<p>E-mail</p>
						<input type="text" name="email" placeholder="Your e-mail is...">
						<p>Password</p>
						<input type="password" name="pwd" placeholder="Your password is..."><br><br><br>
						<button type="submit" name="submit" onclick="signup()" class="cancelbtn">Sign in</button>
					</form>
				</div>
			</div>';
	} else {
		echo '<form action="include/logout.inc.php" method="POST" class="logout"><button id="logout" type="submit" name="submit"><b>Logout</b></button></form>';
	}
?>
		</div>
</header>