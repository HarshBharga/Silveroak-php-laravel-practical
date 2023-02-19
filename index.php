<?php include('./commpnpages/header.php') ?>
<?php include('./homeController.php') ?>

<section>

 <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
        <h1><?php echo $headTitle ?></h1> 
        <h2>(1)Boolean (bool)</h2>
        <code>
        $is_email_valid = 'false';<br>
        echo is_bool($is_email_valid);<br><br>

	<h1></h1>

        <!-- Datatype Check By Condition -->
        $is_email_valid = 'false';<br>
        $is_user = false;<br>
        echo is_bool($is_email_valid);<br><br>

        <!-- Value Check By Condition -->
        $is_user = false;<br>
        if($is_user == true){<br>
            echo 'is User True';<br>
        }else{<br>
            echo 'is User False';<br>
        }
        </code>

        <!-- Datatype Check By Condition -->
        <?php 
        $is_email_valid = 'false';
        $is_user = false;
        echo is_bool($is_email_valid);
        ?>

        <br>
        <!-- Value Check By Condition -->
        <?php 
        $is_user = false;
        if($is_user == true){
            echo 'is User True';
        }else{
            echo 'is User False';
        }
        ?><br>

        <h2>(2)Integer (int)</h2>
        <code>

        $amount = 100;<br>
        echo is_int($amount);<br>
        echo $amount;
        </code><br>
        <?php 
        $amount = 100;
        echo is_int($amount).'<br>';
        echo $amount;
        ?>


        <h2>(3)Float (float)</h2>
        <code>
        $price = 10.25;<br>
        echo is_float($price);<br>
        echo $price;<br>
        </code><br>

        <?php
        $price = 10.25.'<br>'; 
        echo is_float(0.8).'<br>';
        echo $price;
        ?><br>

        <h2>(4)String (str)</h2>
        <code>
        $message1 = 'PHP String single quoted';<br>
        $message2 = "PHP string double quoted";<br>
        echo $message1;<br>
        echo $message2;<br><br>

        4.1 String Concate<br>
        $firstName = 'Haresh';<br>
        $lastName ='Bharga';<br>
        echo $firstName.$lastName;<br><br>

        4.2 Access String Character<br>

        $title = 'PHP string is awesome';<br>
        echo $title[0];<br><br>

        4.3 String Length<br>
        echo strlen($title)
        </code><br>

        <?php 
        $message1 = 'PHP String single quoted'."<br>";
        $message2 = "PHP string double quoted".'<br>';
        
        echo $message1.'<br>';
        echo $message2.'<br>';

        $state = 'Gujarat';
        $dist ='Ahmedabad';

        echo $state.', '.$dist.'<br>';

        $title = 'PHP string is awesome'.'<br>';
        echo $title[0].'<br>';

        echo strlen($title).'<br>';

        ?><br>

        <h2>(5)Special Types (Null)</h2>
        <code>
            $name = null;<br>
            $phone = Null;<br>
            $email = NULL;<br>

            echo $name;<br>
            echo $phone;<br>
            echo $phone;<br>
            is_null($name);<br><br>
            
            5.1 Variable Dump<br>
            var_dump($email);<br><br>

            5.1 Variable Unset to Null<br>
            $city = 'Ahmedabad';<br>
            unset($city);<br>
            var_dump($city); // NULL<br>

        </code><br><br>

        <?php

        $name = null;
        $phone = Null;
        $email = NULL;

        echo $name.'<br>';
        echo $phone.'<br>';
        echo $phone.'<br>';
        echo is_null($name).'<br>';

        var_dump($email).'<br>';

        $city1 = 'Ahmedabad';
        unset($city1);
        echo $city1.'<br>';
        ?>

       <h2>(6)Array (array)</h2>
       <code>
            <!-- $array1 = ['phone', 'laptop', 'computer', 'keyboard'];<br>
            $array2 = array(10, 20, 30, 40, 50);<br>
            $array1[]='bike';<br>
            $array2[]=60;<br>
            print_r($array1);<br>
            print_r($array2);<br>
            print_r($array1[0]);<br>
            print_r($array2[3]);<br>
            echo $array2[4];<br> -->

            6.1 Associate Array
            $prices = [<br>
            'laptop' => 1000,<br>
            'mouse' => 50,<br>
            'keyboard' => 120<br>
            ];<br>

            print_r($prices);<br><br>

            $students = array([<br>
                'Name' => 'Abhishek',<br>
                'Phone' => 9999999999,<br>
                'Emain' => 'abhshek@gmail.com',<br>
            ],<br>
            [
                'Name' => 'Harsh',<br>
                'Phone' => 88888888,<br>
                'Emain' => 'harsh@gmail.com',<br>
            ]);<br>

            print_r($students);<br>
            echo(count($students)).'<br>';

        </code>
        <?php 

            $prices = [
                'laptop' => 1000,
                'mouse' => 50,
                'keyboard' => 120
                ];
    
            print_r($prices).'<br>';

            $students = array([
                'Name' => 'Abhishek',
                'Phone' => 9999999999,
                'Emain' => 'abhshek@gmail.com',
            ],
            [
                'Name' => 'Harsh',
                'Phone' => 88888888,
                'Emain' => 'harsh@gmail.com',
            ]);

            print_r($students).'<br>';
            echo(count($students)).'<br>';

            
            foreach ($prices as $price){
                echo $price."<br>";
            }
            

        ?><br><br>

        

        <h1> (1)Operators</h1>
        <code>
        1.1 Assignment<br>

        +=	$x += $y	$x = $x + $y	Addition<br>
        -=	$x -= $y	$x = $x – $y	Subtraction<br>
        *=	$x *= $y	$x = $x * $y	Multiplication<br>
        /=	$x /= $y	$x = $x / $y	Division<br>
        %=	$x %= $y	$x = $x % $y	Modulus<br>
        **=	$z **= $y	$x = $x ** $y	Exponentiation<br><br>
        
        1.2 Comparison Operators<br>
        ==	Equal to<br>
        !=, <>	Not equal to<br>
        ===	Identical to /Strict Equal to<br>
        !==	Not identical to/Strict not Equal<br>
        >	Greater than<br>
        >=	Greater than or equal to<br>
        <	Less than<br>
        <=	Less than or equal to<br><br>

         $student1 = 'Students';<br>
         $student2 = 'students';<br><br>
         
         if($student1 == $student2){<br>
            echo 'Yes is equal to students';<br>
         }else{<br>
            echo 'No is equal to students';<br>
         }<br><br>

         $price1 = 200;<br>
         $price2 = 200;<br><br>

         if($price1 >= $price2){<br>
            echo 'Yes price is greater';<br>
         }else{<br>
            echo 'No price is not greater ';<br>
         }<br>

        </code>

        <?php 
         $student1 = 'Students';
         $student2 = 'students';

         $price1 = 200;
         $price2 = 200;

         
         if($student1 == $student2){
            echo 'Yes is Students equal to students';
         }else{
            echo 'No is Students equal to students';
         }

         if($price1 >= $price2){
            echo 'Yes price is greater';
         }else{
            echo 'No price is not greater ';
         }

        ?>

        
