<?php

// // array_change_key_case 

// $a = array(
//     'name' => 'Amutha',
//     'id' => 01,
//     'phone' => 9876543210
// );
// echo "<pre>";
// print_r(array_change_key_case($a,CASE_UPPER)); // CASE_UPPER, CASE_LOWER.
// echo "</pre>";

// // array_chunk 

// $a = array("Amutha","Abi","Anu","sasi","priya","Dhana");
// echo "<pre>";
// print_r(array_chunk($a,4));
// echo "</pre>";

// // array_column 

// $a = array(
//     array(
//         'id' => 001,
//         'name' => 'Sasi',
//         'phone' => 9842580931
//     ),
//     array(
//         'id' => 002,
//         'name' => 'Kavitha',
//         'phone' => 9865432104
//     ),
//     array(
//         'id' => 003,
//         'name' => 'Priya',
//         'phone' => 9861239809
//     )
//     );

//     $last_col = array_column($a,'name');
//     echo "<pre>";
//     print_r($last_col);
//     echo "</pre>";

// // array_combine 

// $student = array("dhinesh","ramesh","ganesh");
// $subject = array("php","java","python");

// $a = array_combine($student,$subject);
// echo "<pre>";
// print_r($a);
// echo "</pre>";

// // array_count_values 

// $a = array(1,2,3,4,6,5,9,10);

// $count = array_count_values($a);
// echo "<pre>";
// print_r($count);
// echo "</pre>";


// // array_diff_assoc

// $a = array(1 => 'apple', 2 => 'grapes', 3 => 'orange', 4 => 'mango');
// $a2 = array(1 => 'apple', 2 => 'grapes', 3 => 'orange');

// $dif = array_diff_assoc($a,$a2);
// print_r($dif);

// // array_diff_key 

// $a = array("a" => "apple", "b"=> "mango", "c" => "orange");
// $a2 = array("a" => "apple","c" => "orange","d" => "grapes");

// $dif = array_diff_key($a,$a2);
// print_r($dif);

// /* ---- array_fill_keys ----- */

// $a = array(1,2,3,4,5);
// $key = array_fill_keys($a,'Amutha');

// print_r($key);


// /* ------- array_flip ------ */

// $a = array(1 => "banana",2 => "mango",3 => "orange",4 => "apple");

// $res = array_flip($a);
// print_r($res);

//  sizeof() 

// $a = array("orange","banana","apple");

// echo sizeof($a);

// sort 

// $s = array(30,60,70,90,40,10,20,80,50);

// sort($s);
// print_r($s);

// in_array 

// $i = array("ramesh","ganesh","suresh");

// $result = in_array("suresh",$i);
// $function = in_array("dhinesh",$i);
// echo "<pre>";
// print $result."<br>";
// print $function;
// echo "</pre>";

// $r = array("Sakthi","Sujitha","Gayu","Suba");

// if(in_array("Sujitha",$r)){
//     echo "match found";
// }
// else{
//     echo "not found";
// }

// /* ------ list()-----*/

// $animals = array("dog","cat","cow","horse");

// list($a,$b,$c,$d) = $animals;
// print "Aunty not only $a, All animals liking me.<br>";
// print "I like $b, $c and $d";

/* ------ compact()------*/

// $fname = "dhinesh";
// $lname = "kumar";
// $age = "22";

// $res = compact("fname","lname","age");
// echo "<pre>";
// print_r ($res);
// echo "</pre>";

/* -------- arsort ------- */

// $a = array(
//     3 => 60,
//     5 => 30,
//     6 => 10,
//     9 => 70,
//     7 => 20,
//     4 => 50,
//     2 => 80,
//     8 => 40,
//     1 => 90,
// );

// arsort($a);
// echo "<pre>";
// print_r ($a);
// echo "</pre>";

/*---------- array_unquie --------- */

// $a = array(1 => "Suba",2 => "Priya",3 => "Rama",4 => "Rahini",5 => "Dhanam",6 => "Amutha");

// $res = array_unique($a);
// echo "<pre>";
// print_r($res);
// echo "</pre>";

/*---------- explode() ------*/

// $s = "Hii im your friend. Have a nice day!!!.";

// $res = explode(" ",$s);
// echo "<pre>";
// print_r($res);
// echo "</pre>";

// // /*------- implode()------*/

// $s = array('preetha','is','a','good','girl');

// $res = implode(" ",$s);
// echo "<pre>";
// print_r($res);
// echo "</pre>";

// /*------- extract()------*/

// $fun = array("a" => "dhinesh","b" => "Harshith","c" => "Sudhakar");

// extract($fun);
// echo "\$a = $a; \$b = $b; \$c = $c";

// /*-------- array_sum()---------*/

// $sum = array(10,5,20);

// $res = array_sum($sum);

// print_r($res);


/*-------- array_shift()-----*/

// $shift = array("a" => "php","b" => "python", "c" => "java");

// $res = array_shift($shift);
// echo "<pre>";
// print $res."<br><br >";
// print_r($shift);
// echo "</pre>";

// // array_pop()

// $pop = array("a" => "php","b" => "python", "c" => "java");

// array_pop($pop);
// echo "<pre>";
// print_r($pop);
// echo "</pre>";

// // array_merge()

// $a = array(1,2,3);
// $a1 = array(4,5,6);

// $res = array_merge($a,$a1);
// echo "<pre>";
// print_r($res);
// echo "</pre>";

// // array_search()

// $s = array("preetha","abitha","suhitha","amutha");

// echo array_search("amutha",$s);

// // array_reverse()

// $s = array("Harshith","suresh","Bharath","vignesh");

// print_r(array_reverse($s));

// //array_keys()

$s = array("a"=>200,"b"=>1000,"c"=>800);
echo "<pre>";
print_r(array_keys($s));
echo "</pre>";

?>
