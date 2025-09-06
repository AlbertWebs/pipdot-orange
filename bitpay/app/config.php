<?php
    // Blockonmics API stuff with xpub key form blockchain.com 
    // Expub is xpub6CGmXj9etJetBGF1zuiDVmpoMipzZcDK2s1NF7qfJ2rttbpncaVeUWDD3uy4K6ongjxCWEc7TmZux3sQyFDju7gYa5DSX4udyagfgbi5132
    $apikey = "6mtSzUwTC2Kii8r5DWtfG9PORe16ItzBVQllEBQ5FQs";
    $url = "https://www.blockonomics.co/api/";
    
    $options = array( 
        'http' => array(
            'header'  => 'Authorization: Bearer '.$apikey,
            'method'  => 'POST',
            'content' => '',
            'ignore_errors' => true
        )   
    );

    // Connection info
    $conn = mysqli_connect("localhost", "root", "1234", "pipdot"); // enter your info
?>