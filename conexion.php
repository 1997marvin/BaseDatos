<? php 	
	 Conexion clase {
		 $ host privado ;
		privado  $ db ;
		 usuario privado $ ;
		 contraseña privada de $ ;
		privado  $ charset ;
		 función  pública __construct () {
			$ this -> host      = "localhost" ;
			$ this -> db        = "serv_social" ;
			$ this -> user      = "root" ;
			$ this -> contraseña = "" ;
			$ this -> charset   = "utf8mb4" ;
		}
		función  connect () {
		
			prueba {
				$ conexión = "mysql: host =" . $ this -> host . "; dbname =" . $ this -> db . "; charset =" . $ this -> juego de caracteres ;
				$ pdo = new  PDO ( $ conexión , $ this -> usuario , $ this -> contraseña );
		
				devolver  $ pdo ;
			} catch ( PDOException  $ e ) {
				print_r ( 'Error de conexión:' . $ e -> getMessage ());
			}   
		}
	}
?>
