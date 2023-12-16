<?php
require_once 'class_accountBank.php';

$ab1 = new AccountBank("010", 500000, "Messi");
$ab2 = new AccountBank("070", 1000000, "Ronaldo");

$ar_ab = [$ab1, $ab2];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accountNumber = $_POST["account_number"];
    $customer = $_POST["customer"];
    $initialBalance = $_POST["initial_balance"];
    $newAccount = new AccountBank($accountNumber, $initialBalance, $customer);
    $ar_ab[] = $newAccount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .account-details {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        .account-details:hover {
            background-color: #f9f9f9;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h2>Tambah Data Akun</h2>
    <form action="index.php" method="post">
    <label for="account_number">Nomor Rekening:</label>
        <input type="text" name="account_number" class="form-control" required>
        <label for="customer">Nama Customer:</label>
        <input type="text" name="customer" class="form-control" required>

        <label for="initial_balance">Saldo Awal:</label>
        <input type="text" name="initial_balance" class="form-control" required>

        <input type="submit" value="Tambah Data" class="btn btn-primary">
    </form><br/>

    <h2>Data Akun</h2>
    <?php
    foreach ($ar_ab as $account) {
        echo '<div class="account-details">';
        $account->cetak();
        echo '</div>';
    }
    ?>
</body>
</html>
