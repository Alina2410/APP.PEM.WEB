<!DOCTYPE html>
<html>
<head>
<title>Pemakaian Operator Aritmatika dalam PHP</title>
</head>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #DB7093;
      }
    table {
      border: solid 1px #DB7093;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DB7093;
        border: solid 1px #DB7093;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DB7093;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #DB7093;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>

<body bgcolor="#D3D3D3">
<form method="post" action="Oparitmatika.php">
<h2>Operator Aritmatika</h2>
<table width="50%" border="1">
<tr>
<td width="30%">
<div align="center">Operand Kiri</div>
</td>
<td width="20%">
<div align="center">Operator</div>
</td>
<td width="30%">
<div align="center">Operand Kanan</div>
</td>
<td>
<div align="center"&nbsp;</div>
</td>
</tr>
<tr>
<td>
<div align="center">
<input type="text" name="operand1" size="10">
</div>
</td>
<td>
<div align="center">
<select name="operator">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
</div>
</td>
<td>
<div align="center">
<input type="text" name="operand2" size="10">
</div>
</td>
<td>
<div align="center">
<input type="submit" name="hitung" value="hitung">
</div>
</td>
</tr>
</table>
</form>
</body>
</html>


