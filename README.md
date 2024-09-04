# learnphp

$i = 1;
$i = 1.2;
$i = 'hello world';
var_dump($i);



$array = [
    'num' => 1,
    6 => 2.453,
    'dafddaf',
    5 => true,
    'sadasdf'
];
array_push($array, 4,5,6,7);
$array[] = 8;
$array['num'] = 2;
var_dump($array);



$text = 'hello' . ' world';
var_dump($text);



$name = 'world';
$string = "hello\n $name";
var_dump($string);

$array = [
    'num1' => 1,
    'num2' => 2,
    'num3' => 3
];
foreach($array as $value){

}

foreach($array as $key=>$value){
    echo"$key=>$value\n";
}

const I_AM_CONSANT=2;

$num1 = 1;
$num2 = &$num1;
$num2 = 2;
var_dump($num1);
var_dump($num2);

$array = [1,2,3,4,5];

for($i=0;$i<count($array);$i++){
    $value = &$array[$i];

}

foreach($array as &$value){
    $value *= 2;
    var_dump($value);
}
var_dump($array);
