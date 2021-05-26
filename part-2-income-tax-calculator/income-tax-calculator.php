<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2: Income Tax Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="POST">
        <!-- Salary in USD 
 b. Radio button with 2 options: Yearly or monthly. 
 c. Tax Free Allowance in USD  -->
        <label>Salary in USD</label>
        <input type="text" name="salary" placeholder="USD" value="<?php if (isset($_POST["salary"])) {
                                                                        echo $_POST["salary"];
                                                                    } ?>">

        <br>

        <label>Period</label>
        <input type="radio" name="radio" value="year" <?php if (isset($_POST["radio"]) && $_POST["radio"] == "year") {
                                                            echo "checked";
                                                        } else {
                                                            if ($_POST["radio"] != "month") echo "checked";
                                                        } ?>> <span class="radio_text">Year</span>
        <input type="radio" name="radio" value="month" <?php if (isset($_POST["radio"]) && $_POST["radio"] == "month") {
                                                            echo "checked";
                                                        } ?>> <span class="radio_text">Month</span>

        <br>

        <label>Tax Free Allowance</label>
        <input type="text" name="tax-free" placeholder="USD" value="<?php if (isset($_POST["tax-free"])) {
                                                                        echo $_POST["tax-free"];
                                                                    } ?>">

        <br>

        <input type="submit" value="Submit" name="button">

        <br> <br> <br>

    </form>

    <?php
    if (isset($_POST["button"])) {
        if (isset($_POST["salary"]) && isset($_POST["radio"]) && isset($_POST["tax-free"])) {
            $totalsalary = $_POST["salary"];
            $taxamount = 0;
            $socialsecurity = 0;
            $salaryaftertax = 0;
            $freeallowance = $_POST["tax-free"];

            switch ($_POST["radio"]) {
                case "year":
                    break;
                case "month":
                    $totalsalary *= 12;
                    $freeallowance *= 12;
                    break;
            }
            if ($totalsalary < 10000) {
                $taxamount = 0;
                $socialsecurity = 0;
                $salaryaftertax = $totalsalary + $freeallowance;
            } else if ($totalsalary >= 10000 && $totalsalary < 25000) {
                $taxamount = $totalsalary * 0.11;
                $socialsecurity = $totalsalary * 0.04;
                $salaryaftertax = $totalsalary - $taxamount - $socialsecurity + $freeallowance;
            } else if ($totalsalary >= 25000 && $totalsalary < 50000) {
                $taxamount = $totalsalary * 0.3;
                $socialsecurity = $totalsalary * 0.04;
                $salaryaftertax = $totalsalary - $taxamount - $socialsecurity + $freeallowance;
            } else {
                $taxamount = $totalsalary * 0.45;
                $socialsecurity = $totalsalary * 0.04;
                $salaryaftertax = $totalsalary - $taxamount - $socialsecurity + $freeallowance;
            }
            echo "<table border=2>
            <tr>
                <td></td>
                <th>Yearly</th>
                <th>Monthly</th>
            </tr>
            <tr>
                <td>Total salary</td>
                <td>$totalsalary</td>
                <td>". round(($totalsalary / 12) , 2)."</td> 

                <!-- $blabla = $totalsalary / 12; -->
                <!-- <td>".$blabla."</td> --> 

            </tr>
            <tr>
                <td>Tax Amount</td>
                <td>$taxamount</td>
                <td>". round(($taxamount / 12) , 2)."</td>
            </tr>
            <tr>
                <td>Social security fee</td>
                <td>$socialsecurity</td>
                <td>". round(($socialsecurity / 12) , 2)."</td>
            </tr>
            <tr>
                <td>Salary after tax</td>
                <td>$salaryaftertax</td>
                <td>". round(($salaryaftertax / 12) , 2)."</td>
            </tr>
        </table> ";
        }
    }

    ?>

</body>

</html>