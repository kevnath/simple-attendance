<?php

	abstract class Repository {

		protected $db;

		public function init() {
			$this->db = new PDO('mysql:host=ap-cdbr-azure-southeast-b.cloudapp.net;dbname=absensi;port:3306', 'b90ff032267402', '87acaf4f');
			#$this->db = new PDO('mysql:host=localhost;dbname=absensi;port=3306', 'root', '');
			$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		}

	}
