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
        Click the word to play its pronunciation.<br>
        Shaded boxes do not have a sound associated with the word, yet.<br>
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
</div>

<style>
.noSound {background-color: #C8C8C8; }
</style>

  <div class="container">
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
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('bee');">bee<audio id="bee"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/bi:d/" onclick="playSound('bead');">bead, Bede<audio id="bead"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('beat');">beat, beet<audio id="beat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('fee');">fee<audio id="fee"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('feed');">feed<audio id="feed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('feet');">feet, feat<audio id="feet"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('he');">he<audio id="he"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('heed');">heed, he'd<audio id="heed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('heat');">heat<audio id="heat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('knee');">knee<audio id="knee"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('need');">need, knead<audio id="need"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('neat');">neat<audio id="neat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="noSound"><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('knees');">knees<audio id="knees"></audio></div></td>
      <td class="noSound"><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('niece');">niece<audio id="niece"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lea');">lea<audio id="lea"></audio></div></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('league');">league<audio id="league"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('leak');">leak<audio id="leak"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('leave');">leave<audio id="leave"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('leaf');">leaf<audio id="leaf"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('leas');">leas<audio id="leas"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lease');">lease<audio id="lease"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('me');">me<audio id="me"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('mead');">mead<audio id="mead"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('meat');">meat, meet, mete<audio id="meat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('pea');">pea<audio id="pea"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('peed');">peed<audio id="peed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('peat');">peat<audio id="peat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('peas');">peas, pees<audio id="peas"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('peace');">peace, piece<audio id="peace"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('plea');">plea<audio id="plea"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('plead');">plead<audio id="plead"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('pleat');">pleat<audio id="pleat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('see');">see<audio id="see"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('seed');">seed, cede<audio id="seed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('seat');">seat<audio id="seat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('seize');">seize, sees, seas<audio id="seize"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('cease');">cease<audio id="cease"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('she');">she<audio id="she"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('sheed');">she'd<audio id="sheed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('sheet');">sheet<audio id="sheet"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('tea');">tea<audio id="tea"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('teed');">teed<audio id="teed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('teat');">teat<audio id="teat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('we');">we<audio id="we"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('weed');">weed, we'd<audio id="weed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('wheat');">wheat<audio id="wheat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th rowspan="4">/&#593;&#720;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('bar');">bar<audio id="bar"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('bard');">bard, barred<audio id="bard"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('Bart');">Bart<audio id="Bart"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('car');">car<audio id="car"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('card');">card<audio id="card"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('cart');">cart<audio id="cart"></audio></div></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('calve');">calve<audio id="calve"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('calf');">calf<audio id="calf"></audio></div></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="noSound"><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('halve');">halve<audio id="halve"></audio></div></td>
      <td class="noSound"><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('half');">half<audio id="half"></audio></div></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('spa');">spa, spar<audio id="spa"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('spas');">spas, spars<audio id="spas"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('sparce');">sparce<audio id="sparce"></audio></div></td>
     </tr>

     <tr>
      <th rowspan="2">/&#604;&#720;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('her');">her<audio id="her"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('heard');">heard, herd<audio id="heard"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('hurt');">hurt<audio id="hurt"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('hers');">hers<audio id="hers"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('hearse');">hearse<audio id="hearse"></audio></div></td>
     </tr>

     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('were');">were, whirr<audio id="were"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('whirrs');">whirrs<audio id="whirrs"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('worse');">worse<audio id="worse"></audio></div></td>
     </tr>

     <tr>
      <th rowspan="5">/u&#720;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('shoe');">shoe<audio id="shoe"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('shoed');">shoed<audio id="shoed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('shoot');">shoot, chute<audio id="shoot"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('Jew');">Jew<audio id="Jew"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('Jews');">Jews<audio id="Jews"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('juice');">juice<audio id="juice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('moo');">moo<audio id="moo"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('mood');">mood<audio id="mood"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('moot');">moot<audio id="moot"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('moos');">moos<audio id="moos"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('moose');">moose<audio id="moose"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('loo');">loo<audio id="loo"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lose');">lose, loos<audio id="lose"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('loose');">loose<audio id="loose"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('who');">who<audio id="who"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('whod');">who'd<audio id="whod"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('hoot');">hoot<audio id="hoot"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th rowspan="5">/&#596;&#720;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('core');">core, caw<audio id="core"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('cord');">cord, chord, cawed<audio id="cord"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('court');">court, caught<audio id="court"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('cause');">cause, cores, caws<audio id="cause"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('course');">course, coarse<audio id="course"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('more');">more, Moor<audio id="more"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('moors');">moors<audio id="moors"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('Morse');">Morse<audio id="Morse"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('or');">or, ore, awe, oar<audio id="or"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('awed');">awed<audio id="awed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('ought');">ought<audio id="ought"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('saw');">saw, soar<audio id="saw"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('sawed');">sawed, soared<audio id="sawed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('sought');">sought<audio id="sought"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('saws');">saws, soars<audio id="saws"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('source');">source, sauce<audio id="source"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('whore');">whore, hoar<audio id="whore"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('whores');">whores<audio id="whores"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('horse');">horse, hoarse<audio id="horse"></audio></div></td>
     </tr>

     <tr>
      <th rowspan="6">/e&#618;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('gray');">gray<audio id="gray"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('grade');">grade<audio id="grade"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('great');">great, grate<audio id="great"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('greys');">greys<audio id="greys"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('grace');">grace<audio id="grace"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lay');">lay<audio id="lay"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('laid');">laid<audio id="laid"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('late');">late<audio id="late"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lays');">lays<audio id="lays"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lace');">lace<audio id="lace"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('may');">may<audio id="may"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('made');">made<audio id="made"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('mate');">mate<audio id="mate"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('maze');">maze<audio id="maze"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('mace');">mace<audio id="mace"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('play');">play<audio id="play"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('played');">played<audio id="played"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('plate');">plate<audio id="plate"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('plays');">plays<audio id="plays"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('place');">place<audio id="place"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('stay');">stay<audio id="stay"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('stayed');">stayed<audio id="stayed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('state');">state<audio id="state"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('way');">way, weigh<audio id="way"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('weighed');">weighed<audio id="weighed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('wait');">wait, weight<audio id="wait"></audio></div></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('wave');">wave<audio id="wave"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('waif');">waif<audio id="waif"></audio></div></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th rowspan="13">/a&#618;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('die');">die, dye<audio id="die"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('dies');">dies, dyes<audio id="dies"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('dice');">dice<audio id="dice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('eye');">eye<audio id="eye"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('eyes');">eyes, Is<audio id="eyes"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('ice');">ice<audio id="ice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('fry');">fry<audio id="fry"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('fried');">fried<audio id="fried"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('fright');">fright<audio id="fright"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('high');">high, hi<audio id="high"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('hide');">hide<audio id="hide"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('height');">height<audio id="height"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lie');">lie<audio id="lie"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lied');">lied<audio id="lied"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('light');">light<audio id="light"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lies');">lies<audio id="lies"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('lice');">lice<audio id="lice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('pry');">pry<audio id="pry"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('prize');">prize<audio id="prize"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('price');">price<audio id="price"></audio></div></td>
     </tr>
     <tr>
      <td class="noSound"><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('rye');">rye, wry<audio id="rye"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('ride');">ride<audio id="ride"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('write');">write, right<audio id="write"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="noSound"><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('rise');">rise<audio id="rise"></audio></div></td>
      <td class="noSound"><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('rice');">rice<audio id="rice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('sigh');">sigh<audio id="sigh"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('side');">side, sighed<audio id="side"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('site');">site, cite, sight<audio id="site"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('spy');">spy<audio id="spy"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('spied');">spied<audio id="spied"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('spite');">spite<audio id="spite"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('spies');">spies<audio id="spies"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('spice');">spice<audio id="spice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('tie');">tie<audio id="tie"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('tide');">tide, tied<audio id="tide"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('tight');">tight<audio id="tight"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('try');">try<audio id="try"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('tried');">tried<audio id="tried"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('trite');">trite<audio id="trite"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('vie');">vie<audio id="vie"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('vies');">vies<audio id="vies"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('vice');">vice<audio id="vice"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('why');">why<audio id="why"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('wide');">wide<audio id="wide"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('white');">white<audio id="white"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th rowspan="2">/&#596;&#618;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('boy');">boy<audio id="boy"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('boys');">boys<audio id="boys"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('Boyce');">Boyce<audio id="Boyce"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('joy');">joy<audio id="joy"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('joys');">joys<audio id="joys"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('Joyce');">Joyce<audio id="Joyce"></audio></div></td>
     </tr>

     <tr>
      <th rowspan="8">/&#601;&#650;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('bow');">bow<audio id="bow"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('bode');">bode<audio id="bode"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('boat');">boat<audio id="boat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('doe');">doe, dough<audio id="doe"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('doze');">doze, does<audio id="doze"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('dose');">dose<audio id="dose"></audio></div></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('flow');">flow<audio id="flow"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('flowed');">flowed<audio id="flowed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('float');">float<audio id="float"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('go');">go<audio id="go"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('goad');">goad<audio id="goad"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('goat');">goat<audio id="goat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('mow');">mow<audio id="mow"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('mode');">mode, mowed<audio id="mode"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('moat');">moat, mote<audio id="moat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('no');">no<audio id="no"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('node');">node<audio id="node"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('note');">note<audio id="note"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('row');">row<audio id="row"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('rode');">rode, road<audio id="rode"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('wrote');">wrote, rote<audio id="wrote"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('tow');">tow, toe<audio id="tow"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('towed');">towed, toad<audio id="towed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('tote');">tote<audio id="tote"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th>/a&#650;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('bough');">bough, bow<audio id="bough"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('bowed');">bowed<audio id="bowed"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('bout');">bout<audio id="bout"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th>/e&#601;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('scare');">scare<audio id="scare"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('scares');">scares<audio id="scares"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('scarce');">scarce<audio id="scarce"></audio></div></td>
     </tr>

     <tr>
      <th>/&#618;&#601;/</th>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('fear');">fear<audio id="fear"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('fears');">fears<audio id="fears"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="" onclick="playSound('fierce');">fierce<audio id="fierce"></audio></div></td>
     </tr>
     <!--

     <tr>
      <td>A</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>As</td>
      <td>ace</td>
     </tr>
     <tr>
      <td>allow</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>allows</td>
      <td>a louse</td>
     </tr>
     <tr>
      <td>bray</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>brays</td>
      <td>brace</td>
     </tr>
     <tr>
      <td>cur</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>curs</td>
      <td>curse</td>
     </tr>
     <tr>
      <td>dhow</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>dhow</td>
      <td>douse</td>
     </tr>
     <tr>
      <td>grow</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>grows</td>
      <td>gross</td>
     </tr>
     <tr>
      <td>hoe</td>
      <td>hosed</td>
      <td>host</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td>how</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>how's</td>
      <td>house</td>
     </tr>
     <tr>
      <td>K</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Ks</td>
      <td>case</td>
     </tr>
     <tr>
      <td>pay</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>pays</td>
      <td>pace</td>
     </tr>
     <tr>
      <td>peer</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>peers</td>
      <td>pierce</td>
     </tr>
     <tr>
      <td>purr</td>
      <td>purred</td>
      <td>pert</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>purrs</td>
      <td>purse</td>
     </tr>
     <tr>
      <td>spay</td>
      <td>spayed</td>
      <td>spate</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>spays</td>
      <td>space</td>
     </tr>
     <tr>
      <td>tray</td>
      <td>trade</td>
      <td>trait</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>trays</td>
      <td>trace</td>
     </tr>
     <tr>
      <td>ray</td>
      <td>raid</td>
      <td>rate</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>rays</td>
      <td>race</td>
     </tr> -->
    </table>

  </div>
</body>
</html>
