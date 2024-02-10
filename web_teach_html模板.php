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
    .big-p{
        font-size: 80px;
    }
    table.white-theme, table.white-theme td {
    border: 5px solid #000000 !important;
}
    table {
            border-collapse: collapse; 
            width: 100%;
        }

        td.white-theme {
            border: 5px solid #000000; 
            padding: 10px; 
        }
        td {
            border: 5px solid #ffffff; 
            padding: 10px; 
        }

        .col1 {
            width: 20%; 
            
        }

        .col2 {
            width: 40%;
        }
        .col3{
            width: 40%;
        }
        .text-center{
            text-align: center;
        }
        .shadow-table{
            border:#000000;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.7);
            padding:20px ;
        }
        .ex-img{
            transform: scale(1);
        }
        .ex-img:hover{
            transform: scale(1.9);
            box-shadow: 10px 0 10px rgba(200, 0, 0, 1.0),
                         0 10px 10px rgba(200, 0, 0, 1.0),
                         -10px 0 10px rgba(200, 0, 0, 1.0),
                         0 -10px 10px rgba(200, 0, 0, 1.0);
        }
</style>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<center><h1>HTML(HyperText Markup Language，超文本標記語言)</h1></center><br>
是打造網頁的基石，它表述並定義網頁的內容，用來生成網頁上的物件<br>
html是由一個一個的標籤所組成的<br>
大部分標籤是由一個標頭和一個標尾所組成，如下：<br>
<p class="big-p">&lt;標籤&gt;&lt;/標籤&gt;</p><br><br>

