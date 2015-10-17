###Jawaban Soal Nusatekno###

jawaban soal no 1

```html

	<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script>
			function show(){

				var type, karakter, angka;
				type = document.getElementById('type').value;
				karakter = document.getElementById('karakter').value;
				angka = document.getElementById('angka').value;
				var $result = document.getElementById('result');

				$result.innerHTML = "";
				var reverse = false;

					if(angka < 2){
						alert("!Masukan jumlah angka yang lebih besar.");
						return false;
					}

					if(type === 'B' || type === 'D'){
						reverse = true;
					}

					if(type === 'C' || type === 'D'){
						$result.setAttribute("class", "right");
					}
					else{
						$result.setAttribute("class", "");
					}

				if(reverse){

					for(i=angka;i>=1;i--){
						var resultKar = karakter.repeat(i);
						var $html = '<div>'+resultKar+'</div>';
						$result.innerHTML += $html;
					}
				}
				else{

					for(i=1;i<=angka;i++){
						var resultKar = karakter.repeat(i);
						var $html = '<div>'+resultKar+'</div>';
						$result.innerHTML += $html;
					}

				}

				

				String.prototype.repeat = function(num) {
    					return new Array(isNaN(num)? 1 : ++num).join(this);
    				}

			}

	</script>
	<style>
	   #result{
	   	width: 200px;
	   }
	   .right{
	   	 text-align: right;
	   }
	</style>
</head>
<body>
	<div>
		<div>
			<select id="type">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
			</select>
		</div>
		<div>
		<label>Karakter:</label>
		<input type="text" id="karakter" name="char" value="">
		</div>
		<div>
		 <label>Jumlah:</label>
		 <input type="text" id="angka" name="jlh" value="">	
		</div>
		<button onclick="show()">show</button>

		<div id="result">
		</div>
	</div>

</body>
</html>

```