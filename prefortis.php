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
        Shaded boxes do not have a sound associated with the word.<br>
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
      <th></th>
      <th></th>
      <th>/d/</th>
      <th>/t/</th>
      <th>/g/</th>
      <th>/k/</th>
      <th>/v/</th>
      <th>/f/</th>
      <th>/z/</th>
      <th>/s/</th>
     </tr>
   </thead>

     <tr>
      <th rowspan="12">/i&#720;/</th>
      <td><div onclick="playSound('bee');">bee<audio id="bee"></audio></div></td>
      <td><div data-toggle="tooltip" data-placement="top" title="/bi:d/" onclick="playSound('bead');">bead<audio id="bead"></audio></div></td>
      <td><div onclick="playSound('beat');">beat<audio id="beat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('fee');">fee<audio id="fee"></audio></div></td>
      <td><div onclick="playSound('feed');">feed<audio id="feed"></audio></div></td>
      <td><div onclick="playSound('feet');">feet<audio id="feet"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('he');">he<audio id="he"></audio></div></td>
      <td><div onclick="playSound('heed');">heed<audio id="heed"></audio></div></td>
      <td><div onclick="playSound('heat');">heat<audio id="heat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('knee');">knee<audio id="knee"></audio></div></td>
      <td><div onclick="playSound('need');">need<audio id="need"></audio></div></td>
      <td><div onclick="playSound('neat');">neat<audio id="neat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="noSound"><div onclick="playSound('knees');">knees<audio id="knees"></audio></div></td>
      <td class="noSound"><div onclick="playSound('niece');">niece<audio id="niece"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('lea');">lea<audio id="lea"></audio></div></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('league');">league<audio id="league"></audio></div></td>
      <td><div onclick="playSound('leak');">leak<audio id="leak"></audio></div></td>
      <td><div onclick="playSound('leave');">leave<audio id="leave"></audio></div></td>
      <td><div onclick="playSound('leaf');">leaf<audio id="leaf"></audio></div></td>
      <td><div onclick="playSound('leas');">leas<audio id="leas"></audio></div></td>
      <td><div onclick="playSound('lease');">lease<audio id="lease"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('me');">me<audio id="me"></audio></div></td>
      <td><div onclick="playSound('mead');">mead<audio id="mead"></audio></div></td>
      <td><div onclick="playSound('meat');">meat<audio id="meat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('pea');">pea<audio id="pea"></audio></div></td>
      <td><div onclick="playSound('peed');">peed<audio id="peed"></audio></div></td>
      <td><div onclick="playSound('peat');">peat<audio id="peat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('peas');">peas<audio id="peas"></audio></div></td>
      <td><div onclick="playSound('peace');">peace<audio id="peace"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('plea');">plea<audio id="plea"></audio></div></td>
      <td><div onclick="playSound('plead');">plead<audio id="plead"></audio></div></td>
      <td><div onclick="playSound('pleat');">pleat<audio id="pleat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('see');">see<audio id="see"></audio></div></td>
      <td><div onclick="playSound('seed');">seed<audio id="seed"></audio></div></td>
      <td><div onclick="playSound('seat');">seat<audio id="seat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('seize');">seize<audio id="seize"></audio></div></td>
      <td><div onclick="playSound('cease');">cease<audio id="cease"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('she');">she<audio id="she"></audio></div></td>
      <td><div onclick="playSound('sheed');">she'd<audio id="sheed"></audio></div></td>
      <td><div onclick="playSound('sheet');">sheet<audio id="sheet"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('tea');">tea<audio id="tea"></audio></div></td>
      <td><div onclick="playSound('teed');">teed<audio id="teed"></audio></div></td>
      <td><div onclick="playSound('teat');">teat<audio id="teat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('we');">we<audio id="we"></audio></div></td>
      <td><div onclick="playSound('weed');">weed<audio id="weed"></audio></div></td>
      <td><div onclick="playSound('wheat');">wheat<audio id="wheat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th rowspan="4">/&#593;&#720;/</th>
      <td><div onclick="playSound('bar');">bar<audio id="bar"></audio></div></td>
      <td><div onclick="playSound('bard');">bard<audio id="bard"></audio></div></td>
      <td><div onclick="playSound('Bart');">Bart<audio id="Bart"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('car');">car<audio id="car"></audio></div></td>
      <td><div onclick="playSound('card');">card<audio id="card"></audio></div></td>
      <td><div onclick="playSound('cart');">cart<audio id="cart"></audio></div></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('calve');">calve<audio id="calve"></audio></div></td>
      <td><div onclick="playSound('calf');">calf<audio id="calf"></audio></div></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="noSound"><div onclick="playSound('halve');">halve<audio id="halve"></audio></div></td>
      <td class="noSound"><div onclick="playSound('half');">half<audio id="half"></audio></div></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('spa');">spa<audio id="spa"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('spas');">spas<audio id="spas"></audio></div></td>
      <td><div onclick="playSound('sparce');">sparce<audio id="sparce"></audio></div></td>
     </tr>

     <tr>
      <th rowspan="2">/&#604;&#720;/</th>
      <td><div onclick="playSound('her');">her<audio id="her"></audio></div></td>
      <td><div onclick="playSound('heard');">heard<audio id="heard"></audio></div></td>
      <td><div onclick="playSound('hurt');">hurt<audio id="hurt"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('hers');">hers<audio id="hers"></audio></div></td>
      <td><div onclick="playSound('hearse');">hearse<audio id="hearse"></audio></div></td>
     </tr>

     <tr>
      <td><div onclick="playSound('were');">were<audio id="were"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('whirrs');">whirrs<audio id="whirrs"></audio></div></td>
      <td><div onclick="playSound('worse');">worse<audio id="worse"></audio></div></td>
     </tr>

     <tr>
      <th rowspan="5">/u&#720;/</th>
      <td><div onclick="playSound('shoe');">shoe<audio id="shoe"></audio></div></td>
      <td><div onclick="playSound('shoed');">shoed<audio id="shoed"></audio></div></td>
      <td><div onclick="playSound('shoot');">shoot<audio id="shoot"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('Jew');">Jew<audio id="Jew"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('Jews');">Jews<audio id="Jews"></audio></div></td>
      <td><div onclick="playSound('juice');">juice<audio id="juice"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('moo');">moo<audio id="moo"></audio></div></td>
      <td><div onclick="playSound('mood');">mood<audio id="mood"></audio></div></td>
      <td><div onclick="playSound('moot');">moot<audio id="moot"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('moos');">moos<audio id="moos"></audio></div></td>
      <td><div onclick="playSound('moose');">moose<audio id="moose"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('loo');">loo<audio id="loo"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('lose');">lose<audio id="lose"></audio></div></td>
      <td><div onclick="playSound('loose');">loose<audio id="loose"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('who');">who<audio id="who"></audio></div></td>
      <td><div onclick="playSound('whod');">who'd<audio id="whod"></audio></div></td>
      <td><div onclick="playSound('hoot');">hoot<audio id="hoot"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th rowspan="5">/&#596;&#720;/</th>
      <td><div onclick="playSound('core');">core<audio id="core"></audio></div></td>
      <td><div onclick="playSound('cord');">cord<audio id="cord"></audio></div></td>
      <td><div onclick="playSound('court');">court<audio id="court"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('cause');">cause<audio id="cause"></audio></div></td>
      <td><div onclick="playSound('course');">course<audio id="course"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('more');">more<audio id="more"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('moors');">moors<audio id="moors"></audio></div></td>
      <td><div onclick="playSound('Morse');">Morse<audio id="Morse"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('or');">or<audio id="or"></audio></div></td>
      <td><div onclick="playSound('awed');">awed<audio id="awed"></audio></div></td>
      <td><div onclick="playSound('ought');">ought<audio id="ought"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('saw');">saw<audio id="saw"></audio></div></td>
      <td><div onclick="playSound('sawed');">sawed<audio id="sawed"></audio></div></td>
      <td><div onclick="playSound('sought');">sought<audio id="sought"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('saws');">saws<audio id="saws"></audio></div></td>
      <td><div onclick="playSound('source');">source<audio id="source"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('whore');">whore<audio id="whore"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('whores');">whores<audio id="whores"></audio></div></td>
      <td><div onclick="playSound('horse');">horse<audio id="horse"></audio></div></td>
     </tr>

     <tr>
      <th rowspan="6">/e&#618;/</th>
      <td><div onclick="playSound('gray');">gray<audio id="gray"></audio></div></td>
      <td><div onclick="playSound('grade');">grade<audio id="grade"></audio></div></td>
      <td><div onclick="playSound('great');">great<audio id="great"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('greys');">greys<audio id="greys"></audio></div></td>
      <td><div onclick="playSound('grace');">grace<audio id="grace"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('lay');">lay<audio id="lay"></audio></div></td>
      <td><div onclick="playSound('laid');">laid<audio id="laid"></audio></div></td>
      <td><div onclick="playSound('late');">late<audio id="late"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('lays');">lays<audio id="lays"></audio></div></td>
      <td><div onclick="playSound('lace');">lace<audio id="lace"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('may');">may<audio id="may"></audio></div></td>
      <td><div onclick="playSound('made');">made<audio id="made"></audio></div></td>
      <td><div onclick="playSound('mate');">mate<audio id="mate"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('maze');">maze<audio id="maze"></audio></div></td>
      <td><div onclick="playSound('mace');">mace<audio id="mace"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('play');">play<audio id="play"></audio></div></td>
      <td><div onclick="playSound('played');">played<audio id="played"></audio></div></td>
      <td><div onclick="playSound('plate');">plate<audio id="plate"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('plays');">plays<audio id="plays"></audio></div></td>
      <td><div onclick="playSound('place');">place<audio id="place"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('stay');">stay<audio id="stay"></audio></div></td>
      <td><div onclick="playSound('stayed');">stayed<audio id="stayed"></audio></div></td>
      <td><div onclick="playSound('state');">state<audio id="state"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('way');">way<audio id="way"></audio></div></td>
      <td><div onclick="playSound('weighed');">weighed<audio id="weighed"></audio></div></td>
      <td><div onclick="playSound('wait');">wait<audio id="wait"></audio></div></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('wave');">wave<audio id="wave"></audio></div></td>
      <td><div onclick="playSound('waif');">waif<audio id="waif"></audio></div></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th rowspan="13">/a&#618;/</th>
      <td><div onclick="playSound('die');">die<audio id="die"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('dies');">dies<audio id="dies"></audio></div></td>
      <td><div onclick="playSound('dice');">dice<audio id="dice"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('eye');">eye<audio id="eye"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('eyes');">eyes<audio id="eyes"></audio></div></td>
      <td><div onclick="playSound('ice');">ice<audio id="ice"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('fry');">fry<audio id="fry"></audio></div></td>
      <td><div onclick="playSound('fried');">fried<audio id="fried"></audio></div></td>
      <td><div onclick="playSound('fright');">fright<audio id="fright"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('high');">high<audio id="high"></audio></div></td>
      <td><div onclick="playSound('hide');">hide<audio id="hide"></audio></div></td>
      <td><div onclick="playSound('height');">height<audio id="height"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('lie');">lie<audio id="lie"></audio></div></td>
      <td><div onclick="playSound('lied');">lied<audio id="lied"></audio></div></td>
      <td><div onclick="playSound('light');">light<audio id="light"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('lies');">lies<audio id="lies"></audio></div></td>
      <td><div onclick="playSound('lice');">lice<audio id="lice"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('pry');">pry<audio id="pry"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('prize');">prize<audio id="prize"></audio></div></td>
      <td><div onclick="playSound('price');">price<audio id="price"></audio></div></td>
     </tr>
     <tr>
      <td class="noSound"><div onclick="playSound('rye');">rye<audio id="rye"></audio></div></td>
      <td><div onclick="playSound('ride');">ride<audio id="ride"></audio></div></td>
      <td><div onclick="playSound('write');">write<audio id="write"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="noSound"><div onclick="playSound('rise');">rise<audio id="rise"></audio></div></td>
      <td class="noSound"><div onclick="playSound('rice');">rice<audio id="rice"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('sigh');">sigh<audio id="sigh"></audio></div></td>
      <td><div onclick="playSound('side');">side<audio id="side"></audio></div></td>
      <td><div onclick="playSound('site');">site<audio id="site"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('spy');">spy<audio id="spy"></audio></div></td>
      <td><div onclick="playSound('spied');">spied<audio id="spied"></audio></div></td>
      <td><div onclick="playSound('spite');">spite<audio id="spite"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('spies');">spies<audio id="spies"></audio></div></td>
      <td><div onclick="playSound('spice');">spice<audio id="spice"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('tie');">tie<audio id="tie"></audio></div></td>
      <td><div onclick="playSound('tide');">tide<audio id="tide"></audio></div></td>
      <td><div onclick="playSound('tight');">tight<audio id="tight"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('try');">try<audio id="try"></audio></div></td>
      <td><div onclick="playSound('tried');">tried<audio id="tried"></audio></div></td>
      <td><div onclick="playSound('trite');">trite<audio id="trite"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('vie');">vie<audio id="vie"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('vies');">vies<audio id="vies"></audio></div></td>
      <td><div onclick="playSound('vice');">vice<audio id="vice"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('why');">why<audio id="why"></audio></div></td>
      <td><div onclick="playSound('wide');">wide<audio id="wide"></audio></div></td>
      <td><div onclick="playSound('white');">white<audio id="white"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th rowspan="2">/&#596;&#618;/</th>
      <td><div onclick="playSound('boy');">boy<audio id="boy"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('boys');">boys<audio id="boys"></audio></div></td>
      <td><div onclick="playSound('Boyce');">Boyce<audio id="Boyce"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('joy');">joy<audio id="joy"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('joys');">joys<audio id="joys"></audio></div></td>
      <td><div onclick="playSound('Joyce');">Joyce<audio id="Joyce"></audio></div></td>
     </tr>

     <tr>
      <th rowspan="8">/&#601;&#650;/</th>
      <td><div onclick="playSound('bow');">bow<audio id="bow"></audio></div></td>
      <td><div onclick="playSound('bode');">bode<audio id="bode"></audio></div></td>
      <td><div onclick="playSound('boat');">boat<audio id="boat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('doe');">doe<audio id="doe"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('doze');">doze<audio id="doze"></audio></div></td>
      <td><div onclick="playSound('dose');">dose<audio id="dose"></audio></div></td>
     </tr>
     <tr>
      <td><div onclick="playSound('flow');">flow<audio id="flow"></audio></div></td>
      <td><div onclick="playSound('flowed');">flowed<audio id="flowed"></audio></div></td>
      <td><div onclick="playSound('float');">float<audio id="float"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('go');">go<audio id="go"></audio></div></td>
      <td><div onclick="playSound('goad');">goad<audio id="goad"></audio></div></td>
      <td><div onclick="playSound('goat');">goat<audio id="goat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('mow');">mow<audio id="mow"></audio></div></td>
      <td><div onclick="playSound('mode');">mode<audio id="mode"></audio></div></td>
      <td><div onclick="playSound('moat');">moat<audio id="moat"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('no');">no<audio id="no"></audio></div></td>
      <td><div onclick="playSound('node');">node<audio id="node"></audio></div></td>
      <td><div onclick="playSound('note');">note<audio id="note"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('row');">row<audio id="row"></audio></div></td>
      <td><div onclick="playSound('rode');">rode<audio id="rode"></audio></div></td>
      <td><div onclick="playSound('wrote');">wrote<audio id="wrote"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td><div onclick="playSound('tow');">tow<audio id="tow"></audio></div></td>
      <td><div onclick="playSound('towed');">towed<audio id="towed"></audio></div></td>
      <td><div onclick="playSound('tote');">tote<audio id="tote"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th>/a&#650;/</th>
      <td><div onclick="playSound('bough');">bough<audio id="bough"></audio></div></td>
      <td><div onclick="playSound('bowed');">bowed<audio id="bowed"></audio></div></td>
      <td><div onclick="playSound('bout');">bout<audio id="bout"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     </tr>

     <tr>
      <th>/e&#601;/</th>
      <td><div onclick="playSound('scare');">scare<audio id="scare"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('scares');">scares<audio id="scares"></audio></div></td>
      <td><div onclick="playSound('scarce');">scarce<audio id="scarce"></audio></div></td>
     </tr>

     <tr>
      <th>/&#618;&#601;/</th>
      <td><div onclick="playSound('fear');">fear<audio id="fear"></audio></div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div onclick="playSound('fears');">fears<audio id="fears"></audio></div></td>
      <td><div onclick="playSound('fierce');">fierce<audio id="fierce"></audio></div></td>
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
