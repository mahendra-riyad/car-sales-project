<?php
if(isset($_POST["make"])){
    // Capture selected make
    $make = $_POST["make"];
     
    // Define make and modal array
    $makeArr = array(
       
                 "chrysler"=>array("town","aa"),
                 "chevrolet"=>array("equinex"),
                 "honda"=>array("accord","b2"),
                 "bmw"=>array("x6","x5","x2"),
                 "cadillac"=>array("cts","escalade"),
                 "jeep"=>array("grand cherokee","wrangler"),
                 "acura"=>array("mdx","rl"),
                 "porche"=>array("boxster","a10"),
                 "mercedez benz"=>array("sl-550","sl-770"),
                 "audi"=>array("a5","a10"),
                 "land rover"=>array("range rover"),
                 "nissan"=>array("370z"),
                 "infinity"=>array("g37","qx56")
             );
     
    // Display city dropdown based on make name
    if($make !== 'Select make'){    
        echo "<select>";
        foreach($makeArr[$make] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>
