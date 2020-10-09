<html>
 <head>
  <title>Gamers Headquarters</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="video.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>

<?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {

			$vid = $_POST["submit"];
			//echo $vid;
			echo '<center><video class="vstyle" id="myVideo" width="900" controls autoplay>
				<source src="';
			echo $vid;
			echo '.mp4" type="video/mp4">
			</video></center>';

        } else {

			echo '<center><video class="vstyle" id="myVideo" width="900" controls autoplay>
				<source src="0.mp4" type="video/mp4">
			</video><br></center>';
		}
?>

<h3>PlayerUnknown's BattleGrounds & Battlefield<h3>

<FORM METHOD="POST" name="input" ACTION="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <center>
		
			<input class="bstyle" type="image" name="submit" value="0" src="0.gif" border="0" alt="Submit" height="80" width="125"/>
			<input class="bstyle" type="image" name="submit" value="1" src="1.gif" border="0" alt="Submit" width="125"/>
			<input class="bstyle" type="image" name="submit" value="2" src="2.gif" border="0" alt="Submit" width="125"/><br>
			<input class="bstyle" type="image" name="submit" value="3" src="3.gif" border="0" alt="Submit" width="125"/>
			<input class="bstyle" type="image" name="submit" value="4" src="4.gif" border="0" alt="Submit" width="125"/>
			<input class="bstyle" type="image" name="submit" value="5" src="5.gif" border="0" alt="Submit" width="125"/>
			
		</center>
</FORM>

<div style="text-align:center;">
	<div class="container">
	  <!-- Trigger the modal with a button -->
	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Tips and Tricks for PUBG</button>

	  <!-- Modal -->
	  <div class="modal fade" id="myModal1" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">PUBG Tricks</h4>
			</div>
			<div class="modal-body">
				<ul>
					<li>Go to some isolated area and loot to get fully equipped.</li>
					<li>When engaged with enemies, make sure to peek to gain an advantage.</li>
					<li>Then finally die because the enemy is able to teleport [RIP -Network Lag-].</li>
				</ul>
				
				<h4>Squad</h4>
				<ul>
					<li>Stick with the squad and unanimously decide on drop location.</li>
					<li>Stay close enough while looting to cover each other.</li>
					<li>If you die, make sure to watch your squad.</li>
					<li>Finally, if you have enough luck, you will end up with a "Chicken Dinner".</li>
					<li>Thank the PUBG Gods for the carry.</li>
				</ul>

			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	  



	  <!-- Trigger the modal with a button -->
	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Tips and Tricks for Battlefield</button>

	  <!-- Modal -->
	  <div class="modal fade" id="myModal2" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Battlefield Tips & Tricks</h4>
			</div>
			<div class="modal-body">
				<h4>Solo</h4>
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>

			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	  
	</div>
</div>

<script>

	var vid = document.getElementById("myVideo");

	function setDefaultVolume() { 
		vid.volume = 0.4;
	}
   
	window.onload = setDefaultVolume();
	

	</script> 
</body>
</html>



