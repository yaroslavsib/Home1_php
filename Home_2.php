<?php 

$brands = array(
    array(
      'name' => 'Oracle',
      'popularity' => 5
    ),
    array(
      'name' => 'Microsoft',
      'popularity' => 10
    ),
    array(
      'name' => '1C',
      'popularity' => '2'
    )
);

foreach ($brands as $key => $row) {
    $popularity[$key] = $row['popularity'];
}
 
array_multisort($popularity, SORT_DESC, $brands);


//testing
echo $brands[0]['popularity']."\n".$brands[0]['name']."\n";
echo $brands[1]['popularity']."\n".$brands[1]['name']."\n";
echo $brands[2]['popularity']."\n".$brands[2]['name']."\n";