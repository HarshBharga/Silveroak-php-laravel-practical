<?php include('./commpnpages/header.php') ?>
<?php include('./homeController.php') ?>

<section>

 <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-primary">Control Flow Logic</h1>
        </div>
        <div class="col-md-12 mt-5">
        <h1 class="text-bold text-success">(1)if/ if else</h1>
        <pre><code>
            
            <var>$is_admin = false;</var>

            if ( $is_admin ) {
            echo 'Welcome, admin!';
            }else{
                echo 'welcome user !';
            }


            <var>$email = 'abc@gmail.com';</var>

            if ( $email == 'abc@gmail.com' ) {
                echo 'is valid user';
            }

            </code></pre>
            <h2 class="text-bold text-success">RESULT</h2>
            <?php 
            $is_admin = false;
            $email = 'abc@gmail.com';

            if ( $is_admin ) {

                echo 'Welcome, admin!';
    
                }else{
                    echo 'welcome user !';
                }

            ?>

<h1 class="text-bold text-success">(2)if elseif</h1>
        <pre><code>
            

            <var>$x = 10;</var>
            <var>$y = 20;</var>
            <var>$z = 30;</var>

            if ($x > $y) {
                $message = 'x is greater than y';
            } elseif ($x < $y && $x < $z) {
                $message = 'x is less than y';
            } else {
                $message = 'x is equal to y';
            }

            echo $message;


            </code></pre>
            <h2 class="text-bold text-success">RESULT</h2>
            <?php 
            $x = 10;
            $y = 20;
            $z = 30;

            if ($x > $y) {
                $message = 'x is greater than y';
            } elseif ($x < $y && $x < $z) {
                $message = 'x is less than y and z';
            } else {
                $message = 'x is equal to y';
            }

            echo $message;
            ?>


<h1 class="text-bold text-success">(3)if VS Switch Case</h1>
        <pre><code>
        
        3.1 if Condition vs Switch
        
        <var>$role = 'subscriber';</var>
        <var>$message = '';</var>

        if ('admin' === $role) {
            $message = 'Welcome, admin!';
        } elseif ('editor' === $role) {
            $message = 'Welcome! You have some pending articles to edit';
        } elseif ('author' === $role) {
            $message = 'Welcome! Do you want to publish the draft article?';
        } elseif ('subscriber' === $role) {
            $message = 'Welcome! Check out some new articles.';
        } else {
            $message = 'Sorry! You are not authorized to access this page';
        }

        echo $message;

        3.2 Switch Case

        switch ($role) {
            case 'admin':
            $message = 'Welcome, admin!';
            break;
            case 'editor':
            $message = 'Welcome! You   have some pending articles to edit';
            break;
                case 'author':
            $message = 'Welcome! Do you want to publish the draft article?';
            break;
            case 'subscriber':
            $message = 'Welcome! Check out some new articles.';
            break;
            default:
            $message = 'You are not authorized to access this page';
        }
        echo $message;



            </code></pre>
            <h2 class="text-bold text-success">RESULT</h2>
            <?php 
            $x = 10;
            $y = 20;
            $z = 30;

            if ($x > $y) {
                $message = 'x is greater than y';
            } elseif ($x < $y && $x < $z) {
                $message = 'x is less than y and z';
            } else {
                $message = 'x is equal to y';
            }

            echo $message;
            ?><br><br>
            <hr>
            <!-- <h1 class="text-bold text-success">GIT</h1>
            <h2>shorturl.at/aOY57</h2>
            <pre><code>
            git clone https://github.com/HarshBharga/Silveroak-php-laravel-practical.git<code></pre>
             -->
            <h1 class="text-bold text-success">For Loop</h1>
            <pre><code>
            for ($row=1; $row <= 10; $row++) { 
                echo $row*(5);
            }

            </code></pre>
            <h2 class="text-bold text-success">for Loop Result</h2>
            <?php 
                for ($row=1; $row <= 10; $row++) { 
                    echo $row*(5).'<br>';
                }
                
            ?><br><br>

            <h1 class="text-bold text-success">While Loop</h1>
            <pre><code>
            $x = 6;
            while($x <= 5) {
                echo $x;
                $x++;
            }
            ?>
            </code><pre>
            <h2 class="text-bold text-success">While Result</h2>
            <?php 
            $x = 6;
            while($x <= 5) {
            echo $x.'<br>';
            $x++;
            }
             ?>  
             
             <h1 class="text-bold text-success">Do While Loop</h1>
             <pre><code>
                $x = 1;
                do {
                    echo "The number is:". $x;
                    $x++;
                } while ($x <= 8);
             </code></pre>
             <h2 class="text-bold text-success">Do While Result</h2>
             <?php
                $x = 1;
                do {
                echo "The number is: $x <br>";
                $x++;
                } while ($x <= 8);
                ?>
                <h1 class="text-bold text-success">Break and Continue</h1>
                <pre><code>
                

                Continue
                for ($i = 0; $i < 10; $i++) {
                    if ($i === 4) {
                        continue;
                    }
                }

                </code></pre>
                <h1 class="text-bold text-success">Continue Result</h1>
                <?php 
                //   for ($i = 0; $i < 10; $i++) {
                //       if ($i === 5) {
                //           break;
                //       }
                //       echo "$i\n";
                //   }
  
                  for ($i = 0; $i < 10; $i++) {
                      if ($i === 4) {
                          continue;
                      }
                      echo "$i\n";
                    }
                ?>
        </div>
    </div>
 </div> 

</section>

<?php include('./commpnpages/footer.php') ?>
