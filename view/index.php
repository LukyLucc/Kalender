<!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com ) -->
<html>

<head>
  <meta charset="UTF-8">
  <title>HTML CSS JavaScript Calender | Webdevtrick.com</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="../style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  
    <body onload="init()">
    <div class="kalender-container">
        <div class="button-slider-container">
            <h3 class="month" id="month"> </h3>
            <button onclick="nextMonth()" class="button-month-right button-month text fa fa-chevron-right" id="Right1"> </button>
            <button onclick="prevMonth()" class="button-month-left button-month text fa fa-chevron-left" id="Left1"> </button>
        </div>
        <table style="width:100%; margin-top: 30px; padding-bottom: 12px; border-collapse: collapse;" id="tabel">
            <thead class="weekdays">
                <th>Mo</th>
                <th>Di</th>
                <th>Mi</th>
                <th>Do</th>
                <th>Fr</th>
                <th>Sa</th>
                <th>So</th>
            </thead>
            <tbody class="table">
                <tr data-row="0">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr data-row="1">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <trdata-row="2">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr data-row="3">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr data-row="4">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr data-row="5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
              </tbody>
            </table>
        </table>
    </div>
</body>
<script  src="../javascript/function.js"></script>
</html>