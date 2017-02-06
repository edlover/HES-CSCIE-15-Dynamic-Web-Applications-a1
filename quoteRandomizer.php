<?php

# array of some of my favorite quotes
$quotes = ['stay cool', 'mondays are fundays', 'be who you are'];

# use array_rand to return the index of one of the array entries radmomly
$randomIndex = array_rand($quotes, 1);

# insert the actual quote of the randomly chosen array entry into the variable $randomQuote
$randomQuote = $quotes[$randomIndex];
