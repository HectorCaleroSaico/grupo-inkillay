<?php
	class Logout
	{
		public function cerrar()
		{
			session_start();
			session_unset();
			session_destroy();
			$arrResponse = array('status' => true, 'msg' => 'Sesion Cerrada');

			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

		}

	}
 ?>