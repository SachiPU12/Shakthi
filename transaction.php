<?php
    $name = $_POST['name'];
    $type = $_POST['billType'];
    $amount = $_POST['amount'];
    $payType = $_POST['pt'];
    $fp = fopen("login.txt", 'a');
    $savestring = $name ."     ".$type."     "."Rs:".$amount."     ".$payType."     "."\n";
    fwrite($fp, $savestring);
    fclose($fp);
    $msg = "Your Payment is saved successfuly ...!";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="resourses/css/styles.css">
        <link rel="stylesheet" type="text/css" href="resourses/css/transaction.css">

        <title>Payment invoice</title>
    </head>

    <body>
        <div class="invoice-box">
        <?php echo($msg) ?>
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="3">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="resourses/img/Shakthi.jpg" style="width:50%; max-width:100px" alt="logo" class="logo"> 
                                </td>
                                <td>
                                    Invoice No: 123<br>
                                    <?php
                                        $currentDateTime = date('d-m-Y');
                                        echo $currentDateTime;
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    Shakthi Bank,<br>P.O. Box 21,<br>Nawala,<br>Nugegoda 10250,<br>Sri Lanka<br>
                                </td>
                                <td>
                                    <?php echo($name) ?>
                                    <br>                          
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                                                
                <tr class="heading">
                    <td>Bill Type</td>
                    <td>Payment Type</td>
                    <td>Amount</td>
                </tr>
            
                <tr class="item">
                    <td><?php echo($type) ?></td>
                    <td><?php echo($payType) ?></td>
                    <td><?php echo($amount) ?></td>
                </tr>
                                
                <tr class="total">
                    <td></td>
                    <td></td>
                    <td>Rs. <?php echo($amount) ?>.00</td>
                </tr>
            </table>
        </div>

    </body>
</html>
