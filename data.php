<?php
$bearer_token = get_bearer_token(); // get the bearer token
$text = search_for_a_term($bearer_token, $linea);
//var_dump($text);


$decode = json_decode($text, true); //getting the file content as array



$data = $decode[0]['trends'];
$hashtag = [];
$tweetv = [];

foreach ($data as $item) {
$hashtag[] =  "".$item['name'];
$tweetv[] = "". $item['tweet_volume'];
//echo "".$item['name']."<br />";
//echo "". $item['tweet_volume']."<br />";

}
$x = 0;
$i = 0;
while( $x < 15){
if($tweetv[$i] == null){
$tweetv[$i] = 10000;
}
$i++;
$x++; 
}

//print search_for_a_term($bearer_token); 
invalidate_bearer_token($bearer_token); // invalidate the token
?>
