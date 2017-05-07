<html>
<table class="table resposive">

<script>

 function playSound (id){
    //alert(id);
    var audio = document.getElementById(id);

    audio.setAttribute('src',"media/soundFiles/ame_bre/"+id);
    //audio.load();
    audio.play();
 }
</script>

<?php

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
