<?php
$bearer_token = get_bearer_token(); // get the bearer token
$text = search_for_a_term($bearer_token);
//var_dump($text);


$decode = json_decode($text, true); //getting the file content as array



$data = $decode[0]['trends'];

foreach ($data as $item) { 
echo "".$item['name']."<br />";
echo "". $item['tweet_volume']."<br />";
}
    

//print search_for_a_term($bearer_token); 
invalidate_bearer_token($bearer_token); // invalidate the token
?>
