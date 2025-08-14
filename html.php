<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Username Verification</title>
  <style>
    #username:focus {
      outline: none;
      border: 2px solid #464444;
    }

    #username {
      padding: 6px 5px;
      border-radius: 5px;
      border: 1px solid #464444;
      margin-left: 10px;
    }

    #submitbtn {
      background-color: green;
      color: white;
      padding: 10px 20px;
      margin-left: 180px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }

    #submitbtn:hover {
      color: rgb(0, 0, 0);
      background-color: rgb(111, 221, 142);
    }

    #message {
      margin-top: 10px;
      font-weight: bold;
      color: rgb(75, 216, 75);
    }
  </style>
</head>

<body>
  <p>Enter User Name: <input id="username" type="text" placeholder="" /></p>
  <button id="submitbtn">Submit</button>
  <p id="message">Key in username and click Submit</p>

  <script src="verify_ajax.js"></script>
</body>

</html>