<?php 
	
    //Clase
	class Mysql extends Conexion
	{
		private $conexion;
		private $cerrar_conexion;
		private $strquery;
		private $arrValues;

		function __construct()
		{
			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->conect();
		}

		//Insertar un registro
		public function insert(string $query, array $arrValues)
		{
			$this->strquery = $query;
			$this->arrVAlues = $arrValues;
        	$insert = $this->conexion->prepare($this->strquery);
        	$resInsert = $insert->execute($this->arrVAlues);
        	if($resInsert)
	        {
	        	$lastInsert = $this->conexion->lastInsertId();
	        }else{
	        	$lastInsert = 0;
	        }

	        return $lastInsert; 
		}

		//Insertar un registro
		public function inserta(string $query, array $arrValues)
		{
			$this->strquery = $query;
			$this->arrVAlues = $arrValues;
        	$insert = $this->conexion->prepare($this->strquery);
        	$resInsert = $insert->execute($this->arrVAlues);
        	if($resInsert)
	        {
	        	$lastInsert = 1;
	        }else{
	        	$lastInsert = 0;
	        }

	        return $lastInsert; 
		}

		//Busca un registro SOLO Leer
		public function select(string $query)
		{
			$this->strquery = $query;
        	$result = $this->conexion->prepare($this->strquery);
			$result->execute();
            //(fetch) Solo me retorna un arreglo
        	$data = $result->fetch(PDO::FETCH_ASSOC);

        	return $data;
		}

		public function select_single(string $query)
		{
			$result = $this->select($query);
			return ($result) ? $result : null;
		}

		//Devuelve todos los registros
		public function select_all(string $query)
		{
			$this->strquery = $query;
        	$result = $this->conexion->prepare($this->strquery);
			$result->execute();
            //(fetchall) Me retorna varios arreglos
        	$data = $result->fetchall(PDO::FETCH_ASSOC);

        	return $data;
		}

		//Actualiza registro
		public function update(string $query, array $arrValues)
		{
			$this->strquery = $query;
			$this->arrValues = $arrValues;
			$update = $this->conexion->prepare($this->strquery);
			$resExecute = $update->execute($this->arrValues);
			if($update->rowCount() > 0) // Verifica si alguna fila fue afectada
			{
				return 1; // Devuelve 1 si la consulta afectó a alguna fila
			}else{
				return 0; // Devuelve 0 si la consulta no afectó a ninguna fila
			}

		}

		//Eliminar un registro
		public function delete(string $query)
		{
			$this->strquery = $query;
        	$result = $this->conexion->prepare($this->strquery);
			$del = $result->execute();

        	return $del;
		}	

		public function bulkinsert(string $query)
		{
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$result ->execute();
		}

		public function bulkinsert_prueba(string $query, array $params = []) {
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$result->execute($params);

		}


		
	}


 ?>