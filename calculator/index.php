<?php include 'header.php'; 
    include 'function.php';
?>
<section class="main-body bg-dark text-white">
    <!-- html code hear -->

    <table>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <tr>
                <td>Number One : </td>
                <td>
                    <input type="number" name="num1" id="">
                </td>
            </tr>
            <tr>
                <td>Number Two : </td>
                <td>
                    <input type="number" name="num2" id="">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="calculate" value="Calculate" id="">
                </td>
            </tr>
        </form>
    </table>
    <!-- php code hear -->
    <?php
        if(isset($_POST['calculate'])){
            $numOne = $_POST['num1'];
            $numTwo = $_POST['num2'];
        }
        if(empty($numTwo) or empty($numTwo)){
            echo "Field must Non be empty<br/>";
        }else{
            echo "First Number is $numOne and last Number is $numTwo.<br/>";
            $cal = new calculation;
            $cal->sum($numOne, $numTwo);
            $cal->sub($numOne, $numTwo);
            $cal->mul($numOne, $numTwo);
            $cal->div($numOne, $numTwo);
        }
    ?>






</section>
<?php include 'footer.php'; ?>