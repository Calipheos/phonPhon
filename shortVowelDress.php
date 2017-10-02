<!-- Html Markup and css class settings -->

<html>
<div class="panel panel-default">
  <div class="panel-body">
    Sure
    <br> Click the word to hear the sound.
    <br> Authors: Nicola S. Karásková...
  </div>
</div>

<style>
  th,
  td {
    white-space: nowrap;
  }

  .first-col {
    position: absolute;
    width: 3em;
    margin-left: -3em;
  }

  .table-wrapper {
    overflow: scroll;
    width: 100%;
    margin: 0 auto;
  }

  .prazdne {
    background-color: #fffcf3;
  }

</style>


<div class="container">
  <div class="table-wrapper">
    <table class="table table-hover table-responsive table-bordered">
      <?php
// reading procedure of the ame_bre.csv file and loading the data into the browser memory.
// the page content is renderd in this while loop as well.
$row = 1;

if (($handle = fopen("media/soundFiles/shortVowelDress.csv", "r")) !== FALSE) {

  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $num = count($data);

      $fc0 = '"'.$data[0].'.mp3"';
      $fc1 = '"'.$data[1].'.mp3"';
      $fc2 = '"'.$data[2].'.mp3"';
      $fc3 = '"'.$data[3].'.mp3"';
      $fc4 = '"'.$data[4].'.mp3"';
      $fc5 = '"'.$data[5].'.mp3"';
      $fc6 = '"'.$data[6].'.mp3"';
      $fc7 = '"'.$data[7].'.mp3"';
      $fc8 = '"'.$data[8].'.mp3"';
      $fc9 = '"'.$data[9].'.mp3"';
      $fc10 = '"'.$data[10].'.mp3"';
      $fc11 = '"'.$data[11].'.mp3"';
      $fc12 = '"'.$data[12].'.mp3"';
      $fc13 = '"'.$data[13].'.mp3"';
      $fc14 = '"'.$data[14].'.mp3"';
      $fc15 = '"'.$data[15].'.mp3"';
      $fc16 = '"'.$data[16].'.mp3"';
      $fc17 = '"'.$data[17].'.mp3"';
      $fc18 = '"'.$data[18].'.mp3"';
      $fc19 = '"'.$data[19].'.mp3"';
      $fc20 = '"'.$data[20].'.mp3"';
      $fc21 = '"'.$data[21].'.mp3"';
      $fc22 = '"'.$data[22].'.mp3"';
      $fc23 = '"'.$data[23].'.mp3"';
      $fc24 = '"'.$data[24].'.mp3"';
      $fc25 = '"'.$data[25].'.mp3"';
      $fc26 = '"'.$data[26].'.mp3"';
      $fc27 = '"'.$data[27].'.mp3"';
      $fc28 = '"'.$data[28].'.mp3"';
      $fc29 = '"'.$data[29].'.mp3"';
      $fc30 = '"'.$data[30].'.mp3"';
      $fc31 = '"'.$data[31].'.mp3"';
      $fc32 = '"'.$data[32].'.mp3"';
      $fc33 = '"'.$data[33].'.mp3"';
      $fc34 = '"'.$data[34].'.mp3"';
      $fc35 = '"'.$data[35].'.mp3"';
      $fc36 = '"'.$data[36].'.mp3"';
      $fc37 = '"'.$data[37].'.mp3"';
      $fc38 = '"'.$data[38].'.mp3"';
      $fc39 = '"'.$data[39].'.mp3"';
      $fc40 = '"'.$data[40].'.mp3"';
      $fc41 = '"'.$data[41].'.mp3"';
      $fc42 = '"'.$data[42].'.mp3"';
      $fc43 = '"'.$data[43].'.mp3"';
      $fc44 = '"'.$data[44].'.mp3"';
      $fc45 = '"'.$data[45].'.mp3"';
      $fc46 = '"'.$data[46].'.mp3"';
      $fc47 = '"'.$data[47].'.mp3"';
      $fc48 = '"'.$data[48].'.mp3"';


    echo '<tr>
      <th class="first-col"><div onClick=\'playSound('.$fc0.')\'>'.$data[0].'<audio id='.$fc0.'></audio></div></th>
      <td><div onClick=\'playSound('.$fc1.')\'>'.$data[1].'<audio id='.$fc1.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc2.')\'>'.$data[2].'<audio id='.$fc2.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc3.')\'>'.$data[3].'<audio id='.$fc3.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc4.')\'>'.$data[4].'<audio id='.$fc4.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc5.')\'>'.$data[5].'<audio id='.$fc5.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc6.')\'>'.$data[6].'<audio id='.$fc6.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc7.')\'>'.$data[7].'<audio id='.$fc7.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc8.')\'>'.$data[8].'<audio id='.$fc8.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc9.')\'>'.$data[9].'<audio id='.$fc9.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc10.')\'>'.$data[10].'<audio id='.$fc10.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc11.')\'>'.$data[11].'<audio id='.$fc11.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc12.')\'>'.$data[12].'<audio id='.$fc12.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc13.')\'>'.$data[13].'<audio id='.$fc13.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc14.')\'>'.$data[14].'<audio id='.$fc14.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc15.')\'>'.$data[15].'<audio id='.$fc15.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc16.')\'>'.$data[16].'<audio id='.$fc16.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc17.')\'>'.$data[17].'<audio id='.$fc17.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc18.')\'>'.$data[18].'<audio id='.$fc18.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc19.')\'>'.$data[19].'<audio id='.$fc19.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc20.')\'>'.$data[20].'<audio id='.$fc20.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc21.')\'>'.$data[21].'<audio id='.$fc21.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc22.')\'>'.$data[22].'<audio id='.$fc22.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc23.')\'>'.$data[23].'<audio id='.$fc23.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc24.')\'>'.$data[24].'<audio id='.$fc24.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc25.')\'>'.$data[25].'<audio id='.$fc25.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc26.')\'>'.$data[26].'<audio id='.$fc26.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc27.')\'>'.$data[27].'<audio id='.$fc27.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc28.')\'>'.$data[28].'<audio id='.$fc28.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc29.')\'>'.$data[29].'<audio id='.$fc29.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc30.')\'>'.$data[30].'<audio id='.$fc30.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc31.')\'>'.$data[31].'<audio id='.$fc31.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc32.')\'>'.$data[32].'<audio id='.$fc32.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc33.')\'>'.$data[33].'<audio id='.$fc33.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc34.')\'>'.$data[34].'<audio id='.$fc34.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc35.')\'>'.$data[35].'<audio id='.$fc35.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc36.')\'>'.$data[36].'<audio id='.$fc36.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc37.')\'>'.$data[37].'<audio id='.$fc37.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc38.')\'>'.$data[38].'<audio id='.$fc38.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc39.')\'>'.$data[39].'<audio id='.$fc39.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc40.')\'>'.$data[40].'<audio id='.$fc40.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc41.')\'>'.$data[41].'<audio id='.$fc41.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc42.')\'>'.$data[42].'<audio id='.$fc42.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc43.')\'>'.$data[43].'<audio id='.$fc43.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc44.')\'>'.$data[44].'<audio id='.$fc44.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc45.')\'>'.$data[45].'<audio id='.$fc45.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc46.')\'>'.$data[46].'<audio id='.$fc46.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc47.')\'>'.$data[47].'<audio id='.$fc47.'></audio></div></td>
      <td><div onClick=\'playSound('.$fc48.')\'>'.$data[48].'<audio id='.$fc48.'></audio></div></td>
      </tr>';


      $row++;


  }
  fclose($handle);
}
?>

    </table>
  </div>
</div>

</html>
<script>
  // playSound function handles sound file association to the DOM element and plays the sound file.
  function playSound(id) {
    //alert(id);
    var audio = document.getElementById(id);

    audio.setAttribute('src', "media/soundFiles/vowels/" + id);
    //audio.load();
    audio.play();
  };
  $("td").each(function(){
      if($(this).text() == ""){
          $(this).addClass("prazdne");
      }
  });

</script>
