<!DOCTYPE html>
<html>
<head>

<?php 
    include 'header.php';?>

<main>
    
    <h2 style="text-align:center; font-size: 20px;">User Input Form</h2>
    

    <form method="post">
        <label>First Name:</label>
        <input type="text" name="fname" required><br><br>

        <label>Last Name:</label>
        <input type="text" name="lname" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['fname']) && isset($_POST['lname'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>";
    }
    ?>
</html>

<main>
    <h3 style="text-align:center; font-size: 20px;">HTML Table</h3>
    <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
    ?>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>S.n.</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td><?php echo $g1; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Alice</td>
                <td><?php echo $g2; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob</td>
                <td><?php echo $g3; ?></td>
            </tr>
        </tbody>
    </table>

    <br><br>

    <h3 style="text-align:center; font-size: 20px;">String Variables:</h3>
        <?php
            $str1 = "Hello";
            $str2 = "World";

            $result = $str1 . " " . $str2;
            $length = strlen($result);

            echo "<p><strong>Joined String:</strong> $result</p>";
            echo "<p><strong>Length of String:</strong> $length</p>";
    ?>

    <br>

    <h3 style="text-align:center; font-size: 20px;">Number Addition:</h3>
        <?php
            $numbers = array(298, 234, 46);
            $sum = $numbers[0] + $numbers[1] + $numbers[2];
            echo "Number 1: " . $numbers[0] . "<br>";
            echo "Number 2: " . $numbers[1] . "<br>";
            echo "Number 3: " . $numbers[2] . "<br>";
            echo "<strong>Total Sum: " . $sum."
            </strong>";
    ?>

    <br><br>
 
    <h3 style="text-align:center; font-size: 20px;">Browser Detection:</h3>

        <?php
            echo "<p>You are using: " . htmlspecialchars($_SERVER['HTTP_USER_AGENT']) . "</p>";

    ?>
<style>
   
</style>
</main>
<?php include 'footer.php'; ?>