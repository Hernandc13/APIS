                                                                    SUBITUS API TIENDA
1.-Accediendo a archivo para la conexión a MySql: 
    Dentro del navegador se deberá colocar el siguiente url: http://localhost/API_tienda/Conexion/Conexion.php , 
    dentro del cual tenemos la configración de la conexión hacia nuestra base de datos, integrando la información 
    solicitada como es:

        *Host.
        *Nombre de la base de datos que se va utilizar.
        *Usuario y Contraseña.

    Si los datos registrados son correctos deberiamos tener una respuesta de conexión, exitosa.
    Respuesta de la Conexión: "Conexión Exitosa".

2.-Accediendo a archivo ConsultaProducto.php:
    Dentro del navegador se debera colocar el siguiente url:http://localhost/API_tienda/Transacciones/ConsultaProducto.php, 
    dentro del cual se realiza la conexión a base de datos y se hace una consulta de la tabla Productos en Mysql para que , 
    nos devuelva la información de tabla en caso de que existan registros en ella.

    Si existe información ya registrada en la tabla se debe mostrar una respuesta como la siguiente:

        *Imagen de Producto.
        *Cantidad de Productos Encontrados.
        *Nombre de la categoria al que pertenece el Producto.
        *Nombre del Producto.
        *Precio.
        *Descripción del Producto.

        Ejemplo:
        Foto.
        Se encontraron 5 Productos         
        Categoria del Producto: Telefonía móvil =>Nombre: Iphone 12 Pro => Precio: $24000 => Descripción: 8 GB RAM


3.-Accediendo a archivo ConsultaCategoria.php:
    Dentro del navegador se deberá colocar el siguiente url:http://localhost/API_tienda/Transacciones/ConsultaCategoria.php,
    al cargar la página se deberá selecionar el nombre de la categoria de la cual queremos filtrar los productos, si existen
    produtcos con la categoria seleccionada se debe mostrar la información de la siguiente manera:

        *Imagen de Producto.
        *Cantidad de Productos encontrados en ese categoria.
        *Nombre de la categoria.
        *Nombre del Producto.
        *Precio.
        *Descripcioón del Producto.

        Ejemplo:
        Foto.
        Se encontraron 1 Productos              Nombre: Refrigerador => Precio: $5800 => Descripción: Color Rojo
        Categoria: Electrodomésticos

4.-Accediendo a archivo para consultar las categorias registradas: 
    Dentro del navegador se deberá colocar el siguiente url:http://localhost/API_tienda/Transacciones/Categorias.php , 
    dentro del cuál tenemos la consulta a la tabla de las categorias de nuestra base de datos.

    Si existen registros en la tabla de la base de datos deberíamos obtener una lista de las categorias existentes.
    Respuesta: 
               *Se encontraron 4 Categorias
               *1Electrodomésticos
               *2Computación
               *3Telefonía móvil
               *4Accesorios
            
5.-Accediendo a archivo para eliminar categorias registradas:
     Dentro del navegador se deberá colocar el siguiente url:http://localhost/API_tienda/Transacciones/Categorias.php
     en el cual tenemos la configuración para poder eliminar una categoria registrada, mediante un select se podrá, seleccionar
     el nombre de una categoria, al dar click el sistema arrojara un mensaje de confirmación.

     Resultado:
                "Se elimino la categoria".
    