<h1>Logical Operator</h1>
        <code>

            AND (&&)<br>
            OR   (||)<br>
            NOT  (!)<br>

            if(!empty($price2)){<br>
            echo 'Yes price is greater';<br>
         }else{<br>
            echo 'No price is not greater ';<br>
         }<br>
        </code>
        <h1>Arithmetic Operators</h1>
        <code>
        +	Addition<br>
        –	Subtraction<br>
        *	Multiplication<br>
        /	Division<br>
        %	Modulus<br><br>

        $a = 20;<br>
        $b = 30;<br>

        $addition =  $a + $b;<br>
        $subtraction = $b - $a;<br>
        $multiplication = $b * $a;<br>
        $division = $b / $a;<br><br>

        $prices = [<br>
        'phone' => 10000,<br> 
        'laptop' => 50000,<br> 
        'keyboard' => 1000, <br>
        'mouse' => 500, <br>
        'monitor' => 15000<br>
        ];<br>
        $qty = 2;<br><br>
        foreach ($prices as $price){<br>
            echo 'Total of Each 2 Qty'.$price*$qty."<br>";<br>
        }<br><br>
        </code>

        <?php 
        $a = 20;
        $b = 30;

        $addition =  $a + $b;
        $subtraction = $b - $a;
        $multiplication = $b * $a;
        $division = $b / $a;

        echo 'Addition:'.$addition .'<br>';
        echo 'Subtraction:'.$subtraction.'<br>';
        echo 'Multiplication:'.$multiplication.'<br>';
        echo 'Division'. $division.'<br><br>';

        $prices = ['phone' => 10000, 'laptop' => 50000, 'keyboard' => 1000, 'mouse' => 500, 'monitor' => 15000];
        $qty = 2;
        foreach ($prices as $price){
            echo 'Total of Each 2 Qty'.$price*$qty."<br>";
        }

        ?>

        <h1>Increment/ Decrement Operators</h1>
        <code>
        ++$a	Pre-increment	$a + 1<br>
        $a++	Post-increment	$a + 1<br>
        --$a	Pre-decrement	$a - 1<br>
        $a--	Post-decrement	$a<br><br>

        $prices = [<br>
        'phone' => 10000,<br> 
        'laptop' => 50000,<br> 
        'keyboard' => 1000, <br>
        'mouse' => 500, <br>
        'monitor' => 15000<br>
        ];<br>
        $qty = 2;<br>
        $sr = 0;<br><br>
        foreach ($prices as $price){<br>
            echo ++$sr. 'Total of Each 2 Qty: '.$price*$qty."<br>";<br>
        }<br><br>
        
        </code>

        <?php
        
        $prices = ['phone' => 10000, 'laptop' => 50000, 'keyboard' => 1000, 'mouse' => 500, 'monitor' => 15000];
        $qty = 2;
        $sr = 0;
        foreach ($prices as $key => $price){
            echo ++$sr. '-Total of Each 2 Qty: '.$price*$qty."<br>";
        }

        ?>

        <h1> Turnary Operators</h1><br>
        <code>
        $is_admin = true;<br><br>

        if ($is_admin == true) {<br>
            $result = value1;<br>
        } else {<br>
            $result = value2;<br>
        }<br><br>

        $result = $is_admin == true ? value1 : value2;

        </code>

    </div>
    </div>
 </div> 

</section>

<?php include('./commpnpages/footer.php') ?>
