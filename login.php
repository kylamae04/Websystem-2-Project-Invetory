<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style type="text/css">
        div {
            justify-content: center;
            display: flex;
            margin: 100px;
        

        }
        header { 
            background-color: #7CC0CD; 
            padding: 20px; 
            color: black; 

        }
        form {
            background-color: #7CC0CD;
            padding: 90px;
            cursor: pointer;
            border-radius: 10px;
        }
        input { 
            font-size: 15px; 
            border: 1px solid #1C2B4A; 
            border-radius: 15px;
            padding: 12px 15px; 
            width: 400px;
        }
        button{
            font-size: 15px;
            border:none;
            background-color: #B02D27;
            border-radius: 8px;
            width: 150px;
        }
        button,p { 
            display: inline-block; 
            padding :10px; 
        }
        h3{
            font-size: 40px;
            justify-content: center;
            margin: auto;
            width: 50%;
            padding: 10px;
        }
        h4{
            justify-content: center;
            margin: auto;
            width: 40%;
            padding: 15px;
        }


    </style>
</head>
<body>
    <header>
        <h3>Inventory Management System</h3>
    </header>
    <div>
        <form>
            <h4 style="font-size: 30px;">Login Here</h4>
            <input type="text" name="email" placeholder="Username or Email"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button type="submit" name="login">Login</button>
            <p><a href="#">Forgot Password?</a></p><br><br><hr>
        </form>
    </div>
    <hr>
</body>
</html>
