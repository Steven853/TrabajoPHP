var arrayCategories = []

$("#addElement").click(function(e) {
	//Deshabilitar el envio por HTTP
	e.preventDefault()

	let idCategory 		= $("#category").val()
	let nameCategory 	= $("#category option:selected").text()

	
	if (idCategory != '') {

		if(typeof existCategory(idCategory) === 'undefined') {

			arrayCategories.push({
				'Id'  :  idCategory,
				'name':  nameCategory
			})
		} else {
			alert("La Categoría ya se Encuentra Seleccionada")
		}

		showCategories()

	} else {
		alert("Debe Seleccionar una Categoría ")
	}

	console.log(arrayCategories)

})

function existCategory(idCategory) {	
	
	let existCategory = arrayCategories.find(function (category) {
		return category.Id == idCategory
	})
	return existCategory
}

function showCategories() {
	$("#list-categories").empty()

	arrayCategories.forEach(function (category) {
		$("#list-categories").append('<div class="form-group"><button class="btn btn-danger" onclick="removeElement('+category.Id+')">X</button><span>'+category.name+'</span></div>')
	})
}

function removeElement(idCategory) {
	let index = arrayCategories.indexOf(existCategory(idCategory))
	arrayCategories.splice(index, 1)
	showCategories()
}

$("#save").click(function (e) {
	e.preventDefault()

	let url 	= "?controller=movie&method=save"
	let params 	= {
		name: 			$("#name").val(),
		description: 	$("#description").val(),  
		user_id: 		$("#user_id").val(),  
		categories:		arrayCategories  
	} 

	//metodo ajax de tipo post para realizar el envio del formulario a PHP (Backend)
	$.post(url, params, function (response) {
		//validar la respuesta del request
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