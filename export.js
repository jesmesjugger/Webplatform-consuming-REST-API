$(document).ready(function() {
    $('#example').dataTable(
{
"processing" : true,
"serverSide" : true,
"ajax" : {
url:"json.php",
type:"POST"
},
dom: 'lBfrtip',
buttons: [
'excel', 'csv', 'pdf', 'copy'
],
"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
});

} );