<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inqiry</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<header>
</header>
<div id="sidebar" class="col-md-4">
            @include('navbar')
        </div>
<div class="container">
<div class="text-center">

<div class="row">
<div class="col-md-12">
    


<div class="content">

<br>
<br>



<!-- Tab content -->
<div id="t1" class="tabcontent" style="display:block" >

    <table class="table table-dark" data-name="mytable" id="myTable1">

    <th>Inquiry Reports</th>

    <tr>
     <th>Current inquiry status report</th>
     <td><a href="/viewInquiry" class = "btn btn-primary">View</button></td>

     </tr> 

     <tr>
     <th>inquiry-product report</th>
     <td><a href="/viewInquiry" class = "btn btn-primary">View</button></td>

     </tr> 


     <tr>
     <th>customer inquiry report</th>
     <td><a href="/viewInquiry" class = "btn btn-primary">View</button></td>
     </tr> 

     <tr>
     <th>Customer Address</th>
     <td><a href="/viewInquiry" class = "btn btn-primary">View</button></td>
     </tr>   

            
            <!-- <td><a href="/viewInquiry" class = "btn btn-primary">View</button></td>
            <td><a href="/updateInquiry" class = "btn btn-primary">Update</button></td>
            <td><a href="/deleteInquiry" class = "btn btn-primary" >Cancel</button></td>
        </tr> -->


    </table>

</div>



  
</div>







<script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

<footer class="row">
        @include('footer')
    </footer>

</body>
</html>

<script>


// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
