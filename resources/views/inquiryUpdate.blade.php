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
<h1>Inquiry</h1>
<div class="row">
<div class="col-md-12">

    <form method="POST" action="/updateInq">
        {{csrf_field()}}

    <div class="form-group row">
    <label for="Inquirytitle" class="col-sm-2 col-form-label">Inquiry title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inquiry_title" value="{{$data['inquiry']->inqTitle}}" disabled="disabled">
    </div>
    </div>

    <div class="form-group row">
    <label for="CustomerName" class="col-sm-2 col-form-label">Customer Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="customer_Name" value="{{$data['customer']->cFname}} {{$data['customer']->cLname}}" disabled="disabled">
    </div>
    </div>

    <div class="form-group row">
    <label for="CustomerEmail" class="col-sm-2 col-form-label">Customer Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="customer_Email" value="{{$data['customer']->cEmail}}" disabled="disabled">
    </div>
    </div>

    <div class="form-group row">
    <label for="CustomerPhone" class="col-sm-2 col-form-label">Customer Phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="customer_Phone" value="{{$data['customer']->cTelNo}} {{$data['customer']->cMobno}}" disabled="disabled">
    </div>
    </div>

    <div class="form-group row">
    <label for="CustomerAddress" class="col-sm-2 col-form-label">Customer Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="customer_Address" value="{{$data['customer']->cAddress}},{{$data['customer']->cStreet}},{{$data['customer']->cCity}}" disabled="disabled">
    </div>
    </div>

    <div class="form-group row">
    <label for="SubmittedOn" class="col-sm-2 col-form-label">Submitted On</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" name="inq_submit" value="{{$data['inquiry']->submitDate}}" disabled="disabled">
    </div>
    </div> 

    <div class="form-group row">
    <label for="Cloasing on" class="col-sm-2 col-form-label">Cloasing on</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" name="inq_finish" value="{{$data['inquiry']->cloasingDate}}"   required>
    </div>
    </div>


<table class="table table-borderless">
 <th>products</th>
 <th>quantity</th>
 <th>industry</th>
 

 <tr><td>  <input type="text" class="form-control" name="pro1" value="{{$data['product'][0]->proName}}" required></td>
 <td>  <input type="number" class="form-control" name="quan1" min="1" value="{{$data['product'][0]->qty}}" required></td>
 <td>  <select type="text" class="form-control" name="ind1" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select>
 </td>
 </tr>

 <tr><td>  <input type="text" class="form-control" name="pro2" value="{{$data['product'][1]->proName}}"  required></td>
 <td>  <input type="number" class="form-control" name="quan2" min="1" value="{{$data['product'][1]->qty}}" required></td>
 <td>  <select type="text" class="form-control" name="ind2" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select></td>
 </tr>

 <tr><td>  <input type="text" class="form-control" name="pro3" value="{{$data['product'][2]->proName}}" required></td>
 <td>  <input type="number" class="form-control" name="quan3" min="1" value="{{$data['product'][2]->qty}}" required></td>
 <td>  <select type="text" class="form-control" name="ind3" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select></td>
 </tr>

 <tr><td>  <input type="text" class="form-control" name="pro4" value="{{$data['product'][3]->proName}}" required></td>
 <td>  <input type="number" class="form-control" name="quan4" min="1" value="{{$data['product'][3]->qty}}" required></td>
 <td>  <select type="text" class="form-control" name="ind4" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select></td>
 </tr>

 <tr><td>  <input type="text" class="form-control" name="pro5" value="{{$data['product'][4]->proName}}" required></td>
 <td>  <input type="number" class="form-control" name="quan5" min="1" value="{{$data['product'][4]->qty}}" required></td>
 <td>  <select type="text" class="form-control" name="ind5" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select></td>
 </tr>

 

</table>

<input type="hidden" name="cus_id" value="{{$data['customer']->cusid}}" />
<input type="hidden" name="inqu_id" value="{{$data['inquiry']->inquiryid}}" />

<input type="hidden" name="pro1_id" value="{{$data['product'][0]->proid}}" />
<input type="hidden" name="pro2_id" value="{{$data['product'][1]->proid}}" />
<input type="hidden" name="pro3_id" value="{{$data['product'][2]->proid}}" />
<input type="hidden" name="pro4_id" value="{{$data['product'][3]->proid}}" />
<input type="hidden" name="pro5_id" value="{{$data['product'][4]->proid}}" />

<input type="submit" class="btn btn-warning" value="Update">

</body>
</html>