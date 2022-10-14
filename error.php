<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background: linear-gradient(45deg, #8500ff, #5acaff);
            height: 100vh;
        }
        #container{
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('img/p404.png') #151729;
            box-shadow: 0 15px 30px rgba(0, 0, 0, .5);
        }
        #container .content{
            max-width: 600px;
            text-align: center;
        }
        #container .content h2{
            font-size: 18vw;
            color: #fff;
            line-height: 1em;
        }
        #container .content h4{
            position: relative;
            font-size: 1.5em;
            color: #fff;
            background-color: #088178;
            font-weight: 300;
            padding: 10px 20px;
            margin-bottom: 20px;
            display: inline-block;
            border-radius: 4px;
        }
        #container .content p{
            color: #fff;
            font-size: 1.2em;
        }
        #container .content a{
            position: relative;
            display: inline-block;
            padding: 10px 25px;
            background-color: #088178;
            color: #fff;
            text-decoration: none;
            margin-top: 25px;
            border-radius: 25px;
            border: 3px solid transparent;
            transition: 0.3s ease;
        }
        #container .content a:hover{
            letter-spacing: 1px;
            color: #088178;
            background-color: transparent;
            border: 3px solid #003833;
        }
    </style>
</head>
<body>
    <div id="container">
        <div class="content">
            <h2>404</h2>
            <h4>Opps! Page not found</h4>
            <p>The page you were looking for doesn't exist. You may have try later or the page may have moved.</p>
            <a href="index.php">Back To Home</a>
        </div>
    </div>

    <script type="text/javascript">
        var container = document.getElementById('container');
        window.onmousemove = function(e){
            var x = - e.clientX/5,
                y = - e.clientY/5;
            container.style.backgroundPositionX = x + 'px';
            container.style.backgroundPositionY = y + 'px';

        }
    </script>
</body>
</html>