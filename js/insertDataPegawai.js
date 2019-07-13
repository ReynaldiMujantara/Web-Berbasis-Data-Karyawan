$(document).ready(function(){
	$("#submit").click(function(){
	$("#container").fadeOut(2000, function(){
	window.location.href="../php/inputPegawai.php";
	
	});
	});

	// event ketika keyboard dipencet -started
	$("#golongan").keyup(function(){
        alert (tes);


	var tulisan =	$("#golongan").val();

		// ajax start
		 $.ajax({
		     url:"getSiswa.php",
		     method:"POST",
		     data:{id:tulisan},
		     success:function(data)
		     {
		      
		     		if (data != 0){

		     			// json sdh masuk
		     			// konvert dulu

		     			data = JSON.parse(data);

		     			//alert('datanya ' +data.kelas);

		     			$("#golongan").val(data.golongan);
		     			$("#gaji").val(data.gaji);
		     		}else{
		     			$("#golongan").val("");
		     			
		     		}

		     }
		    });
   		//ajax ended

	});
	// event ketika keyboard dipencet -ended

});