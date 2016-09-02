


	var host = "localhost/v1.0/sgof/";
	var url_getCursos = host+"";

	function getCursos() {
		var nome = document.getElementById('nome-sh').value;
		var descricao = '';
		var xmlhttp;

		if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		  	xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
		 	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange=function(){
		  	if (xmlhttp.readyState==4 && xmlhttp.status==200){
		  		var cursos = JSON.parse(xmlhttp.responseText);
		  		var resultados = "";
		  		for (var i = cursos.length - 1; i >= 0; i--) {
		  			//alert(cursos[i]['nome']);
		  			resultados += geraCurso(cursos[i]);
		  		};
		  		document.getElementById('lista-cursos').innerHTML = resultados;
		  	}
		}

		xmlhttp.open("GET","metodos/cursoByVar.php?nome="+nome+"&descricao="+nome,true);
		xmlhttp.send();
	}

	function geraCurso (curso) {

		var html = "<table class='tabelaJv' align='center'><tr><td>                <a href=detalhes_curso_sgof.php?id="+curso['id']+"'>    <img src='show.php?id="+curso['imagem_id']+"' width='100px' height='100px'>"+" </a></td>";
			html+= "<td style='text-align: left; '>   <a href='detalhes_curso_sgof.php?id="+curso['id']+"'><h2>"+curso["nome"]+"   </h2> </a> ";
			html+="  <a href='detalhes_org-sgof.php?id="+curso['id_organizacao']+"'>  <p class='subtitulo'>"+curso["nomeOrg"]+"</p> </a>";
			html+="<p class='subtitulo2'>"+curso["descricao"]+ "</p></td>";



            html+="<td style='width: 100px; color: red; text-align: right;'></td></tr>";
            html+="<tr><td style='width: 100px;                   '>---------------</td>";
            html+="<td style='width: 100px; text-align: right;'><button >publicar</button>   </td>";
            html+="<td style='width: 100px; text-align: right;'>  <button >sugerir</button>  <button onclick=location.href='cursoPraComentar.php?id="+curso['id']+"'>comentar</button></td></tr> <br><br>";

            

		return html;
	}

	
	function showDiv() {
  			 document.getElementById('mydiv').style.display = "block";
		}


