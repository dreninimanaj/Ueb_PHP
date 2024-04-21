<?php include 'header.php'; ?>
<script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
	  <!DOCTYPE html>
<html>
<head>
	<title>Kodet e Policise</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap">

	<style>

		
		.table-container {
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			padding: 20px;
			max-width: 750px;
			margin: 0 auto;
			margin-top: -10;
			
		}

		table {
  max-width: 900px; /* Adjust the width as desired */
  margin: 0 auto; /* Center the table horizontally */
  border-collapse: collapse;
}


		th, td {
			padding: 10px;
			text-align: left;
		}

		thead {
			background-color: #333;
			color: #fff;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #ddd;
		}

		.code {
			background-color: red;
			color: #fff;
			padding: 5px 10px;
			border-radius: 5px;
		}

		.description {
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="table-container">
		<table>
			<thead>
				<tr>
					<th>Kodi</th>
					<th>Kuptimi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><span class="code">10-1</span></td>
					<td><span class="description">Nuk po kuptoj</span></td>
				</tr>
				<tr>
					<td><span class="code">10-3</span></td>
					<td><span class="description">Ne drejtim te Spitalit (PA PACIENT)</span></td>
				</tr>
				<tr>
					<td><span class="code">10-4</span></td>
					<td><span class="description">Pranim (Kopje ose Kuptova)</span></td>
				</tr>
				<tr>
					<td><span class="code">10-6</span></td>
					<td><span class="description">I Zene por mund te reagoj nese duhet patjeter</span></td>
				</tr>
				<tr>
					<td><span class="code">10-7</span></td>
					<td><span class="description">Vetura ne gjendje te shkaterruar</span></td>
				</tr>
				<!-- Add more rows for the remaining codes -->
				<tr>
					<td><span class="code">10-8</span></td>
					<td><span class="description">I gatshem per te pranuar thirrje</span></td>
				</tr>
				<tr>
					<td><span class="code">10-9</span></td>
					<td><span class="description">Perserite mesazhin e fundit</span></td>
				</tr>
				<tr>
					<td><span class="code">10-10</span></td>
					<td><span class="description">Rrahje - Pa arme</span></td>
				</tr>
				<tr>
					<td><span class="code">10-11</span></td>
					<td><span class="description">Ndalje Trafiku</span></td>
				</tr>
				<tr>
					<td><span class="code">10-12</span></td>
					<td><span class="description">Ne pritje</span></td>
				</tr>
				<tr>
					<td><span class="code">10-13</span></td>
					<td><span class="description">Gjuajtje me arme</span></td>
				</tr>
				<tr>
					<td><span class="code">10-14</span></td>
					<td><span class="description">Shitje e droges ne proces</span></td>
				</tr>
				<tr>
					<td><span class="code">10-15</span></td>
					<td><span class="description">Ne drejtim te spitalit</span></td>
				</tr>
				<tr>
					<td><span class="code">10-19</span></td>
					<td><span class="description">Ne drejtim te stacionit</span></td>
				</tr>
				<tr>
					<td><span class="code">10-20</span></td>
					<td><span class="description">Lokacioni</span></td>
				</tr>
				<tr>
					<td><span class="code">10-21</span></td>
					<td><span class="description">Thirrje 911</span></td>
				</tr>
				<tr>
					<td><span class="code">10-22</span></td>
					<td><span class="description">Anuloje (Shperfille)</span></td>
				</tr>
				<tr>
					<td><span class="code">10-23</span></td>
					<td><span class="description">Mberrin ne Skene</span></td>
				</tr>
				<tr>
					<td><span class="code">10-24</span></td>
					<td><span class="description">Mbarova me rastin e fundit</span></td>
				</tr>
				<tr>
					<td><span class="code">10-26</span></td>
					<td><span class="description">I dyshuari ne ndalim</span></td>
				</tr>
				<tr>
					<td><span class="code">10-27</span></td>
					<td><span class="description">Tentim per shitje droge</span></td>
				</tr>
				<tr>
					<td><span class="code">10-28</span></td>
					<td><span class="description">Duke kontrolluar targa</span></td>
				</tr>
				<tr>
					<td><span class="code">10-30</span></td>
					<td><span class="description">Pastroni radion (mbani paster)</span></td>
				</tr>
				<tr>
					<td><span class="code">10-33</span></td>
					<td><span class="description">Butoni i Panikes (Nevojitet asistence e menjehershme)</span></td>
				</tr>
				<tr>
					<td><span class="code">10-37</span></td>
					<td><span class="description">Veture e dyshuar</span></td>
				</tr>
				<tr>
					<td><span class="code">10-35</span></td>
					<td><span class="description">Veture e vjedhur</span></td>
				</tr>
				<tr>
					<td><span class="code">10-41</span></td>
					<td><span class="description">Fillon detyren</span></td>
				</tr>
				<tr>
					<td><span class="code">10-42</span></td>
					<td><span class="description">Mbaron detyren</span></td>
				</tr>
				<tr>
					<td><span class="code">10-46</span></td>
					<td><span class="description">Tentim vjedhje e shitores</span></td>
				</tr>
				<tr>
					<td><span class="code">10-50</span></td>
					<td><span class="description">Aksident mes veturave</span></td>
				</tr>
				<tr>
					<td><span class="code">10-52</span></td>
					<td><span class="description">Nevojitet EMS</span></td>
				</tr>
				<tr>
					<td><span class="code">10-59</span></td>
					<td><span class="description">Ne percjellje te VIP/EMS</span></td>
				</tr>
				<tr>
					<td><span class="code">10-60</span></td>
					<td><span class="description">Renje e dyshuar nga qielli (Dropi)</span></td>
				</tr>
				<tr>
					<td><span class="code">10-72</span></td>
					<td><span class="description">Situat me Hostage (Pengmarrje)</span></td>
				</tr>
				<tr>
					<td><span class="code">10-73</span></td>
					<td><span class="description">Raportohet per Eksplodim te mjetit</span></td>
				</tr>
				<tr>
					<td><span class="code">10-74</span></td>
					<td><span class="description">Negativ</span></td>
				</tr>
				<tr>
					<td><span class="code">10-76</span></td>
					<td><span class="description">Ne drejtim</span></td>
				</tr>
				<tr>
					<td><span class="code">10-77</span></td>
					<td><span class="description">Koha e arritjes</span></td>
				</tr>
				<tr>
					<td><span class="code">10-78</span></td>
					<td><span class="description">Kerkohet Asistence (ndihme)</span></td>
				</tr>
				<tr>
					<td><span class="code">10-80</span></td>
					<td><span class="description">Ndjekje e te dyshuarit (me kembe ose veture)</span></td>
				</tr>
				<tr>
					<td><span class="code">10-90</span></td>
					<td><span class="description">Vjedhje e Bankes / Shitoreve /ATM</span></td>
				</tr>
				<tr>
					<td><span class="code">10-91</span></td>
					<td><span class="description">Vjedhje e kontinjerave</span></td>
				</tr>
				<tr>
					<td><span class="code">10-95</span></td>
					<td><span class="description">Transport i te dyshuarve</span></td>
				</tr>
				<tr>
					<td><span class="code">10-99</span></td>
					<td><span class="description">Situate e staffit</span></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>

</div>

		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>