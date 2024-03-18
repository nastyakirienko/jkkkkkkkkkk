<php
$movies = array(
array(
"title" => "The Shawshank Redemption",
"rating" => 9.3,
"actors" => array("Tim Robbins", "Morgan Freeman")
),
array(
"title" => "The Godfather",
"rating" => 9.2,
"actors" => array("Marlon Brando", "Al Pacino")
),
array(
"title" => "The Dark Knight",
"rating" => 9.0,
"actors" => array("Christian Bale", "Heath Ledger")
),
array(
"title" => "Schindler's List",
"rating" => 8.9,
"actors" => array("Liam Neeson", "Ben Kingsley")
),

usort($movies, function($a, $b) {
return $b['rating'] - $a['rating'];
});
$top3Movies = array_slice($movies, 0, 3);
print_r($top3Movies);





