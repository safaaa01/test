<?php
$numParagraphs = $_POST['paragraphs'];
$text = $_POST['text'];
$textExplode = explode(' ',$text);

shuffle($textExplode);

//foreach($textExplode as $key => $value)
//{echo"<p> $key Value: $value</p>";
    //<p>1 Value:word</p>
//}

// use to implode function, to turn it back into string
$textImplode = implode(' ',$textExplode);

//or output using a for each loop
//echo "<p>$textImplode</p>";
//echo'Text Explode';
//print_r($textExplode);
//echo'Shuffled Text';
//print_r($shuffledText);
//$text ="s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, bu";

for($i =0; $i <$numParagraphs; $i++)
{
    //output a paragraph
echo "<p>$textImplode</p>";

}
?>