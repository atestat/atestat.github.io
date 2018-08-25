<?php 
	include_once 'header.php';
?>

<section>		
		<div id="continut">
			<div id="titlu_lectie">
				Algoritmul lui Euclid (CMMDC)
			</div>
			<div id="lectie">
				
				Algoritmul lui Euclid reprezintă o metodă eficientă de calculare a celui mai mare divizor comun (CMMDC) a două numere întregi. Algoritmul bazat pe împărţire (implementat în C++):
				
				<div id="cod">
				<pre>
int cmmdc(int a, int b)
{
    int t;
    while (b != 0)
    {
        t = b;
        b = a % b;
        a = t;
    }
    return a;
}
				</pre>
				</div>
				
				Funcţia de mai sus returnează CMMDC al numerelor a şi b. Există şi versiunea bazată pe scăderi repetate:
				
				<div id="cod">
				<pre>
int cmmdc(int a, int b)
{
    if(a == 0)
        return b;
    while(b != 0)
    {
        if(a > b) a -= b;
        else b -= a;
    }
    return a;
}
				</pre>
				</div>
				
				Bineînţeles că poate fi implementat şi recursiv:
				
				<div id="cod">
				<pre>
int cmmdc(int a, int b)
{
    if(b == 0)
        return a;
    else return cmmdc(b, a % b);
}
				</pre>
				</div>
				
				Pentru a calcula cel mai mic multiplu comun, înmulţiţi numerele a şi b, şi împărţiţi prin cmmdc. Exemplu:
				
				<div id="cod">
				<pre>
12 * 6 / cmmdc(12, 6);
				</pre>
				</div>
				
				<div id="subtitlu">
					Algoritmul lui Euclid extins
				</div>
				
				Algoritmul lui Euclid extins găseşte, pe lângă cmmmd al numerelor a şi b, întregii x şi y care satisfac identitatea lui Bézout:
				<pre>	ax + by = cmmdc(a , b)</pre>
				Implementarea algoritmului în C++:
				
				<div id="cod">
				<pre>
int euclidExtins(int a, int b, int& lastX, int& lastY)
{
    int x = 0, y = 1, q; lastX = 1; lastY = 0;
    // variabile temporare
    int tA, tX, tY;
    while(b != 0)
    {
        q = a / b; // aveti grija ca a > b
        tA = b; b = a % b; a = tA;
  
        tX = x; x = lastX - q * x; lastX = tX;
        tY = y; y = lastY - q * y; lastY = tY;
    }
    return a;
}
				</pre>
				</div>
				
				Algoritmul returnează cmmdc(a, b), iar prin referinţele lastX şi lastY returnează cei doi întregi x şi y. Exemplu:
				
				<div id="cod">
				<pre>
int main()
{
    int x, y;

    cout << euclidExtins(27, 6, x, y) << '\n'; // 3
    cout << x << ' ' << y; // 1 -4

    system("PAUSE");
    return 0;
}
				</pre>
				</div>
				
			</div>
			<div id="button">
				<a href="#"><img src="resurse/sageata sus.png" height="50px" width="50px"/></a>
			</div>			
		</div>
		
		<div id="subsol">
			Realizat de Alex si Cristi
		</div>
</section>

<?php 
	include_once 'footer.php';
?>