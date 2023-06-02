<?php
require('./classes/numberpairsfinder.php');

// We ensure that the information comes by POST Request.
if (!isset($_POST) || !isset($_POST['numbers']) || !isset($_POST['targetsum'])) {
    header("Location: index.php");
    exit();
}

$pairs = NumberPairsFinder::findPairs($_POST['numbers'], $_POST['targetsum']);

// Output the pairs.
echo 'This is the list of pairs of numbers whose sum is <b>' . $_POST['targetsum'] . ' : </b><br>';
foreach ($pairs as $pair) {
    echo '(' . $pair[0] . ', ' . $pair[1] . ')<br>';
}

?>