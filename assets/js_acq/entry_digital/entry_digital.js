$(document).ready(function () {
	app.formEntryDigitalScrDua.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.formEntryDigitalScrDua = {
	controller: 'c_data_entry_digital/',
	api: 'c_data_entry_digital_api/',
	elm: {},
	message_hint: "Ketik untuk melakukan pencarian minimal 4 karakter",

	init: function () {
		var file = this;
		file.getJenisIdentitas();
		file.getZipCodePostgreKTP();
		file.getZipCodePostgreDOM();
		file.getAllFinanceType();
		file.getAllObject();
		file.getAllBrandModel();
		file.getAllTenor();
	},

	imageUploaded: function () {
		var fileUpload = document.querySelector(
			'input[type=file]')['files'][0];
		console.log(fileUpload);
		var arrType = [];
		arrType = fileUpload.type.split("/");

		if (arrType[1] != "jpg" && arrType[1] != "jpeg" && arrType[1] != "png") {
			alert_error("Format foto tidak sesuai!");
			$("#upl-ktp-pasangan").val("");
		} else {
			var reader = new FileReader();
			console.log("next");
			reader.onload = function (event) {
				var image = new Image();
				image.onload = function () {
					var canvas = document.createElement('canvas');
					var context = canvas.getContext("2d");
					canvas.width = image.width / 4;
					canvas.height = image.height / 4;
					context.drawImage(image,
						0,
						0,
						image.width,
						image.height,
						0,
						0,
						canvas.width,
						canvas.height
					);

					console.log("COMPRESS -> " + canvas.toDataURL());
					base64String = canvas.toDataURL().replace("data:", "")
						.replace(/^.+,/, "");
					imageBase64Stringsep = base64String;
					localStorage.setItem("base64StringImage", base64String);
					console.log(base64String);
				}
				image.src = event.target.result;
			}
			reader.readAsDataURL(fileUpload);
		}
	},

	getJenisIdentitas: function () {
		var file = app.formEntryDigitalScrDua;
		$.ajax({
			url: app.base_url + file.api + "getAllCard",
			success: function (response, textStatus, jqXHR) {
				if (response.status && response.data.length != 0) {
					var jenis_identitas = response.data.map(function (obj) {
						return {
							id: obj.id_card,
							text: obj.id_card_desc
						};
					});
				} else {
					file.getJenisIdentitas();
				}
				//parameter JENIS IDENTITAS
				$('#slc-jenis-id-pasangan').select2({
					theme: 'bootstrap4',
					placeholder: 'PILIH JENIS IDENTITAS',
					language: 'id',
					allowClear: true,
					cache: true,
					dataType: 'json',
					data: jenis_identitas,
					processResults: function (response) {
						return {
							results: response.data.map(function (obj) {
								return {
									id: obj.id_card,
									text: obj.id_card_desc
								};
							})
						};
					}
				});
			}
		});
	},

	changeZipCodeKTP: function () {
		var valueAll = $("#slc-zipcode-ktp").val();
		var arrValueAllSplit = valueAll.split(",");
		var data = [];

		data.push({
			"KELURAHAN_ID": arrValueAllSplit[1],
			"KELURAHAN_NAME": arrValueAllSplit[2],
			"KECAMATAN_ID": arrValueAllSplit[3],
			"KECAMATAN_NAME": arrValueAllSplit[4],
			"KABKOT_ID": arrValueAllSplit[5],
			"KABKOT_NAME": arrValueAllSplit[6],
			"PROVINSI_ID": arrValueAllSplit[7],
			"PROVINSI_NAME": arrValueAllSplit[8]
		});

		var dataKelurahan = data.map(function (obj) {
			return {
				id: obj.KELURAHAN_ID,
				text: obj.KELURAHAN_NAME
			}
		});

		var dataKecamatan = data.map(function (obj) {
			return {
				id: obj.KECAMATAN_ID,
				text: obj.KECAMATAN_NAME
			}
		});

		var dataKabKot = data.map(function (obj) {
			return {
				id: obj.KABKOT_ID,
				text: obj.KABKOT_NAME
			}
		});

		var dataProvinsi = data.map(function (obj) {
			return {
				id: obj.PROVINSI_ID,
				text: obj.PROVINSI_NAME
			}
		})

		$("#inp-kelurahan-ktp").select2({
			theme: 'bootstrap4',
			tags: true,
			placeholder: "PILIH KELURAHAN",
			allowClear: true,
			data: dataKelurahan
		}).val(data[0]['KELURAHAN_ID']).trigger('change');

		$("#inp-kecamatan-ktp").select2({
			theme: 'bootstrap4',
			tags: true,
			placeholder: "PILIH KECAMATAN",
			allowClear: true,
			data: dataKecamatan
		}).val(data[0]['KECAMATAN_ID']).trigger('change');

		$("#inp-kabkot-ktp").select2({
			theme: 'bootstrap4',
			tags: true,
			placeholder: "PILIH KAB/KOT",
			allowClear: true,
			data: dataKabKot
		}).val(data[0]['KABKOT_ID']).trigger('change');

		$("#inp-provinsi-ktp").select2({
			theme: 'bootstrap4',
			tags: true,
			placeholder: "PILIH PROVINSI",
			allowClear: true,
			data: dataProvinsi
		}).val(data[0]['PROVINSI_ID']).trigger('change');
	},

	changeZipCodeDOM: function () {
		var valueAll = $("#slc-zipcode-dom").val();
		var arrValueAllSplit = valueAll.split(",");
		var data = [];

		data.push({
			"KELURAHAN_ID": arrValueAllSplit[1],
			"KELURAHAN_NAME": arrValueAllSplit[2],
			"KECAMATAN_ID": arrValueAllSplit[3],
			"KECAMATAN_NAME": arrValueAllSplit[4],
			"KABKOT_ID": arrValueAllSplit[5],
			"KABKOT_NAME": arrValueAllSplit[6],
			"PROVINSI_ID": arrValueAllSplit[7],
			"PROVINSI_NAME": arrValueAllSplit[8]
		});

		var dataKelurahan = data.map(function (obj) {
			return {
				id: obj.KELURAHAN_ID,
				text: obj.KELURAHAN_NAME
			}
		});

		var dataKecamatan = data.map(function (obj) {
			return {
				id: obj.KECAMATAN_ID,
				text: obj.KECAMATAN_NAME
			}
		});

		var dataKabKot = data.map(function (obj) {
			return {
				id: obj.KABKOT_ID,
				text: obj.KABKOT_NAME
			}
		});

		var dataProvinsi = data.map(function (obj) {
			return {
				id: obj.PROVINSI_ID,
				text: obj.PROVINSI_NAME
			}
		})

		$("#inp-kelurahan-dom").select2({
			theme: 'bootstrap4',
			tags: true,
			placeholder: "PILIH KELURAHAN",
			allowClear: true,
			data: dataKelurahan
		}).val(data[0]['KELURAHAN_ID']).trigger('change');

		$("#inp-kecamatan-dom").select2({
			theme: 'bootstrap4',
			tags: true,
			placeholder: "PILIH KECAMATAN",
			allowClear: true,
			data: dataKecamatan
		}).val(data[0]['KECAMATAN_ID']).trigger('change');

		$("#inp-kabkot-dom").select2({
			theme: 'bootstrap4',
			tags: true,
			placeholder: "PILIH KAB/KOT",
			allowClear: true,
			data: dataKabKot
		}).val(data[0]['KABKOT_ID']).trigger('change');

		$("#inp-provinsi-dom").select2({
			theme: 'bootstrap4',
			tags: true,
			placeholder: "PILIH PROVINSI",
			allowClear: true,
			data: dataProvinsi
		}).val(data[0]['PROVINSI_ID']).trigger('change');
	},

	getZipCodePostgreKTP: function () {
		var file = app.formEntryDigitalScrDua;
		$("#slc-zipcode-ktp").select2({
			theme: 'bootstrap4',
			placeholder: "PILIH KODE POS",
			allowClear: true,
			// data: xdata,
			minimumInputLength: 4,
			language: {
				inputTooShort: function () {
					return file.message_hint
				},
			},
			ajax: {
				dataType: 'json',
				cache: true,
				url: app.base_url + file.api + "getDataZipCodePostgre",
				type: "POST",
				data: function (params) {
					var query = {
						value: params.term
					}
					return query;
				},
				processResults: function (response) {

					var json = $.parseJSON(response);
					console.log(json);
					var data = json.data.map(function (value) {
						return {
							id: value.zip_code + "," + value.kelurahan_id + "," + value.kelurahan_name + "," + value.kecamatan_id + "," + value.kecamatan_name + "," + value.kab_kot_id + "," + value.kab_kot_name + "," + value.provinsi_id + "," + value.provinsi_name,
							text: value.zip_code + " | " + value.kelurahan_name
						}
					});
					return {
						results: data,
					};
				}
			}

		}).change(function () {
			var file = app.formEntryDigitalScrDua;
			file.changeZipCodeKTP();
		})
	},

	getZipCodePostgreDOM: function () {
		var file = app.formEntryDigitalScrDua;
		$("#slc-zipcode-dom").select2({
			theme: 'bootstrap4',
			placeholder: "PILIH KODE POS",
			allowClear: true,
			// data: xdata,
			minimumInputLength: 4,
			language: {
				inputTooShort: function () {
					return file.message_hint
				},
			},
			ajax: {
				dataType: 'json',
				cache: true,
				url: app.base_url + file.api + "getDataZipCodePostgre",
				type: "POST",
				data: function (params) {
					var query = {
						value: params.term
					}
					return query;
				},
				processResults: function (response) {

					var json = $.parseJSON(response);
					console.log(json);
					var data = json.data.map(function (value) {
						return {
							id: value.zip_code + "," + value.kelurahan_id + "," + value.kelurahan_name + "," + value.kecamatan_id + "," + value.kecamatan_name + "," + value.kab_kot_id + "," + value.kab_kot_name + "," + value.provinsi_id + "," + value.provinsi_name,
							text: value.zip_code + " | " + value.kelurahan_name
						}
					});
					return {
						results: data,
					};
				}
			}

		}).change(function () {
			var file = app.formEntryDigitalScrDua;
			file.changeZipCodeDOM();
		})
	},

	getAllFinanceType: function () {
		var file = app.formEntryDigitalScrDua;
		$.ajax({
			url: app.base_url + file.api + "getAllFinanceType",
			success: function (response, textStatus, jqXHR) {
				if (response.status && response.data.length != 0) {
					var tipe_pembiayaan = response.data.map(function (obj) {
						return {
							id: obj.finance_type_id,
							text: obj.finance_type_desc
						};
					});
				} else {
					file.getAllFinanceType();
				}
				//parameter TIPE PEMBIAYAAN
				$('#slc-tipe-pemb').select2({
					theme: 'bootstrap4',
					placeholder: 'PILIH TIPE PEMBIAYAAN',
					language: 'id',
					cache: true,
					dataType: 'json',
					allowClear: true,
					data: tipe_pembiayaan,
					processResults: function (response) {
						return {
							results: response.data.map(function (obj) {
								return {
									id: obj.finance_type_id,
									text: obj.finance_type_desc
								};
							})
						};
					}
				});
			}
		});
	},

	getAllObject: function () {
		var file = app.formEntryDigitalScrDua;
		$.ajax({
			url: app.base_url + file.api + "getAllObject",
			success: function (response, textStatus, jqXHR) {
				if (response.status && response.data.length != 0) {
					var jenis_kendaraan = response.data.map(function (obj) {
						return {
							id: obj.object_code,
							text: obj.object_desc
						};
					});
				} else {
					file.getAllObject();
				}
				//parameter JENIS KENDARAAN
				$('#slc-jenis-kend').select2({
					theme: 'bootstrap4',
					placeholder: 'PILIH JENIS KENDARAAN',
					language: 'id',
					cache: true,
					dataType: 'json',
					allowClear: true,
					data: jenis_kendaraan,
					processResults: function (response) {
						return {
							results: response.data.map(function (obj) {
								return {
									id: obj.object_code,
									text: obj.object_desc
								};
							})
						};
					}
				});
			}
		});
	},

	getAllBrandModel: function () {
		var file = app.formEntryDigitalScrDua;
		$.ajax({
			url: app.base_url + file.api + "getAllBrandModel",
			success: function (response, textStatus, jqXHR) {
				if (response.status && response.data.length != 0) {
					var merk_model = response.data.map(function (obj) {
						return {
							id: obj.OBJ_BRAND_CODE + ' - ' + obj.OBJ_BRAND_DESC + ' - ' +
								obj.MODELBRANDGROUPMODEL_ID + ' - ' + obj.OBJ_MODEL_DESC + ' - ' +
								obj.OBJ_GROUP_CODE + ' - ' + obj.OBJ_GROUP_DESC,
							text: obj.OBJ_BRAND_DESC + ' - ' + obj.OBJ_MODEL_DESC
						};
					});
				} else {
					file.getAllBrandModel();
				}
				//parameter MERK MODEL KENDARAAN
				$('#slc-merk-model-modal-kend').select2({
					theme: 'bootstrap4',
					placeholder: 'PILIH MERK MODEL KENDARAAN',
					language: {
						inputTooShort: function () {
							return file.message_hint
						},
					},
					cache: true,
					dataType: 'json',
					allowClear: true,
					minimumInputLength: 3,
					data: merk_model,
					processResults: function (response) {
						return {
							results: response.data.map(function (obj) {
								return {
									id: obj.MODELBRANDGROUPMODEL_ID,
									text: obj.OBJ_BRAND_DESC + ' - ' + obj.OBJ_MODEL_DESC
								};
							})
						};
					}
				});
			}
		});
	},

	getAllTenor: function () {
		var file = app.formEntryDigitalScrDua;
		$.ajax({
			url: app.base_url + file.api + "getAllTenor",
			success: function (response, textStatus, jqXHR) {
				if (response.status && response.data.length != 0) {
					response.data.sort(file.SortTenor);
					var tenor = response.data.map(function (obj) {
						return {
							id: obj.tenor_id,
							text: obj.tenor_desc
						};
					});
				} else {
					file.getAllTenor();
				}
				//parameter TENOR
				$('#slc-tenor').select2({
					theme: 'bootstrap4',
					placeholder: 'PILIH TENOR',
					language: 'id',
					cache: true,
					dataType: 'json',
					allowClear: true,
					data: tenor,
					processResults: function (response) {
						return {
							results: response.data.map(function (obj) {
								return {
									id: obj.tenor_id,
									text: obj.tenor_desc
								};
							})
						};
					}
				});
			}
		});
	},
	SortTenor: function (a, b) {
		var aTenorID = a.tenor_id;
		var bTenorID = b.tenor_id;
		return ((aTenorID < bTenorID) ? -1 : ((aTenorID > bTenorID) ? 1 : 0));
	},

}

//FUNCTION FOR TAB IDENTITAS
$('#upl-ktp-pasangan').change(function () {
	var file = app.formEntryDigitalScrDua
	file.imageUploaded();
});

//FUNCTION FOR TAB PEKERJAAN
//Parameter join income *Hardcode
var join_income = [{
		id: 0,
		text: 'YA'
	},
	{
		id: 1,
		text: 'TIDAK'
	}
]

$('#slc-join-income-karyawan').select2({
	theme: 'bootstrap4',
	placeholder: 'SILAHKAN PILIH',
	language: 'id',
	allowClear: true,
	data: join_income
});

$('#slc-join-income-wira').select2({
	theme: 'bootstrap4',
	placeholder: 'SILAHKAN PILIH',
	language: 'id',
	allowClear: true,
	data: join_income
});
//END parameter join income *Hardcode

//FUNCTION FOR TAB PENDAPATAN

//FUNCTION FOR TAB OBJECT PEMBIAYAAN
//Pilih Radio Obj Pembiayaan
$('input[type="radio"]').change(function () {
	if (this.id == "radio-obj-kend") {
		// console.log('pilih radio efd objek pembiayaan kendaraan');
		$('#form-object-pemb-dp').show();
		$('#form-object-pemb-dp-min').show();
		$('#form-object-pemb-angs').show();
		$('#form-object-pemb-tot-pembayaran').show();
		$('#form-object-pemb-dana-est-harga').hide();
		$('#form-object-pemb-dana-pengajuan-cair').hide();
		$('#form-object-pemb-dana-max-pencairan').hide();
	} else if (this.id == "radio-obj-dana") {
		// console.log('pilih radio efd objek pembiayaan dana');
		$('#form-object-pemb-dp').hide();
		$('#form-object-pemb-dp-min').hide();
		$('#form-object-pemb-angs').show();
		$('#form-object-pemb-tot-pembayaran').hide();
		$('#form-object-pemb-dana-est-harga').show();
		$('#form-object-pemb-dana-pengajuan-cair').show();
		$('#form-object-pemb-dana-max-pencairan').show();
	}
});


//FUNCTION FOR TAB DATA KEPEMILIKAN


//Responsive DataTables TAB
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	$($.fn.dataTable.tables(true)).DataTable()
		.columns.adjust()
		.responsive.recalc();
});
//DataTable Upload Dokumen
var tbl_upload_dok = $('#tbl-upload-dokumen').DataTable({
	"autoWidth": false,
	"responsive": true,
	"searching": false,
	"paging": false,
	"info": false
});


//Trigger modal bantuan isi data
$('#btn-bantuan-isi-data').click(function () {
	// console.log('trigger button modal bantuan isi data');
	$('#modal-bantuan-isi').modal('show');
});

//Trigger modal bantuan isi data final
$('#btn-submit-bantuan').click(function () {
	if (document.getElementById('bantuan-isi-ya').checked) {
		// console.log('bantuan ya');
		$('#notif-positif').show();
		$('#notif-negatif').hide();
		$('#modal-bantuan-final').modal('show');

	} else if (document.getElementById('bantuan-isi-tidak').checked) {
		// console.log('bantuan tidak');
		$('#notif-positif').hide();
		$('#notif-negatif').show();
		$('#modal-bantuan-final').modal('show');
	}
});

//Show form alasan batal
$('input[type="radio"]').change(function () {
	if (this.id == "bantuan-isi-ya") {
		// console.log('bantuan ya');
		$('#form-alasan-batal').hide();
	} else if (this.id == "bantuan-isi-tidak") {
		// console.log('bantuan tidak');
		$('#form-alasan-batal').show();
	}
});