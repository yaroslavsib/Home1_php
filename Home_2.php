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


