<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        .poojan {
            background-color: rgb(25, 27, 27);
        }
    </style>


</head>

<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM transfer_history";
    $result = mysqli_query($conn,$sql);
?>

    <nav class="navbar navbar-expand-lg navbar-dark poojan">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bank of Sparks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-mihir ">
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="customer.php">View customers</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link active" aria-current="page" href="#">Transaction History</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <section>
        <h2 class="section_heading">Transaction history</h2>
        <div class="table-responsive-sm">
            <table class="table">
                <thead class="theading">
                    <tr id="head">
                        <th>Tranferred From</th>
                        <th>Transferred to</th>
                        <th>Amount Transferred(in Rs.)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rows=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td class="py-2">
                            <?php echo $rows['sender'] ?>
                        </td>
                        <td class="py-2">
                            <?php echo $rows['receiver']?>
                        </td>
                        <td class="py-2">
                            <?php echo $rows['amount']?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj "
        crossorigin="anonymous "></script>

</body>

</html>