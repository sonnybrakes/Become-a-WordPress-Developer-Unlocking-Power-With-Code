<!-- 3-7 What is a Function? -->

<!-- ex. 1 creating a function -->
<?php
  echo 2 + 2;
?>

<!-- ex. 2 calling a function-->
<?php
  function myFirstFunction() {
    echo 2 + 2;
  }

  myFirstFunction();
?>

<!-- ex. 3 creating variables and calling functions with arguments-->
<?php
  function greet($name, $colour) {
    echo "<p>Hi, my name is $name and my favourite colour is $colour.</p>";
  }

  greet('Mitch', 'purple');
  greet('Karen', 'orange');
?>

<!-- ex. 4 calling WordPress functions with arguments -->
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
