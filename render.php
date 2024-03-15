<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>



    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- framework -->
    <link rel="stylesheet" href="./css/framework.css">

    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/39dc9eb8ed.js" crossorigin="anonymous"></script>
</head>




<body data-bs-theme="dark">
    <!-- PHP -->
    <?php

    $first_input = $_GET['first_input'];
    $area_input = $_GET['area_input'];

    $length = strlen($area_input);

    $banned_word = str_replace($first_input, '***', $area_input);
    $banned_area_length = strlen($banned_word);


    ?>
    <!-- PHP -->
    <div class="container">
        <div class="d-flex my-5 gap-5">
            <div>
            <h2><?php echo $banned_word ?></h2>
            </div>
            <div class="d-flex flex-column justify-content-center gap-3">
            <h1 class="rounded-2 p-3 d-flex flex-column bg-warning text-black"> <span>Banned word:</span>   <span><?php echo $first_input ?></span></h1>
            <h1 class="rounded-2 p-3 d-flex flex-column bg-success text-black">Original length: <br> <?php echo $length ?></h1>
            <h1 class="rounded-2 p-3 d-flex flex-column bg-danger text-black" >Censored text length: <?php echo $banned_area_length ?></h1>
            </div>
        </div>

    </div>















    <!-- ******** LIBRARIES AND FRAMEWORKS ******** -->

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- JS -->
    <script type="text/javascript" src="./js/script.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>