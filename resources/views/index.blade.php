<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoom & Zoho</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
      overflow: hidden;
    }

    .container {
      display: flex;
      height: 100vh;
      width: 100%;
    }

    .half {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      color: white;
      text-align: center;
      position: relative;
    }

    .zoom {
      background: url('https://zoom.us/docs/images/en-us/zoom-logo.png') no-repeat center/cover, #0055cc;
    }

    .zoho {
      background: url('https://www.zohowebstatic.com/sites/default/files/styles/product-home-page/public/zoho-logo.png') no-repeat center/contain, #111;
      background-position: center 30%;
      background-size: 200px auto;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
    }

    .content {
      position: relative;
      z-index: 2;
      padding: 20px;
    }

    h1 {
      font-size: 2.5em;
      margin-bottom: 15px;
    }

    p {
      font-size: 1.1em;
      margin-bottom: 20px;
    }

    .btn {
      background: transparent;
      border: 2px solid white;
      padding: 10px 20px;
      color: white;
      font-size: 1em;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn:hover {
      background: white;
      color: black;
    }

  </style>
</head>
<body>
  <div class="container">
    <!-- Zoom Section -->
    <div class="half zoom">
      <div class="overlay"></div>
      <div class="content">
        <h1>ZOOM</h1>
        <p>Host or join meetings with ease and connect with your team instantly.</p>
        <a href="" target="_blank" class="btn">Start with Zoom</a>
      </div>
    </div>

    <!-- Zoho Section -->
    <div class="half zoho">
      <div class="overlay"></div>
      <div class="content">
        <h1>ZOHO</h1>
        <p>Manage your business with powerful Zoho tools and integrations.</p>
        <a href="{{route('zoho-home')}}" class="btn">Start with Zoho</a>
      </div>
    </div>
  </div>
</body>
</html>
