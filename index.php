<!DOCTYPE html>
<!--

-->
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Mars Weather</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="automation.js"></script>
    </head>
    <body>
    <div style="background-image: url('background.jpg'); background-repeat: no-repeat; background-attachment:fixed; background-size: 100% 100%; cursor: url('cursor.jpg'), auto;">

        <h1><strong>Mars Weather</strong></h1>

    <figure class="rightside">
    <img class="marsRo" alt="Mars Rover." width="712" height="406" src="insight.jpg">
        <figcaption><strong>The Insight Mars Rover.</strong></figcaption>
    </figure>

        <p1><strong> In this project, we wanted to inform clients and others of Mars' weather.
            We decided on this project because we wanted to explore more information on Mars and
            inform others in a simplified local form. We began by extracting and organizing data on
            Mars' weather measurements and compiling them into graphs that could be easily
            understood and interpreted. The data we are making use of is from NASA's MARS InSight Mission.
            We are also utilizing this data to forecast future Mars' weather, by a day or so.</strong>
        </p1>

        <h2><strong>Last Updated:</strong></h2>
        <p><strong>Current season: <?php include('data/season.txt'); ?></strong></p>
        <p><strong>Sol: <?php include('data/sol.txt'); ?></strong></p>
        <p><strong>Time: <?php include('data/time.txt'); ?></strong></p>

        <article id="wind">
            <h2><strong> Wind Rose Plots</strong></h2>
            <figure class="plot">
                <img class="roundedCornerSmall" width="800" height="800" alt="Wind Data" src="windrose.jpeg">
                <figcaption> <strong>This is the Wind Rose data. The direction of the wind</strong></figcaption>
            </figure>
            <h2> <strong>Temp/Pressure/Wind Plots</strong></h2>
            <figure class="plot">
                <img class="roundedCornerSmall" height="800" width="1000" alt="Temperature Date" src="stackplot.jpeg">
                <figcaption> <strong>This is the Temperature and Pressure data.</strong></figcaption>
            </figure>
        </article>



        <h3><strong>About the team</strong></h3>
        <p><strong>Garrett Faucher, a Junior Computer Science Major and Astronomy Minor. He likes to look at stars and bike.</strong></p>
        <p><strong>Eliot Heinrich, a senior physics and computer science major. He is a ballroom and swing dancer. </strong></p>
        <p><strong>Thomas Sheboy, a junior Computer Science major and Mathematics minor. He likes to play guitar.</strong></p>
        <p><strong>Stanhope Nwosu, a senior Computer Science major and Statistic minor.
            They like to play the trumpet and enjoys beaches.</strong></p>

    </div>
    </body>
</html>
