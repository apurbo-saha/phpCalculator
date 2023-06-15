<html>
    <head>
        <title>calculator</title>
    </head>
    <body>
        <?php
        ini_set('display_errors',0);
        if (isset($_REQUEST['calculate']))
        {
            $operator=$_REQUEST['operator'];
            $n1= $_REQUEST['first_value'];
            $n2= $_REQUEST['second_value'];

            if($operator=="+")

            {
                $res= $n1+$n2;
            }

            if($operator=="-")

            {
                $res= $n1-$n2;
            }

            if($operator=="*")

            {
                $res= $n1*$n2;
            }

            if($operator=="/")

            {
                $res= $n1/$n2;
            }
        }
        ?>
        <form>
            <table>
                <tr>
                    <td>Enter number</td>
                    <td colspan="1">
                        <input name="first_value" type="text"></td>
                </tr>
                <tr>
                    <td>Select Operator</td>
                    <td>
                        <select name="operator">
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                        </select>
                    </td>
                   
                </tr>
                <tr>
                    <td>Enter number</td>
                    <td colspan="1">
                        <input name="second_value" type="text"></td>
                </tr>
                <tr>
                    <td>
                        <td><input type="submit" name="calculate" value="Calculate"></td>
                    </td>
                </tr>
                <tr>
                    <td>output =</td>
                    <td><?php echo $res; ?></td>
                </tr>
            </table>
        </form>
    </body>
</html>