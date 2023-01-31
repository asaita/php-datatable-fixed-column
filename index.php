<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>


    /* Ensure that the demo table scrolls */
    th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
    
</style>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/fixedcolumns/4.2.1/js/dataTables.fixedColumns.min.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.2.1/css/fixedColumns.dataTables.min.css">





</head>
<body>

<table id="example" class="stripe row-border order-column" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
                <td>aaaaaaaaaaaaaaaaaaaa</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008-11-28</td>
                <td>$162,700</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012-12-02</td>
                <td>$372,000</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012-08-06</td>
                <td>$137,500</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
            </tr>
        </tfoot>
    </table>


    <script>
$(document).ready(function () {
   
    var table = $('#example').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   {
            left: 2
        }

    } );
  


} ); 










</script>


    


</body>
</html>