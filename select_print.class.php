<?php
// Istanzio una classe
class SelectPrint
{
	// Disabilito la variabile $conn all’accesso globale ad altri oggetti e funzioni
	protected $conn;
		//"Metodo Magico" per personalizzare e favorire i parametri di una classe 
		public function __construct()
		{
			$this->DbConnect();
		}
		// Connessione Database
		protected function DbConnect()
		{
			include "db_config.php";
			
			$this->conn = mysqli_connect($host,$user,$password) OR die("Impossibile connettersi al database");
			mysqli_select_db($this->conn,$db) OR die("Impossibile selezionare il database $db");
			
			return TRUE;
		}
		// // Funzione Mostra = COUNTRY Departure
		public function ShowCountryDeparture()
		{
			// Seleziono la tabella e la ordino
			$sql = "SELECT * FROM airport ORDER BY airport.name ASC";
			// Avvio il collegamento
			$res = mysqli_query($this->conn, $sql);
			$name = '<option value="0">Da dove vuoi partire?</option>';
			
				while($row = mysqli_fetch_array($res))
				{
					$name .= '<option value="' . $row['id_airport'] . '">' . utf8_encode($row['name']) . '</option>';
				}
				
			return $name;
		}
		// // Funzione Mostra = COUNTRY Arrival
		public function ShowCountryArrival()
		{
			// Seleziono la tabella e la ordino
			$sql = "SELECT * FROM airport ORDER BY airport.name ASC";
			// Avvio il collegamento
			$res = mysqli_query($this->conn, $sql);
			$name = '<option value="0">Dove vuoi andare?</option>';
			
				while($row = mysqli_fetch_array($res))
				{
					$name .= '<option value="' . $row['id_airport'] . '">' . utf8_encode($row['name']) . '</option>';
				}
				
			return $name;
		}
		// Funzione Mostra = PRINT & SEARCH
		public function PrintSearchDeparture()
		{	
			// Bypasso errore se è indefinto
			if (isset($_GET['id_airport'])) {
				# code...
				$name = ($_GET['id_airport']);

				$sql = "SELECT * FROM airport WHERE id_airport LIKE '%$name%'";
				$res = mysqli_query($this->conn, $sql);
				while ($row = mysqli_fetch_array($res)) {
					// var_dump($row);
					echo '<div class="mt-3 border-top border-bottom">'
					. '<div id=" '. $row['id_airport'] .' ">Partenza: ' . utf8_encode($row['name']) . '</div>'. 
					'</div>';
				}
			}
		}
		// Funzione Mostra = PRINT & SEARCH
		public function PrintSearch()
		{	
			// Bypasso errore se è indefinto
			if (isset($_GET['code_arrival'])) {
				# code...
				$code = ($_GET['code_arrival']);
				
				$sql = "SELECT * FROM flight, airport WHERE code_arrival LIKE '%$code%'  ORDER BY flight.price ASC LIMIT 5 ";
				$res = mysqli_query($this->conn, $sql);
				while ($row = mysqli_fetch_array($res)) {
					// var_dump($row);
					echo '<div class="mt-3 border-top border-bottom">'
					. '<div id=" '. $row['code_arrival'] .' ">Destinazione: ' . utf8_encode($row['name']) . '</div>' 
					. '<div id=" '. $row['code_arrival'] .' ">Codice Aereoportuale: ' . utf8_encode($row['code']) . '</div>' .
					'<div id=" '. $row['code_arrival'] .' ">Latitudine: ' . utf8_encode($row['lat']) . '</div>' .
					'<div id=" '. $row['code_arrival'] .' ">Longitudine: ' . utf8_encode($row['lng']) . '</div>' .
					'<div id=" '. $row['code_arrival'] .' ">Costo Viaggio: € ' . utf8_encode($row['price']) . '</div>' . 
					'</div>';
				}
			}
		}
}

?>