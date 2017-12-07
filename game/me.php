<!DOCTYPE html>
<?php
 include("../global/functions.php");
 session_start();
 include("../global/safe.php");
include("../common.php"); 
  ?>
<html lang="<?php echo $lang['HTML_LANG']; ?>">
<head>
    <meta charset="utf-8">
    <title>Prehľad</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="css/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="css/style.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arimo&amp;subset=latin">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script.responsive.js"></script>

     <style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>
        
</head>
<body>

<div id="art-main">
<nav class="art-nav">
    <ul class="art-hmenu">
    </ul> 
    </nav>
<header class="art-header">


    <div class="art-shapes">
<div class="art-object612514434" data-left="100%"></div>

            </div>
<h1 class="art-headline" data-left="99.74%">
    <a href="main.php"><font color=#48984>Web Wars - <?php echo $lang['PLAY_ONLINE_FOR_FREE'];?></font></a>
</h1>




                        
                    
</header>
 
<div class="art-sheet clearfix">
<font color=red> <strong><img src="images/food.png" alt="food.png, 1,9kB" title="Food" height="32" width="32"><?php echo $stats['food']; ?> |<img src="images/gold.png" alt="gold.png, 1,9kB" title="Gold" height="32" width="32"><?php echo $stats['gold']; ?> |<a href="shop.php"><img src="images/diamond.png" alt="diamond.png, 1,9kB" title="Diamond" height="32" width="32"></a><?php echo $stats['diamonds'];?> |<?php 			if($stats['battery'] == 0){?>
<img src="images/battery4.png"> <?php
			}elseif($stats['battery'] <= 34){?>
<img src="images/battery3.png"> <?php
			}elseif($stats['battery'] <= 67){?>
<img src="images/battery2.png"><?php
			}elseif($stats['battery'] <= 100){?>
<img src="images/battery1.png"><?php
			}elseif($stats['battery'] <= 125){?>
<img src="images/battery1.png"> <?php
			}
			echo $stats['battery'] ?>% |<?php include("../global/battery.php"); ?></strong></font> 
       <a href="?lang=sk"><img src="../images/lang/slovakia.png" alt="Slovakia flag.png, 5,5kB" title="Slovakia" height="32" width="32"></a>
       <a href="?lang=en"><img src="../images/lang/britain.png" alt="britain.png, 2,2kB" title="Britain" height="32" width="32"></a>
       <a href="?lang=de"><img src="../images/lang/germany.png" alt="germany.png, 3,5kB" title="Germany" height="32" width="32"></a>
       <a href="?lang=ru"><img src="../images/lang/russia.png" alt="russia.png, 4,6kB" title="Russia" height="32" width="32"></a>
       <a href="?lang=cz"><img src="../images/lang/czech.png" alt="czech.png, 2,0kB" title="Czech" height="32" width="32"></a>
       <a href="?lang=it"><img src="../images/lang/italy.png" alt="italy.png, 739B" title="Italy" height="32" width="32"></a>
      
    <a  href="minigame.php"><img src="images/rps.png" alt="RPS GAME" title="RPS GAME" height="32" width="32" align="right"></a>  <a href="chat.php"><img src="images/chat_icon.png" alt="chat_icon.png, 4,7kB" title="CHAT" height="32" width="32" align="right"></a>    
      
       
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockcontent">
<ul class="art-vmenu">
<?php echo $lang['MENU_CHAT.PHP'];?>
</ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockcontent"><p><br></p></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">


<center> 
<?php 
 
 
 if(isset($_SESSION['uid'])){ 



      if(isset($_POST['inv'])){
		if($stats['inv'] == 0){
			$stats['inv'] = 1;
		}else{
			$stats['inv'] = 0;
		}
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `inv`='".$stats['inv']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysql_error($con));
	}
	?>
  

	<?php if ($stats['inv'] == 1){ ?>
		<hr /> 
		<center><h3>Inventár</h3></center> <hr>
<table cellpadding="2" cellspacing="4">
<?php if ($stats['floor'] >= 2){ ?>
				<tr>
					<td><img src="images/medalcti.png"></td>
					<td>Medaila cti</td>
				</tr>
			<?php } ?>
			<?php if ($stats['floor'] >= 3){ ?>
				<tr>
					<td><img src="images/wehrmacht.png"></td>
					<td>Druhá tanková divízia</td>
				</tr>
			<?php } ?>
			<?php if ($stats['floor'] >= 4){ ?>
				<tr>
					<td><img src="images/boj.png"></td>
					<td>Ocenenie za boj</td>
				</tr>
			<?php } ?>
			<?php if ($stats['floor'] >= 5){ ?>
				<tr>
					<td><img src="images/vojny.png"></td>
					<td>Medaila vojny</td>
				</tr>
			<?php } ?>
			<?php if ($stats['floor'] >= 6){ ?>
				<tr>
					<td><img src="images/generala.png"></td>
					<td>Hodnosť Generála</td>
				</tr>
			<?php } ?>
			<?php if ($stats['floor'] >= 7){ ?>
				<tr>
					<td><img src="images/major.png"></td>
					<td>Hodnosť Majora</td>
				</tr>
			<?php } ?>
			<?php if ($stats['floor'] >= 8){ ?>
				<tr>
					<td><img src="images/slavy.png"></td>
					<td>Medaila slávy</td>
				</tr>
			<?php } ?>
			<?php if ($stats['floor'] >= 9){ ?>
				<tr>
					<td><img src="images/4urovne.png"></td>
					<td>Medailu IV. úrovne</td>
				</tr>
			<?php } ?>
      <?php if ($stats['floor'] >= 10){ ?>
				<tr>
					<td><img src="images/purpurovesrdce.png"></td>
					<td>Purpúrové srdce</td>
				</tr>
<?php } ?>
</table>
<hr />
<?php } ?>
<center>	<form method="POST" action="<?=($_SERVER['PHP_SELF'])?>">
<?php if ($stats['inv'] == 0){ ?>
<button type="submit" class="btn btn-success" name="inv">Otvoriť inventár</button>
<?php }else{ ?>
<button type="submit" class="btn btn-danger" name="inv">Zatvoriť inventár</button>
<?php } ?>
</form></center>






<?php
}else {

echo $lang['YOU_MUST_BE_LOGGED_IN_TO_VIEW_THIS_PAGE'];  }
?>    
<footer class="art-footer">
  <div class="art-footer-inner">
<p><a href="message.php"><?php echo $lang['CONTACT_ADMINISTRATORS.PHP'];?></a> | <a href="chat.php"><?php echo $lang['CHAT.PHP'];?></a> | <a href="me.php"><?php echo $lang['INVENTORY'];?></a></p>
<p>Copyright © 2016. All Rights Reserved.</p>
  </div>
</footer>

</div>


</body></html>