<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
</head>

<main>
    
    <h2 style="text-align:center; font-size:20px;">Eligibility Check</h2>

   <form method="post" action="">
        <label>Enter Your Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Enter Your Age:</label><br>
        <input type="number" name="age" required><br><br>

        <input type="submit" value="Check Eligibility">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "<p>Hello $name, you are eligible for voting.</p>";
        } else {
            echo "<p>Hello $name, you are not eligible for voting.</p>";
        }
    }
    ?>

    <br><br>

    <h2 style="text-align:center; font-size:20px;">Monthly Holiday Check</h2>
    
    <?php
    $currentmonth = date("F");

    switch ($currentmonth) {
        case "August":
            echo "<h3 style='font-size:15px;'>It's August, so it's still holiday.</h3>";
            break;
        default:
            echo "<h3 style='font-size:15px;'>Not August, this is $currentmonth so I don't have any holidays</h3>";
            break;
    }
    ?>

     <br><br>


     <h2 style="text-align:center; font-size: 20px;">Multiplication Table</h2>
     <form method="post" action="">
        <label for="number">Enter a Number:</label><br>
        <input type="number" name="number" required><br><br>
        <input type="submit" name="subject" value="Show Table">
    </form>

    <?php
   
    if(isset($_POST['subject'])) { 
            $n = $_POST['number']; 
            echo "<h4>Multiplication Table for $n:</h4>";
        for ($i = 1; $i <= 10; $i++) {
            $Result = $n * $i;
            echo "$n x $i = " . ($n * $i) . "<br>";
        }
    }
    ?>
     
    <main>
    <h2 style="text-align:center; font-size:20px;">Print Numbers </h2>
    <form method="post" action="">
       <label for="limit">Enter a number:</label><br>
        <input type="number" name="limit" required><br><br>
        <input type="submit" name="submit_Number" value="Print Numbers">
    </form>

    <br>

    <?php
    if(isset($_POST['submit_Number'])) {

        $num = $_POST['limit'];
        $i = 1;
         echo "<b>Numbers from 1 to $num:</b><br><br>";
        while($i <= $num) {
            echo $i . "<br>";
            $i++;
        }
    }
    ?>

    <br><br>

    <h2 style="text-align:center; font-size:20px;">Array Element</h2>

    <?php
        $myarray = array("HTML", "CSS", "PHP", "JavaScript");
        echo "<h4 style='font-size:15px;'>Programming Language:</h4>";
        foreach ($myarray as $language) {
        echo $language . "<br>";
    }
    ?>
    <br>

</main>

<?php include 'footer.php'; ?>

</html>



