<!doctype html>
<html>

<head>
    <title> PHP Syntax</title>
    <style>
        body {
            font-family: vardana
        }

        .phpcode {
            width: 900px;
            margin: 0 auto;
            background: #ddd;
        }

        .headeroption,
        .footeroption {
            background: #444;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .headeroption h2,
        .footeroption h2 {
            margin: 0;
        }

        .maincontent {
            min-hieght: 400px;
            padding: 20px;
        }

        p {
            margin: 0
        }

    </style>
</head>

<body>

    <div class="phpcode">
        <section class="headeroption">
            <h2>PHP Fundumental Tutorial</h2>

        </section>

        <section class="maincontent">
            <hr />
            PHP array() Function - Create Array
            <hr />

            <?php
			//Array code write from here... 
            
             //create an index array
			 $car = array("Volvo","BMW","Toyota");
			 //find total elements of the array by using 'count()' function
			 $length = count($car);
			 //print/display array value with for loop
			 for($i = 0; $i < $length; $i++){
				 echo $car[$i]."<br/>";
			 }
             
			 
            ?>




        </section>

        <section class="footeroption">
            <h2>www.mdnajmulovi.com</h2>
        </section>
    </div>
</body>

</html>
