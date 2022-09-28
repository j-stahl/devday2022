<html>
  <head>
    <title>DiLoc|Dev|Day</title>
    <style>
        h1 {
            text-align: center;
            font-size: 60px;
        }
        .wordBox {
            color: white;
            background-color: black;
            margin-left: 25%;
            margin-right: 25%;
        }
    </style>
  </head>
  <body>
    <h1>DiLoc|Dev|Day</h1>
    <?php
      /////////////////////////////////////
      /// to be filled by developers
      $randomHostName = "random-server";
      /////////////////////////////////////
      // RANDOM
      $words = json_decode(file_get_contents("http://$randomHostName:3100/v1/words"));
      $wordsString = "";
      foreach($words as $word)
      {
        $wordsString .= $word->value . " ";
      }
      $words = json_decode(file_get_contents("http://$randomHostName:3100/v1/words"));
      foreach($words as $word)
      {
        $wordsString .= $word->value . " ";
      }
      $wordsString .= $wordsString . $wordsString . $wordsString . $wordsString;
      echo "<p class='wordBox'>" .
          $wordsString .
          "</p>";
    ?>
  </body>
</html>
