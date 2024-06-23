<!DOCTYPE html>
<html >
    <head>
        <title>Laravel</title>


  <style>
          body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
          }
          
          .welcome-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
          }
          
          .welcome-heading {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
          }
          
          .welcome-message {
            font-size: 24px;
            margin-bottom: 20px;
          }
          
          .welcome-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
          }
          
          .welcome-button:hover {
            background-color: #45a049;
          }
  </style>
</head>
<body>
  <div class="welcome-container">
    <h1 class="welcome-heading">WELCOME TO LARAVEL!</h1>
    <p class="welcome-message">Xin chào, tôi là PS33946 - Sầm Thanh Nhân!</p>
    <p>Sinh viên lập trình Laravel</p>
    <a href="{{ url('hello') }}" class="welcome-button">Hello World</a>
    <a href="{{ url('about') }}" class="welcome-button">About me</a>
  </div>
</body>
</html>