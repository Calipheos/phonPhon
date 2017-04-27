<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pre-fortis clipping</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
 function playSound (id){
   //alert(id);
    var audio = document.getElementById(id);
    audio.setAttribute('src', 'media/soundFiles/clipping/'+id+'.mp3');
    //audio.load();
    audio.play();
 }
  </script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

</head>

<body>

<h1 class="text-center">Pre-fortis clipping</h1>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading"><h4>Definition: Pre-fortis clipping /ˌpriːˌfɔːtɪs ˈklɪpɪŋ/</h4></div>
    <div class="panel-body">
      <p>
        Fortis consonants have the effect of shortening a preceding vowel or sonorant consonant,
        so that, for example, ‘bit’ has a shorter vowel than ‘bid’. This effect is sometimes called
        pre-fortis clipping.
      </p>
      </div>
    <div class="panel-footer"><p class="text-muted">Definition from: <a href="http://www.peterroach.net/glossary.html" target="_blank">Peter Roach - Glossary</a></p></div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body text-center">
      <p>
        Choose the vowel you wish to practice and then click the word to play its pronunciation.<br>
        <!-- Shaded boxes do not have a sound associated with the word, yet.<br> -->
        If you can't hear sound after trying several words, adjust your audio settings in your device.
      </p>
      </div>
  </div>
  <div class="panel panel-danger">
    <div class="panel-body text-center">
      <p>
        <b>Note:</b> Please be aware, that we do not recommend using the interactive function (playing a sound after a click on a word) on devices with limited data usage.
      </p>
      </div>
  </div>

