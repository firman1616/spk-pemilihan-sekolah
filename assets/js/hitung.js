function autofill() {
	var kode = document.getElementById("desa").value;
	
	$.ajax({
		url: BASE_URL + "admin/SAW/cari",
		//  url:"<?php echo base_url();?>admin/Mutasi/cari",
		data: "&kode=" + kode,
		success: function (data) {
			var i = 0;
			var hasil = JSON.parse(data);
			console.log(hasil);

			$.each(hasil, function (key, val) { 
				// document.getElementById("item_code").value = val.kode;
				$('#jarak'+(i++)).val(val.jarak);
			});
		},
	});
}
// var : variabel bisa berubah berubah
// let : variabel