<li>html文件架構快速生成：<br>
在空的html文件中輸入html，然後選擇「html5」，就會自動產生一個html的基本架構<br>
包含!DOCTYPE、head及body標籤<br><br>
</li>
標籤有很多種，以下是常用的標籤種類：
<div class="shadow-table">
<table border="1" class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
        <colgroup>
            <col class="col1">
            <col class="col2">
            <col class="col3">
        </colgroup>
    <thead>
        <tr>
            <td>標籤名稱</td>
            <td>介紹</td>
            <td>呈現</td>
        </tr>
    </thead>
    <tbody>
       <tr>
          <td class="text-center">h1到6</td>
          <td>標題由大到小</td>
          <td><h1>h1標題</h1><h2>h2標題</h2><h3>h3標題</h3><h4>h4標題</h4><h5>h5標題</h5><h6>h6標題</h6></td>
       </tr>
       <tr>
          <td class="text-center">head</td>
          <td>定義HTML文檔的頭部部分，它包含了一些元訊息和對其他資源的引用，而這些訊息並不直接顯示在瀏覽器中</td>
          <td>--</td>
       </tr>
       <tr>
          <td class="text-center">body</td>
          <td>定義HTML文本的部分，裡面的內容會呈現於畫面上</td>
          <td>--</td>
       </tr>
       <tr>
          <td class="text-center">p</td>
          <td>段落文字</td>
          <td><p>這是p標籤的文字</p></td>
       </tr>
       <tr>
          <td class="text-center">img</td>
          <td>插入圖片，請在標頭中加入src="(圖片連結或位置)"</td>
          <td><img src="picture\0073YlnVgy1hj6h8s89sfj30rs0elk3m.jpg" alt="圖片無法顯示" width="50%" style="margin:20px;" class="ex-img"></td>
       </tr>
       <tr>
          <td class="text-center">a</td>
          <td>產生超連結<br>再標頭內加入<br>href="(頁面連結)"<br>然後請在標籤中放入文字</td>
          <td><a href="http://rsr.dsa.fju.edu.tw/#&panel1-1" target="block">輔仁大學資源教室</a></td>
       </tr>
       <tr>
          <td class="text-center">iframe</td>
          <td>插入youtube影片，請在標頭中加入<br>src="(影片連結或位置)"<br>連結格式為：<br>https://www.youtube.com/embed/影片id<br></td>
          <td><iframe width="560" height="315" src="https://www.youtube.com/embed/gggSATrQBdo" frameborder="0" allowfullscreen></iframe></td>
       </tr>
       <tr>
          <td class="text-center">style</td>
          <td>請在裡面放入CSS的內容，並搭配選擇器作使用</td>
          <td>---</td>
       </tr>
       <tr>
          <td class="text-center">script</td>
          <td>請在裡面放入javascript的內容，並搭配選擇器作使用</td>
          <td>---</td>
       </tr>
       <tr>
          <td class="text-center">br</td>
          <td>換一行</td>
          <td>大家好<br>這裡是換行</td>
       </tr>
       <tr>
          <td class="text-center"> & nbsp ;</td>
          <td>空格,要用時要寫在一起</td>
          <td>&nbsp;空一格&nbsp;空一格&nbsp;&nbsp;空兩格&nbsp;</td>
       </tr>
       <tr>
          <td class="text-center">ul</td>
          <td>無順序列表，請配合li使用：<br>&lt;ul&gt;<br>&lt;li&gt;咒術迴戰&lt;/li&gt;<br>&lt;li&gt;間諜家家酒&lt;/li&gt;<br>&lt;li&gt;死神&lt;/li&gt;<br>&lt;/ul&gt;</td>
          <td>
            <ul>
                <li>咒術迴戰</li>
                <li>間諜家家酒</li>
                <li>死神</li>
            </ul>
          </td>
       </tr>
       <tr>
          <td class="text-center">ol</td>
          <td>有順序的列表，請搭配li使用</td>
          <td>
             <ol>
               <li>咒術迴戰</li>
               <li>間諜家家酒</li>
               <li>死神</li>
             </ol>
          </td>
       </tr>
       <tr>
          <td class="text-center">table</td>
          <td>表格，這張表格就是用table寫的</td>
          <td>
               <table>
                  <tr>
                    <td>座號</td>
                    <td>姓名</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>克雷多斯</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>奧丁</td>
                  </tr>
               </table>
          </td>
       </tr>
       <tr>
          <td class="text-center">form</td>
          <td>表單，搭配input、textarea、select等物件做使用，可以製作一個給使用者填寫的表單，並將表單內容傳送至後端程式碼做處理</td>
          <td>---</td>
       </tr>
       <tr>
          <td class="text-center">input</td>
          <td>輸入欄位，配合不同的type屬性而有多種形式</td>
          <td><input type="text" style="color:#000000;"><br><input type="date" style="color:#000000;"><br><input type="submit" style="color:#000000;"></td>
       </tr>
       <tr>
          <td class="text-center">button</td>
          <td>按鈕</td>
          <td><button style="color:#000000;">按一下</button></td>
       </tr>
       <tr>
          <td class="text-center">div</td>
          <td>形成容器(container)，將 HTML 文件的內容整理出不同獨立區塊 (block)，用途是方便給 CSS 做樣式排版或方便給 JavaScript 做互動操作，在這裡將div的背景色設置為紫色</td>
          <td><div margin="10px;" style="background-color:blueviolet;">這是一個區塊</div></td>
       </tr>
       <tr>
          <td class="text-center">hr</td>
          <td>水平線</td>
          <td><hr></td>
       </tr>
       <tr>
          <td class="text-center">iframe</td>
          <td>內嵌框架 (內聯框架)，用來在一個 HTML 網頁裡面嵌入另外一個 HTML 網頁<br>在標頭中放入：<br>src="(連結)"</td>
          <td>
            ---
          </td>
       </tr>
       <tr>
          <td class="text-center">& lt ; & gt ;</td>
          <td>使得html程式碼可以當成純文字輸出，使用時要寫在一起</td>
          <td>&lt;div style="color:black;"&gt;純文字輸出&lt;/div&gt;</td>
       </tr>
       <tr>
          <td class="text-center">center</td>
          <td>物件水平置中</td>
          <td><center>中間</center></td>
       </tr>
    </tbody>
    
</table>
</div>
<br><br><br><br>
<div style="position:relative;right:0%;" width="1000px" height="auto;">

</div>






</body>