<!--
  <style>
  .noSound {background-color: #C8C8C8; }
  </style>



 -->




<div class="panel-group text-center" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse13">
      <h3 class="panel-title">
        <b>See the full table</b>
      </h3>
    </div>
    <div id="collapse13" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">

        <thead class="thead-default">
        <tr>
         <th class="col-lg-1 col-md-1"></th>
         <th class="col-lg-1 col-md-1"></th>
         <th class="col-lg-1 col-md-1">/d/</th>
         <th class="col-lg-1 col-md-1">/t/</th>
         <th class="col-lg-1 col-md-1">/g/</th>
         <th class="col-lg-1 col-md-1">/k/</th>
         <th class="col-lg-1 col-md-1">/v/</th>
         <th class="col-lg-1 col-md-1">/f/</th>
         <th class="col-lg-1 col-md-1">/z/</th>
         <th class="col-lg-1 col-md-1">/s/</th>
        </tr>
      </thead>

        <tr>
         <th rowspan="12">/i&#720;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/biː/" onclick="playSound('bee');">bee<audio id="bee"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/bi:d/" onclick="playSound('bead');">bead, Bede<audio id="bead"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/biːt/" onclick="playSound('beat');">beat, beet<audio id="beat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/fiː/" onclick="playSound('fee');">fee<audio id="fee"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/fiːd/" onclick="playSound('feed');">feed<audio id="feed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/fiːt/" onclick="playSound('feet');">feet, feat<audio id="feet"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/hiː/" onclick="playSound('he');">he<audio id="he"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hiːd/" onclick="playSound('heed');">heed, he'd<audio id="heed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hiːt/" onclick="playSound('heat');">heat<audio id="heat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/niː/" onclick="playSound('knee');">knee<audio id="knee"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/niːd/" onclick="playSound('need');">need, knead<audio id="need"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/niːt/" onclick="playSound('neat');">neat<audio id="neat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/niːz/" onclick="playSound('knees');">knees<audio id="knees"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/niːs/" onclick="playSound('niece');">niece<audio id="niece"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/liː/" onclick="playSound('lea');">lea<audio id="lea"></audio></div></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/liːg/" onclick="playSound('league');">league<audio id="league"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/liːk/" onclick="playSound('leak');">leak<audio id="leak"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/liːv/" onclick="playSound('leave');">leave<audio id="leave"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/liːf/" onclick="playSound('leaf');">leaf<audio id="leaf"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/liːz/" onclick="playSound('leas');">leas<audio id="leas"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/liːs/" onclick="playSound('lease');">lease<audio id="lease"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/miː/" onclick="playSound('me');">me<audio id="me"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/miːd/" onclick="playSound('mead');">mead<audio id="mead"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/miːt/" onclick="playSound('meat');">meat, meet, mete<audio id="meat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/piː/" onclick="playSound('pea');">pea<audio id="pea"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/piːd/" onclick="playSound('peed');">peed<audio id="peed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/piːt/" onclick="playSound('peat');">peat<audio id="peat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/piːz/" onclick="playSound('peas');">peas, pees<audio id="peas"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/piːs/" onclick="playSound('peace');">peace, piece<audio id="peace"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/pliː/" onclick="playSound('plea');">plea<audio id="plea"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pliːd/" onclick="playSound('plead');">plead<audio id="plead"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pliːt/" onclick="playSound('pleat');">pleat<audio id="pleat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/siː/" onclick="playSound('see');">see<audio id="see"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/siːd/" onclick="playSound('seed');">seed, cede<audio id="seed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/siːt/" onclick="playSound('seat');">seat<audio id="seat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/siːz/" onclick="playSound('seize');">seize, sees, seas<audio id="seize"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/siːs/" onclick="playSound('cease');">cease<audio id="cease"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/ʃiː/" onclick="playSound('she');">she<audio id="she"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/ʃiːd/" onclick="playSound('sheed');">she'd<audio id="sheed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/ʃiːt/" onclick="playSound('sheet');">sheet<audio id="sheet"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/tiː/" onclick="playSound('tea');">tea<audio id="tea"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/tiːd/" onclick="playSound('teed');">teed<audio id="teed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/tiːt/" onclick="playSound('teat');">teat<audio id="teat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/wiː/" onclick="playSound('we');">we<audio id="we"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/wiːd/" onclick="playSound('weed');">weed, we'd<audio id="weed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/wiːt/" onclick="playSound('wheat');">wheat<audio id="wheat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>

        <tr>
         <th rowspan="4">/&#593;&#720;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/bɑː/" onclick="playSound('bar');">bar<audio id="bar"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/bɑːd/" onclick="playSound('bard');">bard, barred<audio id="bard"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/bɑːt/" onclick="playSound('Bart');">Bart<audio id="Bart"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɑː/" onclick="playSound('car');">car<audio id="car"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɑːd/" onclick="playSound('card');">card<audio id="card"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɑːt/" onclick="playSound('cart');">cart<audio id="cart"></audio></div></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɑːv/" onclick="playSound('calve');">calve<audio id="calve"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɑːf/" onclick="playSound('calf');">calf<audio id="calf"></audio></div></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɑːv/" onclick="playSound('halve');">halve<audio id="halve"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɑːf/" onclick="playSound('half');">half<audio id="half"></audio></div></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/spɑː/" onclick="playSound('spa');">spa, spar<audio id="spa"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/spɑːz/" onclick="playSound('spas');">spas, spars<audio id="spas"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/spɑːs/" onclick="playSound('sparce');">sparce<audio id="sparce"></audio></div></td>
        </tr>

        <tr>
         <th rowspan="4">/&#604;&#720;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɜː/" onclick="playSound('cur');">cur<audio id="cur"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɜːz/" onclick="playSound('curs');">curs<audio id="curs"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɜːs/" onclick="playSound('curse');">curse<audio id="curse"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɜː/" onclick="playSound('her');">her<audio id="her"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɜːd/" onclick="playSound('heard');">heard, herd<audio id="heard"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɜːt/" onclick="playSound('hurt');">hurt<audio id="hurt"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɜːz/" onclick="playSound('hers');">hers<audio id="hers"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɜːs/" onclick="playSound('hearse');">hearse<audio id="hearse"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/pɜː/" onclick="playSound('purr');">purr<audio id="purr"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pɜːd/" onclick="playSound('purred');">purred<audio id="purred"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pɜːt/" onclick="playSound('pert');">pert<audio id="pert"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pɜːz/" onclick="playSound('purrs');">purrs<audio id="purrs"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pɜːs/" onclick="playSound('purse');">purse<audio id="purse"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/wɜː/" onclick="playSound('were');">were, whirr<audio id="were"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/wɜːz/" onclick="playSound('whirrs');">whirrs<audio id="whirrs"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/wɜːs/" onclick="playSound('worse');">worse<audio id="worse"></audio></div></td>
        </tr>

        <tr>
         <th rowspan="5">/u&#720;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/ʃuː/" onclick="playSound('shoe');">shoe<audio id="shoe"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/ʃuːd/" onclick="playSound('shoed');">shoed<audio id="shoed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/ʃuːt/" onclick="playSound('shoot');">shoot, chute<audio id="shoot"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/dʒuː/" onclick="playSound('Jew');">Jew<audio id="Jew"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/dʒuːz/" onclick="playSound('Jews');">Jews<audio id="Jews"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/dʒuːs/" onclick="playSound('juice');">juice<audio id="juice"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/muː/" onclick="playSound('moo');">moo<audio id="moo"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/muːd/" onclick="playSound('mood');">mood<audio id="mood"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/muːt/" onclick="playSound('moot');">moot<audio id="moot"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/muːz/" onclick="playSound('moos');">moos<audio id="moos"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/muːs/" onclick="playSound('moose');">moose<audio id="moose"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/luː/" onclick="playSound('loo');">loo<audio id="loo"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/luːz/" onclick="playSound('lose');">lose, loos<audio id="lose"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/luːs/" onclick="playSound('loose');">loose<audio id="loose"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/huː/" onclick="playSound('who');">who<audio id="who"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/huːd/" onclick="playSound('whod');">who'd<audio id="whod"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/huːt/" onclick="playSound('hoot');">hoot<audio id="hoot"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>

        <tr>
         <th rowspan="5">/&#596;&#720;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɔː/" onclick="playSound('core');">core, caw<audio id="core"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɔːd/" onclick="playSound('cord');">cord, chord, cawed<audio id="cord"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɔːt/" onclick="playSound('court');">court, caught<audio id="court"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɔːz/" onclick="playSound('cause');">cause, cores, caws<audio id="cause"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/kɔːs/" onclick="playSound('course');">course, coarse<audio id="course"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/mɔː/" onclick="playSound('more');">more, Moor<audio id="more"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/mɔːz/" onclick="playSound('moors');">moors<audio id="moors"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/mɔːs/" onclick="playSound('Morse');">Morse<audio id="Morse"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/ɔː/" onclick="playSound('or');">or, ore, awe, oar<audio id="or"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/ɔːd/" onclick="playSound('awed');">awed<audio id="awed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/ɔːt/" onclick="playSound('ought');">ought<audio id="ought"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/sɔː/" onclick="playSound('saw');">saw, soar<audio id="saw"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/sɔːd/" onclick="playSound('sawed');">sawed, soared<audio id="sawed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/sɔːt/" onclick="playSound('sought');">sought<audio id="sought"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/sɔːz/" onclick="playSound('saws');">saws, soars<audio id="saws"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/sɔːs/" onclick="playSound('source');">source, sauce<audio id="source"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɔː/" onclick="playSound('whore');">whore, hoar<audio id="whore"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɔːz/" onclick="playSound('whores');">whores<audio id="whores"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/hɔːs/" onclick="playSound('horse');">horse, hoarse<audio id="horse"></audio></div></td>
        </tr>

        <tr>
         <th rowspan="13">/e&#618;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/eɪ/" onclick="playSound('A');">A<audio id="A"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/eɪz/" onclick="playSound('As');">As<audio id="As"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/eɪs/" onclick="playSound('ace');">ace<audio id="ace"></audio></div></td>
       </tr>
       <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/breɪ/" onclick="playSound('bray');">bray<audio id="bray"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/breɪz/" onclick="playSound('brays');">brays<audio id="brays"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/breɪs/" onclick="playSound('brace');">brace<audio id="brace"></audio></div></td>
       </tr>
       <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/greɪ/" onclick="playSound('gray');">gray<audio id="gray"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/greɪd/" onclick="playSound('grade');">grade<audio id="grade"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/greɪt/" onclick="playSound('great');">great, grate<audio id="great"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/greɪz/" onclick="playSound('greys');">greys<audio id="greys"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/greɪs/" onclick="playSound('grace');">grace<audio id="grace"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/keɪ/" onclick="playSound('K');">K<audio id="K"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/keɪz/" onclick="playSound('Ks');">Ks<audio id="Ks"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/keɪs/" onclick="playSound('case');">case<audio id="case"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/leɪ/" onclick="playSound('lay');">lay<audio id="lay"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/leɪd/" onclick="playSound('laid');">laid<audio id="laid"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/leɪt/" onclick="playSound('late');">late<audio id="late"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/leɪz/" onclick="playSound('lays');">lays<audio id="lays"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/leɪs/" onclick="playSound('lace');">lace<audio id="lace"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/meɪ/" onclick="playSound('may');">may<audio id="may"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/meɪd/" onclick="playSound('made');">made<audio id="made"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/meɪt/" onclick="playSound('mate');">mate<audio id="mate"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/meɪz/" onclick="playSound('maze');">maze<audio id="maze"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/meɪs/" onclick="playSound('mace');">mace<audio id="mace"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/peɪ/" onclick="playSound('pay');">pay<audio id="pay"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/peɪz/" onclick="playSound('pays');">pays<audio id="pays"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/peɪs/" onclick="playSound('pace');">pace<audio id="pace"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/pleɪ/" onclick="playSound('play');">play<audio id="play"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pleɪd/" onclick="playSound('played');">played<audio id="played"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pleɪt/" onclick="playSound('plate');">plate<audio id="plate"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pleɪz/" onclick="playSound('plays');">plays<audio id="plays"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pleɪs/" onclick="playSound('place');">place<audio id="place"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/reɪ/" onclick="playSound('ray');">ray<audio id="ray"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/reɪd/" onclick="playSound('raid');">raid<audio id="raid"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/reɪt/" onclick="playSound('rate');">rate<audio id="rate"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/reɪz/" onclick="playSound('rays');">rays<audio id="rays"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/reɪs/" onclick="playSound('race');">race<audio id="race"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/speɪ/" onclick="playSound('spay');">spay<audio id="spay"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/speɪd/" onclick="playSound('spayd');">spayed<audio id="spayed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/speɪt/" onclick="playSound('spate');">spate<audio id="spate"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/speɪz/" onclick="playSound('spays');">spays<audio id="spays"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/speɪs/" onclick="playSound('space');">space<audio id="space"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/steɪ/" onclick="playSound('stay');">stay<audio id="stay"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/steɪd/" onclick="playSound('stayed');">stayed<audio id="stayed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/steɪt/" onclick="playSound('state');">state<audio id="state"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/treɪ/" onclick="playSound('tray');">tray<audio id="tray"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/treɪd/" onclick="playSound('trade');">trade<audio id="trade"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/treɪt/" onclick="playSound('trait');">trait<audio id="trait"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/treɪz/" onclick="playSound('trays');">trays<audio id="trays"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/treɪs/" onclick="playSound('trace');">trace<audio id="trace"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/weɪ/" onclick="playSound('way');">way, weigh<audio id="way"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/weɪd/" onclick="playSound('weighed');">weighed<audio id="weighed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/weɪt/" onclick="playSound('wait');">wait, weight<audio id="wait"></audio></div></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/weɪv/" onclick="playSound('wave');">wave<audio id="wave"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/weɪf/" onclick="playSound('waif');">waif<audio id="waif"></audio></div></td>
         <td></td>
         <td></td>
        </tr>

        <tr>
         <th rowspan="13">/a&#618;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/daɪ/" onclick="playSound('die');">die, dye<audio id="die"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/daɪz/" onclick="playSound('dies');">dies, dyes<audio id="dies"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/daɪs/" onclick="playSound('dice');">dice<audio id="dice"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/aɪ/" onclick="playSound('eye');">eye<audio id="eye"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/aɪz/" onclick="playSound('eyes');">eyes, Is<audio id="eyes"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/aɪs/" onclick="playSound('ice');">ice<audio id="ice"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/fraɪ/" onclick="playSound('fry');">fry<audio id="fry"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/fraɪd/" onclick="playSound('fried');">fried<audio id="fried"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/fraɪt/" onclick="playSound('fright');">fright<audio id="fright"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/haɪ/" onclick="playSound('high');">high, hi<audio id="high"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/haɪd/" onclick="playSound('hide');">hide<audio id="hide"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/haɪt/" onclick="playSound('height');">height<audio id="height"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/laɪ/" onclick="playSound('lie');">lie<audio id="lie"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/laɪd/" onclick="playSound('lied');">lied<audio id="lied"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/laɪt/" onclick="playSound('light');">light<audio id="light"></audio></div></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/laɪv/" onclick="playSound('live');">live<audio id="live"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/laɪf/" onclick="playSound('life');">life<audio id="life"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/laɪz/" onclick="playSound('lies');">lies<audio id="lies"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/laɪs/" onclick="playSound('lice');">lice<audio id="lice"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/praɪ/" onclick="playSound('pry');">pry<audio id="pry"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/praɪz/" onclick="playSound('prize');">prize<audio id="prize"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/praɪs/" onclick="playSound('price');">price<audio id="price"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/raɪ/" onclick="playSound('rye');">rye, wry<audio id="rye"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/raɪd/" onclick="playSound('ride');">ride<audio id="ride"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/raɪt/" onclick="playSound('write');">write, right<audio id="write"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/raɪz/" onclick="playSound('rise');">rise<audio id="rise"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/raɪs/" onclick="playSound('rice');">rice<audio id="rice"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/saɪ/" onclick="playSound('sigh');">sigh<audio id="sigh"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/saɪd/" onclick="playSound('side');">side, sighed<audio id="side"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/saɪt/" onclick="playSound('site');">site, cite, sight<audio id="site"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/spaɪ/" onclick="playSound('spy');">spy<audio id="spy"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/spaɪd/" onclick="playSound('spied');">spied<audio id="spied"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/spaɪt/" onclick="playSound('spite');">spite<audio id="spite"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/spaɪz/" onclick="playSound('spies');">spies<audio id="spies"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/spaɪs/" onclick="playSound('spice');">spice<audio id="spice"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/taɪ/" onclick="playSound('tie');">tie<audio id="tie"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/taɪd/" onclick="playSound('tide');">tide, tied<audio id="tide"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/taɪt/" onclick="playSound('tight');">tight<audio id="tight"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/traɪ/" onclick="playSound('try');">try<audio id="try"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/traɪd/" onclick="playSound('tried');">tried<audio id="tried"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/traɪt/" onclick="playSound('trite');">trite<audio id="trite"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/vaɪ/" onclick="playSound('vie');">vie<audio id="vie"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/vaɪz/" onclick="playSound('vies');">vies<audio id="vies"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/vaɪs/" onclick="playSound('vice');">vice<audio id="vice"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/waɪ/" onclick="playSound('why');">why<audio id="why"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/waɪd/" onclick="playSound('wide');">wide<audio id="wide"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/waɪt/" onclick="playSound('white');">white<audio id="white"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>

        <tr>
         <th rowspan="2">/&#596;&#618;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/bɔɪ/" onclick="playSound('boy');">boy<audio id="boy"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/bɔɪz/" onclick="playSound('boys');">boys<audio id="boys"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/bɔɪs/" onclick="playSound('Boyce');">Boyce<audio id="Boyce"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/dʒɔɪ/" onclick="playSound('joy');">joy<audio id="joy"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/dʒɔɪz/" onclick="playSound('joys');">joys<audio id="joys"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/dʒɔɪs/" onclick="playSound('Joyce');">Joyce<audio id="Joyce"></audio></div></td>
        </tr>

        <tr>
         <th rowspan="10">/&#601;&#650;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/bəʊ/" onclick="playSound('bow');">bow<audio id="bow"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/bəʊd/" onclick="playSound('bode');">bode<audio id="bode"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/bəʊt/" onclick="playSound('boat');">boat<audio id="boat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/dəʊ/" onclick="playSound('doe');">doe, dough<audio id="doe"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/dəʊz/" onclick="playSound('doze');">doze, does<audio id="doze"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/dəʊs/" onclick="playSound('dose');">dose<audio id="dose"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/fləʊ/" onclick="playSound('flow');">flow<audio id="flow"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/fləʊd/" onclick="playSound('flowed');">flowed<audio id="flowed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/fləʊt/" onclick="playSound('float');">float<audio id="float"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/gəʊ/" onclick="playSound('go');">go<audio id="go"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/gəʊd/" onclick="playSound('goad');">goad<audio id="goad"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/gəʊt/" onclick="playSound('goat');">goat<audio id="goat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/ɡrəʊ/" onclick="playSound('grow');">grow<audio id="grow"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/ɡrəʊz/" onclick="playSound('grows');">grows<audio id="grows"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/ɡrəʊs/" onclick="playSound('gross');">gross<audio id="gross"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/həʊ/" onclick="playSound('hoe');">hoe<audio id="hoe"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/həʊd/" onclick="playSound('hosed');">hosed<audio id="hosed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/həʊt/" onclick="playSound('host');">host<audio id="host"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/məʊ/" onclick="playSound('mow');">mow<audio id="mow"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/məʊd/" onclick="playSound('mode');">mode, mowed<audio id="mode"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/məʊt/" onclick="playSound('moat');">moat, mote<audio id="moat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/nəʊ/" onclick="playSound('no');">no<audio id="no"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/nəʊd/" onclick="playSound('node');">node<audio id="node"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/nəʊt/" onclick="playSound('note');">note<audio id="note"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/rəʊ/" onclick="playSound('row');">row<audio id="row"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/rəʊd/" onclick="playSound('rode');">rode, road<audio id="rode"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/rəʊt/" onclick="playSound('wrote');">wrote, rote<audio id="wrote"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/təʊ/" onclick="playSound('tow');">tow, toe<audio id="tow"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/təʊd/" onclick="playSound('towed');">towed, toad<audio id="towed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/təʊt/" onclick="playSound('tote');">tote<audio id="tote"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>

        <tr>
         <th rowspan="4">/a&#650;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊ/" onclick="playSound('allow');">allow<audio id="allow"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊd/" onclick="playSound('allowed');">allowed<audio id="allowed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊt/" onclick="playSound('a lout');">a lout<audio id="a lout"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊz/" onclick="playSound('allows');">allows<audio id="allows"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊs/" onclick="playSound('a louse');">a louse<audio id="a louse"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/baʊ/" onclick="playSound('bough');">bough, bow<audio id="bough"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/baʊd/" onclick="playSound('bowed');">bowed<audio id="bowed"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/baʊt/" onclick="playSound('bout');">bout<audio id="bout"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/daʊ/" onclick="playSound('dhow');">dhow<audio id="dhow"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/daʊz/" onclick="playSound('dhows');">dhows<audio id="dhows"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/daʊs/" onclick="playSound('douse');">douse<audio id="douse"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/haʊ/" onclick="playSound('how');">how<audio id="how"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/haʊz/" onclick="playSound('hows');">how's<audio id="hows"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/haʊs/" onclick="playSound('house');">house<audio id="house"></audio></div></td>
        </tr>

        <tr>
         <th>/e&#601;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/skeə/" onclick="playSound('scare');">scare<audio id="scare"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/skeəz/" onclick="playSound('scares');">scares<audio id="scares"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/skeəs/" onclick="playSound('scarce');">scarce<audio id="scarce"></audio></div></td>
        </tr>

        <tr>
         <th rowspan="2">/&#618;&#601;/</th>
         <td><div data-toggle="tooltip" data-placement="top" title="/fɪə/" onclick="playSound('fear');">fear<audio id="fear"></audio></div></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/fɪət/" onclick="playSound('fiat');">Fiat<audio id="fiat"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/fɪəz/" onclick="playSound('fears');">fears<audio id="fears"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/fɪəs/" onclick="playSound('fierce');">fierce<audio id="fierce"></audio></div></td>
        </tr>
        <tr>
         <td><div data-toggle="tooltip" data-placement="top" title="/pɪə/" onclick="playSound('peer');">peer<audio id="peer"></audio></div></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pɪəz/" onclick="playSound('peers');">peers<audio id="peers"></audio></div></td>
         <td><div data-toggle="tooltip" data-placement="top" title="/pɪəs/" onclick="playSound('pierce');">pierce<audio id="pierce"></audio></div></td>
        </tr>
       </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
      <h3 class="panel-title">
        <b>/iː/</b>
      </h3>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
        <table class="table table-hover table-responsive table-bordered">
         <thead class="thead-default">
         <tr>
          <th class="col-lg-1 col-md-1">/iː/</th>
          <th class="col-lg-1 col-md-1">/d/</th>
          <th class="col-lg-1 col-md-1">/t/</th>
          <th class="col-lg-1 col-md-1">/g/</th>
          <th class="col-lg-1 col-md-1">/k/</th>
          <th class="col-lg-1 col-md-1">/v/</th>
          <th class="col-lg-1 col-md-1">/f/</th>
          <th class="col-lg-1 col-md-1">/z/</th>
          <th class="col-lg-1 col-md-1">/s/</th>
         </tr>
       </thead>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/biː/" onclick="playSound('bee');">bee<audio id="bee"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/bi:d/" onclick="playSound('bead');">bead, Bede<audio id="bead"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/biːt/" onclick="playSound('beat');">beat, beet<audio id="beat"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/fiː/" onclick="playSound('fee');">fee<audio id="fee"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/fiːd/" onclick="playSound('feed');">feed<audio id="feed"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/fiːt/" onclick="playSound('feet');">feet, feat<audio id="feet"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/hiː/" onclick="playSound('he');">he<audio id="he"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/hiːd/" onclick="playSound('heed');">heed, he'd<audio id="heed"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/hiːt/" onclick="playSound('heat');">heat<audio id="heat"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/niː/" onclick="playSound('knee');">knee<audio id="knee"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/niːd/" onclick="playSound('need');">need, knead<audio id="need"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/niːt/" onclick="playSound('neat');">neat<audio id="neat"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/niːz/" onclick="playSound('knees');">knees<audio id="knees"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/niːs/" onclick="playSound('niece');">niece<audio id="niece"></audio></div></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/liː/" onclick="playSound('lea');">lea<audio id="lea"></audio></div></td>
        <td></td>
        <td></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/liːg/" onclick="playSound('league');">league<audio id="league"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/liːk/" onclick="playSound('leak');">leak<audio id="leak"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/liːv/" onclick="playSound('leave');">leave<audio id="leave"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/liːf/" onclick="playSound('leaf');">leaf<audio id="leaf"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/liːz/" onclick="playSound('leas');">leas<audio id="leas"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/liːs/" onclick="playSound('lease');">lease<audio id="lease"></audio></div></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/miː/" onclick="playSound('me');">me<audio id="me"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/miːd/" onclick="playSound('mead');">mead<audio id="mead"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/miːt/" onclick="playSound('meat');">meat, meet, mete<audio id="meat"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/piː/" onclick="playSound('pea');">pea<audio id="pea"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/piːd/" onclick="playSound('peed');">peed<audio id="peed"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/piːt/" onclick="playSound('peat');">peat<audio id="peat"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/piːz/" onclick="playSound('peas');">peas, pees<audio id="peas"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/piːs/" onclick="playSound('peace');">peace, piece<audio id="peace"></audio></div></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/pliː/" onclick="playSound('plea');">plea<audio id="plea"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/pliːd/" onclick="playSound('plead');">plead<audio id="plead"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/pliːt/" onclick="playSound('pleat');">pleat<audio id="pleat"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/siː/" onclick="playSound('see');">see<audio id="see"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/siːd/" onclick="playSound('seed');">seed, cede<audio id="seed"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/siːt/" onclick="playSound('seat');">seat<audio id="seat"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/siːz/" onclick="playSound('seize');">seize, sees, seas<audio id="seize"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/siːs/" onclick="playSound('cease');">cease<audio id="cease"></audio></div></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/ʃiː/" onclick="playSound('she');">she<audio id="she"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/ʃiːd/" onclick="playSound('sheed');">she'd<audio id="sheed"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/ʃiːt/" onclick="playSound('sheet');">sheet<audio id="sheet"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/tiː/" onclick="playSound('tea');">tea<audio id="tea"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/tiːd/" onclick="playSound('teed');">teed<audio id="teed"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/tiːt/" onclick="playSound('teat');">teat<audio id="teat"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       </tr>
       <tr>
        <td><div data-toggle="tooltip" data-placement="top" title="/wiː/" onclick="playSound('we');">we<audio id="we"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/wiːd/" onclick="playSound('weed');">weed, we'd<audio id="weed"></audio></div></td>
        <td><div data-toggle="tooltip" data-placement="top" title="/wiːt/" onclick="playSound('wheat');">wheat<audio id="wheat"></audio></div></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
      <h3 class="panel-title">
        <b>/ɑː/</b>
      </h3>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/ɑː/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/bɑː/" onclick="playSound('bar');">bar<audio id="bar"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/bɑːd/" onclick="playSound('bard');">bard, barred<audio id="bard"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/bɑːt/" onclick="playSound('Bart');">Bart<audio id="Bart"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɑː/" onclick="playSound('car');">car<audio id="car"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɑːd/" onclick="playSound('card');">card<audio id="card"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɑːt/" onclick="playSound('cart');">cart<audio id="cart"></audio></div></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɑːv/" onclick="playSound('calve');">calve<audio id="calve"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɑːf/" onclick="playSound('calf');">calf<audio id="calf"></audio></div></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɑːv/" onclick="playSound('halve');">halve<audio id="halve"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɑːf/" onclick="playSound('half');">half<audio id="half"></audio></div></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/spɑː/" onclick="playSound('spa');">spa, spar<audio id="spa"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/spɑːz/" onclick="playSound('spas');">spas, spars<audio id="spas"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/spɑːs/" onclick="playSound('sparce');">sparce<audio id="sparce"></audio></div></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
      <h3 class="panel-title">
        <b>/ɜː/</b>
      </h3>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/ɜː/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɜː/" onclick="playSound('cur');">cur<audio id="cur"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɜːz/" onclick="playSound('curs');">curs<audio id="curs"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɜːs/" onclick="playSound('curse');">curse<audio id="curse"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɜː/" onclick="playSound('her');">her<audio id="her"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɜːd/" onclick="playSound('heard');">heard, herd<audio id="heard"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɜːt/" onclick="playSound('hurt');">hurt<audio id="hurt"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɜːz/" onclick="playSound('hers');">hers<audio id="hers"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɜːs/" onclick="playSound('hearse');">hearse<audio id="hearse"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/pɜː/" onclick="playSound('purr');">purr<audio id="purr"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pɜːd/" onclick="playSound('purred');">purred<audio id="purred"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pɜːt/" onclick="playSound('pert');">pert<audio id="pert"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pɜːz/" onclick="playSound('purrs');">purrs<audio id="purrs"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pɜːs/" onclick="playSound('purse');">purse<audio id="purse"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/wɜː/" onclick="playSound('were');">were, whirr<audio id="were"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/wɜːz/" onclick="playSound('whirrs');">whirrs<audio id="whirrs"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/wɜːs/" onclick="playSound('worse');">worse<audio id="worse"></audio></div></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
      <h3 class="panel-title">
        <b>/uː/</b>
      </h3>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/uː/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/ʃuː/" onclick="playSound('shoe');">shoe<audio id="shoe"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/ʃuːd/" onclick="playSound('shoed');">shoed<audio id="shoed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/ʃuːt/" onclick="playSound('shoot');">shoot, chute<audio id="shoot"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/dʒuː/" onclick="playSound('Jew');">Jew<audio id="Jew"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/dʒuːz/" onclick="playSound('Jews');">Jews<audio id="Jews"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/dʒuːs/" onclick="playSound('juice');">juice<audio id="juice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/muː/" onclick="playSound('moo');">moo<audio id="moo"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/muːd/" onclick="playSound('mood');">mood<audio id="mood"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/muːt/" onclick="playSound('moot');">moot<audio id="moot"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/muːz/" onclick="playSound('moos');">moos<audio id="moos"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/muːs/" onclick="playSound('moose');">moose<audio id="moose"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/luː/" onclick="playSound('loo');">loo<audio id="loo"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/luːz/" onclick="playSound('lose');">lose, loos<audio id="lose"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/luːs/" onclick="playSound('loose');">loose<audio id="loose"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/huː/" onclick="playSound('who');">who<audio id="who"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/huːd/" onclick="playSound('whod');">who'd<audio id="whod"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/huːt/" onclick="playSound('hoot');">hoot<audio id="hoot"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
      <h3 class="panel-title">
        <b>/ɔː/</b>
      </h3>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/ɔː/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɔː/" onclick="playSound('core');">core, caw<audio id="core"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɔːd/" onclick="playSound('cord');">cord, chord, cawed<audio id="cord"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɔːt/" onclick="playSound('court');">court, caught<audio id="court"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɔːz/" onclick="playSound('cause');">cause, cores, caws<audio id="cause"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/kɔːs/" onclick="playSound('course');">course, coarse<audio id="course"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/mɔː/" onclick="playSound('more');">more, Moor<audio id="more"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/mɔːz/" onclick="playSound('moors');">moors<audio id="moors"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/mɔːs/" onclick="playSound('Morse');">Morse<audio id="Morse"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/ɔː/" onclick="playSound('or');">or, ore, awe, oar<audio id="or"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/ɔːd/" onclick="playSound('awed');">awed<audio id="awed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/ɔːt/" onclick="playSound('ought');">ought<audio id="ought"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/sɔː/" onclick="playSound('saw');">saw, soar<audio id="saw"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/sɔːd/" onclick="playSound('sawed');">sawed, soared<audio id="sawed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/sɔːt/" onclick="playSound('sought');">sought<audio id="sought"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/sɔːz/" onclick="playSound('saws');">saws, soars<audio id="saws"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/sɔːs/" onclick="playSound('source');">source, sauce<audio id="source"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɔː/" onclick="playSound('whore');">whore, hoar<audio id="whore"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɔːz/" onclick="playSound('whores');">whores<audio id="whores"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/hɔːs/" onclick="playSound('horse');">horse, hoarse<audio id="horse"></audio></div></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
      <h3 class="panel-title">
        <b>/eɪ/</b>
      </h3>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/eɪ/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/eɪ/" onclick="playSound('A');">A<audio id="A"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/eɪz/" onclick="playSound('As');">As<audio id="As"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/eɪs/" onclick="playSound('ace');">ace<audio id="ace"></audio></div></td>
    </tr>
    <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/breɪ/" onclick="playSound('bray');">bray<audio id="bray"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/breɪz/" onclick="playSound('brays');">brays<audio id="brays"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/breɪs/" onclick="playSound('brace');">brace<audio id="brace"></audio></div></td>
    </tr>
    <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/greɪ/" onclick="playSound('gray');">gray<audio id="gray"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/greɪd/" onclick="playSound('grade');">grade<audio id="grade"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/greɪt/" onclick="playSound('great');">great, grate<audio id="great"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/greɪz/" onclick="playSound('greys');">greys<audio id="greys"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/greɪs/" onclick="playSound('grace');">grace<audio id="grace"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/keɪ/" onclick="playSound('K');">K<audio id="K"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/keɪz/" onclick="playSound('Ks');">Ks<audio id="Ks"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/keɪs/" onclick="playSound('case');">case<audio id="case"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/leɪ/" onclick="playSound('lay');">lay<audio id="lay"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/leɪd/" onclick="playSound('laid');">laid<audio id="laid"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/leɪt/" onclick="playSound('late');">late<audio id="late"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/leɪz/" onclick="playSound('lays');">lays<audio id="lays"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/leɪs/" onclick="playSound('lace');">lace<audio id="lace"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/meɪ/" onclick="playSound('may');">may<audio id="may"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/meɪd/" onclick="playSound('made');">made<audio id="made"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/meɪt/" onclick="playSound('mate');">mate<audio id="mate"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/meɪz/" onclick="playSound('maze');">maze<audio id="maze"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/meɪs/" onclick="playSound('mace');">mace<audio id="mace"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/peɪ/" onclick="playSound('pay');">pay<audio id="pay"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/peɪz/" onclick="playSound('pays');">pays<audio id="pays"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/peɪs/" onclick="playSound('pace');">pace<audio id="pace"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/pleɪ/" onclick="playSound('play');">play<audio id="play"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pleɪd/" onclick="playSound('played');">played<audio id="played"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pleɪt/" onclick="playSound('plate');">plate<audio id="plate"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pleɪz/" onclick="playSound('plays');">plays<audio id="plays"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pleɪs/" onclick="playSound('place');">place<audio id="place"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/reɪ/" onclick="playSound('ray');">ray<audio id="ray"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/reɪd/" onclick="playSound('raid');">raid<audio id="raid"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/reɪt/" onclick="playSound('rate');">rate<audio id="rate"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/reɪz/" onclick="playSound('rays');">rays<audio id="rays"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/reɪs/" onclick="playSound('race');">race<audio id="race"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/speɪ/" onclick="playSound('spay');">spay<audio id="spay"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/speɪd/" onclick="playSound('spayd');">spayed<audio id="spayed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/speɪt/" onclick="playSound('spate');">spate<audio id="spate"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/speɪz/" onclick="playSound('spays');">spays<audio id="spays"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/speɪs/" onclick="playSound('space');">space<audio id="space"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/steɪ/" onclick="playSound('stay');">stay<audio id="stay"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/steɪd/" onclick="playSound('stayed');">stayed<audio id="stayed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/steɪt/" onclick="playSound('state');">state<audio id="state"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/treɪ/" onclick="playSound('tray');">tray<audio id="tray"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/treɪd/" onclick="playSound('trade');">trade<audio id="trade"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/treɪt/" onclick="playSound('trait');">trait<audio id="trait"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/treɪz/" onclick="playSound('trays');">trays<audio id="trays"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/treɪs/" onclick="playSound('trace');">trace<audio id="trace"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/weɪ/" onclick="playSound('way');">way, weigh<audio id="way"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/weɪd/" onclick="playSound('weighed');">weighed<audio id="weighed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/weɪt/" onclick="playSound('wait');">wait, weight<audio id="wait"></audio></div></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/weɪv/" onclick="playSound('wave');">wave<audio id="wave"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/weɪf/" onclick="playSound('waif');">waif<audio id="waif"></audio></div></td>
      <td></td>
      <td></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
      <h3 class="panel-title">
        <b>/aɪ/</b>
      </h3>
    </div>
    <div id="collapse7" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/aɪ/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/daɪ/" onclick="playSound('die');">die, dye<audio id="die"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/daɪz/" onclick="playSound('dies');">dies, dyes<audio id="dies"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/daɪs/" onclick="playSound('dice');">dice<audio id="dice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/aɪ/" onclick="playSound('eye');">eye<audio id="eye"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/aɪz/" onclick="playSound('eyes');">eyes, Is<audio id="eyes"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/aɪs/" onclick="playSound('ice');">ice<audio id="ice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/fraɪ/" onclick="playSound('fry');">fry<audio id="fry"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/fraɪd/" onclick="playSound('fried');">fried<audio id="fried"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/fraɪt/" onclick="playSound('fright');">fright<audio id="fright"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/haɪ/" onclick="playSound('high');">high, hi<audio id="high"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/haɪd/" onclick="playSound('hide');">hide<audio id="hide"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/haɪt/" onclick="playSound('height');">height<audio id="height"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/laɪ/" onclick="playSound('lie');">lie<audio id="lie"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/laɪd/" onclick="playSound('lied');">lied<audio id="lied"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/laɪt/" onclick="playSound('light');">light<audio id="light"></audio></div></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/laɪv/" onclick="playSound('live');">live<audio id="live"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/laɪf/" onclick="playSound('life');">life<audio id="life"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/laɪz/" onclick="playSound('lies');">lies<audio id="lies"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/laɪs/" onclick="playSound('lice');">lice<audio id="lice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/praɪ/" onclick="playSound('pry');">pry<audio id="pry"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/praɪz/" onclick="playSound('prize');">prize<audio id="prize"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/praɪs/" onclick="playSound('price');">price<audio id="price"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/raɪ/" onclick="playSound('rye');">rye, wry<audio id="rye"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/raɪd/" onclick="playSound('ride');">ride<audio id="ride"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/raɪt/" onclick="playSound('write');">write, right<audio id="write"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/raɪz/" onclick="playSound('rise');">rise<audio id="rise"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/raɪs/" onclick="playSound('rice');">rice<audio id="rice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/saɪ/" onclick="playSound('sigh');">sigh<audio id="sigh"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/saɪd/" onclick="playSound('side');">side, sighed<audio id="side"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/saɪt/" onclick="playSound('site');">site, cite, sight<audio id="site"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/spaɪ/" onclick="playSound('spy');">spy<audio id="spy"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/spaɪd/" onclick="playSound('spied');">spied<audio id="spied"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/spaɪt/" onclick="playSound('spite');">spite<audio id="spite"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/spaɪz/" onclick="playSound('spies');">spies<audio id="spies"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/spaɪs/" onclick="playSound('spice');">spice<audio id="spice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/taɪ/" onclick="playSound('tie');">tie<audio id="tie"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/taɪd/" onclick="playSound('tide');">tide, tied<audio id="tide"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/taɪt/" onclick="playSound('tight');">tight<audio id="tight"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/traɪ/" onclick="playSound('try');">try<audio id="try"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/traɪd/" onclick="playSound('tried');">tried<audio id="tried"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/traɪt/" onclick="playSound('trite');">trite<audio id="trite"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/vaɪ/" onclick="playSound('vie');">vie<audio id="vie"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/vaɪz/" onclick="playSound('vies');">vies<audio id="vies"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/vaɪs/" onclick="playSound('vice');">vice<audio id="vice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/waɪ/" onclick="playSound('why');">why<audio id="why"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/waɪd/" onclick="playSound('wide');">wide<audio id="wide"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/waɪt/" onclick="playSound('white');">white<audio id="white"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
      <h3 class="panel-title">
        <b>/ɔɪ/</b>
      </h3>
    </div>
    <div id="collapse8" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/ɔɪ/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/bɔɪ/" onclick="playSound('boy');">boy<audio id="boy"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/bɔɪz/" onclick="playSound('boys');">boys<audio id="boys"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/bɔɪs/" onclick="playSound('Boyce');">Boyce<audio id="Boyce"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/dʒɔɪ/" onclick="playSound('joy');">joy<audio id="joy"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/dʒɔɪz/" onclick="playSound('joys');">joys<audio id="joys"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/dʒɔɪs/" onclick="playSound('Joyce');">Joyce<audio id="Joyce"></audio></div></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
      <h3 class="panel-title">
        <b>/əʊ/</b>
      </h3>
    </div>
    <div id="collapse9" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/əʊ/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/bəʊ/" onclick="playSound('bow');">bow<audio id="bow"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/bəʊd/" onclick="playSound('bode');">bode<audio id="bode"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/bəʊt/" onclick="playSound('boat');">boat<audio id="boat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/dəʊ/" onclick="playSound('doe');">doe, dough<audio id="doe"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/dəʊz/" onclick="playSound('doze');">doze, does<audio id="doze"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/dəʊs/" onclick="playSound('dose');">dose<audio id="dose"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/fləʊ/" onclick="playSound('flow');">flow<audio id="flow"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/fləʊd/" onclick="playSound('flowed');">flowed<audio id="flowed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/fləʊt/" onclick="playSound('float');">float<audio id="float"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/gəʊ/" onclick="playSound('go');">go<audio id="go"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/gəʊd/" onclick="playSound('goad');">goad<audio id="goad"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/gəʊt/" onclick="playSound('goat');">goat<audio id="goat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/ɡrəʊ/" onclick="playSound('grow');">grow<audio id="grow"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/ɡrəʊz/" onclick="playSound('grows');">grows<audio id="grows"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/ɡrəʊs/" onclick="playSound('gross');">gross<audio id="gross"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/həʊ/" onclick="playSound('hoe');">hoe<audio id="hoe"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/həʊd/" onclick="playSound('hosed');">hosed<audio id="hosed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/həʊt/" onclick="playSound('host');">host<audio id="host"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/məʊ/" onclick="playSound('mow');">mow<audio id="mow"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/məʊd/" onclick="playSound('mode');">mode, mowed<audio id="mode"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/məʊt/" onclick="playSound('moat');">moat, mote<audio id="moat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/nəʊ/" onclick="playSound('no');">no<audio id="no"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/nəʊd/" onclick="playSound('node');">node<audio id="node"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/nəʊt/" onclick="playSound('note');">note<audio id="note"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/rəʊ/" onclick="playSound('row');">row<audio id="row"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/rəʊd/" onclick="playSound('rode');">rode, road<audio id="rode"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/rəʊt/" onclick="playSound('wrote');">wrote, rote<audio id="wrote"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/təʊ/" onclick="playSound('tow');">tow, toe<audio id="tow"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/təʊd/" onclick="playSound('towed');">towed, toad<audio id="towed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/təʊt/" onclick="playSound('tote');">tote<audio id="tote"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
        <h3 class="panel-title">
          <b>/aʊ/</b>
        </h3>
    </div>
    <div id="collapse10" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/aʊ/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
       <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊ/" onclick="playSound('allow');">allow<audio id="allow"></audio></div></td>
       <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊd/" onclick="playSound('allowed');">allowed<audio id="allowed"></audio></div></td>
       <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊt/" onclick="playSound('a lout');">a lout<audio id="a lout"></audio></div></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊz/" onclick="playSound('allows');">allows<audio id="allows"></audio></div></td>
       <td><div data-toggle="tooltip" data-placement="top" title="/əlaʊs/" onclick="playSound('a louse');">a louse<audio id="a louse"></audio></div></td>
      </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/baʊ/" onclick="playSound('bough');">bough, bow<audio id="bough"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/baʊd/" onclick="playSound('bowed');">bowed<audio id="bowed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/baʊt/" onclick="playSound('bout');">bout<audio id="bout"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/daʊ/" onclick="playSound('dhow');">dhow<audio id="dhow"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/daʊz/" onclick="playSound('dhows');">dhows<audio id="dhows"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/daʊs/" onclick="playSound('douse');">douse<audio id="douse"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/haʊ/" onclick="playSound('how');">how<audio id="how"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/haʊz/" onclick="playSound('hows');">how's<audio id="hows"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/haʊs/" onclick="playSound('house');">house<audio id="house"></audio></div></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse11">
      <h3 class="panel-title">
        <b>/eə/</b>
      </h3>
    </div>
    <div id="collapse11" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/eə/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/skeə/" onclick="playSound('scare');">scare<audio id="scare"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/skeəz/" onclick="playSound('scares');">scares<audio id="scares"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/skeəs/" onclick="playSound('scarce');">scarce<audio id="scarce"></audio></div></td>
     </tr>
     </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse12">
      <h3 class="panel-title">
        <b>/ɪə/</b>
      </h3>
    </div>
    <div id="collapse12" class="panel-collapse collapse">
      <table class="table table-hover table-responsive table-bordered">
       <thead class="thead-default">
       <tr>
        <th class="col-lg-1 col-md-1">/ɪə/</th>
        <th class="col-lg-1 col-md-1">/d/</th>
        <th class="col-lg-1 col-md-1">/t/</th>
        <th class="col-lg-1 col-md-1">/g/</th>
        <th class="col-lg-1 col-md-1">/k/</th>
        <th class="col-lg-1 col-md-1">/v/</th>
        <th class="col-lg-1 col-md-1">/f/</th>
        <th class="col-lg-1 col-md-1">/z/</th>
        <th class="col-lg-1 col-md-1">/s/</th>
       </tr>
     </thead>
     <tr>
       <td><div data-toggle="tooltip" data-placement="top" title="/fɪə/" onclick="playSound('fear');">fear<audio id="fear"></audio></div></td>
       <td></td>
       <td><div data-toggle="tooltip" data-placement="top" title="/fɪət/" onclick="playSound('fiat');">Fiat<audio id="fiat"></audio></div></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td><div data-toggle="tooltip" data-placement="top" title="/fɪəz/" onclick="playSound('fears');">fears<audio id="fears"></audio></div></td>
       <td><div data-toggle="tooltip" data-placement="top" title="/fɪəs/" onclick="playSound('fierce');">fierce<audio id="fierce"></audio></div></td>
      </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="/pɪə/" onclick="playSound('peer');">peer<audio id="peer"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pɪəz/" onclick="playSound('peers');">peers<audio id="peers"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/pɪəs/" onclick="playSound('pierce');">pierce<audio id="pierce"></audio></div></td>
     </tr>
     </table>
    </div>
  </div>

</div>
</div>
</body>
</html>
