window.onload = function() {
  const video = document.getElementById('video');
  const canvas = document.getElementById('overlay');
  const expressionLabel = document.getElementById('expression');
  let displaySize;

  async function setupCamera() {
    try {
      const stream = await navigator.mediaDevices.getUserMedia({ video: { width: 640, height: 480 } });
      video.srcObject = stream;
      return new Promise((resolve) => {
        video.onloadedmetadata = () => {
          video.play();
          console.log('Camera started');
          resolve();
        };
      });
    } catch (error) {
      console.error('Error accessing webcam:', error);
      expressionLabel.textContent = 'Error accessing webcam: ' + error.message;
      throw error;
    }
  }

  async function loadModels() {
    const MODEL_URL = 'https://justadudewhohacks.github.io/face-api.js/models/';
    try {
      await faceapi.nets.tinyFaceDetector.loadFromUri(MODEL_URL);
      console.log('tinyFaceDetector model loaded');
      await faceapi.nets.faceExpressionNet.loadFromUri(MODEL_URL);
      console.log('faceExpressionNet model loaded');
    } catch (error) {
      console.error('Error loading models:', error);
      expressionLabel.textContent = 'Error loading models: ' + error.message;
      throw error;
    }
  }

  function getDominantExpression(expressions) {
    let maxProb = 0;
    let dominant = 'neutral';
    for (const [expression, prob] of Object.entries(expressions)) {
      if (prob > maxProb) {
        maxProb = prob;
        dominant = expression;
      }
    }
    return dominant;
  }

  function updateExpressionLabel(expression) {
    expressionLabel.textContent = expression;
    expressionLabel.className = ''; // Reset classes
    if (['happy', 'sad', 'angry', 'surprised', 'neutral'].includes(expression)) {
      expressionLabel.classList.add(expression);
    }
  }

  async function start() {
    try {
      expressionLabel.textContent = 'Loading models...';
      await loadModels();
      expressionLabel.textContent = 'Models loaded. Starting camera...';
      await setupCamera();

      displaySize = { width: video.videoWidth, height: video.videoHeight };
      canvas.width = displaySize.width;
      canvas.height = displaySize.height;

      const context = canvas.getContext('2d');
      const options = new faceapi.TinyFaceDetectorOptions();

      async function detect() {
        const detections = await faceapi
          .detectAllFaces(video, options)
          .withFaceExpressions();

        context.clearRect(0, 0, canvas.width, canvas.height);

        if (detections.length > 0) {
          detections.forEach(detection => {
            const box = detection.detection.box;
            const expressions = detection.expressions;
            const dominantExpression = getDominantExpression(expressions);

            context.strokeStyle = '#00ff00';
            context.lineWidth = 3;
            context.strokeRect(box.x, box.y, box.width, box.height);

            context.fillStyle = '#00ff00';
            context.font = '20px Segoe UI, Tahoma, Geneva, Verdana, sans-serif';
            context.fillText(dominantExpression, box.x + 5, box.y - 10);

            updateExpressionLabel(dominantExpression);
          });
        } else {
          updateExpressionLabel('No face detected');
        }

        requestAnimationFrame(detect);
      }

      detect();
    } catch (err) {
      console.error('Initialization error:', err);
      expressionLabel.textContent = 'Error: ' + err.message;
    }
  }

  start();
};