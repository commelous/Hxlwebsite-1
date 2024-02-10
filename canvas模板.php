<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>利用javascript做出繪圖板</title>
  <style>
    body.white-theme {
      background-color: #ffffff;
      color: #000000;
      font-family: 'Architects Daughter', cursive; 
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
      font-family: 'Architects Daughter', cursive;
    }
    canvas {
      border: 1px solid #000;
    }

    #eraserContainer {
      display: flex; 
      align-items: center; 
    }

    #eraserMode {
      width: 20px; 
      height: 20px; 
    }
    .div-obj{
        display: flex; 
      align-items: center; 
    }
    .download_btn{
        margin-bottom:20px;
        width:100%;
        height:50px;
        background-color: #000;
        color:white;
    }
    .img-input{
        width:30% !important;
        height:30px !important;
        display: flex; 
        align-items: center; 

    }
    .arrow-btn {
        font-size: 24px; /* 根据需要调整箭头图示的大小 */
    }
  </style>
</head>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
  <input type="file" id="imageInput" accept="image/*" class="img-input" ><br>
  <canvas id="myCanvas" width="1100" height="700" style="background-color:#ffffff;"></canvas><br><br>

  <label for="brushSize">筆刷大小:</label>
  <input type="range" id="brushSize" min="1" max="20" value="5" style="width: 400px;"><br>

  <label for="brushColor">筆刷顏色:</label>
  <input type="color" id="brushColor" value="#000000"><br>

  <div id="eraserContainer">
    <h1>橡皮擦</h1>&nbsp;
    <input type="checkbox" id="eraserMode" style="width: 30px !important; height: 30px !important;">
  </div><br>
  
  <br>
  <button id="clearButton"  onclick="clearCanvas()" style="color:#000;">清除畫布</button>
  <button id="shapeButton"  onclick="drawShape()" style="color:#000;">繪製形狀</button>
  <button id="textButton"  onclick="drawText()" style="color:#000;">添加左下角簽名</button><br><br>
  <button id="undoButton" class="arrow-btn" aria-label="回到上一步" style="color:#000;">&#x2190;</button><br><br>
  <button id="saveButton" class="download_btn">保存圖片</button>



  <script>
   var canvas = document.getElementById('myCanvas');
    var context = canvas.getContext('2d');
    var painting = false;
    var drawingEnabled = true; 
    var imageLoaded = false;
    var lastX, lastY;
    var eraserMode = false;
    var images = []; 
    var isDragging = false; 
    var dragImage = null; 
    var offsetX, offsetY; 
    var scale = 1; 
    var undoStack = []; // 存储画布状态的数组

    document.getElementById('imageInput').addEventListener('change', function(e) {
      handleImageUpload(e);
      loadImage(e);
    });

    document.getElementById('brushSize').addEventListener('input', updateBrushSize);
    document.getElementById('brushColor').addEventListener('input', updateBrushColor);

    document.getElementById('eraserMode').addEventListener('change', toggleEraserMode);
   
    document.getElementById('saveButton').addEventListener('click', saveImage);
    document.getElementById('undoButton').addEventListener('click', undo); 

    
    

    var brushSize = 5;
    var brushColor = '#000000';

    function loadImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
      var img = new Image();
      img.onload = function () {
        
        var originalWidth = img.width;
        var originalHeight = img.height;

       
        var scaleFactor = Math.min(canvas.width / originalWidth, canvas.height / originalHeight);
        var newWidth = originalWidth * scaleFactor;
        var newHeight = originalHeight * scaleFactor;

        var startX = (canvas.width - newWidth) / 2;
        var startY = (canvas.height - newHeight) / 2;

        context.drawImage(img, startX, startY, newWidth, newHeight);
        imageLoaded = true;
        saveState(); // 保存初始状态到数组
      };
      img.src = event.target.result;
    };
    reader.readAsDataURL(e.target.files[0]);
  }

    function updateBrushSize(e) {
      brushSize = parseInt(e.target.value);
    }

    function updateBrushColor(e) {
      brushColor = e.target.value;
    }

    function toggleEraserMode() {
      eraserMode = !eraserMode;
      if (eraserMode) {
        brushColor = '#ffffff';
      } else {
        brushColor = document.getElementById('brushColor').value;
      }
    }

    function saveState() {
      // 将当前画布状态保存到数组
      undoStack.push(context.getImageData(0, 0, canvas.width, canvas.height));
    }

    function undo() {
      // 回到上一步
      if (undoStack.length > 1) {
        undoStack.pop(); // 移除当前状态
        context.clearRect(0, 0, canvas.width, canvas.height);
        context.putImageData(undoStack[undoStack.length - 1], 0, 0);
      }
    }

  

