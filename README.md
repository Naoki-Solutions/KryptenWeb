# Krypten
Esta es una red propia de Incaflex, en donde podras encontrar todo tipo de "Gremios" con distinto contenido.

## Utilidad
Estar en una red, con distintos gremios, y con libertad de expresion.

## ¿Como funciona?
Krypten para el back-end solo utiliza php y MySQL. Los usuarios y los mensajes de los servidores se almacenan en una misma base de datos. 

## TO-DO:
    - [ ] Terminar la UI
    - [ ] Hacer el menu 
    - [ ] Hacer los gremios predeterminados
    - [ ] Hacer el menu desplegable

    - [ ] **Lanzar Krypten**

## Requerimientos
- PHP 8.1 o Superior
- MySQL

## Como desplegar
### LocalHost
- Descargue el .zip del repositorio
- El contenido pongalo en C:/xampp/htdocs
- Inicie Apache y MySQL

**phpMyAdmin**
- Ejecute el siguiente MySQL Query dentro de phpMyAdmin
```sql
CREATE DATABASE krypten;

use krypten;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

**config.php (./assets/php/config.php)**

```php
define('servername', 'localhost');
define('username', 'root');
define('password', ''); // De tener una contraseña para el usuario pongala aqui
define('dbname', 'discogram');
 
$conn = mysqli_connect(servername, username, password, dbname);
 
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
```

- Reinicie Apache y MySQl desde XamPP
