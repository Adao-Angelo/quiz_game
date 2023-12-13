
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/index.css">
    <title>QUIZ | GAME</title>
    <style>
        .status{
           
            background: black; 
            color: white;
            padding:1rem;
            border-radius:0.5rem;
            width:20rem;
            margin:auto;
            margin-top: 10rem;
            text-align:center;
        }
        body{
            background-image: linear-gradient(to right, #30cfd0, #330867);
        }

    </style>
</head>
<body>
      <h2   class="status">
      <?php 
    include_once('questions.php');
    $response = $_POST["response"] ;
    $number = $_POST["number"];
    $question = $questions[$number];
    if ($question[1] == $response) {
        print_r("resposta certa");
    }else {
        print_r("resposta Errada");
    }
?>
      </h2>
      <script>
        setTimeout(()=>{
            open("../pages/quizPage.php" , "_self")
        },3000) 
      </script>
</body>
</html>