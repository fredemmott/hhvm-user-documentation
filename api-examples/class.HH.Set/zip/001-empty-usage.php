<?hh

namespace Hack\UserDocumentation\API\Examples\Set\Zip;

// The $traversable is empty so the result will be empty
$s = Set {'red', 'green', 'blue', 'yellow'};
$zipped = $s->zip(Vector {});
var_dump($zipped);

// The Set $s is empty so the result will be empty
$s = Set {};
$zipped = $s->zip(Vector {'My Favorite', 'My Second Favorite'});
var_dump($zipped);
