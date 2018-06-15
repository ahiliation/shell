<?php
/*
Copyright 2018 Jeffrin Jose T

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

$shapes = array('Week one' => 'May 11 2015',
                'Week two' => 'May 18 2015',
                'Week three' => 'May 25 2015',
                'Week four' => 'June 1 2015',
                'Week five' => 'June 8 2015',
		'Week six' => 'June 15 2015',
		'Week seven' => 'June 22 2015',
		'Week eight' => 'June 29 2015',
		'Week nine' => 'July 6 2015',
		'Week ten' => 'July 13 2015',
		'Week eleven' => 'July 20 2015',
		'Week twelve' => 'July 27 2015',
		'Week thirteen' => 'August 3 2015',
		'Week fourteen' => 'August 10 2015',
		'Week fifteen' => 'August 17 2015',
		'Week sixteen' => 'August 24 2015',
                'Week seventeen' => 'August 31 2015');

foreach ($shapes as $key => $value) { # every associative array has $key and $value pairs

if (date('F d Y') == $value )
{
// print "You are in  $key ". "\n";
$to = "ahiliation@yahoo.co.in";
$subject = "Javascript Course Week Alert";
$txt = "Your $key has Started";
$headers = "From: ahiliation@yahoo.co.in";



$mail=mail($to,$subject,$txt,$headers);
if($mail){
  echo "Success". "\n";
  }else{
    echo "Mail sending failed.". "\n";
    }



// mail($to,$subject,$txt);

}

}


?>