function endPosition() {
  painting = false;
  saveState(); // 每次绘制完成后保存状态
  context.beginPath();
  lastX = null;
  lastY = null;
}

function draw(e) {
  if (!painting || !drawingEnabled) return;

  var rect = canvas.getBoundingClientRect();
  var scaleX = canvas.width / rect.width;
  var scaleY = canvas.height / rect.height;

  context.lineWidth = brushSize;
  context.lineCap = 'round';
  context.strokeStyle = brushColor;


  var x = (e.clientX - rect.left) * scaleX;
  var y = (e.clientY - rect.top) * scaleY;

  context.beginPath();

  if (lastX && lastY) {
    context.moveTo(lastX, lastY);
  }

  context.lineTo(x, y);
  context.stroke();

  lastX = x;
  lastY = y;

  saveState(); // 在每次绘制时保存状态
}

function startPosition(e) {
  if (!drawingEnabled) return;

  painting = true;
  draw(e);
}

function handleImageUpload(e) {
  loadImage(e);
}

function handleMouseUp() {
  if ((!isDragging && !painting) || !drawingEnabled) return; 

  isDragging = false;
  dragImage = null;
}

function handleMouseMove(e) {
  if ((!isDragging && !painting) || !drawingEnabled) return; 

  var mouseX = e.clientX - canvas.getBoundingClientRect().left;
  var mouseY = e.clientY - canvas.getBoundingClientRect().top;

  dragImage.x = mouseX - offsetX;
  dragImage.y = mouseY - offsetY;

  drawImages();
}

function handleMouseWheel(e) {
  if (isDragging || !drawingEnabled) return;
  e.preventDefault();
  var delta = e.deltaY * -0.01;
  dragImage.scale += delta;
  if (dragImage.scale < 0.1) dragImage.scale = 0.1;
  if (dragImage.scale > 3) dragImage.scale = 3;
  drawImages();
}

function drawImages() {
  context.clearRect(0, 0, canvas.width, canvas.height);

  for (var i = 0; i < images.length; i++) {
    var image = images[i];
    context.drawImage(image.image, image.x, image.y, image.image.width * image.scale, image.image.height * image.scale);
  }
}

function saveImage() {
  var dataURL = canvas.toDataURL('image/jpeg');
  var a = document.createElement('a');
  a.href = dataURL;
  a.download = 'hxlwebsite_canvas_image.jpg';
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
}



function clearCanvas() {
      context.clearRect(0, 0, canvas.width, canvas.height);
      undoStack = []; 
}

function drawShape() {
      
      context.fillStyle = brushColor;
      context.fillRect(50, 50, 100, 100); 
      saveState();
}

function drawText() {
      
      var text = prompt("請輸入文本");
      if (text) {
        context.fillStyle = brushColor;
        context.font = "20px Arial";
        context.fillText(text, canvas.width * 0.05, canvas.height * 0.95);
        saveState();
      }
}




// 添加事件监听器
canvas.addEventListener('mousedown', startPosition);
canvas.addEventListener('mouseup', endPosition);
canvas.addEventListener('mousemove', draw);
canvas.addEventListener('mousedown', handleMouseDown);
canvas.addEventListener('mouseup', handleMouseUp);
canvas.addEventListener('mousemove', handleMouseMove);
canvas.addEventListener('wheel', handleMouseWheel);

</script>
</body>
</html>
