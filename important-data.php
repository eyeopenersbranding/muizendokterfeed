<?php
$Page_id="log";
session_start();
include_once 'dbconnect.php';


if (isset($_SESSION['usr_id'])) {

} else {
    header('Location: login.php');

}

include 'page_includes/ikwil_redirect_core.php';
?>

<?php include 'page_includes/header.php';?>

<body>


	<?php include 'page_includes/aside.php';?>
        <!-- Left Panel -->




    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

		<?php include 'page_includes/menu.php';?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Logboek invoeren</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Logboek</a></li>
                            <li class="active">invoeren</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

   <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bestrijders NL</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Naam</th>
                                  <th scope="col">Adres</th>
								  <th scope="col">Telefoonnummer</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
									<td>Adriano Costa</td>
                                  <td>Eikenlaan 17 Zaandijk</td>
								  <td>06 1475 3722</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Kay Servania</td>
                                  <td>Papenhof 10 Breda</td>
                                  <td>06 4132 4702</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Wesley Aarts</td>
                                  <td>Sibeliusstraat 521 Tilburg</td>
                                  <td>06 4152 6364</td>
                                </tr>
								   <tr>
                                  <th scope="row">4</th>
                                  <td>Lars Janssen</td>
                                  <td>Azeleastraat 27 Putte</td>
                                  <td>06 4279 8118</td>
                                </tr>
								<tr>
                                  <th scope="row">5</th>
                                  <td>Johnno van der Meulen</td>
                                  <td>Bisonstraat 51 Purmerend</td>
                                  <td>06 4184 7009</td>
                                </tr>
								   <tr>
                                  <th scope="row">6</th>
                                  <td>Edwin Wirian</td>
                                  <td>Graaf Janstraat 56 Beverwijk</td>
                                  <td>06 4264 5129</td>
                                </tr>
								   <tr>
                                  <th scope="row">7</th>
                                  <td>Lievijn Koopmans</td>
                                  <td>Boreasplantsoen 73 Arnhem</td>
                                  <td>06 2889 5257</td>
                                </tr>
								<tr>
                                  <th scope="row">8</th>
                                  <td>Jonathan Andres</td>
                                  <td>Meidoornlaan 41</td>
                                  <td>06 1854 2010</td>
                                </tr>
								<tr>
                                  <th scope="row">9</th>
                                  <td>Yasin Delibalta</td>
                                  <td>Moerweg 192 Den haag</td>
                                  <td>06 4264 5128</td>
                                </tr>
								<tr>
                                  <th scope="row">10</th>
                                  <td>Martijn Glas</td>
                                  <td>Ingelandslag 33 Gouda</td>
                                  <td>06 1475 3732</td>
                                </tr>
								<tr>
                                  <th scope="row">11</th>
                                  <td>Steven Ceelen</td>
                                  <td>Sportlaan 10 Ouderkerk aan de IJssel</td>
                                  <td>06 4164 7714</td>
                                </tr>
								<tr>
                                  <th scope="row">12</th>
                                  <td>Koen Baakman</td>
                                  <td>Zuidhoek 254 Rotterdam</td>
                                  <td>06 4143 0031</td>
                                </tr>
								<tr>
                                  <th scope="row">13</th>
                                  <td>Colin Walda</td>
                                  <td>Zwaluwstraat 16 De lutte</td>
                                  <td>06 1497 4613</td>
                                </tr>
								<tr>
                                  <th scope="row">14</th>
                                  <td>Kaston Timmermans</td>
                                  <td>De nije nering 56 Hoogeveen</td>
                                  <td>06 4301 8878</td>
                                </tr>
								<tr>
                                  <th scope="row">15</th>
                                  <td>Eelco van der Laan</td>
                                  <td>Wormerveerstraat 218 Den Haag</td>
                                  <td>06 4132 4696</td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Pascal van Vliet</td>
                                    <td>Berestein 10 Kwintsheul</td>
                                    <td>06 3410 5075</td>
                                  </tr>
                                  <tr>
                                      <th scope="row">17</th>
                                      <td>Joost de Laat</td>
                                      <td>Boogschutter 57 Schijndel</td>
                                      <td>06 4143 0037</td>
                                    </tr>
                                    <tr>
                                  <th scope="row">18</th>
                                  <td>Barry de Berg</td>
                                  <td>Watermolenhoek 26 Gouda</td>
                                  <td>06 1446 9899</td>
                                </tr>
                                <tr>
                              <th scope="row">19</th>
                              <td>Michael van Putten</td>
                              <td>Warmoesstraat 1 Amsterdam</td>
                              <td>06 4228 7585</td>
                            </tr>
                            <tr>
                          <th scope="row">20</th>
                          <td>Bidjai Biharie</td>
                          <td></td>
                          <td>06 1475 3729</td>
                        </tr>

                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

				<div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bestrijders Belgium</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Naam</th>
                                  <th scope="col">Adres</th>
								  <th scope="col">Telefoonnummer</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mathias Verbeek</td>
                                  <td>Everselstraart 11 Beringen</td>
								  <td>06 2835 7213</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Kenny de Keyser</td>
                                  <td>Dokter Carlierstraat 20 Humbeek</td>
                                  <td>06 4302 4446</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Frederick van Nieuwenhuyze</td>
                                  <td>Erembodegem-dorp 115 Erembodegem</td>
                                  <td>06 3408 2474</td>
                                </tr>
								<tr>
                                  <th scope="row">4</th>
                                  <td>Thijs van der Putten</td>
                                  <td>-</td>
                                  <td>06 1464 5112</td>
                                </tr>
								<tr>
                                  <th scope="row">5</th>
                                  <td>Kevin de Winter</td>
                                  <td>Kapellestraat 3 Aartselaar</td>
                                  <td>06 4151 2213</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>


				<div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Houtworm</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Naam</th>
								  <th scope="col">Telefoonnummer</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Marcel Luijendijk</td>
								  <td>06 1475 3730</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Robin Hesseling</td>
                                  <td>06 4264 5120</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Nando Villevoije (hulp)</td>
                                  <td>06 1900 9151</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>



				   <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Interne nummers</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Naam</th>
                                  <th scope="col">Intern nummer</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Kristof de Cleyn</td>
                                  <td>239</td>
                                </tr>
								<tr>
                                  <th scope="row">2</th>
                                  <td>Sandra van Dommelen</td>
                                  <td>212</td>
                                </tr>
								<tr>
                                  <th scope="row">3</th>
                                  <td>Shanna Hamels</td>
                                  <td>207</td>
                                </tr>
								<tr>
                                  <th scope="row">4</th>
                                  <td>Richelle Mauriks</td>
                                  <td>218</td>
                                </tr>
								<tr>
                                  <th scope="row">5</th>
                                  <td>Maruschka Timisela</td>
                                  <td>210</td>
                                </tr>
								<tr>
                                  <th scope="row">6</th>
                                  <td>Geert van Morkhoven</td>
                                  <td>233</td>
                                </tr>
								<tr>
                                  <th scope="row">7</th>
                                  <td>Eva Tuller</td>
                                  <td>206</td>
                                </tr>
								<tr>
                                  <th scope="row">8</th>
                                  <td>Eva Tuller</td>
                                  <td>240</td>
                                </tr>
								<tr>
                                  <th scope="row">9</th>
                                  <td>Rein van Groenendael</td>
                                  <td>215</td>
                                </tr>
								<tr>
                                  <th scope="row">10</th>
                                  <td>Nathalie Uijthoven</td>
                                  <td>220</td>
                                </tr>
								<tr>
                                  <th scope="row">11</th>
                                  <td>Carlos Keijzers</td>
                                  <td>211</td>
                                </tr>
								<tr>
                                  <th scope="row">12</th>
                                  <td>Don van Gerwen</td>
                                  <td>243</td>
                                </tr>
								<tr>
                                  <th scope="row">13</th>
                                  <td>Nimet Bal</td>
                                  <td>230</td>
                                </tr>
								<tr>
                                  <th scope="row">14</th>
                                  <td>Offline diensten</td>
                                  <td>208, 221, 201</td>
                                </tr>

                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>


					   <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Overig</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Naam</th>
								  <th scope="col">Telefoonnummer</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Don van Gerwen</td>
								  <td>06 5025 4127</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Rein van Groenendeal</td>
								  <td>06 2765 4321</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Nathalie Uijthoven Zakelijk</td>
                  <td>06 4301 8898</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->



    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>

	 <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

</body>
</html>
