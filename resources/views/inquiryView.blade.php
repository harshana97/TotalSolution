<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inqiry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <header>
        @include('navbar')
    </header>

    <br>

    <div class="container">
        <div class="text-center">
            <div class="row" style=" display: flex;   flex-wrap: wrap;
            margin-right: -100px;
            margin-left: -100px;">
                <div class="col-lg-12">
                    <div class="content">
                        <h1 class="d-flex justify-content-center" style="padding-top: 20px; padding-bottom: 40px;">
                            Inquiry List</h1>
                        <!-- Search form -->
                        <input class="form-control col-lg-12" type="text" placeholder="Search" aria-label="Search"
                            id="myInput" onkeyup="myFunction()">

                        <br>


                        <a href="/addInqu" class="btn btn-primary">Add new</a>


                        <br>

                        <div class="tab" style="padding-top: 20px">
                            <button class="btn btn-info" data-toggle="button" aria-pressed="false"
                                onclick="openCity(event, 't1')" id="defaultOpen">Active</button>
                            <button class="btn btn-info" data-toggle="button" aria-pressed="false"
                                onclick="openCity(event, 't2')">New</button>
                            <button class="btn btn-info" data-toggle="button" aria-pressed="false"
                                onclick="openCity(event, 't3')">All</button>
                            <button class="btn btn-info" data-toggle="button" aria-pressed="false"
                                onclick="openCity(event, 't4')">Expired</button>
                        </div>
                        <br>
                        <!-- Tab content -->
                        <div id="t1" class="tabcontent" style="display:block">
                            <table class="table table-dark" data-name="mytable" id="myTable1">
                                <th onclick="sortTable('myTable1',0)">Inquiry Title</th>
                                <th onclick="sortTable('myTable1',1)">inquiry No</th>
                                <th onclick="sortTable('myTable1',2)">Submit Date</th>
                                <th onclick="sortTable('myTable1',3)">Cloasing Date</th>
                                <th>Change Status</th>

                                @foreach ($inqu as $inqu1)
                                    @if ($inqu1->status == 'Active')
                                        <tr>
                                            <td>{{ $inqu1->inqTitle }}</td>
                                            <td>{{ $inqu1->inquiryid }}</td>
                                            <td>{{ $inqu1->submitDate }}</td>
                                            <td>{{ $inqu1->cloasingDate }}</td>


                                            <td>
                                                @if ($inqu1->status == 'Active')
                                                    <a href="/activeMarkActive/{{ $inqu1->inquiryid }}"
                                                        class="btn btn-success">Mark Expired</a>
                                                @else
                                                    <a href="/activeMarkExpired/{{ $inqu1->inquiryid }}"
                                                        class="btn btn-warning">Expired</a>
                                                @endif
                                            </td>


                                            <td><a href="/viewInquiry/{{ $inqu1->inquiryid }}"
                                                    class="btn btn-primary">View</button></td>
                                            <td><a href="/updateInquiry/{{ $inqu1->inquiryid }}"
                                                    class="btn btn-primary">Update</button></td>
                                            <td><a href="/deleteInquiry/{{ $inqu1->inquiryid }}"
                                                    class="btn btn-primary">Cancel</button></td>
                                        </tr>

                                    @endif
                                @endforeach

                            </table>

                        </div>

                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('.nav_btn').click(function() {
                                    $('.mobile_nav_items').toggleClass('active');
                                });
                            });

                        </script>


                        <!-- Tab content -->
                        <div id="t2" class="tabcontent" style="display:block">

                            <table class="table table-dark" id="myTable2" data-name="mytable">

                                <th onclick="sortTable('myTable2',0)">Inquiry Title</th>
                                <th onclick="sortTable('myTable2',1)">inquiry No</th>
                                <th onclick="sortTable('myTable2',2)">Submit Date</th>
                                <th onclick="sortTable('myTable2',3)">Cloasing Date</th>
                                <th>Change Status</th>


                                @foreach ($inqu as $inqu1)
                                    @if ($inqu1->status == 'New')
                                        <tr>
                                            <td>{{ $inqu1->inqTitle }}</td>
                                            <td>{{ $inqu1->inquiryid }}</td>
                                            <td>{{ $inqu1->submitDate }}</td>
                                            <td>{{ $inqu1->cloasingDate }}</td>

                                            <td>
                                                @if ($inqu1->status == 'New')
                                                    <a href="/newMarkNew/{{ $inqu1->inquiryid }}"
                                                        class="btn btn-success">Mark Active</a>
                                                @else
                                                    <a href="/newMarkActive/{{ $inqu1->inquiryid }}"
                                                        class="btn btn-warning">Active</a>
                                                @endif
                                            </td>

                                            <td><a href="/viewInquiry/{{ $inqu1->inquiryid }}"
                                                    class="btn btn-primary">View</button></td>
                                            <td><a href="/updateInquiry/{{ $inqu1->inquiryid }}"
                                                    class="btn btn-primary">Update</button></td>
                                            <td><a href="/deleteInquiry/{{ $inqu1->inquiryid }}"
                                                    class="btn btn-primary">Cancel</button></td>

                                        </tr>
                                    @endif
                                @endforeach

                            </table>

                        </div>

                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('.nav_btn').click(function() {
                                    $('.mobile_nav_items').toggleClass('active');
                                });
                            });

                        </script>


                        <!-- Tab content -->
                        <div id="t3" class="tabcontent" style="display:block">

                            <table class="table table-dark" data-name="mytable" id="myTable3">

                                <th onclick="sortTable('myTable3',0)">Inquiry Title</th>
                                <th onclick="sortTable('myTable3',1)">inquiry No</th>
                                <th onclick="sortTable('myTable3',2)">Submit Date</th>
                                <th onclick="sortTable('myTable3',3)">Cloasing Date</th>
                                <th onclick="sortTable('myTable3',4)">Status</th>


                                @foreach ($inqu as $inqu1)

                                    <tr>
                                        <td>{{ $inqu1->inqTitle }}</td>
                                        <td>{{ $inqu1->inquiryid }}</td>
                                        <td>{{ $inqu1->submitDate }}</td>
                                        <td>{{ $inqu1->cloasingDate }}</td>
                                        <td>{{ $inqu1->status }}</td>

                                        <td><a href="/viewInquiry/{{ $inqu1->inquiryid }}"
                                                class="btn btn-primary">View</button></td>
                                        <td><a href="/deleteInquiry/{{ $inqu1->inquiryid }}"
                                                class="btn btn-primary">Cancel</button></td>


                                    </tr>

                                @endforeach

                            </table>

                        </div>

                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('.nav_btn').click(function() {
                                    $('.mobile_nav_items').toggleClass('active');
                                });
                            });

                        </script>

                        <!-- Tab content -->
                        <div id="t4" class="tabcontent" style="display:block">

                            <table class="table table-dark" data-name="mytable" id="myTable4">

                                <th onclick="sortTable('myTable4',0)">Inquiry Title</th>
                                <th onclick="sortTable('myTable4',1)">inquiry No</th>
                                <th onclick="sortTable('myTable4',2)">Submit Date</th>
                                <th onclick="sortTable('myTable4',3)">Cloasing Date</th>
                                <th>Change Status</th>


                                @foreach ($inqu as $inqu1)
                                    @if ($inqu1->status == 'Expired')
                                        <tr>
                                            <td>{{ $inqu1->inqTitle }}</td>
                                            <td>{{ $inqu1->inquiryid }}</td>
                                            <td>{{ $inqu1->submitDate }}</td>
                                            <td>{{ $inqu1->cloasingDate }}</td>
                                            <td>
                                                @if ($inqu1->status == 'Expired')
                                                    <a href="/exprieMarkExpired/{{ $inqu1->inquiryid }}"
                                                        class="btn btn-success">Mark Active</a>
                                                @else
                                                    <a href="/expireMarkActive/{{ $inqu1->inquiryid }}"
                                                        class="btn btn-warning">Active</a>
                                                @endif
                                            </td>

                                            <td><a href="/viewInquiry/{{ $inqu1->inquiryid }}"
                                                    class="btn btn-primary">View</button></td>
                                            <td><a href="/deleteInquiry/{{ $inqu1->inquiryid }}"
                                                    class="btn btn-primary">Cancel</button></td>

                                        </tr>
                                    @endif
                                @endforeach

                            </table>

                        </div>







                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('.nav_btn').click(function() {
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

    function myFunction() {
        // Declare variables

        var input, filter, table, tr, td, i, alltables;
        alltables = document.querySelectorAll("table[data-name=mytable]");
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        alltables.forEach(function(table) {
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    }



    function sortTable(id, n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById(id);
        switching = true;
        // Set the sorting direction to ascending:
        dir = "asc";
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /* Check if the two rows should switch place,
                based on the direction, asc or desc: */
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                // Each time a switch is done, increase this count by 1:
                switchcount++;
            } else {
                /* If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again. */
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }

</script>
