<script>		
            $(document).ready(function () {	
                //=================================================================
                //click on table body
				//$("#tableMain tbody tr").click(function () {
				$('#tableMain tbody').on('click', 'tr', function() {
					//get row contents into an array
                    var tableData = $(this).children("td").map(function() {
                        return $(this).text();
                    }).get();
                    var td=tableData[0] '*' tableData[1] '*' tableData[2] '*' tableData[3] '*' tableData[4];
                    alert(td);
				});
				
				
		</script>
