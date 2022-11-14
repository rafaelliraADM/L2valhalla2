<?php if(!$indexing) { echo "<script>document.location.replace('./');</script>"; exit; } ?>

<!-- Countdown INI -->
<?php if($counterActived == 1) { $inauguracao = mktime($cHor,$cMin,0,$cMes,$cDia,$cAno); if(time() < $inauguracao) { ?>
<h1><?php echo $LANG[10999]; ?></h1>
<div style="font-size: 24px; text-align:center; padding: 0 0 0 25px;">
	<?php echo $cDia." ".date('F', $inauguracao).", ".$cAno." &bullet; ".$cHor.":".$cMin; ?> <span style='font-size:11px; font-weight:bold; font-style:italic; vertical-align: super;'>(UTC <?php echo $cGMT; ?>)</span>
</div>
<link href="css/soon.min.css" rel="stylesheet" />
<div class="atualstudioCountdown">
	<style>
		@import url(http://fonts.googleapis.com/css?family=Quicksand);
		#soon-glow { font-family: 'Quicksand', sans-serif; color: #000; background: transparent; text-transform:lowercase; }
		#soon-glow .soon-label { color: #000; text-shadow:0 0 .25rem rgba(0,0,0,.75); }
		#soon-glow .soon-ring-progress { color: #000; background-color:rgba(0,0,0,.15); }
		#soon-glow>.soon-group { margin-bottom:-.5em; }
		.soon[data-layout*="group"] { padding-top: 20px; }
		.soon[data-face*="glow"] .soon-separator, .soon[data-face*="glow"] .soon-slot-inner { text-shadow: 0 0 .125em rgba(0,0,0,.75); }
	</style>
	<div class="soon" id="soon-glow" data-layout="group overlap" data-face="slot doctor glow" data-padding="false" data-scale-max="l" data-visual="ring color-light width-thin glow-progress length-70 gap-0 offset-65"></div>
</div>
<script>(function(){ var i=0,soons = document.querySelectorAll('.atualstudioCountdown .soon'),l=soons.length; for(;i<l;i++) { soons[i].setAttribute('data-due','<?php echo date("Y-m-d\TH:i:s", mktime(($cHor+$sumH), $cMin, 0, $cMes, $cDia, $cAno)); ?>'); soons[i].setAttribute('data-now','<?php echo date("Y-m-d\TH:i:s"); ?>'); } }());</script>
<script src="js/soon.min.js" data-auto="false"></script><script>var soons = document.querySelectorAll('.atualstudioCountdown .soon'); for(var i=0;i<soons.length;i++) { Soon.create(soons[i]); }</script>

<?php } } ?>
<hr />
<div class='pddInner'>







	
	<?php echo $LANG[11002]; ?>
	

<h2>Pvp/Pk System rewards</h2>
Pvp Nick Color:  
<font color="f595cf">100</font> <font color="FF00FF">300</font> <font color="006400">500</font> <font color="8000">700</font> <font color="20A5DA">1000</font> <font color="9060CD">1200</font> <font color="3333CD">1500</font> <font color="2F3E8B">1800</font> <font color="8B658B">2000</font> <font color="8FF6FF">2500</font> 

<font color="00FFFF">3000</font> <font color="00D7FF">3500</font> <font color="B469FF">4000</font> <font color="D355BA">4500</font>

<font color="8B8B00">5000</font> <font color="8B008B">5500</font> <font color="00008B">6000</font> <font color="90EE90">6500</font> <font color="1D66CD">7000</font> <font color="13458B">7500</font> <font color="FF309B">8000</font> <font color="EE2C91">8500</font> <font color="FF82AB">9000</font> 

<font color="3A3A8B">9500</font> <font color="55738B">10000</font> <font color="00758B">11000</font> <font color="23C1FF">12000</font> <font color="008B8B">13000</font> <font color="8B2268">14000</font> <font color="00C9EE">15000</font> <font color="2FFFAD">16000</font> <font color="FFFF00">18000</font> <font color="1">20000</font> <br><br>

Pk Tittle Color: <font color="3A3A8B">50</font> <font color="55738B">100</font> <font color="00758B">300</font> <font color="23C1FF">500</font> <font color="008B8B">700</font> <font color="8B2268">1000</font> <font color="00C9EE">1500</font> <font color="2FFFAD">2000</font> <font color="FFFF00">2500</font> 
<font color="8B8B00">3000</font> <font color="8B008B">3500</font> <font color="00008B">4000</font> <font color="90EE90">4500</font> <font color="1D66CD">5000</font> <font color="13458B">5500</font> <font color="FF309B">6000</font> <font color="EE2C91">6500</font> <font color="FF82AB">7000</font> 
<font color="1">10000</font> <br><br>

among other rewards: Skill and acessory
<hr />

<h2>Grand Olympiad</h2>
Olympiads Full Itens<br />
Max Enchant in Olympiads: (without restriction)<br />
Olympiad min players: 9 (Non-Classed)<br />
Start Date: 01 June<br />
Schedules: 18:00 until 23:59 PM UTC-3<br />
New periods on each 7 days.<br />
Rules : retail like<br />


<hr />

<h2>Protections</h2>
Secured Server uptime 99,9% Online 24 hours<br />
Server with guaranteed stability No Lag for thousands of players<br />
All Injection Protections<br />
DDoS Protection by IdelHost<br />
Geodata and Pathnodes working 100%<br />

<hr />

<h2>Downloads and Registers</h2>
Dear players, Downloads and Registrations will be avaliable on November, 08 at 23:59 (UTC-3)<br />
Keep that date, go ahead and come be one of the first to connect in the grand opening.<br />
We wait for you and your friends! <br />

<hr />
</div>