<html>
<head>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/mathjs/3.3.0/math.min.js></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Calcul Matriciel</title>
</head>
<script type="text/javascript">
	let taille={value:3};
	function createHtml(number){
		html='';
		for(let i=0;i<taille.value;i++){
			html+='<tr>';
			for(let j=0;j<taille.value;j++){
			html+="<td><input id='"+number+''+i+""+j+"'></td>"
			}
			html+='</tr>';
		}
		return html;
	}
	function createHtmlRes(number,mat){
		html='';
		for(let i=0;i<taille.value;i++){
			html+='<tr>';
			for(let j=0;j<taille.value;j++){
			html+="<td><input value='"+mat.subset(math.index(i,j))+"' id='"+number+''+i+""+j+"'></td>"
			}
			html+='</tr>';
		}
		return html;
	}
	function createEmptyMat(rows,columns){
		var mat=[];
		for(let i=0;i<taille.value;i++){
			mat[i]=[]
			for(let j=0;j<taille.value;j++){
				mat[i][j]=undefined;
			}
		}
		return mat;
	}
	function getMatrix(number){
		mat=createEmptyMat(taille.value,taille.value);
		for(let i=0;i<taille.value;i++){
			for(let j=0;j<taille.value;j++){
				id=number+i.toString()+j.toString();
			    mat[i][j]=parseFloat(document.getElementById(id).value);
			}
		}
		return mat
	}
	function func(sel){
		taille.value=parseInt( sel.options[sel.selectedIndex].text);
		
		document.getElementById('mat1').innerHTML=createHtml(1);	
		document.getElementById('mat2').innerHTML=createHtml(2);
	}
	function solve(){
		sel=document.getElementById('operation');
		op=sel.options[sel.selectedIndex].text;
        const mat1=math.matrix(getMatrix('1'));
        const mat2=math.matrix(getMatrix('2'));
        var mat3;
        if (op=='+'){
        	matRes=math.add(mat1,mat2);
        }else
        if (op=='-'){
        	matRes=math.subtract(mat1,mat2);
        }else
        if (op=='x'){
        	matRes=math.multiply(mat1,mat2);
        	
        }else
        if (op=='/'){
        	newMat2=mat2._data;
        	for(let i=0;i<taille.value;i++){
        		for(let j=0;j<taille.value;j++){
        			// newMat2.subset(math.index(i,j))=1/mat2.subset(math.index(i,j));
        			newMat2[i][j]=1/mat2.get([i,j]);
        		}
        	}
        	matRes=math.multiply(mat1,math.matrix(newMat2));
        }
        document.getElementById('mat3').innerHTML=createHtmlRes(3,matRes);
	}
	
</script>
<body>
	<h1>Calcul Matriciel</h1>
	<div class='container'>
		<div>
			<select id="taille" onchange="func(this)">
				<option>Dimention</option>
				<?php
					for($i=2;$i<1000;$i++){
						echo '<option value="$i">'.$i.'</option>';
					}
				?>
			</select>
		</div>
	<div>
		<table id="mat1">
		</table>
	</div>
	<div>
		<select id="operation">
			<option>Operation</option>
			<option value="1">+</option>
			<option value="2">-</option>
			<option value="3">x</option>
			<option value="4">/</option>
		</select>		
	</div>
	<div >
		<table id='mat2'>
		</table>
	</div>
	<div><button onclick="solve()">=</button></div>
	<div >
		<table id='mat3'>
		</table>
	</div>
</div>
<h4 style="color: white;">"Formal Education will make you a living; <b>SELF-EDUCATION</b> will make you a fortune." <i>Reda Lamtoueh</i></h4>
</body>
</html>