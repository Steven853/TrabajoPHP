var arrayMovies = []

$("#addElement").click(function(e) {

	e.preventDefault()

	let idMovie 		= $("#movie").val()
	let nameMovie   	= $("#movie option:selected").text()

	
	if (idMovie != '') {

		if(typeof existMovie(idMovie) === 'undefined') {

			arrayMovies.push({
				'Id'  :  idMovie,
				'name':  nameMovie
			})
		} else {
			alert("La Película ya se Encuentra Seleccionada")
		}

		showMovies()

	} else {
		alert("Debe Seleccionar una Película ")
	}

	console.log(arrayMovies)

})

function existMovie(idMovie) {	
	
	let existMovie = arrayMovies.find(function (movie) {
		return movie.Id == idMovie
	})
	return existMovie

}

function showMovies() {
	$("#list-movie").empty()

	arrayMovies.forEach(function (movie) {
		$("#list-movie").append('<div class="form-group"><button class="btn btn-danger" onclick="removeElement('+movie.Id+')">X</button><span>'+movie.name+'</span></div>')
	})
}

function removeElement(idMovie) {
	let index = arrayMovies.indexOf(existMovie(idMovie))
	arrayMovies.splice(index, 1)
	showMovies()
}

$("#save").click(function (e) {
	e.preventDefault()

	let url 	= "?controller=rental&method=save"
	let params 	= {
		start_date: 	$("#start_date").val(),
		end_date: 	    $("#end_date").val(),  
        total: 		    $("#total").val(),  
        user_id: 		$("#user_id").val(), 
		movies:		    arrayMovies  
	}

	//metodo ajax de tipo post para realizar el envio del formulario a PHP (Backend)
	$.post(url, params, function (response) {
		//validar la respuesta del request
		if(typeof response.error !== 'undefined') { 
			alert(response.message)
		} else {
			alert("Inserción Satisfactoria")
			location.href = '?controller=rental'
		}
	}, 'json').fail(function (error) {
		console.log(error)
		alert("Inserción Fallida ("+error.responseText+")")
    })
})