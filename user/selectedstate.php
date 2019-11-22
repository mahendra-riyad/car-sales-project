<?php
if(isset($_POST["state"])){
    // Capture selected State
    $State = $_POST["state"];
     
    // Define State and city array
    $StateArr = array(
                    "florida"=> array("fort lauderdale","miami","orlando","tampa","west palm beach"),
		"georgia"=>array("atlanta","augusta","marietta","savannah"),
		"new jersey"=>array("atlantic","hoboken","newark","summit","trenton"),
		"tennessee"=>array("knoxville","memphis","morristown","nashville","oak ride"),
		"texas"=>array("austin","dallas","houston","san antonia","waco"),
		"virginia"=>array("chesapeake","norfolk","richmond","roanoke","virginia beach")
                );
     
    // Display city dropdown based on State name
    if($State !== 'Select state'){
        
        echo "<select>";
        foreach($StateArr[$State] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    }
}
?>
