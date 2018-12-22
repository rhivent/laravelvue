<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	<meta charset="utf-8">
        <meta http-equiv="content-type" name="viewport" content="text/html, charset=UTF-8, width=device-width, initial-scale=1">
			<title>
				
			</title>
		<script src="{{ asset('js/jquery.min.js') }}"  crossorigin="anonymous">
	</script>
	
	<script type="text/javascript">
	// console.log('');
		$("document").ready(function(){
	/* untuk letak url silahkan di sesuaikan dengan letak script di folder htdocs Anda */
	$.getJSON('http://localhost:12/api/tutorial', { get_param: 'value' }, function(data) {
	    $.each(data, function(index, element) {		
			/* mengisikan table dari hasil json */
			// alert(element.id);
			console.log(element);
			 $('#tabledata').find('tbody')
				.append($('<tr>')
						.append(
							'<td>'+element.title+'</td>'+
							'<td>'+element.body+'</td>'
						)
				); 
	    });
	});		
});
	</script>
		<style>
		
		</style>
	
	</head>
	<body>		
		<h1>Show consuming API dengan JQUERY ambil data JSON PHP</h1>

	<table border="1" width="30%" id="tabledata">
		<thead>
			<tr>
				<th>title</th>
				<th>body</th>
				</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	<br />
	<a href="">Kembali ke tutorial</a>
	
	
	</body>
</html>
