<!DOCTYPE html>
<html lang="sp">
	<head>
		<meta charset="UTF-8">
		<title>Practicas de JS</title>
	</head>
	<body>
		<h1>
			Practicas de JS
		</h1>
		<p>
			Esta pagina tambien sirve como pruevas para GIT.
		</p>
		<script>
			
			var coleccionDeDiscos = {
				1:{
					nombreDisco: "Dejame decir que te amo",
					artista: "Ricardo Arjona",
					canciones: ["Dejame decir que te amo","Monotonia"]
				},
				2:{
					nombreDisco: "Historias"
				}
			}

			function actualizarDiscos(discos, id, propiedad, valor){

				if(valor === ""){
					delete discos[id][propiedad];				
				}else if(propiedad === "canciones"){
					discos[id][propiedad] = discos[id][propiedad] || [];/* ojo aqui */
					discos[id][propiedad].push(valor);
				}else{
					discos[id][propiedad] = valor;
				}

			}
			
			var idAlbum = 2;
			
			console.log(coleccionDeDiscos[idAlbum]);
			
			actualizarDiscos(coleccionDeDiscos, idAlbum, "canciones", "Historia de Taxi");
			actualizarDiscos(coleccionDeDiscos, idAlbum, "artista", "Ricardo Arjona");

			console.log(coleccionDeDiscos[idAlbum]);

		</script>
	</body>
</html>