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
<h1>New Inquiry</h1>
<div class="row">
<div class="col-md-12">

<form method="get" action="/viewCus" autocomplete="off" >
{{csrf_field()}}

<div class="form-group row" autocomplete="off" >
    <label for="customer" class="col-sm-2 col-form-label">Customer Name</label>
    <div class="col-sm-10">

      <input type="text" id="myInput" class="form-control" name="getCustomer"  placeholder="Type here " required>
    
    </div>
  </div>

  <!-- <button id="toggleVisibilityButton" onclick="viewCustomer()" type="submit" class="btn btn-warning">Enter</button> -->
  
    <input id="toggleVisibilityButton" onclick="viewCustomer()" type="submit" class="btn btn-warning" value="Enter">

</form>

<br>
</br>
<div id="displaytable" style="display:none">
<table class="table table-borderless">
@foreach($custo as $cus)
    <tr>
     <th>Customer name</th>
     <td>{{$cus->cFname}}{{$cus->cLname}}</td>

     </tr> 

     <tr>
     <th>Customer email</th>
     <td>{{$cus->cEmail}}</td>

     </tr> 


     <tr>
     <th>Customer Mobile</th>
     <td>{{$cus->cMobno}}</td>
     </tr> 

     <tr>
     <th>Customer Address</th>
     <td>{{$cus->cAddress}}{{$cus->cStreet}}{{$cus->cCity}}</td>
     </tr>     
     @endforeach
     

         

    </table>
  
 
</div>  



<form method="POST" action="/saveInq">
{{csrf_field()}}

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Inquiry title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inquiry_title"  required>
    </div>
  </div>


<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Publish on</label>
    <div class="col-sm-10">
<input type="date" class="form-control" name="inq_submit" required>
</div>
</div> 

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Finish on</label>
    <div class="col-sm-10">
<input type="date" class="form-control" name="inq_finish"  required>
</div>
</div>



<input type="hidden" name="cus_id" value="{{$cus->cusid}}" />
<input type="hidden" name="status" value="New" />







<table class="table table-borderless">
 <th>products</th>
 <th>quantity</th>
 <th>industry</th>
 


 <tr><td>  <input type="text" class="form-control" name="pro1" required></td>
 <td>  <input type="number" class="form-control" name="quan1" min="1" required></td>
 <td>  <select type="text" class="form-control" name="ind1" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select>
 </td>
 </tr>

 <tr><td>  <input type="text" class="form-control" name="pro2" required></td>
 <td>  <input type="number" class="form-control" name="quan2" min="1" required></td>
 <td>  <select type="text" class="form-control" name="ind2" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select></td>
 </tr>

 <tr><td>  <input type="text" class="form-control" name="pro3" required></td>
 <td>  <input type="number" class="form-control" name="quan3" min="1" required></td>
 <td>  <select type="text" class="form-control" name="ind3" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select></td>
 </tr>

 <tr><td>  <input type="text" class="form-control" name="pro4" required></td>
 <td>  <input type="number" class="form-control" name="quan4" min="1" required></td>
 <td>  <select type="text" class="form-control" name="ind4" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select></td>
 </tr>

 <tr><td>  <input type="text" class="form-control" name="pro5" required></td>
 <td>  <input type="number" class="form-control" name="quan5" min="1" required></td>
 <td>  <select type="text" class="form-control" name="ind5" required>
        <option value="1">stat</option>
        <option value="2">paint</option>
        <option value="3">Computer</option>
        <option value="4">Tectile</option>
    </select></td>
 </tr>

 

</table>

<input type="submit" class="btn btn-warning" value="Add">





</form>

<!-- @if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif -->













<script>

function viewCustomer() {
 
    // var res = [@foreach($custo as $cus)
    //             "{{$cus->cusid}}",
    //             @endforeach
    //             "none"];



//document.getElementById("displaytable").innerHTML  =res;
    

  //document.getElementById("demo").style.display='block';
var x =  document.getElementById("displaytable");
   //if (x.style.display === "none") {
    x.style.display = "block";
 //  }
//   } else {
//     x.style.display = "none";
//   }



}




 
  
// function show(divId) { 
//      $("#" + divId).show(); 
// } 
  
//  function GFG_Fun() { 
//          show('div'); 
     
//            }


















function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the customers names in the world:*/
var customers = [@foreach($custo as $cusName)
                "{{$cusName->cFname}}" +" "+ "{{$cusName->cLname}}",
                @endforeach
                "none"];
                

/*initiate the autocomplete function on the "myInput" element, and pass along the customers array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), customers);

</script>

</div>   









</body>
</html>