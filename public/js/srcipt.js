$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#createBook').click(function(){
		let title = $('#title').val();
		let summary = $('#summary').val();
		let category = $('#category').val();
		// console.log(title+" "+summary+" "+category);

		$.ajax({
			'url': '/addbook',
			'type': 'POST',
			'data': {
				// '_token':'{{ csrf_token() }}',
				'title':title,
				'summary':summary,
				'category':category
			},

			'success':function(data){
				alert('succesfully added');
			}
		})
	});