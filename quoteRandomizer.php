<?php

# array of some of my favorite quotes
$quotes = [
  '"I knew then and I know now that, when it comes to justice, there is no easy way to get it. You can\'t sugarcoat it. You have to take a stand and say, "This is not right."" - Claudette Colvin',
  '"Ignorance leads to fear, fear leads to hate, and hate leads to violence. This is the equation." - Averroes',
  '"We must rapidly begin the shift from a "thing-oriented" society to a "person-oriented" society. When machines and computers, profit motives and property rights are considered more important than people, the giant triplets of racism, materialism, and militarism are incapable of being conquered." - Martin Luther King, Jr.',
  '"Our lives begin to end the day we become silent about things that matter." - Martin Luther King, Jr.',
  '"You have not failed. You have just found some ways that won\'t work." - unknown (I found this on the underside of a bottle cap on a spike seltzer)'
];

# use array_rand to return the index of one of the array entries radmomly
$randomIndex = array_rand($quotes, 1);

# insert the actual quote of the randomly chosen array entry into the variable $randomQuote
$randomQuote = $quotes[$randomIndex];
