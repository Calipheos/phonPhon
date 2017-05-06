<html>
<table class="table resposive">

  <script>

 function playSound (id){
   alert(id);
    var audio = document.getElementById(id);

    //console.log(id);
    // console.log(idSet);
    audio.setAttribute('src', 'media/soundFiles/ame_bre/'+id);
    //audio.load();
    audio.play();
 }
  </script>

<?php

$row = 1;


if (($handle = fopen("media/soundFiles/ame_bre.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $num = count($data);
      //echo '<tr><td><div onClick="playSound("'.$data[1].'")">'.$data[0].'<audio id="'.$data[1].'"></audio></div></td> <td><div onClick="playSound("'.$data[3].'")">'.$data[2].'<audio id="'.$data[3].'"></audio></div></td></tr>';
      echo '<tr><td><div onClick="playSound("'.$data[1].'")">'.$data[0].'<audio id="'.$data[1].'"></audio></div></td><td><div onClick="playSound("'.$data[3].'")">'.$data[2].'<audio id="'.$data[3].'"></audio></div></td></tr>';


      $row++;


  }
  fclose($handle);
}

?>
</table>
</html>
