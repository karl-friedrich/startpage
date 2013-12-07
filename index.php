<html>
  <head>
    <title>start</title>
    <link rel="shortcut icon" type="image/gif" href="http://mc.ifargle.com/img/oc.png" />
    <!--<link href='http://fonts.googleapis.com/css?family=Fjord+One' rel='stylesheet' type='text/css'>-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://mc.ifargle.com/css/new_style.css">
    <! Color changing PHP code >
    <!-- SOURCE
    ?php
      $rand = ['49bc78', 'c44d63', '3998c4', '568555', '019fde', '4E4E4E', 'd74946', '665348', '4d7c89', 'a8466c', 'a8a3a7', '9b4637', '3d63a7', '69505e'];
      $color = '#'.$rand[rand(0,13)];    ?-->
    <?php
      $rand = ['49bc78', 'c44d63', '3998c4', '568555', '019fde', '4E4E4E', 'd74946', '665348', '4d7c89', 'a8466c', 'a8a3a7', '9b4637', '3d63a7', '69505e'];
      $color = '#'.$rand[rand(0,13)];
      ?>

    <! Quick CSS Properties for changing colors >
    <style>
      input#q {border: 1px solid <?php echo $color; ?>;}
      input#q:focus {box-shadow: 0px 0px 10px <?php echo $color; ?>;}
      .circle{background: <?php echo $color; ?>;}
      .circle:hover{box-shadow: 0px 0px 30px <?php echo $color; ?>;}
      #time{color: rgb(78,78,78); text-border: 1px solid <?php echo $color; ?>;}
      body{background: rgb(216,216,216);}
      a{color: rgb(216,216,216);};
      a:link{color: rgb(216,216,216);};
      a:hover{color: rgb(216,216,216); text-shadow: 0px 0px 5px rgb(216,216,216);};
    </style>

  </head>
  <body onload="updateClock()">
    <div class="keepCentered">
      <center><div id="time"></div></center>
      <div class="favorites circle">
        Favorites<br>
        <br>
        <a href="http://www.feedly.com">feedly</a><br>
        <a href="http://www.tech-forums.net">tech forums</a><br>
        <a href="http://mc.ifargle.com:32400/web">plex</a><br>
        <a href="http://www.reddit.com">reddit</a><br>
      </div>
      <div class="server circle">
        Server 
        <?php
          $data=file_get_contents("http://api.iamphoenix.me/status/?server_ip=mc.ifargle.com");
          if ($data=="{\"status\":\"false\"}") echo "&#10007;";
          else if ($data=="{\"status\":\"true\"}") echo "&#10003;";
          else echo "?";
        ?>
        <br>
        <br>
        <a href="http://mc.ifargle.com/Share">share</a><br>
        <a href="https://mc.ifargle.com:10000">webmin</a><br>
        <a href="http://mc.ifargle.com/pydio">file manager</a><br>
        <a href="http://mc.ifargle.com:9091/transmission/web/">transmission</a><br>
      </div>
      <div class="google circle">
        Google<br>
        <br>
        <a href="http://www.google.com/calendar">calendar</a><br>
        <a href="http://music.google.com">music</a><br>
        <a href="http://gmail.com">mail</a><br>
        <a href="http://drive.google.com">drive</a><br>
      </div>
      <div class="coding circle">
        Coding<br>
        <br>
        <a href="https://chrome.google.com/webstore/detail/secure-shell/pnhechapfaindjhompbnflcldabbghjo?hl=en">terminal</a><br>
        <a href="http://www.dropbox.com">dropbox</a><br>
        <a href="http://www.stackexchange.com">stack exchange</a><br>
        <a href="http://en.cppreference.com/w/">c++</a><br>
      </div>
      <div class="other circle">
        Other<br>
        <br>
        <a href="http://www.mint.com">mint</a><br>
        <a href="https://chrome.google.com/webstore/detail/chrome-remote-desktop/gbchcmhmhahfdphkhkmpfmihenigjmpp/related?hl=en">chrome rdp</a><br>
        <a href="http://www.iheart.com/live/KFI-177/">iHeartRadio</a><br>
        <a href="http://www.debian.org">debian</a><br>
        <a href="http://www.reddit.com/r/linuxquestions+linux4noobs">linux q/a</a><br>
      </div>
      <center>
        <form method='GET' action='http://www.google.com/search'>
            <input id="q" placeholder="Google Search" name="q" size="75" type="text" />
            <input type="submit" name="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
        </form>
    </center>
  </body>
  <script>
    function updateClock() {
      Date.Minutes = function() {
        var val = now.getMinutes();
        if (val < 10) return ("0" + val.toString());
        else return val.toString();
      }
      Date.Hours = function() {
        var val = now.getHours()%12;
        if (val == 0) val = 12;
        return val;
      }
      var now = new Date(),
      time = Date.Hours() + ':' + Date.Minutes();
      document.getElementById('time').innerHTML = ["", time].join('');
      setTimeout(updateClock, 1000);
    }
  </script>  
</html>
