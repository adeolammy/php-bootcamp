<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nation =[
        'country' => 'Germany',
        'population' => 987654637,
        'capital' => 'franfurt',
        'continent' => 'European',
        'currency' => 'Euro',
        'president' => 'Makael'
    ];

    // $kee = array_keys($nation);
    // echo $kee;
    // var_dump $kee;

    function avenue(){
        $places = ['via', 'ikeja','ogba','songo'];
        foreach ($places as $key ) {
                echo $key;
                echo '<br>';
        };

    };
    avenue();

    //  foreach ($banks as $key ) {
    //     $val = $key;
    //     echo $val;
    //     echo '<br>';
    //  };

    // function filerArray(){
    // $banks = array('Zenith','Access','Gtb','Diamond','Inter-Continental');
    // $places = array('via', 'ikeja','ogba','songo');
    //     $email = 'adeolammy@gmail';
    //     foreach($banks as $bank){
    //         echo $bank;
    //         echo '<br>';
        
    //     foreach($places as $place){
    //         echo $place;
    //         echo '<br>';
    //     };
    //     };

    // }
    // filerArray();

    // function declaration
    // function func($x,$y){
    //         // $x = 5;
    //         // $y = 6;
    //        echo $sum = $x + $y;
    //         // $sum;
    // }
    // func(4, 6);
    

// function school_Names(){
// $schools = array('Anthony','Steve Acc', 'Dolnad');
//     foreach($schools as $sch){
//         echo $sch;
//         echo '<br>';
// };
// };
//  school_Names();

//     // function expression
// $x = function(){

// }
//     // arrow function

    
    

    // for ($i=0; $i < 12; $i++) { 
    //     echo $i;
    //     echo '<br>';.
    ?>
    