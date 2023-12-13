
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ | GAME</title>
    <link rel="stylesheet" href="../style/index.css">
    <style>
            * {
            margin:0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: center;
        }
        body{
            background-image: linear-gradient(to right, #30cfd0, #330867);
            padding:1rem;
        }

        .question{
            margin-top: 4rem;
        }

        form {
            margin: 0%;
            padding: 2rem;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.87);
            max-width: 30rem;
            margin-top: 1rem;
            border-radius: 0.5rem;
        }

        form input {
            width: 100%;
            padding: 1rem;
            margin-top: 1rem;
            font-size: 15px;
        }

        .btn {
            color: aliceblue;
            background-color: green;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
        }
        .btn:hover {
            color: aliceblue;
            background-color: rgb(31, 211, 31);
        
        }

        .ch{
            padding: 1rem;
            color: aliceblue;
            background-color: rgb(71, 71, 71);
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            max-width: 29rem;
        }

    </style>
</head>
<body>
    <div class="container">

         <div class="content">
            <div class="question">
            <button name = "change" class="ch" id = "btn" onclick="scriptA()"><?php
                    include("../php/callQuestions.php");
                     $n = rand(0, 15);
                     $arrayQ = callQuestion($n);
                     $datas = $arrayQ[0];
                     $q = $datas[0];
                     print_r($q);
                ?></button>
            </div>
          <form action="../php/verify.php"  method = "POST">
                <input type="text" name="response" id="response" placeholder="Resposta">
                <input type="text" name="number" id="number" value = "<?php print($n)?>"  style = "display: none;">
                <input type="submit" class="btn" value="Responder" name="responsebtn">
          </form>
         </div>
    </div>
    <script>
        sessionStorage.setItem("position" , 0)
        function scriptA() {
            location.reload()
        }
    </script>
</body>
</html>
