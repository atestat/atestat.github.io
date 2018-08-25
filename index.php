<?php
	include_once 'header.php';
?>

<section>

	<div id="video_container">
		<div class="cover"> </div>
		<video playsinline autoplay muted loop>
			<source src="resurse/Algoritmica.mp4" type="audio/mp4">
		</video>
		<div class="titlu">
			<h1> Limbajul de Programare C++ </h1><a name="text"></a>
		</div>
	</div>

	<div id="continut">
			<div id="titlu_lectie">
				Introducere
			</div>
			<div id="lectie">

				<div id="subtitlu">
					Limbajul C++
				</div>

				C++, denumit iniţial <i>C cu clase</i>, este o extensie a limbajului C, inventat de Dennis Ritchie la AT&T Bell Laboratories pe la începutul anilor 1970.<br />
				Ritchie a folosit acest limbaj pentru a crea şi întreţine sistemul de operare UNIX.<br />
La începutul anilor 1980, Bjarne Stroustrup (tot la AT&T Bell Laboratories) a inventat C++, având ca subset limbajul C. Motivul pentru care a făcut asta a fost că, deşi C era un limbaj popular (şi astăzi continuă să fie) nu avea caracteristicile unui limbaj OOP; C este un limbaj procedural.<br />
OOP (Programarea Obiect-Orientată) este cea mai populară şi puternică tehnică (paradigmă) de programare. Ideea de bază a OOP este că datele pot fi organizate în obiecte, fiecare cu atributele şi acţiunile specifice. Cele trei caracterisitici ale OOP sunt: încapsularea (encapsulation), moştenirea (inheritance) şi polimorfismul (polymorphism).<br />
Pe lângă OOP, C++ oferă suport şi pentru programarea generică (cu template-uri), tratarea excepţiilor, are propria sintaxă pentru managementul memoriei (C++ nu dispune de garbage collection), şi altele.

				<div id="subtitlu">
					Memoria
				</div>

				Trebuie să ştiţi că toate aplicaţiile pe care le rulaţi pe calculator (inclusiv elementele necesare funcţionării sistemului de operare) sunt încărcate în memoria <b>RAM</b> (Random Access Memory).<br /> Această memorie are caracter volatil (adică conţinutul său se poate schimba).<br />
Deci şi aplicaţiile care le veţi crea în C++ vor rula în memoria RAM, sau pe scurt, memorie.<br /> Atunci când o aplicaţie este închisă, sistemul de operare poate dispune de curăţarea zonei de memorie ocupată de acea aplicaţie.<br />
Atunci când opriţi calculatorul conţinutul memoriei RAM este pierdut, spre deosebire de hard-disk al cărui conţinut se păstrează. Capacitatea memoriei se măsoară în bytes. Un <b>byte</b> are 8 biţi, iar un <b>bit</b> reprezintă cantitatea de bază a informaţiei din sitemele informatice şi din telecomunicaţii. (<b>0</b> şi <b>1</b>).<br />
Fizic un bit este reprezentat în memoria RAM de o pereche formată dintr-un tranzistor şi un capacitor numită <b>celulă de memorie</b>. O celulă de memorie reprezintă 1 bit.<br />
Dacă capacitorul este încărcat (stochează electroni), înseamnă că bitul este 1, iar dacă este descărcat (nu are electroni) înseamnă că bitul este 0.<br />
Celulele de memorie sunt aranjate într-o matrice bidimensională, iar intersecţia dintre linia şi coloana celulei de memorie reprezintă <b>adresa</b> acesteia.<br />
Cunoscând adresa de memorie procesorul, poate cere conţinutul (informaţia) celulei de memorie respective.

				<div id="subtitlu">
					Codul sursa, Compilator, IDE
				</div>

				Codul sursă este codul C++ (sau alt limbaj) folosit la scrierea unui program într-un fişier cu extensia - pentru C++ - <b>.cpp</b> sau <b>.cc</b>.<br />
Înainte de a deveni executabil, acest fişier ce conţine codul sursă trebuie translatat într-un limbaj înţeles de calculator (codul maşină sau codul obiect). C++ este un limbaj de nivel înalt, adică este mai apropiat limbajului uman decât limbajului înţeles de calculator.<br />
Compilatorul este un program special care traduce codul sursă în cod maşină (binar).<br />
Un IDE (Integrated Development Environment) este un program ce cuprinde un editor de text, un compilator, debugger şi builder. Veţi folosi un IDE ca să creaţi programe C++.<br />

			</div>
			<div id="button">
			<a href="#text"><img src="resurse/sageata sus.png" height="50px" width="50px"/></a>
			</div>
	</div>

</section>

<?php
	include_once 'footer.php';
?>
