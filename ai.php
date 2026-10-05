<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Emotion Recognition &amp; Expression Detection</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg,rgb(76, 79, 85),rgb(210, 207, 213));
      color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
      padding: 20px;
    }
    h1 {
      margin-bottom: 10px;
      font-weight: 700;
      font-size: 2.5rem;
      letter-spacing: 1px;
    }
    #videoContainer {
      position: relative;
      width: 1270px;
      max-width: 400vw;
      border-radius: 70px;
      overflow: hidden;
      box-shadow: 0 15px 25px rgba(0,0,0,0.5);
      background: #222;
    }
    video {
      display: block;
      width: 100%;
      height: auto;
      border-radius: 15px;
    }
    canvas {
      position: absolute;
      top: 0;
      left: 0;
      pointer-events: none;
      border-radius: 15px;
    }
    #expression {
      margin-top: 20px;
      font-size: 1.75rem;
      font-weight: 600;
      padding: 12px 25px;
      border-radius: 35px;
      background: rgba(255 255 255 / 0.2);
      box-shadow: 0 0 10px rgba(255 255 255, 0.3);
      user-select: none;
      min-width: 200px;
      text-align: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-transform: capitalize;
      letter-spacing: 0.05em;
      transition: background-color 0.3s ease;
    }
    #expression.happy {
      background-color: #ffd700aa;
      box-shadow: 0 0 15px #ffd700cc;
      color: #444;
    }
    #expression.sad {
      background-color:rgba(237, 244, 251, 0.67);
      box-shadow: 0 0 15pxrgba(86, 91, 96, 0.8);
      color: #fff;
    }
    #expression.angry {
      background-color: #ff4500aa;
      box-shadow: 0 0 15px #ff4500cc;
      color: #fff;
    }
    #expression.surprised {
      background-color: #ff69b4aa;
      box-shadow: 0 0 15px #ff69b4cc;
      color: #fff;
    }
    #expression.neutral {
      background-color: #808080aa;
      box-shadow: 0 0 15px #808080cc;
      color: #fff;
    }
  </style>
</head>
<body>
  <h1>FACE DETECTION</h1>
  <div id="videoContainer">
    <video id="video" autoplay muted playsinline></video>
    <canvas id="overlay"></canvas>
  </div>
  <div id="expression">Loading models and starting camera...</div>

  <!-- Load face-api.js first -->
  <script src="https://unpkg.com/face-api.js@0.22.2/dist/face-api.min.js"></script>

  <!-- Load your custom script AFTER face-api.js -->
  <script src="script.js"></script>
</body>
</html>