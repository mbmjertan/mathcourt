<?php
include 'header.php';
?>
<section class="hero is-medium is-dark is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Matematički sud
      </h1>
      <h2 class="subtitle">
        Uvod
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
				<p>U zadnje vrijeme, matematika se sve češće pojavljuje u medijima.</p>

				<p>Obično, to je stvar koja bi matematičare radovala, ali s obzirom na kontekst u kojem se pojavljuje, postaje manje radošću, a više izvorom straha, nesigurnosti i anksioznosti.</p>

				<p>S obzirom na to da je matematika izuzetno koristan alat za kvantifikaciju i bolje razumijevanje pojava iz našeg svakodnevnog života, postaje sve bitnijim znati što nam brojevi uistinu govore.</p>

				<p>Stoga, napravio sam ovu malu matematičku sudnicu: mjesto gdje ćete moći pročitati o sudskim predmetima u kojima se koristila matematika kao argument, suditi na temelju brojeva, saznati stvarnu istinu (ako je jasna) i tako razviti svoju intuiciju oko vjerojatnosti i statistike.</p>

				<p>Suđenje se odvija tako da kliknete na opciju za koju smatrate da je najvjerojatnije točna ili na opciju "Ne znam" ako nije moguće odrediti krivnju iz prezentiranih argumenata.</p>

				<p>Ima li rečenica "šanse da se ovi dokazi nađu kod nevinog čovjeka toliko su male da porota može bez sumnje zanemariti mogućnost da je optuženik nevin" dovoljno smisla?</p>
			</div>
		</div>
	</div>
	<div class="container">
		  <center><a class="button is-primary" href="<?php echo $Config->trimpath;?>/predmet/medicinska-sestra/">Započni igrati</a></center>
	</div>
	<hr>
	<div class="container">
		<p><small><br><br>Nastavkom pomoću gornjeg gumba se slažeš s time da ostavimo jedan kolačić (mathcourt_cookie) idućih godinu dana na tvome računalu kako bismo spriječili varanje. Isto tako se slažeš s time da koristimo Google Analytics kako bismo znali koliko je ljudi posjetilo ovu web stranicu i kako ju je koristilo. Ako ne želiš biti uključen u analitiku, <a href="<?php echo $Config->trimpath;?>/noanalytics/">možeš nastaviti klikom ovdje</a>, što će ostaviti još jedan kolačić (mathcourt_noanalytics) na tvome računalu u istom tom razdoblju.</p></small>
	</div>
	
</section>
<?php
include 'footer.php';
?>