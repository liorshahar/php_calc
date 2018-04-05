<!DOCTYPE html>
<html>
    <head>
        <title>Client Calc</title>
        <link rel="stylesheet" href="includes/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="wrapper">


            <section>
                <input type="number" name="num1" id="num1" placeholder="number 1">
                <input type="number" name="num2" id="num2" placeholder="number 2">
                <input type="number" name="num3" id="num3" placeholder="number 3">  
            </section>
            <section>
                <label>Functoin :</label>
                <button class="btn btn-lg btn-primary"  id="add_btn" name="add">+</button>
                <button class="btn btn-lg btn-primary"  id="avg_btn" name="avg">AVG</button>
                <button class="btn btn-lg btn-primary"  id="mult_btn" name="mult">x</button>
                <button class="btn btn-lg btn-primary"  id="reset_btn" name="reset">reset</button>
                

            </section>
            <section>
                <label>Method :</label>
                <button class="btn btn-outline-primary" id="get_btn">GET</button>
                <button class="btn btn-outline-primary" id=post_btn>POST</button>
                <button class="btn btn-outline-primary" id="put_btn">PUT</button>
            </section>

            <section>
                <label class="result">Result :</label>
            </section>
         </div>
         <script src="includes/js/script.js"></script>
    </body>

</html>



