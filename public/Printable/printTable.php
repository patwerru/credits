<link rel="stylesheet" href="js/bootstrap.css">
	<link rel="stylesheet" href="js/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="Jquery/jquery.dataTables.min.js"></script>
	
	<script type="text/javascript" src="//cdn.datatables.net/tabletools/2.2.2/js/dataTables.tableTools.min.js"></script>

	<link rel="stylesheet" href="Jquery/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/tabletools/2.2.2/css/dataTables.tableTools.min.css">
	
 
	<script type="text/javascript">
		$(document).ready(function(){
		var table=$('#re').dataTable();
		var tableTools=new $.fn.dataTable.TableTools(table,{
		'sSwfPath':'//cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf',
		'aButtons':['copy',{
						'sExtends':'print',
						'bShowAll':false
							},
						'csv',
							{
						'sExtends':'xls',
						'sFileName':'*.xls',
						'sButtonText':'Save To Excel'
							},
							{
						'sExtends':'pdf',
						'bFooter':false	
							}						
					]
		});
		$(tableTools.fnContainer()).insertBefore('#re_wrapper');
		});

	</script> 