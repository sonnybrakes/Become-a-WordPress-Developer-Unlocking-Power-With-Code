<!-- 3-7 What is an Array? -->

<!-- ex. 1 creating a variable-->
<?php
  $myName = "Mitch";
?>

<p>Hi, my name is <?php echo $myName; ?>.</p>

<!-- ex. 2 an array is a collection of multiple variables -->
<?php
  $names = array('Mitch', 'Karen', 'Maddy', 'Jackie');

?>

<p>Hi, my name is <?php echo $names[1]; ?>.</p>

<!-- ex. 3 while loop -->
<?php
  $count =1;
  while($count <= 20) {
    echo "<li>$count</li>";
    $count++;
  }

?>

<!-- ex. 4 while loop array concatination -->
<?php
  $names = array('Mitch', 'Karen', 'Maddy', 'Jacky', 'Waldo');

  $count = 0;
  while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count].</li>";
    $count++;
  }

?>
