<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR WIKA</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .calculator-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .calculator-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .calculator-buttons {
            text-align: center;
        }
        .calculator-buttons input {
            width: 50px;
            height: 50px;
            font-size: 20px;
            margin: 5px;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.8);      
          }
    </style>
</head>
<body>

<div class="container">
    <div class="calculator-container">
        <div class="calculator-header">
            <h1>KALKULATOR </h1>
        </div>
        <form action="" method="post" name="form1">
            <input type="text" name="txt1" id="txt1" class="form-control mb-3">
            <div class="calculator-buttons">
                <input type="button" value="+" class="btn btn-primary" onClick="form1.txt1.value+='+'">
                <input type="button" value="-" class="btn btn-primary" onClick="form1.txt1.value+='-'">
                <input type="button" value=":" class="btn btn-primary" onClick="form1.txt1.value+='/'">
                <input type="button" value="x" class="btn btn-primary" onClick="form1.txt1.value+='*'">
                <br>
                <input type="button" value="1" class="btn btn-secondary" onClick="form1.txt1.value+='1'">
                <input type="button" value="2" class="btn btn-secondary" onClick="form1.txt1.value+='2'">
                <input type="button" value="3" class="btn btn-secondary" onClick="form1.txt1.value+='3'">
                <input type="button" value="4" class="btn btn-secondary" onClick="form1.txt1.value+='4'">
                <br>
                <input type="button" value="5" class="btn btn-secondary" onClick="form1.txt1.value+='5'">
                <input type="button" value="6" class="btn btn-secondary" onClick="form1.txt1.value+='6'">
                <input type="button" value="7" class="btn btn-secondary" onClick="form1.txt1.value+='7'">
                <input type="button" value="8" class="btn btn-secondary" onClick="form1.txt1.value+='8'">
                <br>
                <input type="button" value="9" class="btn btn-secondary" onClick="form1.txt1.value+='9'">
                <input type="button" value="0" class="btn btn-secondary" onClick="form1.txt1.value+='0'">
                <input type="button" value="=" class="btn btn-success" onClick="form1.txt1.value=eval(form1.txt1.value)">
                <input type="button" value="c" class="btn btn-danger" onClick="form1.txt1.value=''">
            </div>
        </form>
    </div>
</div>

</body>
</html>
