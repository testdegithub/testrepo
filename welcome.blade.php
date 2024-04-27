<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        font-size: 16px;
    }
    .home{
        background-color: black;
        display:flex;
        align-items: center;
        height: 100vh;
        justify-content: center;
        color: white;
    }
    
    h1{
        color: var(--color);
        font-size: 3em;
    }
    h2{
        font-size: 2.5em;
    }
    h3{
        color: var(--color);
        font-size: 2em;
    }
    p{
        font-size: 2em;
        margin: 10px 0;
    }
    :root{
        --color:aqua;
    }
    a{
        text-decoration: none;
        margin: 100px 0;
        border: 2px solid var(--color);
        padding: 10px 30px;
        font-size: 1.5em;
        border-radius: 10%;
        transition: 0.7s;
        color: var(--color);
    }
    a:hover{
        color: rgb(0, 0, 0);
        background-color: var(--color);
    }
</style>
<body>
    <div>
        <div class="home">
            <div class="content">
                <h1>Zahir Ezzouine</h1>
                <h2>DWOFS 202</h2>
                <h3>Location Voiture</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="/marque">get started</a>
            </div>
            <img src="" alt="">
        </div>
    </div>
</body>
</html>