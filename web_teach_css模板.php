<!DOCTYPE html>
<head>

</head>
<style>
    body.white-theme {
      background-color: #ffffff;
      color: #000000;
      font-family: 'Architects Daughter', cursive;
      height:auto;
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
      font-family: 'Architects Daughter', cursive;
      height:auto;
    }  
    .big-h1{
        font-size: 50px;
    }
    .div-1{
        border:#000000;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.7);
        padding:20px ;
    }
    .div-1-li{
        transform: scale(1);
    }
    .div-1-li:hover{
        transform: scale(1);
        background-color:#000000;
    }
   
</style>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<center><h1>階層樣式表 (Cascading Stylesheets；CSS)</h1></center><br>
為html的物件做美編，客製化自己的網站<br>
例如設定字體、顏色、大小等等<br>
將html物件設計成自己喜歡的樣子<br>

<h1 class="big-h1">寫法：</h1>
<div class="div-1">
   <ul>
      
      <li>
        直接寫在html標頭中：<br><br>
        <div >
        &lt;div width="80%" height="auto" style="background-color:blue;"&gt;&lt;/div&gt;
        </div>
        <br><br>
        這是比較簡單的作法，但這種寫法效率較差
      </li>
  
      <hr>
      
      <li>
        使用選擇器(class或id)：<br>
        首先，請為html物件設定一個class或id值(建議用class)，寫法如下<br><br>
        <div >
        &lt;div class="div-style-1"&gt;這是個容器&lt;/div&gt;
        </div><br><br>

        「div-style-1」可以當作是我們為物件取的「名字」(也可以取其他名字)，等一下要用這個名字來接取CSS屬性<br><br>
        接著，請在body標籤以外的地方創造出style標籤，通常會放在head標籤和body的中間<br><br>
        接著，請利用剛剛為html物件取的名字，針對各個名字來宣告他的CSS屬性，寫法如下：<br><br>
        .div-style-1{<br>&nbsp;&nbsp;width:80%;<br>&nbsp;&nbsp;height:auto;<br>&nbsp;&nbsp;background-color:blue;<br>}<br><br>
        (如果用的是id，請將「.」改成「#」,且要注意個id只能給一個物件使用)<br>
        這樣我們的div就會套用名稱為「div-style-1」的CSS屬性<br><br>

        完整程式碼如下：<br><br>
        &lt;!DOCTYPE html&gt;<br>
        &lt;head&gt;<br>&nbsp;&nbsp;&lt;title&gt;這是網頁上方的標題&lt;/title&gt;<br>
        &nbsp;&nbsp;&lt;meta&nbsp;charset="UTF-8"&gt;<br>
        &nbsp;&nbsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br>
        &lt;/head&gt;<br>
        &lt;style&gt;<br>&nbsp;&nbsp;.div-style-1{<br>&nbsp;&nbsp;&nbsp;&nbsp;width:80%;<br>&nbsp;&nbsp;&nbsp;&nbsp;height:auto;<br>&nbsp;&nbsp;&nbsp;&nbsp;background-color:blue;<br>&nbsp;&nbsp;}<br>&lt;/style&gt;<br>
        &lt;body&gt;<br>&nbsp;&nbsp;&lt;div class="div-style-1"&gt;這是個容器&lt;/div&gt;<br>&lt;/body&gt;
        <br><br>
      </li>
      <hr>
      <li>
        從外部匯入CSS檔案：<br><br>
        將CSS寫在一個專門的CSS檔案(.css)中，然後再用link標籤連接這個檔案，寫法如下：<br><br>
        &lt;link href="(CSS檔案路徑)" rel="stylesheet"&gt;<br><br>
        這種作法一樣會用到CSS選擇器<br><br>

        可輸入「link：css」，快速生成
        &lt;link rel="stylesheet" href="style.css"&gt;
      </li>
  
   </ul>
</div><br><br>
<h1 class="big-h1">常用屬性：</h1>
<div class="div-1">
   <dl>
     <dt>width&nbsp;和&nbsp;height：</dt>
       <dd>
       &nbsp;&nbsp;定義物件的寬度和高度，可使用px、cm等單位或是%<br><br>
       
     </dd>
     <dt>background-color：</dt>
       <dd>
       &nbsp;&nbsp;定義物件的背景顏色<br><br>
       
     </dd>
     <dt>background-image&nbsp;或&nbsp;background：</dt>
       <dd>
       &nbsp;&nbsp;定義背景圖片<br><br>
       
     </dd>
     <dt>color：</dt>
       <dd>
       &nbsp;&nbsp;定義物件內的文字顏色<br><br>
       
     </dd>
     <dt>font-size：</dt>
       <dd>
       &nbsp;&nbsp;定義物件內文字大小<br><br>
       
     </dd>
     <dt>font-family：</dt>
       <dd>
       &nbsp;&nbsp;定義物件內的文字字型<br><br>
       &nbsp;&nbsp;標楷體：DFKai-sb<br>
       &nbsp;&nbsp;fantasy font：fantasy<br>
       &nbsp;&nbsp;微軟正黑體：Microsoft JhengHei<br><br>
       &nbsp;&nbsp;也可以自行下載字體來做使用<br><br>
       
     </dd>
     <dt>margin和padding：</dt>
       <dd>
       &nbsp;&nbsp;控制元素周圍空間，可使用px、cm等單位或是%<br><br>
       &nbsp;&nbsp;margin：控制外邊距<br>
       &nbsp;&nbsp;padding：控制內邊距<br><br>
       <a href="https://www.wibibi.com/info.php?tid=CSS_box_model_%E7%9B%92%E5%AD%90%E6%A8%A1%E5%9E%8B" alt="連結無法顯示" target="_blank"> model的介紹</a><br><br>
       
     </dd>
     <dt>colspan：</dt>
       <dd>
       &nbsp;&nbsp;合併表格，可選擇要合併的格數<br>
       &nbsp;&nbsp;colspan="3"<br><br>
       
     </dd>
     <dt>text-align：</dt>
       <dd>
       &nbsp;&nbsp;定義物件內的文字水平對齊<br><br>
       
     </dd>
     <dt>border-radius：</dt>
       <dd>
       &nbsp;&nbsp;定義物件的邊角圓弧效果，可使用px等單位或是%<br><br>
       &nbsp;&nbsp;border-radius：10px;&nbsp;或是&nbsp;border-radius：10px 5px 10px 5px；<br><br>
       &nbsp;&nbsp;後面的寫法可以針對四個角分別做不同弧度的設定<br><br>
       
     </dd>
     <dt>box-shandow：</dt>
       <dd>
       &nbsp;&nbsp;定義物件的陰影效果<br><br>
       &nbsp;&nbsp;box-shadow：(水平偏移量) (垂直偏移量) (模糊程度) (陰影顏色)；<br><br>
     </dd>
     <dt>overflow：</dt>
       <dd>
       &nbsp;&nbsp;定義元素超過某個範圍的時候該如何呈現<br><br>
       &nbsp;&nbsp;overflow：auto；&nbsp;&nbsp;&nbsp;預設值，自動產生卷軸<br>
       &nbsp;&nbsp;overflow：visible；&nbsp;&nbsp;&nbsp;顯示的文字或圖片會直接超出範圍，不使用捲軸<br>
       &nbsp;&nbsp;overflow：hidden；&nbsp;&nbsp;&nbsp;自動隱藏超出的文字或圖片<br>
       &nbsp;&nbsp;overflow：scroll；&nbsp;&nbsp;&nbsp;自動產生捲軸<br><br>
       
     </dd>
     <dt>display：</dt>
       <dd>
       &nbsp;&nbsp;定義網頁元素的顯示類型<br>&nbsp;&nbsp;HTML元素本身的顯示類型就是預設的，而且每一種不同的元素都會有自己的預設值<br>
       &nbsp;&nbsp;常見的顯示類型有「區塊元素」與「內行元素」，常用為block和inline屬性<br><br>
       &nbsp;&nbsp;display：block；&nbsp;&nbsp;區塊元素<br>
       &nbsp;&nbsp;display：inline；&nbsp;&nbsp;內行元素<br><br>

       <span style="display:block;background-color:blue;">這段文字是區塊元素</span>
       <div style="display:inline;background-color:chartreuse;">這個 DIV 區塊被設定為內行元素</div><br><br>
     </dd>
     <dt> list-style-image:：</dt>
       <dd>
       &nbsp;&nbsp;定義列表開頭的圖示<br><br>
       &nbsp;&nbsp; list-style-image：url('圖片路徑')；<br><br>
       
     </dd>
     <dt>background-attachment：</dt>
       <dd>
       &nbsp;&nbsp;決定背景圖片是否要跟著滑鼠滾動而上下移動<br><br>
       &nbsp;&nbsp;scroll	&nbsp;&nbsp;預設值，背景圖片會隨著滑鼠滾動而上下移動<br>
       &nbsp;&nbsp;fixed	&nbsp;&nbsp;背景圖片固定不動，滑鼠上下滾動僅會移動網頁主體<br><br>
     </dd>
     <dt>border-width：</dt>
       <dd>
       &nbsp;&nbsp;設定邊框寬度<br><br>
       
     </dd>
     <dt>opacity：</dt>
       <dd>
       &nbsp;&nbsp;設定物件透明度<br><br>
       &nbsp;&nbsp;opacity：0.5；&nbsp;&nbsp;設定透明度為50%<br><br>
       
     </dd>
     <dt>linear-gradient：</dt>
       <dd>
       &nbsp;&nbsp;設定線性漸層色<br><br>
       &nbsp;&nbsp;linear-gradient(to right, #ffcc00, #ff6600)；<br>&nbsp;&nbsp;呈現從黄色（#ffcc00）到橙色（#ff6600）的水平線性漸層<br><br>
       
     </dd>
     <dt>radial-gradient：</dt>
       <dd>
       &nbsp;&nbsp;設定線性漸層色<br><br>
       &nbsp;&nbsp;radial-gradient(circle, #33ccff, #0099cc)；<br>&nbsp;&nbsp;呈現從淺藍色（#33ccff）到深藍色（#0099cc）的圓形漸層<br><br>
       
     </dd>
   </dl>
</div>
<br><br>
<h1 class="big-h1">顏色編碼：</h1>
<div class="div-1">
<ul>
    <li>
    十六進制碼（Hex Code）：<br> 使用6個字符的十六進制數字，表示RGB（紅綠藍）顏色<br>例如，#FF0000代表紅色<br><br>
    </li>
    <li>
    RGB值（Red, Green, Blue）：<br>使用三個整數值（範圍在0到255之間），表示紅、綠、藍的強度<br>例如，rgb(255, 0, 0)也代表紅色<br><br>
    </li>
    <li>
    RGBA值（Red, Green, Blue, Alpha）：<br>與RGB相似，但多了一個表示透明度的值（範圍在0到1之間）<br>例如，rgba(255, 0, 0, 0.5)表示半透明的紅色<br><br>
    </li>
    <li>
    色名：<br> 一些顏色有它們的名稱，例如"red"、"blue"等，這種表示法通常不太精確<br><br>
    </li>
</ul>
<a href="https://www.ifreesite.com/color/" target="block">色碼表資源</a>
</div>
<br><br>
<h1 class="big-h1">Bootstrap template：</h1>
<div class="div-1">
    把別人做好的模板拿來套用<br>
    無需從頭開始設計和開發每一個元素<br>
    提供了一系列的預先設計的元件、樣式和佈局工具，以快速搭建具有響應式設計的現代網頁<br>
    <a href="https://bootdey.com/" target="block">簡單的模板</a>
</div>

</body>