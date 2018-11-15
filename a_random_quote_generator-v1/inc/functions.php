<?php

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes[] = [
    'quote' => 'Fear is a natural reaction to moving closer to the truth',
    'source' => 'Pema Chödrön',
    'citation' => 'When Things Fall Apart: Heart Advice for Difficult Times',
    'year' => '2016',
];

$quotes[] = [
'quote' => 'No one saves us but ourselves. No one can and no one may. We ourselves must walk the path',
'source' => 'Gautama Buddha',
'citation' => 'Sayings Of Buddha',
'year' => '',
];

$quotes[] = [
'quote' => 'Letting go gives us freedom, and freedom is the only condition for happiness. If, in our heart, we still cling to anything ',
'source' => 'Thich Nhat Hanh',
'citation' => ' The Heart of the Buddha\'s Teaching:',
'year' => '',
];

$quotes[] = [
'quote' => 'A man is not called wise because he talks and talks again; but if he is peaceful, loving and fearless then he is in truth called wise.',
'source' => 'Dhammapada',
'citation' => 'The Dhammapada: The Sayings of the Buddha',
'year' => 'December 1, 1994)',
];

$quotes[] = [
'quote' => 'Treat every moment as your last. It is not preparation for something else.',
'source' => 'Shunryu Suzuki',
'citation' => 'Zen Mind, Beginner\'s Mind: Informal Talks on Zen Meditation and Practice',
'year' => '',
];

// Create the getRandomQuuote function and name it getRandomQuote

function getRandomQuote () {
  global $quotes;
  $random = array_rand($quotes);
  return $quotes[$random];
}



// Create the printQuote funtion and name it
//I assigned the return value of getRandomQuote funtion to a varibale $ranQuote
//echo the variable
//used the square brackets for the specific array elements
function printQuote () {
  $ranQuote = getRandomQuote ();

  echo '<p class="quote"> ' . $ranQuote['quote'] . '</p>';
  echo '<p class="source"> '. $ranQuote['source'];
  echo '<span class="citation">' . $ranQuote['citation'] . '</span>';
// only show when a year is avaliable
//used ! to check for year and make sure the element is not empty
  if (! empty ($ranQuote ['year'])){
    echo '<span class="year">' . $ranQuote['year'] . '</span>';
  }
  echo '</p>';

}

?>
