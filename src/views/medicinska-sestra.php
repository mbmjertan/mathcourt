<?php
include 'header.php';
?>
<section class="hero is-medium is-dark is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Medicinska sestra
      </h1>
      <h2 class="subtitle">
        Predmet 1
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
				<p>Optužuje se Lucija Berković, pedijatrijska medicinska sestra, za četiri ubojstva i tri pokušaja ubojstva pacijenata pod njenom skrbi nakon istrage povodom neočekivane smrti bebe u jednoj od bolnica u kojoj je radila.</p>

				<p>U periodu od 12 mjeseci, a za vrijeme njenih smjena na odjelima triju bolnica na kojima je radila i među pacijentima za koje je bila odgovorna, pronađeno je devet incidenata u toj bolnici koji su prvotno smatrani uobičajenima, ali su za vrijeme istrage određeni sumnjivima. Tužitelji smatraju kako je za te incidente odgovorna upravo gđa. Berković, tvrdeći da je otrovala pacijente dajući im smrtonosne doze lijekova koje im je administrirala.</p>

				<p>Tužiteljstvo prezentira ove podatke o incidentima:</p>

<table class="table">
	<thead>
		<tr>
			<th>Bolnica</th>
			<th>A</th>
			<th>B</th>
			<th>C</th>
			<th>Ukupno</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Ukupan broj smjena</td>
			<td>1029</td>
			<td>336</td>
			<td>339</td>
			<td>1734</td>
		</tr>
		<tr>
			<td>Lucijin broj smjena</td>
			<td>142</td>
			<td>1</td>
			<td>58</td>
			<td>201</td>
		</tr>
		<tr>
			<td>Ukupan broj incidenata</td>
			<td>8</td>
			<td>5</td>
			<td>14</td>
			<td>27</td>
		</tr>
		<tr>
			<td>Za vrijeme smjene</td>
			<td>8</td>
			<td>1</td>
			<td>5</td>
			<td>14</td>
		</tr>
	</tbody>
