<!DOCTYPE html>
<html>
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- adding a favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
<!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Guess my number</title>
  </head>
  <body>
    <center>
<!-- adding a JavaScript button that generates a random number-->
   <form action="./results.php" method="post" target="results">
    <?php
    echo "<h1>Cold or Hot Program with PHP</h1>";
    ?>
		<table>
			<tr>
				<td>
					<?php
          echo "<h3>Enter a degrees (In Celsius):</h3>";
          ?>						
						<label for="hour">Degrees:</label>
						<input type="number" step="0.01"  name="degrees" placeholder="Degrees Celsius"><br><br>
						<input type="submit" value="Calculate if it is hot or cold">
					</form>
				</td>
				<td>
<!-- adding an image -->
					<img src="./images/hot.jpg" alt="Greeting" width="100%">
				</td>
			</tr>
		</table>
<!-- Adding an iframe to display results -->
      <center><iframe id="results" name="results"></iframe></center>
			</div>
		</div>
    </center>
  </body>
</html>