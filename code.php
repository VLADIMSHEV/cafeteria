<?php
$a = ['a','b','c','d','e','f','g','h','i'];
$colors = ['blue','pink','yellow','green','red'];
$links = ['https://www.greenqueen.com.hk/wp-content/uploads/2021/06/WEF-Investments-In-Nature-Based-Solutions-Have-To-Triple-By-2030-To-Address-Climate-Change-Biodiversity-Loss.jpg', 'https://www.myfitness.ee/wp-content/uploads/2016/05/nature-wallpaper-07.jpg','https://www.iucn.org/sites/dev/files/content/images/2020/shutterstock_1458128810.jpg','https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/24701-nature-natural-beauty.jpg/1280px-24701-nature-natural-beauty.jpg','https://media.cntraveller.com/photos/611bf0b8f6bd8f17556db5e4/16:9/w_2992,h_1683,c_limit/gettyimages-1146431497.jpg'];
$ot_i = '<img ';
$style_size = 'style="height:150px;width:15%;"';
$ot_p = '<p ';
$ot_close = '>';
$ct = '</p>';
$otb = '<b>';
$ctb = '</b>';

echo '<div style="display:none;flex-wrap:wrap;">';
for ($i=0; $i < count($a); $i++) { 
	for ($j=0; $j < count($colors); $j++) {
		$color = $colors[$j]; 
		$style_color = 'style="color:'.$color.';font-size:70px;"';
		$img = $links[$j];
		$link = 'src="'.$img.'" ';
		echo $ot_i.$link.$style_size.$ot_close;
		echo ($ot_p.$style_color.$ot_close.$otb.$a[$i].$ctb.$ct);
	}
}
echo '<form>
  <p>Please select your preferred contact method:</p>
  <div>
    <input type="radio" id="contactChoice1"
     name="contact" value="email" checked>
    <label for="contactChoice1">Email</label>

    <input type="radio" id="contactChoice2"
     name="contact" value="phone">
    <label for="contactChoice2">Phone</label>

    <input type="radio" id="contactChoice3"
     name="contact" value="mail">
    <label for="contactChoice3">Mail</label>
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>';
echo '</div>';

//time
$c = 1024;
$b = 1;
$kb = $b*$c;
$mb = $kb*$c;
$gb = $mb*$c;
$tb = $gb*$c;

	$test = false;
	
	if (isset($test)) {
		echo '+';
	} else {
		echo '-';
	}





























?>
