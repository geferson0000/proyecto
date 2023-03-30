# proyecto MVC usando APIs

Este proyecto es una extension al modelo MVC de la rama [master](https://github.com/geferson0000/proyecto/tree/master)

## tips de instalacion

* revisar archivo ```config.php``` que es donde se encuentra las variables globales
* verificar si tienes permitido la edicion por archivo ```.htaccess``` si no ayuda [aqui puedes configurar](https://jclopex.medium.com/como-hacer-funcionar-htaccess-en-apache2-y-debian-9-28d16b2ef95a)
  * si estas en linux tan solo tienes puedes seguir este ejemplo:
* 1- colocar el proyecto en esta direccion ```/var/www/html/<aqui>```
* 2- ir a esta direccion ```/etc/apache2/apache2.conf```
* 3- modificar esta parte del codigo de ese archivo por:

```
<Directory /var/www/>
	Options Indexes FollowSymLinks
	AllowOverride All
	Require all granted
</Directory>
```

* 4- luego en la terminal activar el modo Rewrite de apache:

```
sudo a2enmod rewrite
``` 

* 5- y reiniciar el servidor apache con el siguiente codigo 

```
sudo systemctl restart apache2
```

* 6- ejecutar el archivo ```.sql``` ubicado en ```proyecto/models/SQL/app.sql``` con mysql:

```
mysql -u root -p < app.sql
```

## preview: 


\
![vista de la pagina estudiante](./views/public/img/studentView.png)

\
![vista de la pagina pagina principal](./views/public/img/mainView.png)