</table>


				<p>Tužiteljstvo tvrdi da je prema statističkim izračunima vjerojatnost da se smjene jedne medicinske sestre preklapaju s tim brojem smrti i oživljavanja (kako su definirani incidenti u kontekstu tablice) 1 u 342 milijuna.</p>

				<p>Tužiteljstvo je prvotno optužilo gđu. Berković za uzrokovanje 13 incidenata, ali je obrana sa sigurnošću pokazala da ona nije mogla biti prisutna za vrijeme nekih od tih incidenata: primjerice, u nekim slučajevima bila je odsutna, što zbog administrativnih grešaka nije zabilježeno u sustavu. Nadalje, u nekim slučajevima je u vrijeme u kojemu se tvrdi da je otrovala pacijente - prema podacima medicinskih uređaja - bila izvan bolesničke sobe, a da su specijalist i njegov pomoćnik bili s pacijentom u to vrijeme. Nadalje, sve smrti osim posljednje su bile smatrane prirodnom smrću od strane liječnika prvotno, no za vrijeme istrage su se počele smatrati sumnjivima.<p>

				<p>Nadalje, tužiteljstvo je kao dokaz iznijelo zapis iz Lucijinog dnevnika u kojemu na dan smrti jedne od njenih pacijentica, starice u terminalnoj fazi raka, piše kako je Lucija 'se predala svome poroku' te je u nekoliko drugih navrata pisala o 'svojoj velikoj tajni' i zabrinutosti u vezi 'njene tendencije da se preda svojoj kompulziji'. Obrana je tvrdila da je to referenca na njenu strast da čita tarot pacijentima, za što je smatrala da je neprimjereno raditi u bolnici, dok je tužiteljstvo to smatralo dokazom da je eutanazirala pacijente.</p>

				<p><b>Smatrate li Luciju Berković krivom?</b></p>

			</div>
		</div>
	</div>
	<?php
	$Vote = new Mathcourt\Vote();
	$Vote->question = 'medicinska-sestra';
	$Vote->cookie = $_COOKIE['mathcourt_cookie'];
	$Vote->fetch();
	if(!$Vote->id){
	?>
	<div class="container">
		  <center><a class="button is-danger" href="<?php echo $Config->trimpath;?>/glasaj/medicinska-sestra/guilty">Kriva!</a></center><br><br>
		  <center><a class="button is-success" href="<?php echo $Config->trimpath;?>/glasaj/medicinska-sestra/innocent">Nevina!</a></center><br><br>
		  <center><a class="button is-primary is-light" href="<?php echo $Config->trimpath;?>/glasaj/medicinska-sestra/doesntknow">Ne znam</a></center><br><br>

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
					<p>smatra optuženicu krivom</p>
				</div>
				<div class="column">
					<h2 class="has-text-success is-size-2"><?php echo ceil($Stats['innocent']/$Sum * 100); ?>%</h2>
					<p>smatra optuženicu nevinom</p>
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
<p>Podaci izneseni u ovom predmetu su o nizozemskoj medicinskoj sestri Lucia de Berk, koja je na temelju iznesenih dokaza osuđena na doživotnu zatvorsku kaznu bez pomilovanja za četiri ubojstva i tri pokušaja ubojstva pacijenata pod njenom skrbi.</p>

<p>No, ipak, vjerojatnost koju je tužiteljstvo iznijelo, a koja je bila jedan od temelja u ovom predmetu je bila pogrešna: dobivena vjerojatnost od 1 naprema 342 milijuna izračunata je kao vjerojatnost da se takve stvari poklope u te tri bolnice kao da su nasumični i odvojeni događaji, što oni svakako nisu. </p>

<p>H. Elffers, pravni psiholog koji je bio konzultiran kao statističar na slučaju je u svome modelu oslanjao se na dvije (pogrešno pojednostavljene) pretpostavke:<br><br>
1. Postoji fiksna vjerojatnost p da se dogodi incident za vrijeme smjene (primjerice, vjerojatnost p ne ovisi o tome radi li se o dnevnoj smjeni ili noćnom dežurstvu ili o sestri o kojoj je riječ i sl.)<br>
2. Incidenti se događaju neovisno jedan o drugome.</p>

<p>Koristeći model hipergeometrijske vjerojatnosti dan s <center><img src="https://mbmjertan.xyz/wp-content/uploads/2020/04/Screenshot-from-2020-04-13-20-22-48.png" style="max-height: 64px; display:flex;"></center> gdje je S broj smjena s Luciom de Berk, I ukupan broj incidenata, L broj incidenata u njenoj smjeni, a N broj promatranih smjena, dobio je vjerojatnost od 1:342 milijuna na temelju navedenih podataka. Uz nove podatke koje je dostavila obrana, ta vjerojatnost bi ipak bila 1:4.2 milijuna. </p>

<p>Alternativnim (i točnijim) korištenjem miješanog Poissonovog modela, vjerojatnost ovakvog poklapanja incidenata je otprilike 1:49, značajno veća od one koja je predstavljena na sudu.</p>

<p>Pogrešno je razmatrati vezane događaje kao nevezane: bacamo li novčić 10 puta i 5 puta dobijemo pismo - dobit ćemo vjerojatnost pisma 50%, kao na normalnom novčiću. Analogno, ako bacamo isti novčić 100 puta i 50 puta dobijemo pismo, vjerojatnost pisma će biti 50%. Ako taj novčić bacamo u 10 navrata po 10 puta i računamo to kao _neovisne_ događaje s vjerojatnosti 50% svaki, iako smo svaki put 5 puta dobili pismo, dobit ćemo da je vjerojatnost dobitka 50 pisama u 100 bacanja 0.09765625%, što bi ga činilo jako nepoštenim, iako je zapravo riječ o najnormalnijem novčiću: ovime smo dobili vjerojatnost da je zapravo u <i>svakom</i> od bacanja bilo <i>točno</i> 5 puta pismo, a ne vjerojatnost da ćemo dobiti pismo općenito.</p>

<p>Luciji de Berk presuđeno je da je kriva 2003. te je ponovnim suđenjem oslobođena 2010. uz nove matematičke analize i sudske dokaze.</p>

<p>Reference i više informacija:</p>
<ul><li>* <a href="https://en.wikipedia.org/wiki/Lucia_de_Berk">Wikipedia</a></li>
<li>* <a href="https://murderpedia.org/female.B/b/berk-lucia-de.htm">Murderpedia</a></li>
<li>* <a href="https://arxiv.org/pdf/1009.0802.pdf">Znanstveni rad o slučaju</a></li>
</ul>
			  <center><a class="button is-primary is-large" href="<?php echo $Config->trimpath;?>/predmet/dobro-dosla-moja-bivsa">Idući predmet: Dobro došla moja bivša</a></center><br><br>
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
