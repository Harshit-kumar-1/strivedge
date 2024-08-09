<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>if-else</title>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center">Fill The Form</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3">
                <label for="num1" class="form-label">Number 1</label>
                <input type="number" class="form-control" id="num1" name="num1" placeholder="write a number" Required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Number 2</label>
                <input type="number" class="form-control" id="num2" name="num2" placeholder="write a number" Required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $value = false;

            if ($num1 < $num2) {
                $result = "$num1 is less than $num2";
                $value = true;
                // echo $result;
            } else {
                $result = "$num1 is greater than or equal to $num2";
                $value = true;
                // echo $result;
            }

            if ($value == true) {
                echo "<h2>Your Input:</h2>";
                echo "Number 1: $num1 <br>";
                echo "Number 2: $num2 <br>";
            }
        }
        ?>

        <?php if (!empty($result)): ?>
            <h3> Result is </h3>
            <p><?php echo $result; ?></p>
        <?php endif; ?>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>