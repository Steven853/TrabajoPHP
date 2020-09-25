$("#save").click(function (e) {
	e.preventDefault()

	let url 	= "?controller=role&method=update"
	let params 	= {
		name: 			$("#name").val(),
		description: 	$("#description").val()
	} 

	
	$.post(url, params, function (response) {
		if(typeof response.error !== 'undefined') {
			alert(response.message)
		} else {
			alert("Inserción Satisfactoria")
			location.href = '?controller=movie'
		}
	}, 'json').fail(function (error) {
		console.log(error)
		alert("Inserción Fallida ("+error.responseText+")")
	})
}) 