<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{width: 100%;height: 40rem; position: relative;left: 0rem;}
        label{position: relative;left: 25rem;top: -20rem;color: white;font-size: x-large;}
    
        input{width: 14rem;margin: 13px;height: 1.5rem;background-color: gray;color: white;cursor: pointer;}
        input[type=password]{position: relative;left: 3rem;;}
    
        button{position: relative;top: -14rem;left: 14.7rem;padding: 10px 35px;border-radius: 10px;font-size: medium;font-weight: 600;}
        button:hover{background-color: black;color: white;}
    a{color: red;}
    </style>
</head>
<body>
    <a href="home.php"></a>
    <div class="abc"><img src="pict.jpg" alt=""></div>

<form action="logincheck.php">
<label for="">User Name/ Id
    <input type="text" name="name">
</label><br>
<label class="P">password
    <input type="password" name="password">
</label>
<button type=submit>Submit</button>
</form>
    
</body>
</html>