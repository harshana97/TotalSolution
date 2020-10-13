<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    
<div class="content">

<div class="container">
<div class="text-center">
<h1>Total Solutions</h1>
<p>Tel No  - 0110000000</p>
<p>Address - Malabe road,Colombo</p>
<div class="row">
<div class="col-md-12">

<hr>

<pre>
Date   :{{$data['inquiry']->submitDate}}
Ref No :Ref00{{$data['inquiry']->inquiryid}}
</pre>

<h3>Client Infromation</h3>
<pre>
  Name          - {{$data['customer']->cFname}} {{$data['customer']->cLname}}                   
  Email         - {{$data['customer']->cEmail}}                      
  Telephone No1 - {{$data['customer']->cTelNo}}
  Telephone No2 - {{$data['customer']->cMobno}}
  Address       - {{$data['customer']->cAddress}},
                  {{$data['customer']->cStreet}},
                  {{$data['customer']->cCity}}
</pre>
 <br>
 <br>


 <hr>

<table>

<tr>
<th>Product ID</th>
<th>Product Name </th>
<th>Quantity</th>

</tr>

<tr>
<td>pref00{{$data['product'][0]->proid}}</td>
<td>{{$data['product'][0]->proName}}</td>
<td>{{$data['product'][0]->qty}}</td>
</tr>

<tr>
<td>pref00{{$data['product'][1]->proid}}</td>
<td>{{$data['product'][1]->proName}}</td>
<td>{{$data['product'][1]->qty}}</td>
</tr>

<tr>
<td>pref00{{$data['product'][2]->proid}}</td>
<td>{{$data['product'][2]->proName}}</td>
<td>{{$data['product'][2]->qty}}</td>
</tr>

<tr>
<td>pref00{{$data['product'][3]->proid}}</td>
<td>{{$data['product'][3]->proName}}</td>
<td>{{$data['product'][3]->qty}}</td>
</tr>

<tr>
<td>pref00{{$data['product'][4]->proid}}</td>
<td>{{$data['product'][4]->proName}}</td>
<td>{{$data['product'][4]->qty}}</td>
</tr>
</table>

<style>
/* tr.border_bottom td {
  border-bottom: 1px solid black;
} */

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
  text-align: center;
  border-bottom: 1px solid #ddd;
  font-family: "Times New Roman";
  font-size: 20px;
  
}

th{
  color:#2471A3;
  text-align: center;
  font-size: 22px;
}

h3{
  color:#2471A3  ;
  font-size: 22px;

}

pre{
  font-size: 20px;

}
</style>
</body>
</html>