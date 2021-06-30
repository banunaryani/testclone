<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Peta</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/simple-sidebar.css" rel="stylesheet">
  
  <!-- PETA -->
   <link rel="stylesheet" href="assets/leaflet.css">
   <script src="assets/leaflet-src.js"></script>
   <link rel="stylesheet" href="assets/screen.css">

	<script src="assets/js/leaflet.ajax.js"></script>
		<!--memunculkan clustering titik-->
		<link rel="stylesheet" href="assets/MarkerCluster.css">
		<link rel="stylesheet" href="assets/MarkerCluster_002.css">
		<!-- munculkan mouse koordinat-->
		<link rel="stylesheet" href="assets/leaflet-mouseposition/L.Control.MousePosition.css">
		<!-- munculkan navigasi pengukuran-->
		<link rel="stylesheet" href="assets/leaflet-measure/leaflet-measure.css">
		<!-- Geolocation CSS Library -->
		<link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
		<!-- Font Awesome CSS Library -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--Popup Sidebar-->
		<link rel="stylesheet" href="assets/leaflet-sidebar/L.Control.Sidebar.css" />
		<script src="assets/leaflet-sidebar/L.Control.Sidebar.js"></script>
		
		<script src="assets/leaflet.js"> </script>
		<script src="https://unpkg.com/rbush@2.0.2/rbush.min.js"></script>
		<script src="https://unpkg.com/labelgun@6.1.0/lib/labelgun.min.js"></script>
		<script src="assets/js/labels.js"></script>
     <!-- PETA -->   
	 
	 <style>
			body {
			padding:0;
			margin:0;
			}
			#map {
			width:auto;
			height:100%;
			}
			.info {
				padding: 6px 8px;
				font: 14px/16px;
				background: white;
				background: rgba(255,255,255,0.6);
				box-shadow: 0 0 15px rgba(0,0,0,0.2);
				border-radius: 5px;
				}
			.leaflet-popup-content {
				width: 300px;
				max-height: 300px;
				overflow-y: scroll;
				}
			.styleLabel{
				background: rgba(255, 255, 255, 0);
				border-radius: 0px;
				font-size: 10pt;
				color: white;
				background-color: transparent;
				border: transparent;
				box-shadow: none;
				}
		</style>
	
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">RHL Intensif</div>
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			
			<div class="accordion" style="width: 15rem;" id="">
						<div class="card">
						  <div class="card header" id="headingRHL1">
						    <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseRHL1" aria-expanded="true" aria-controls="collapseRHL1">
							Wil. I Stabat
							</button>
						  </div>
						  <div id="collapseRHL1" class="collapse" aria-labelledby="headingRHL1" data-parent="#2">
							<div class="card-body">
								<a class="zoom-center" href="#">Blok 1</a>
								<div class="dropdown-divider"></div>
								<a class="zoom-center2" href="#">Blok 2</a>
								<div class="dropdown-divider"></div>
								<a class="zoom-center3" href="#">Blok 3</a>
							</div>
						  </div>  
						</div>
						<div class="card">
							<div class="card header" id="headingRHL2">
							  <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseRHL2" aria-expanded="true" aria-controls="collapseRHL2">
							  Wil. II Pematangsiantar
							  </button>
							</div>
							<div id="collapseRHL2" class="collapse" aria-labelledby="headingRHL2" data-parent="#2">
							  <div class="card-body">
								<a href="peta_utama.html" target=isiiframe>Blok 1</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 2</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 3</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 4</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 5</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 6</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 7</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 8</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 9</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 10</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 11</a>
							  </div>
							</div>  
						</div>
						<div class="card">
							<div class="card header" id="headingRHL3">
							  <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseRHL3" aria-expanded="true" aria-controls="collapseRHL3">
							  Wil. XIV Kabanjahe
							  </button>
							</div>
							<div id="collapseRHL3" class="collapse" aria-labelledby="headingRHL3" data-parent="#2">
							  <div class="card-body">
								<a href="peta_utama.html" target=isiiframe>Blok 1</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 2</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 3</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 4</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 5</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 6</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 7</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 8</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 9</a>
							  </div>
							</div>  
						</div>
						<div class="card">
							<div class="card header" id="headingRHL4">
							  <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseRHL4" aria-expanded="true" aria-controls="collapseRHL4">
							  Wil. XV Sidikalang
							  </button>
							</div>
							<div id="collapseRHL4" class="collapse" aria-labelledby="headingRHL4" data-parent="#2">
							  <div class="card-body">
								<a href="peta_utama.html" target=isiiframe>Blok 1</a>
							  </div>
							</div>  
						</div>
						<div class="card">
							<div class="card header" id="headingRHL5">
							  <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseRHL5" aria-expanded="true" aria-controls="collapseRHL5">
							  V Gayo Lues
							  </button>
							</div>
							<div id="collapseRHL5" class="collapse" aria-labelledby="headingRHL5" data-parent="#2">
							  <div class="card-body">
								<a href="peta_utama.html" target=isiiframe>Blok 1</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 2</a>
							  </div>
							</div>  
						</div>
						<div class="card">
							<div class="card header" id="headingRHL6">
							  <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseRHL6" aria-expanded="true" aria-controls="collapseRHL6">
							  VI Subulussalam
							  </button>
							</div>
							<div id="collapseRHL6" class="collapse" aria-labelledby="headingRHL6" data-parent="#2">
							  <div class="card-body">
								<a href="peta_utama.html" target=isiiframe>Blok 1</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 2</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 3</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 4</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 5</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 6</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 7</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 8</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 9</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 10</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 11</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 12</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 13</a>
							  </div>
							</div>  
						</div>
						<div class="card">
							<div class="card header" id="headingRHL7">
							  <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseRHL7" aria-expanded="true" aria-controls="collapseRHL7">
							  TAHURA
							  </button>
							</div>
							<div id="collapseRHL7" class="collapse" aria-labelledby="headingRHL7" data-parent="#2">
							  <div class="card-body">
								<a href="peta_utama.html" target=isiiframe>Blok 1</a>
							  </div>
							</div>  
						</div>
						<div class="card">
							<div class="card header" id="headingRHL8">
							  <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseRHL8" aria-expanded="true" aria-controls="collapseRHL8">
							  BKSDA
							  </button>
							</div>
							<div id="collapseRHL8" class="collapse" aria-labelledby="headingRHL8" data-parent="#2">
							  <div class="card-body">
								<a href="peta_utama.html" target=isiiframe>Blok 1</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 2</a>
							  </div>
							</div>  
						</div>
						<div class="card">
							<div class="card header" id="headingRHL9">
							  <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseRHL9" aria-expanded="true" aria-controls="collapseRHL9">
							  BBTNGL
							  </button>
							</div>
							<div id="collapseRHL9" class="collapse" aria-labelledby="headingRHL9" data-parent="#2">
							  <div class="card-body">
								<a href="peta_utama.html" target=isiiframe>Blok 1</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 2</a>
								<div class="dropdown-divider"></div>
								<a href="peta_utama.html" target=isiiframe>Blok 3</a>
							  </div>
							</div>  
						</div>
			</div>
	   </ul>

    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
	
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-light btn-outline-dark" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		
		<form class="form-inline">
		  <select class="custom-select" id="inlineFormCustomSelect">
		    <option selected>RHL Intensif</option>
			<option value="1">RHL Argoforestry</option>
			<option value="2">RHL Mangrove</option>
			<option value="3">Bangunan Konservasi Tanah dan Air</option>
			<option value="4">Kebun Bibit Rakyat</option>
			<option value="5">Kebun Bibit Desa</option>
			<option value="6">Bibit Produktif</option>
			<option value="7">Persemaian Permanen</option>
		  </select>
		</form>
		
		<form class="form-inline">
		  <select class="custom-select" id="inlineFormCustomSelect">
		    <option selected>2017</option>
			<option value="1">2018</option>
			<option value="2">2019</option>
			<option value="3">2020</option>
			<option value="4">2021</option>
		  </select>
		</form>
		
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
			<li class="nav-item">
              <a class="nav-link active" href="peta.html">Peta <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang</a>
            </li>
          </ul>
        </div>
      </nav>
	
      <div class="container-fluid" style="height:90%">
	  
	  <!-- BAGIAN PETA -->
        <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
		<script src="assets/leaflet-measure/leaflet-measure.js"></script>	
		<script src="assets/leaflet-mouseposition/L.Control.MousePosition.js"></script>

		<!-- sidebar popup -->
		<div id="sidebarpopup">
			<h5>INFORMASI</h5>
			<table>
			<tr>
			  <th>Wilayah Kerja</th> 
			  <td id='pop1'></td>
			</tr>
			<tr>
			  <th>Petak</th>
			  <td id='pop2'></td>
			</tr>
			<tr>
			  <th>Nomor Blok </th> 
			  <td id='pop3'></td>
			</tr>
			<tr>
			  <th>Nama Blok</th>
			  <td id='pop4'></td>
			</tr>
			<tr>
			  <th>Luas Blok</th> 
			  <td id='pop5'></td>
			</tr>
			<tr>
			  <th>HOK</th>
			  <td id='pop6'></td>
			</tr>
			<tr>
			  <th>Orang Terlibat</th> 
			  <td id='pop7'></td>
			</tr>
			<tr>
			  <th>Nilai HOK Kuartal 1</th>
			  <td id='pop8'></td>
			</tr>
			<tr>
			  <th>KPH</th> 
			  <td id='pop9'></td>
			</tr>
			<tr>
			  <th>Fungsi kws</th>
			  <td id='pop10'></td>
			</tr>
			<tr>
			  <th>Luas Petak</th> 
			  <td id='pop11'></td>
			</tr>
			<tr>
			  <th>Desa</th>
			  <td id='pop12'></td>
			</tr>
			<tr>
			  <th>Kecamatan</th> 
			  <td id='pop13'></td>
			</tr>
			<tr>
			  <th>Kabupaten</th>
			  <td id='pop14'></td>
			</tr>
			<tr>
			  <th>Provinsi</th> 
			  <td id='pop15'></td>
			</tr>
			</table>
		</div>		

		<div id='map'></div>
		<script type="text/javascript">
		var map = L.map('map').setView([3.2700,98.2590],8);
		
    	// basemap
		var googlemaps   = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3'],
			attribution: 'Google Satellite'
			});
			stamenterrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3'],
			attribution: 'Google Terrain'
			});
			osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
			});
		googlemaps.addTo(map);
		
		//Sidebar Popup
		var sidebarpopup = L.control.sidebar('sidebarpopup', {
            closeButton: true,
            position: 'left'
        });
        map.addControl(sidebarpopup);
		
		//geojson
			<!--DAS-->
			function tooltip(f,l){
			var out = [];
			if (f.properties){
				 out.push("DAS "+f.properties['NAMA_DAS']);
			 l.bindTooltip(out.join("<br />"));}
			}
			
			var batasDAS = new L.GeoJSON.AJAX(["assets/geojson/DAS.geojson"],{style: styleDAS, onEachFeature:tooltip}).addTo(map);
			
			<!--RHL-->
			map.createPane("pane_RHL");
			map.getPane("pane_RHL").style.zIndex = 400;
			function popUp(f,l){
			var out = [];
		   if (f.properties){
				 out.push("<table class='table table-borderless table-sm'>"+'<tr><th>Wilayah Kerja</th><td> '+f.properties['Wil_Kerja']+"</td></tr>"+'<tr><th>Petak</th><td>'+f.properties['Petak_OK']+"</td></tr>"+'<tr><th>Nomor Blok</th><td>'+f.properties['Nomor_BLOK']+"</td></tr>"+'<tr><th>Nama Blok</th><td> '+f.properties['Nama_BLOK']+"</td></tr>"+'<tr><th>KPH</th><td>'+f.properties['KPH']+"</td></tr>"+'<tr><th>Fungsi kws</th><td>'+f.properties['Fungsi_Kws']+"</td></tr>"+'<tr><th>Luas</th><td>'+f.properties['Luas_Ha']+"</td></tr>"+'<tr><th>Desa</th><td>'+f.properties['Desa']+"</td></tr>"+'<tr><th>Kecamatan</th><td>'+f.properties['Kecamatan']+"</td></tr>"+'<tr><th>Kabupaten</th><td>'+f.properties['Kabupaten']+"</td></tr>"+'<tr><th>Provinsi</th><td>'+f.properties['Provinsi']+"</td></tr></table>");
			 l.bindPopup(out.join("<br />"));
		//	 l.bindTooltip('Petak '+f.properties['Petak_OK'],{direction: 'center',permanent:true, className: 'styleLabel'});
			}}
			
			// SIDEBAR POPUP
			function panel (feature, layer) {
			  layer.on('click', function (e) {
			  //place attributes in panel table.
				var field1=document.getElementById('pop1');
				field1.innerHTML=e.target.feature.properties.Wil_Kerja
				var field2=document.getElementById('pop2');
				field2.innerHTML=e.target.feature.properties.Petak_OK
				var field3=document.getElementById('pop3');
				field3.innerHTML=e.target.feature.properties.Nomor_BLOK
				var field4=document.getElementById('pop4');
				field4.innerHTML=e.target.feature.properties.Nama_BLOK
				var field5=document.getElementById('pop5');
				field5.innerHTML=e.target.feature.properties.Luas_Blok
				var field6=document.getElementById('pop6');
				field6.innerHTML=e.target.feature.properties.HOK
				var field7=document.getElementById('pop7');
				field7.innerHTML=e.target.feature.properties.org_terlibat
				var field8=document.getElementById('pop8');
				field8.innerHTML=e.target.feature.properties.nilHOKkuart1
				var field9=document.getElementById('pop9');
				field9.innerHTML=e.target.feature.properties.KPH
				var field10=document.getElementById('pop10');
				field10.innerHTML=e.target.feature.properties.Fungsi_Kws
				var field11=document.getElementById('pop11');
				field11.innerHTML=e.target.feature.properties.Luas_Ha
				var field12=document.getElementById('pop12');
				field12.innerHTML=e.target.feature.properties.Desa
				var field13=document.getElementById('pop13');
				field13.innerHTML=e.target.feature.properties.Kecamatan
				var field14=document.getElementById('pop14');
				field14.innerHTML=e.target.feature.properties.Kabupaten
				var field15=document.getElementById('pop15');
				field15.innerHTML=e.target.feature.properties.Provinsi
				//!! NOTE: PINDAH POPUP KE SINI
			  });
			}
			
			var blokRHL = new L.GeoJSON.AJAX(["assets/geojson/blokRHL.geojson"],{pane: "pane_RHL", style: style, onEachFeature: panel}).addTo(map).on('click', function () {
            sidebarpopup.toggle();
        });		
			
			<!-- Foto -->
			var markers = L.markerClusterGroup();
			
			var titik = new L.GeoJSON.AJAX(["assets/geojson/Seb_Stabat.geojson"],{style: style, onEachFeature:function (f,l){
			var out = [];
			if (f.properties){
			 out.push("Foto: <br>"+"<img src='"+f.properties['gambar']+ "'/>");
			 l.bindPopup(out.join("<br />"));
			}
			}});
			titik.on('data:loaded', function () {
			markers.addLayer(titik);
			});	
		
		
		//CONTROL LAYER
		var baseLayers = {
				"Google Maps Sattelite": googlemaps,
				"Google Stamen Terrain": stamenterrain,
				"OpenStreetMap": osm
			};
		var overlays = {
				"Blok RHL": blokRHL,
				"Batas DAS": batasDAS,
				"Titik Foto": markers,
			};
		
		//judul
			var info = L.control();
			info.onAdd = function (map) {
				this._div = L.DomUtil.create('div', 'info');
				this.update();
				return this._div;
			};
			info.update = function (props) {
				this._div.innerHTML =  (props ?
					'<br />'
					: 'Klik pada peta untuk menampilkan informasi');
			};
		
			info.addTo(map);
			L.control.layers(baseLayers, overlays, {collapsed:false}).addTo(map);
		
		//warna (klasifikasi)	
			function getColor(KLS) {
				return  KLS == 'BBKSDA' ?'#ff2d00' :
						KLS == 'BBTNGL' ? '#ffbd00' :
						KLS == 'Aceh V' ? '#f0ff00' :
						KLS == 'Aceh VI' ? '#74ff00' :
						KLS == 'Kabanjahe' ?'#00ffbd' :
						KLS == 'Pematangsiantar' ? '#0097ff' :
						KLS == 'Sidikalang' ? '#9b00ff' :
						KLS == 'Stabat' ? '#ff00c9' :
						KLS == 'TAHURA' ? ' #e74c3c  ' :
									'#FFEDA0';
			}

			function style(feature) {
				return {
					weight: 2,
					opacity: 0.5,
					color: getColor(feature.properties.KPH),
					dashArray: '3',
					fillOpacity: 0.1,
					fillColor: getColor(feature.properties.KPH)
				};
			}
			function styleDAS(feature) {
				return {
					weight: 2.5,
					opacity: 0.5,
					color: 'white',
					dashArray: '3',
					//fillOpacity: 0.3,
					//fillColor: getColor(feature.properties.KPH)
				};
			}
			
		//==============================Mouse Coordinate
		L.control.mousePosition({
			separator: ',',
			prefix: 'Koordinat : '
			}).addTo(map);
	  
		//========================Scale Bar================
		L.control.scale({
			maxWidth: 150,
			imperial: false,
			}).addTo(map);
		
		//=============Geolocation
        var locateControl = L.control.locate({
			position: "topleft",
			drawCircle: true,
			follow: true,
			setView: true,
			keepCurrentZoomLevel: false,
			markerStyle: {
			 weight: 1,
			 opacity: 0.8,
			 fillOpacity: 0.8,
			},
			circleStyle: {
			 weight: 1,
			 clickable: false,
			},
			icon: "fa fa-crosshairs",
			metric: true,
			strings: {
			title: "Klik untuk mengetahui lokasimu",
			popup: "Lokasimu sekarang di sini. Akurasi {distance} {unit}",
			outsideMapBoundsMsg: "Kamu berada di luar area peta"
			},
			locateOptions: {
			maxZoom: 15,
			watch: true,
			enableHighAccuracy: true,
			maximumAge: 10000,
			timeout: 10000
			}
		}).addTo(map);
	  
	  //============measurement
		var measureControl = new L.Control.Measure({
			primaryLengthUnit: 'meters',
			secondaryLengthUnit: 'kilometers',
			primaryAreaUnit: 'hectares',
			secondaryAreaUnit: 'sqmeters',
			activeColor: 'green',
			completedColor: 'blue'
		});
		measureControl.addTo(map);
     </script>	 
	 <!-- BATAS BAGIAN PETA -->
	 
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  
  <!-- FlyTo --> 
	<script src="assets/js/zoomto.js"></script>

</body>

</html>