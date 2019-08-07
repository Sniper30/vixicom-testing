<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finance</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
    
<style>

html{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    height: 100vh;
}

*,*::before,*::after{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Nunito', sans-serif;
    background: #ecf0f1;
    height: 100vh;
    overflow: hidden;
}
.Comp-div{
    background: #34495e;
    min-height: 50px;
    color: #fff;
    display: flex;
    justify-content: center;
    position: absolute;
    width: 100%;
}
header{
    top:0;
}
footer{
    bottom: 0;
}
.container{
    height: 200px;
    margin-top: 130px;
    display: flex;
    justify-content: center;
    align-items: center;
}
form{
    display: flex;
    justify-content: center;
    flex-flow: row wrap;
    width: 60%;
}

form select, form input[type="text"]{
    height: 25px;
    width: 40%;
    border: none;
    border-radius: 4px;
    margin: 10px;
    border: 1px solid #bdc3c7;
}

form input[type="submit"]{
    width: 60%;
    height:40px;
    background: #2ecc71;
    border: none;
    color: #fff;
}
.show{
    display:flex;
    justify-content:space-between;
    flex-flow:column;
    font-size:30px;
    font-weight:bold;
    min-height:100px;
}
</style>

<header class="Comp-div">
   <h1>Header</h1>
    </header>


    <div class="container" >
        <div class="show">
            <p> from: {{ $valueFrom }}</p>
                
            <p> To: {{ $valueTo }} </p>
            <a href="/">Home</a>
        </div>
    </div>

    <footer class="Comp-div">
        <h1>Footer</h1>
    </footer>
    
</body>
</html>
