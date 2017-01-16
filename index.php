<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="viewport" content="width=280, initial-scale=1">
  <link rel="icon" href="icon.png">
  <title>Expense</title>
</head>

<body style="background:#ffe487; font-family: Arial, Helvetica, sans-serif;">
  <form method="post">
  <div style="width: 270px; border:0px solid white; position: absolute;top:0%;left: 50%;transform: translate(-50%, 0%);">
    <div style="border:1px solid #ffb300; padding:3px; margin-top:3px; text-align: center;">
      &nbsp;Sum <input type="number" name="sum" style="height:28px; width:180px; font-size: 19px; border: 2px solid orange; border-radius:5px;"><br>
      &nbsp;Why <input type="text" name="text" style="height:28px; width:180px; font-size: 16px; border: 2px solid orange; border-radius:5px; margin-top:2px;"><br>
    </div>  
    <div style="border:1px solid #ffb300; border-top:0; padding:3 3 3 15;">     
      <label><input type="radio" name="category" value="Food" checked="checked">Food</label>
      <label><input type="radio" name="category" value="Clothes">Clothes</label>
      <label><input type="radio" name="category" value="Transport">Transport</label>
      <br />
      <label><input type="radio" name="category" value="Home">Home</label>
      <label><input type="radio" name="category" value="Sport">Sport</label>
      <label><input type="radio" name="category" value="Health">Health</label>
      <br />
      <label><input type="radio" name="category" value="Entertainment">Entertainment</label>
      <label><input type="radio" name="category" value="Education">Education</label>
      <br />
      <label><input type="radio" name="category" value="Donation">Donation</label>
      <label><input type="radio" name="category" value="Other">Other</label>
    </div>
    <div style="border:1px solid #ffb300; border-top:0; padding:3px; text-align: center;">
      <input type="hidden" name="for1" value="0">
      <label><input type="checkbox" name="for1" value="1" checked>dad </label>
      <input type="hidden" name="for2" value="0">
      <label><input type="checkbox" name="for2" value="1" checked>mum </label>
      <input type="hidden" name="for3"value="0">
      <label><input type="checkbox" name="for3" value="1" checked>son </label>
      <input type="hidden" name="for4" value="0">
      <label><input type="checkbox" name="for4" value="1" checked>dother </label>
      <br>
      <input type="text" name="date" size="9" value="<?php echo date("j.n.Y"); ?>" style="background:#ffe487; border: 0px solid orange;">
      <label><input type="radio" name="wrote" value="m" checked="checked">m</label>
      <label><input type="radio" name="wrote" value="d">d</label><br>
    </div>
    <div style="border:1px solid #ffb300; border-top:0; padding:3px; text-align: center;">
      <input type="submit" name="frmsend" value="Save" style="height:25px; width:90px; background-color:#ffb300; font-size:18px; font-weight:bold; color:white; border: 2px outset #ffb300;  border-radius:5px;"/>
    </div>  
  </form>
    <!--
    <?php 
    if ($_POST["frmsend"] && $_POST["sum"])
      {
      $fp = FOpen("./expense.csv", "a"); 
      FPutS ($fp,$_POST["date"].";".$_POST["sum"].";".$_POST["category"].";".$_POST["text"].";".$_POST["for1"].";".$_POST["for2"].";".$_POST["for3"].";".$_POST["for4"].";".$_POST["wrote"]."\n");
      FClose($fp);
      echo '<div style="color:green; border:1px solid #ffb300; border-top:0; padding:3px; text-align: center;">uloženo v  '.date('H:i:s').'</div>';
      }
    ?>
    -->    
  <br>
  <div style="border:1px solid #909090; padding:3px; text-align: left; font-size: 12px; color: grey">
  <?php
  $file = file("./expense.csv");
  for ($i = count($file)-1; $i > max(0, count($file)-6); $i--) {
    $line = explode(";", $file[$i]);
    echo $line[0].", &nbsp;$".$line[1].", &nbsp;".$line[3]." (".substr($line[8],0,1).")<br>\n";
  }
  ?>
  </div> 
  
  </div>
</body>
</html>
