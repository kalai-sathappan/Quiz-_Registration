<?php include("header.html")
?>  
<head> 
<style> 
.service { 
	margin-right: auto;
	margin-left: auto; 
	height: 500px;
	width: 1000px;
} 
th{
font-size:24px;}
td{
font-size:18px;
text-align:center;}
tr:nth-child(odd){
background-color:#1E90FF;}
tr:nth-child(even){
background-color:#90EE90 ;}
th:hover{
color:#A52A2A;}
td:hover{
background-color:#ADD8E6;}
</style> 
</head>
<body>  
<div class="service"> 
<table border="2px solid black" height="500px" width="1000px">
<tr>
<th>S.No</th>
<th>NAME</th>
<th>DEPT<th>
</tr>
<tr>
<td>1</td>
<td>Abi</td>
<td>IT</td>
</tr>
<tr>
<td>2</td>
<td>Arun</td>
<td>ECE</td>
</tr>
</table>




<?php include("footer.html")
?> 
