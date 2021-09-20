<head?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\transacthistory.css">
    </head>
    <div class="icon">
        <a href="../sparks_bank-main">
            <img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-piggy-bank-banking-and-finance-kiranshastry-lineal-color-kiranshastry-3.png" />
        </a>
    </div>

    <body style="background-color: #CAB8FF;">


        <div class="container">
            <h2 class="text">Transaction History</h2>

            <br>
            <div class=" col table-responsive-sm">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th class="text-center">S.No.</th>
                            <th class="text-center">Sender</th>
                            <th class="text-center">Receiver</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'config.php';

                        $sql = "select * from transaction";

                        $query = mysqli_query($conn, $sql);

                        while ($rows = mysqli_fetch_assoc($query)) {
                        ?>

                            <tr>
                                <td class="py-2"><?php echo $rows['sno']; ?></td>
                                <td class="py-2"><?php echo $rows['sender']; ?></td>
                                <td class="py-2"><?php echo $rows['receiver']; ?></td>
                                <td class="py-2"><?php echo $rows['balance']; ?> </td>
                                <td class="py-2"><?php echo $rows['datetime']; ?> </td>

                            <?php
                        }

                            ?>
                    </tbody>
                </table>

            </div>
        </div>


    </body>

    </html>