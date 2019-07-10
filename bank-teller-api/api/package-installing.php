<?php
require "../vendor/autoload.php";
use Cowsayphp\Farm;

$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
$dcow =$cow->say("Moo!!");
$whale = Farm::create(\Cowsayphp\Farm\Whale::class);
$dwhale =$whale->say("LooOOoo..");
$dragon = Farm::create(\Cowsayphp\Farm\Dragon::class);
$ddragon =$dragon->say("Raawwrr!");
$tux = Farm::create(\Cowsayphp\Farm\Tux::class);
$dtux =$tux->say("Knoott!Knoott!");

$arr= [
	["name"=>"Cow","shout"=>"Moo!!","obj"=>$dcow],
	["name"=>"Whale","shout"=>"LooOOoo..","obj"=>$dwhale],
	["name"=>"Dragon","shout"=>"Raawwrr!","obj"=>$ddragon],
	["name"=>"Tux","shout"=>"Knoott!Knoott!","obj"=>$dtux]
];

shuffle($arr);
$out= array_pop($arr);
echo json_encode($out);

/*echo json_encode($arr[0][0]) ;
$response['data'] =$arr;
$upper['upper'] =$response;
echo json_encode($upper);*/


 // $marks = array( 
 //            "mohammad" => 
 //            array (
 //               "physics" => 35,
 //               "maths" => 30,	
 //               "chemistry" => 39
 //            ),
            
 //            "qadir" => 
 //            array (
 //               "physics" => 30,
 //               "maths" => 32,
 //               "chemistry" => 29
 //            ),
            
 //            "zara" => 
 //            array (
 //               "physics" => 31,
 //               "maths" => 22,
 //               "chemistry" => 39
 //            )
 //         );
 // echo json_encode($marks['mohammad']['physics']);


/*$marks =[
	"mohammad"=> [
		"physics" => 35,
		"maths" => 30,
		"chemistry" => 39
	],
	"qadir"=> [
		"physics" => 32,
		"maths" => 33,
		"chemistry" => 36
	],
	"zara" => [
		"physics" => 36,
		"maths" => 38,
		"chemistry" => 37
	],
];
echo json_encode($marks);

*/





































































/*$arr=[
	["Name"=>"Cow", "Say"=>"Moo!"],
	["Name"=>"Whale", "Say"=>"LooOOoo!"],
	["Name"=>"Dragon", "Say"=>"Raawwrr"],
	["Name"=>"Tux", "Say"=>"Knoott!Knoott!"],
];

shuffle($arr);
$pop =array_pop($arr);
$name=$pop['Name'];
$say= $pop['Say'];
echo json_encode($pop);
if ($name == "Cow"){
$animal = Farm::create(\Cowsayphp\Farm\cow::class);
echo '<pre>'.$animal->say($say).'</pre>'; 
}
elseif ($name == "Whale") {
$animal = Farm::create(\Cowsayphp\Farm\Whale::class);
echo '<pre>'.$animal->say($say).'</pre>'; 
}
elseif ($name == "Dragon"){
$animal = Farm::create(\Cowsayphp\Farm\Dragon::class);
echo '<pre>'.$animal->say($say).'</pre>'; 
}
elseif ($name == "Tux"){
$animal = Farm::create(\Cowsayphp\Farm\Tux::class);
echo '<pre>'.$animal->say($say).'</pre>'; 
}*/
/*$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
$a = $cow->say('hhh');
$farm = [Farm::create(\Cowsayphp\Farm\Cow::class),
Farm::create(\Cowsayphp\Farm\Whale::class),
Farm::create(\Cowsayphp\Farm\Dragon::class),
Farm::create(\Cowsayphp\Farm\Tux::class)];

$_ = ["Name"=>"Cow", "shout"=>"Moo!", "obj" => $a]
$a = $_['obj']->say($_['shout'])
echo json_encode(
[
	'name' => ..,
	'shoout' => $_['shout'],
	'drawing' => $a
]
);


$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
$whale = Farm::create(\Cowsayphp\Farm\Whale::class);
$dragon = Farm::create(\Cowsayphp\Farm\Dragon::class);
$tux = Farm::create(\Cowsayphp\Farm\Tux::class);
$cow->say('Moo');
$arr = [["Name"=>""]]*/