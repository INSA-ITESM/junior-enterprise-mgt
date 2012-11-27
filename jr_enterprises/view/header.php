<div id="v_header"> <!-- -->
  <div id="up">
    	<div id="regard">   
        <?php 
		// date manager
        $days = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
		$months = array("January","February","March","April","May","June","July","August","September","October","November","December"); 
		
		$datex = date("Y-m-d");
		$yearEx = substr($datex, 0, 4);
		$monthsEx = substr($datex, 5, 2);
		$daysEx = substr($datex, 8, 2);
		// date manager
       echo "<p> ".$months[$monthsEx - 1]." ".$daysEx.", ".$yearEx."</p>";
        ?>        
        </div>
        
        <div id="clear"></div> 
        
        <div id="logo_header">
        	<a href="main.php" title="Main" class="logo_main"> <img src="css/logo.png" /> 
        	</a>
        </div>
  </div>

  <div id="clear"></div>  
</div>


