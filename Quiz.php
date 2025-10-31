<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1> Chapter one: Php Basics & output </h1>";
    echo "<h1>  Question1 </h1>";
    $name="najma Bashiir Ali";
    $university="Jmahuriya University";
    $currentSemester=7;
    echo "my Full name is : $name" ."<br>";
    echo "My University : $university" ."<br>";
    echo "my current semester is : $currentSemester" ."<br>";


    echo "<h1>  Question2 </h1>";
    for ($i=1; $i<=10; $i++){
        echo "PHP IS FUN" ."<br>";
    }

    echo "<h1>  Question3 </h1>";
    for ($i=10; $i>0; $i--){
        echo "$i <br>";
    }

    echo "<h1>  Question4 </h1>";
    
// echo "Welcome to PHP programming!\nThis is the second line.\nAnd this is the third line.";

echo "Welcome to PHP programming!<br>This is the second line.<br>And this is the third line.";

    echo "<h1>Chapter Two: Variables and Operators</h1>";
    echo "<h1>  Question5 </h1>";
    $name="najma Bashiir Ali";
    $age=20;
    $city="Mogadishu";
    echo "My name is $name, I am $age years old and I live in $city.";

    echo "<h1>  Question6 </h1>";
    $monthlySalary=5000;
    $expenses=3000;
    $savings=$monthlySalary-$expenses;
    echo "My monthly savings are: $savings";

    echo "<h1>  Question7 </h1>";
    $num1=15;
    $num2=25;
    $sum=$num1+$num2;
    echo "The sum of $num1 and $num2 is: $sum";
    $difference=$num2-$num1;
    echo "<br>The difference when $num2 is subtracted from $num1 is:$difference";
    $product=$num1*$num2;
    echo "<br>The product of $num1 and $num2 is: $product";
    $quotient=$num2/$num1;
    echo "<br>The quotient when $num2 is divided by $num1 is: $num2/$num1=$quotient";

    echo "<h1>  Question8 </h1>";
    $radius=7;
    $area=3.14*$radius*$radius;
    echo "The area of a circle with radius $radius is: $area";

    echo "<h1>  Question9 </h1>";
    $celsius = 25;
    $fahrenheit = ($celsius * 9 / 5) + 32;
    echo "<br>$celsius °C is equal to $fahrenheit °F";

    echo "<h1>  Question10 </h1>";
    $var1=20;
    $var2=20;
    if($var1==$var2){
        echo "$var1 and $var2 are equal";

    }else{
        echo "$var1 and $var2 are not equal";
    }

    echo "<h1>  Question11 </h1>";
    $a=10;
    echo "Initial value of a: $a <br>";
    $a += 5; 
    echo "After += 5, a: $a <br>";
    $a -= 3;
    echo "After -= 3, a: $a <br>";
    $a *= 2; 
    echo "After *= 2, a: $a <br>";
    $a /= 4; 
    echo "After /= 4, a: $a <br>";


    echo "<h1>  Question12 </h1>";
    $age=25;
    if($age>=18 && $age<=30){
        echo "You are eligible.";
    }

    echo "<h1>  Chapter Three : Control Structure</h1>";
    echo "<h1>  Question13 </h1>";
    $number=-3;
    if($number>0){
        echo "$number is positive";
    }elseif($number<0){
        echo "$number is negative";
    }else{
        echo "$number is zero";
    }


    echo "<h1>  Question14 </h1>";
    $num=16;
    if($num % 4==0){
        echo "$num is multiple of 4";
    }else{
        echo "$num is not multiple of 4";
    }

    echo "<h1>  Question15 </h1>";
    $marks=60;
    if($marks>=80 && $marks<=100){
        echo "Grade A";
    }elseif($marks>=70 && $marks<79){
        echo "Grade B";
    }elseif($marks>=60 && $marks<69){
        echo "Grade C";
    }elseif($marks>=50 && $marks<59){
        echo "Grade D";
    
    }else{
        echo "". "Grade F Oh no you failed";
    }

    echo "<h1>  Question16 </h1>";
    echo" The even numbers from 2 to 100 is :";
    for($i=2; $i<=100; $i+=2){
        echo "$i <br>";
    }


    echo "<h1>  Chapter Four : Arrays</h1>";
    echo "<h1>  Question17 </h1>";    
    $count=0;
    echo "The multiples of 7 between 1 and 50 are: <br>";
    for($i=1; $i<=50; $i++){
        if($i % 7 == 0){
            $count++;
            echo "$i <br>";
        }

    }

    echo "Total multiples of 7 between 1 and 50: $count";

    echo "<h1>  Question18 </h1>";
    $sum=0;
    for($i=1; $i<=100; $i+=2){
        $sum+=$i;
        echo "$i <br>";
    }
    echo "The sum of all odd numbers from 1 to 100 is: $sum";

    echo "<h1>  Question19 </h1>";
    $numbers=[1,2,3,4,5,6,7,8];
    echo "The odd numbers in the array are: <br>";
    foreach($numbers as $num){
        if($num % 2 !=0){
            echo "$num <br>";
        }
    }

    echo "<h1>  Question20 </h1>";
    $student=[
        "name"=>"najma Bashiir Ali",
        "department"=>"Computer Science",
        "gpa"=>3.5,
        "year"=>2025
    ];
    echo "Student Record: <br>";
    foreach($student as $key=>$value){
        echo "$key: $value <br>";
    }

    echo "<h1>  Question21 </h1>";
    // create array of 5 prices and calculate the total and average using loop
    $prices=[100,200,300,400,500];
    $total=0;
    foreach($prices as $price){
        $total+=$price;
    }
    $average=$total/count($prices);
    echo "Total price: $total <br>";
    echo "Average price: $average <br>";

    echo "<h1>  Question22 </h1>";

    $numbers=[34,12,5,67,23,89,1];
    sort($numbers);
    echo "Sorted array in ascending order: <br>";
    foreach($numbers as $num){
        echo "$num <br>";
    }
    echo "<h1> Chapter Five:Functions </h1>";
    echo "<h1>  Question23 </h1>";
    // merge two arrays and count the total number of elements
    $array1=[1,2,3];
    $array2=[4,5,6];
    $mergedArray=array_merge($array1,$array2);
    $count=count($mergedArray);
    echo "Merged array: <br>";
    foreach($mergedArray as $num){
        echo "$num <br>";
    }
    echo "Total number of elements in merged array: $count";

    echo "<h1>  Question24 </h1>";
    // create a multidimensinal array for 3 emplyes each with name, position and salary and display them in formatted table
    $employees=[
        [
            "Id"=>"C1220401",
            "name"=>"Najma Bashiir Ali",
            "position"=>"Manager",
        ],
        [   
            "Id"=>"C1220401",
            "name"=>"Najma Bashiir Ali",
            "position"=>"Developer",
        ],
        [
            "Id"=>"C1220401",
            "name"=>"siham",
            "position"=>"Designer",
        
        ]
    ];
    echo "<table border='1'>
    <tr>
    <th>Id</th>
    <th>Name</th>   
    <th>Position</th>
    </tr>";
    foreach($employees as $employee){
        echo "<tr>
        <td>".$employee['Id']."</td>
        <td>".$employee['name']."</td>
        <td>".$employee['position']."</td>
        </tr>";
    }
    echo "</table>";

    echo "<h1>  Question25 </h1>";
    // find and print the second largest number in an array

    $numbers=[34,12,5,67,23,89,1];
    $largest=$numbers[0];
    foreach($numbers as $num){
        if($num>$largest){
            $largest=$num;
        }
    }
    echo "The largest number in the array is: $largest";



    echo "<h1>  Question26 </h1>";
    // create function cube() that returns the cube of a number
    function cube($num){
        return $num*$num*$num;
    }
    $number=3;
    $cubedValue=cube($number);
    echo "The cube of $number is: $cubedValue";

    echo "<h1>  Question27 </h1>";

    // write function that accepts a name and age then returns  amessage like  " hello najma, you are 20 years old"
    function greet($name){
        return "Hello $name,Welcome";
    }
    $name="najma";
    $message=greet($name);
    echo $message;
    

    echo "<h1>  Question28 </h1>";

    function largestOfThree($a, $b, $c) {
        return max($a, $b, $c);
    }

    $a = 15;
    $b = 42;
    $c = 27;
    $largest = largestOfThree($a, $b, $c);
    echo "The largest of $a, $b and $c is: $largest";

    echo "<h1>  Question29 </h1>";
function sumEvenNumbers(array $arr) {
    $total = 0;
    foreach ($arr as $value) {
        if (is_numeric($value) && $value % 2 === 0) {
            $total += $value;
        }
    }
    return $total;
}

$evenSample = [10, 15, 22, 7, 4, 3];
$evenSum = sumEvenNumbers($evenSample);
echo "Sum of even numbers in the array: $evenSum";

echo "<h1>  Question30 </h1>";
function sumDiffProduct($num1, $num2) {
    return [
        'sum' => $num1 + $num2,
        'difference' => $num1 - $num2,
        'product' => $num1 * $num2
    ];
}

$num1 = 12;
$num2 = 5;
$results = sumDiffProduct($num1, $num2);

echo "Sum of $num1 and $num2: " . $results['sum'] . "<br>";
echo "Difference (num1 - num2): " . $results['difference'] . "<br>";
echo "Product: " . $results['product'] . "<br>";


    ?>
</body>
</html>