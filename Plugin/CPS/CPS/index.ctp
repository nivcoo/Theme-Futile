<style>.cps:hover {
	background-color: #D8D8D8;
	cursor: Pointer;
	text-align: center;
}

.cps {
	text-align: center;
	padding-top: 25px;
	padding-bottom: 25px;
}

.cps:selection {
	background: transparent;
}

.cps {
	user-select: none;
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
}

.textc {
	padding-top: 25px;
	padding-bottom: 25px;
}
</style>

<!-- HTML -->
<div class="head-pages"<?php if($theme_config['accueil']->slider != ""): ?>
style="background: url('<?= $theme_config['accueil']->slider ?>') no-repeat top fixed;background-size: cover;"
<?php else: ?>
style="background: url(../theme/Futile/img/banniere.png) no-repeat top fixed;background-size: cover;"
<?php endif; ?>>
</div>
<div class="title-pages text-center">
	<h2 class="section-heading-pages"><?= $Lang->get('COUNTER'); ?></h2>
</div>
<div style="margin-top:20px;margin-bottom: 20px" class="container">
	<p id="aff"><?= $Lang->get('CLICK__NUMBER') ?> : </p>
	<p id="cps"><?= $Lang->get('CPS__NUMBER') ?> : </p>
	<br>
	<div class="well well-large cps" id="countcps">
		<div>
			<div class="click-div textc">
				<?= $Lang->get('START') ?>
			</div>
		</div>
	</div>
	<p id="bip">Timer : 0</p>
	<p class=""></p>
	&Agrave; la seconde ou vous cliquer, un chronometre se lance et vous disposez de 10 secondes pour cliquez un maximum
	de fois.<br>
	Grace &agrave; ce nombre de clics, nous pourront definir votre CPS !
</div><br><br>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
  var clicks = 0;
  var timer = 10;
  var x;
  var begin = false;

  $('.click-div').click(function () {
    if (!begin) {
      startTimer();
    }
    else {
      addClick()
    }
  })

  function addClick()
  {
    clicks++;
    $('#aff').html('<?= $Lang->get("CLICK__NUMBER") ?> : ' + clicks)
  }

  function startTimer() {
    begin = true;
    x = setInterval(updateTimer, 1000);
    $('.click-div').html('CLIQUEZ');
    $('#bip').html('Timer: ' + timer + " secondes.")
    $('#aff').html('<?= $Lang->get("CLICK__NUMBER") ?> :')
    $('#cps').html('<?= $Lang->get("CPS__NUMBER") ?> :')
  }

  function stopTimer() {
    begin = false;
    clearInterval(x);
    $('#bip').html('<?= $Lang->get("CPS__NUMBER") ?> : 0')
    $('#cps').html('<?= $Lang->get("CLICK__NUMBER") ?> : '+(clicks/10))
    alert('Vous avez fait ' + (clicks/10) + ' cps')
    timer = 10;
    clicks = 0;
    $('.click-div').html('<?= $Lang->get("RESTART") ?>');
  }

  function updateTimer() {
    timer--;
    if (timer > 0) {
      if (timer == 1) {
        var suffix = " seconde.";
      } else {
        var suffix = " secondes.";
      }
      $('#bip').html('Timer: ' + timer + " " + suffix)
    }
    else {
      stopTimer()
    }
  }
</script>
