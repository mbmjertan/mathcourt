<?php
include 'header.php';
?>
<section class="hero is-medium is-dark is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
      	Kradljivci
      </h1>
      <h2 class="subtitle">
        Predmet 3
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
				<p>Oko 11:30, baka na štakama je išla iz trgovine šetajući kući uličicom u Los Angelesu. Vukla je iza sebe kolica za kupnju povrh kojih je stajala njena torbica. Kako se sagnula da pokupi praznu kutiju, neka osoba koju nije ni vidjela da prilazi niti čula ju je srušila na zemlju. Bila je ošamućena i u bolovima, no uspjela je pogledati prema gore i vidjela je mladu ženu kako bježi. Prema njenom kasnijem iskazu, žena je imala oko 65 kilograma, nosila je "nešto smeđe" i "imala kosu između tamnoplave i svijetloplave".</p>

				<p>Odmah nakon incidenta, baka je uočila kako joj je nestala torbica koja je sadržavala između 2000 i 2300 kuna (prema današnjoj vrijednosti).</p>

				<p>Jedan od stanara uličice svjedočio je događaju te je vidio ženu kako trči iz uličice u žuti automobil u ulici nasuprot njegovoj. Automobil je odmah krenuo i prošao je na dva metra od njega, kada je primijetio da ga vozi muškarac crne boje kože s bradom i brkovima, dok je ženu opisao kao osobu bijele boje kože, visine nešto iznad 150 cm, obične građe, s kosom vezanom u rep tamnoplave boje i u tamnoj odjeći.</p>

				<p>Temeljem tih opisa, identificirano je dvoje ljudi: domaćica, za koju je poslodavac tvrdio da je došla na posao u 8:50 i da je po nju došao optuženi muškarac u svijetlo žutom automobilu oko 11:30 i njen muž, koji je tvrdio da nije imao bradu taj dan, već da ju je obrijao 16 dana ranije. Pružili su alibi: da su išli kod prijatelja u goste.</p>

				<p>Također, policija je ustanovila da je optuženi muškarac platio dan nakon pljačke dvije prometne kazne, u ukupnom iznosu od 2000 kuna, za koje je on tvrdio da je osvojio klađenjem.</p>

				<p>Po uhićenju, optuženica je upitala nasamo policajca što bi bio ishod kada bi se ispostavilo da je ona sama počinila zločin i da njen muž nije znao ništa o tome, ali nije priznala ništa konkretno.</p>

				<p>Na sudu, s obzirom na to da konkretnijih dokaza nije bilo, tužiteljstvo je pozvalo sveučilišnog nastavnika matematike kako bi ojačalo tvrdnje oko vjerojatnosti da su upravo optuženici počinili zločin.</p>

				<p>Nastavnik matematike svjedočio je o pravilu umnoška za vjerojatnost i uz sljedeće pretpostavke je došao do zaključka da je vjerojatnost kako se radi o nekom drugom paru 1:12 milijuna.</p>

				<pre>
				Muškarac crne boje kože s bradom	1 u 10
				Muškarac s brkovima	1 u 4
				Žena bijele boje kože s repom	1 u 10
				Žena bijele boje kože s plavom kosom 	1 u 3
				Žuti automobil 	1 u 10
				Par različite boje kože zajedno u automobilu 	1 u 1,000
				</pre>

				<p><b>Jesu li ovi podaci dovoljni za presudu?</b></p>
			</div>
		</div>
	</div>
	<?php
	$Vote = new Mathcourt\Vote();
	$Vote->question = 'kradljivci';
	$Vote->cookie = $_COOKIE['mathcourt_cookie'];
	$Vote->fetch();
	if(!$Vote->id){
	?>
	<div class="container">
		  <center><a class="button is-danger" href="<?php echo $Config->trimpath;?>/glasaj/kradljivci/guilty">Krivi su!</a></center><br><br>
		  <center><a class="button is-success" href="<?php echo $Config->trimpath;?>/glasaj/kradljivci/innocent">Nevini su!</a></center><br><br>
		  <center><a class="button is-primary is-light" href="<?php echo $Config->trimpath;?>/glasaj/kradljivci/doesntknow">Ne znam</a></center><br><br>

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
					<p>smatra optuženike krivima</p>
				</div>
				<div class="column">
					<h2 class="has-text-success is-size-2"><?php echo ceil($Stats['innocent']/$Sum * 100); ?>%</h2>
					<p>smatra optuženike nevinima</p>
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
<p>U ovom slučaju, People v. Collins, na prvostupanjskom sudu je porota presudila da je par kriv, imajući kao glavni argument njihove krivnje navedenu vjerojatnost.</p>

<p>Ipak, s obzirom na to da je matematika iza te vjerojatnosti pogrešna, Vrhovni sud Kalifornije poništio je presudu muškarcu, dok se njegova žena nije žalila na presudu.</p>

<p>Zašto je navedena vjerojatnost pogrešna? Ponovno, iz sličnog razloga kao u prvom slučaju: uvjetna vjerojatnost je ignorirana. Tužitelji su poroti predstavili kako je vjerojatnost da je riječ o nekome drugome izuzetno mala, pa su se ignorirale činjenice da - primjerice - muškarci s bradom često imaju i brkove, to jest, da su ove vjerojatnosti izgleda ipak vezane jedna uz drugu, stoga porota - bez stvarnog znanja vjerojatnosti - nije mogla bolje ni presuditi.</p>

<p>U presudi Vrhovnog suda, navodi se da bi korektan statistički zaključak bio vjerojatnost da "nijedan drugi par koji je mogao počiniti pljačku nije imao ista obilježja kao i optuženici, imajući na umu da barem jedan par s tim obilježjima postoji", a da bi uz tu metodologiju zaključivanja, čak i kad bi vjerojatnosti obilježja bile upravo onakve kakvima ih je tužiteljstvo navelo, a štoviše i kada bi još k tomu bilo riječ o nezavisnim vjerojatnostima, da bi vjerojatnost njihove nevinosti <b>bila preko 40%</b>.<p>

<p>Je li optuženi par kriv? Ne znamo. Dokazi koji su izneseni nisu bili dovoljni za adekvatnu i poštenu presudu, ali ono što znamo je da je matematika bila pogrešna.</p>



<p>Reference i više informacija:</p>
<ul><li>* <a href="https://en.wikipedia.org/wiki/People_v._Collins">Wikipedia</a></li>
<li>* <a href="https://scholar.google.hr/scholar_case?case=2393563144534950884&hl=en&as_sdt=6&as_vis=1&oi=scholarr">Odluka Vrhovnog suda, Google Scholar</a></li>

</ul>
			  <center><a class="button is-primary is-large" href="<?php echo $Config->trimpath;?>/zakljucak">Zaključak</a></center><br><br>
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