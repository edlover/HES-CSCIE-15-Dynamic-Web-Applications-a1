<?php require('quoteRandomizer.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About me - Ed Steinbauer</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
  <h1>Ed Steinbauer</h1>
  <img src="/images/myFamily.jpg" alt="My Family">
  <div id='aboutMe'>
    <h2>About me:</h2>
    <p>
      Hello, my name is Ed Steinbauer and I am pursuing a Master of Liberal Arts degree in Information Systems Management at Harvard Extension School. This is a picture taken in the summer of 2016 of my family and I while we were on a hike during our vacation in Maine.
    <p>
    <p>
      I've been in the technology industry for the past 23 years, with the last 19 at a small software company called Microsoft. My current role is a service delivery manager for O365, which means I help large enterprise customers move to our cloud-based collaboration services. Exciting times.
    </p>
    <p>
      Even though the dev courses I took while pursuing my Bachelors degree were often my favorite, my first job out of college started my technology path down the infrastructure route and not the development route. While I've always loved development, learning the upcoming infrastructure technologies took a front seat and my dev skills deteriorated over time. Sure, I was able to develop some utilities and scripts to help me and my customers but these opportunities were few and far between.
    </p>
    <p>
      During the years I've developed some personal websites or simple websites for small groups and taught myself by reverse engineering what someone else did as a starting point. I did a lot of bad things over the years and look back at my past work in shame after taking CSCI E-3 and E-12. I have awakened a new found love of development that went dormant all of those years when I was helping customers build out their datacenters, migrating to Exchange Server and so on.
    </p>
    <p>
      Perhaps development work will somehow be a bookmark to my career as it is something I really enjoy. It is great to be able to build something out of nothing that can do really great things.
    </p>
    <p>
      I am looking forward to this class to help me right all the wrongs I've done with my PHP development I did last year!
    </p>
    <p>
      At a personal level, I currently live in the Philadelphia suburbs with my wife and 11 year old son (who I am also teaching web development to), but was born in Ohio to a large farm family.
    </p>
    <h2>One of my favorite quotes: </h2>
    <p><?=$randomQuote ?></p>
  </div>
</body>
</html>
