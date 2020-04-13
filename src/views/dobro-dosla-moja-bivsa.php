<?php
include 'header.php';
?>
<section class="hero is-medium is-dark is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
      	Dobro došla moja bivša
      </h1>
      <h2 class="subtitle">
        Predmet 2
      </h2>
    </div>
  </div>
</section>
<section class="body">
	<div class="container">
		<div class="columns">
			<div class="column">
				<?php include 'menu.php'; ?>
			</div>
			<div class="column is-four-fifths">
				<p>U 00:10, Nikolina i Robert pronađeni su mrtvi ispred njene zgrade te se pretpostavlja da su bili mrtvi oko sat vremena prije dolaska policije. Nikolinin pas je krvavih šapa doveo susjede do njihovih tijela te je jedan od susjeda pronašao tijela i zvao policiju.</p>

				<p>Nikolina je nađena okrenuta licem prema dolje i bosonoga na dnu stepenica koje vode do njenih ulaznih vrata, koja su bila otvorena, bez znakova provaljivanja ili bilo kakvih znakova da je itko ušao na posjed. Mjesto zločina imalo je veliku količinu krvi, ali njene pete su bile čiste, pa su detektivi zaključili da je ona ubijena prva i da je bila metom ubojstva s predumišljajem. Robert je nađen u blizini kako leži, blizu drveta i ograde. </p>

				<p>Dokazi koji su nađeni na mjestu zločinca su bili i forenzički, uključujući napadačevu plavu kapu i krvavu lijevu rukavicu. Također, bili su prisutni i krvavi otisci cipela i kapljice krvi napadača.</p>

				<p>Za ubojstvo se sudi Nikolininom bivšem mužu koji ima povijest obiteljskog nasilja te je već bio kažnjavan za fizičko nasilje prema Nikolini, a opisano je i financijsko i psihološko nasilje prema njoj. </p>

				<p>Te je večeri, prema teoriji tužitelja, on bio na plesnoj predstavi svoje kćeri s Nikolinom te se naljutio na nju zbog haljine koju je nosila. Ipak, nakon predstave ostavio je poruku govorne pošte svojoj trenutnoj djevojci kako bi s njome prekinuo, te se navodno odvezao do Nikoline u nadi da se pomire i kada ga je odbila - ubio.</p>

				<p>Uz 108 forenzičkih dokaza koji ukazuju na to, tužitelji smatraju kako je Nikolinin bivši muž ubojica, smatrajući kako je vjerojatnost da on nije ubojica prema krvavim otiscima cipela 1:9.7 milijardi, a da krv pronađena u njenoj spavaćoj sobi nije njegova 1:6.8 milijardi. </p>

				<p>Obrana, ipak, tvrdi da su DNA dokazi bili 'kompromitirani, kontaminirani i koruptirani', kao i da je mogućnost pogreške veća te da karakteristike krvi koje su ispitivane podudaraju kod otprilike svake 400. osobe te da bi se mogao cijeli nogometni stadion napuniti ljudima koji bi odgovorali uzorku.</p>

				<p><b>Imajući samo ove podatke na umu, što mislite, tko je kriv? Koja je vjerojatnost točna?</b></p>
			</div>
		</div>
	</div>
	<?php
	$Vote = new Mathcourt\Vote();
	$Vote->question = 'dobro-dosla-moja-bivsa';
	$Vote->cookie = $_COOKIE['mathcourt_cookie'];
	$Vote->fetch();
	if(!$Vote->id){
	?>
	<div class="container">
		  <center><a class="button is-danger" href="<?php echo $Config->trimpath;?>/glasaj/dobro-dosla-moja-bivsa/guilty">Kriv je bivši muž!</a></center><br><br>
		  <center><a class="button is-success" href="<?php echo $Config->trimpath;?>/glasaj/dobro-dosla-moja-bivsa/innocent">Nevin je!</a></center><br><br>
		  <center><a class="button is-primary is-light" href="<?php echo $Config->trimpath;?>/glasaj/dobro-dosla-moja-bivsa/doesntknow">Ne znam</a></center><br><br>

	</div>
	<?php
		}
		else{
			$Stats = $Vote->stats();
			$Sum = $Stats['guilty'] + $Stats['innocent'] + $Stats['doesntknow'];
		?>
		<div class="hero is-dark">
			<div class="hero-body">
			<div class="container">
			<div class="columns">
				<div class="column">
					<h2 class="has-text-danger is-size-2"><?php echo ceil($Stats['guilty']/$Sum * 100); ?>%</h2>
					<p>smatra optuženika krivim</p>
				</div>
				<div class="column">
					<h2 class="has-text-success is-size-2"><?php echo ceil($Stats['innocent']/$Sum * 100); ?>%</h2>
					<p>smatra optuženika nevinim</p>
				</div>
				<div class="column">
					<h2 class="has-text-primary is-size-2"><?php echo ceil($Stats['doesntknow']/$Sum * 100); ?>%</h2>
					<p>ne zna</p>
				</div>
			</div>
		</div>
		</div>
		</div>
<div class="container">
<div class="columns">
	<div class="column">
	</div>
	<div class="column is-four-fifths">
<h2 class="is-size-2">Rješenje</h2>
<p>Podaci o kojima se govorilo su podaci o slučaju O. J. Simpsona, za kojeg vrlo vjerojatno već znate: O. J. Simpson ubio je svoju bivšu ženu i njena prijatelja, a u zatvor su ga naposljetku stavili upravo forenzički dokazi.</p>

<p>No, odakle ova brojka od 1:400 o kojoj obrana priča?</p>

<p>Naime, riječ je o <a href="https://en.wikipedia.org/wiki/Birthday_problem">paradoksu rođendana</a>: šanse da će dvije osobe od n nasumičnih u danoj prostoriji imati isti rođendan su 50% za već n=23, a 99.9% za već n=70, iako ima najviše 366 dana u godini. Upravo tom logikom, koristeći <a href="https://en.wikipedia.org/wiki/Pigeonhole_principle">pristup golubinjaka</a> kad on nema smisla, navodila se obrana. </p>

<p>Dakle, ako u određenoj prostoriji imamo 70 nasumično odabranih ljudi, gotovo je potpuno sigurno da će <i>neke dvije</i> osobe dijeliti rođendan u njoj. Ipak, ako tražimo da u sobi postoji osoba s <i>točnom određenim</i> rođendanom, trebat će nam za isti taj zaključak puno veći broj ljudi.</p>

<p>Obrana je tvrdila da usporedbe s uzorkom mogu negirati upravo tim argumentom s 23 osobe, ali to nije tako: u prostoriji s 23 pojedinca radimo 253 usporedbe da bismo vidjeli ima li neki par ljudi isti rođendan (odnosno jednake DNA 'komponente' na određenim pozicijama, jer je problem uzeti nečiji cijeli DNA), dok uspoređivanjem s točno određenim uzorkom radimo upravo 23 usporedbe - samo s tim uzorkom, stoga je i konačna vjerojatnost manja.</p>


<p>Reference i više informacija:</p>
<ul><li>* <a href="https://en.wikipedia.org/wiki/O._J._Simpson_murder_case">Wikipedia (1)</a></li>
<li>* <a href="https://en.wikipedia.org/wiki/DNA_Evidence_in_the_O._J._Simpson_murder_case">Wikipedia (2)</a></li>
<li>* <a href=" https://en.wikipedia.org/wiki/Birthday_problem">Wikipedia (3)</a></li>
<li>* <a href="https://en.wikipedia.org/wiki/Pigeonhole_principle">Wikipedia (4)</a></li>
</ul>
			  <center><a class="button is-primary is-large" href="<?php echo $Config->trimpath;?>/predmet/kradljivci">Idući predmet: Kradljivci</a></center><br><br>
</div>
</div>
</div>
	<?php
		}
	?>
	<hr>
	
</section>
<?php
include 'footer.php';
?>