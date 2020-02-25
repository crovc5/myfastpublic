<?php
$url = 'https://serpapi.com/search?q=Apple&tbm=isch&ijn=0';
$jsondata = file_get_contents($url);
$arry=json_decode($jsondata);
$fsq_groups = $arry->images_results;
if(isset($fsq_groups[0])){
    $groups = $fsq_groups[0];
        $venue = $groups->thumbnail;
        
}
echo '<img src="'.$venue.'">';
echo '<pre>';
print_r($arry);
?>
