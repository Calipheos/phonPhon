<!-- Html Markup and css class settings -->

<html>
<div class="panel panel-default">
  <div class="panel-body">
    This table summarizes the most common uterances from American and British flavour of English.
    <br>
    Click the word to hear the sound.
    <br>
    Authors: Nicola S. Karásková (BRE), Kathleen Winslow (AME).
  </div>
</div>

<table class="table resposive">

<script>
// playSound function handles sound file association to the DOM element and plays the sound file.
 function playSound (id){
    //alert(id);
    var audio = document.getElementById(id);

    audio.setAttribute('src',"media/soundFiles/ame_bre/"+id);
    //audio.load();
    audio.play();
 }
</script>

<?php
// reading procedure of the ame_bre.csv file and loading the data into the browser memory.
// the page content is renderd in this while loop as well.
$row = 1;


if (($handle = fopen("media/soundFiles/ame_bre.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $num = count($data);
      $fc1 = '"'.$data[1].'"';
      $fc2 = '"'.$data[3].'"';
    echo '<tr><td><div onClick=\'playSound('.$fc1.')\'>'.$data[0].'<audio id="'.$data[1].'"></audio></div></td><td><div onClick=\'playSound('.$fc2.')\'>'.$data[2].'<audio id="'.$data[3].'"></audio></div></td></tr>';


      $row++;


  }
  fclose($handle);
}

?>
</table>
</html>
