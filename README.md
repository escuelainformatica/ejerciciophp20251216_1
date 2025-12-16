# Instalar laravel

```bash
laravel new example-app
```

Una vez instalado, abrir la carpeta en visual studio code.


```bash
composer run dev
o sino
php artisan serve
```

Y abra la pagina http://localhost:8000

# carpetas

* app Es donde tenemos el codigo en general.
* app/Http/Controllers tenemos los controladores
* routes Es donde creamos el enrutamiento.  Puede tener diferentes canales (web.php)
* resources/views Es donde quedan las vistas.

## Ejercicio: Crear una aplicacion para que un usuario ingrese dos números y entregue la suma.

* Rutas:
  * /ingreso
  * /resultado
* Controladores:
    * CalculadoraController
        * funcion/accion ingreso
        * funcion/accion resultado
* Vistas:
    * calculadora.formularioingreso
    * calculadora.resultado

### 1) Rutas
Las rutas no las puedo crear hasta tener los controladores.

### 2) Controlador

En la linea de comando:
```
php artisan make:controller CalculadoraController
```

Una vez creado la clase controladora, cree dos funciones dentro de la clase:

```php
    public function ingreso() {

    }
    public function resultado() {
        
    }
```

### 3) Rutas
Con el controlador y las acciones, podemos crear los enrutamientos.
Edite /routes/web.php y agregue las siguientes lineas:

```php
Route::get('/ingreso',[CalculadoraController::class,'ingreso']);
Route::get('/resultado',[CalculadoraController::class,'resultado']);
```

### 4) Crear vistas
En el terminal, ejecute lo siguiente:

```
php artisan make:view calculadora.formularioingreso
php artisan make:view calculadora.resultado
```

Nota: Todavia los controladores no usan las vistas.

Enrutamiento(web.php ) --> Controlador (accion) --> vista.

### 5) Edite las acciones del controlador.

```php
    public function ingreso() {
        return view("calculadora.formularioingreso");
    }
    public function resultado() {
        return view("calculadora.resultado");
    }
```

### 6) Vamos a editar las vistas

formularioingreso.blade.php
```html
<form>
    Num1:<input type="number" name="numero1"/><br/>
    Num2:<input type="number" name="numero2"/><br/>
    <input type="submit" name="enviar" value="enviar"/>
</form>
```

resultado.blade.php
```html
<div>
    El resultado es <b>00000000000000</b>
</div>
```

### 7) Unir controlador con valores

```
                        / ingreso() --------------> formularioingreso.blade.php
CalculadoraController -
                        \ resultado() ----total---> resultado.blade.php
```

Vamos a modificar la funcion resultado de CalculadoraController para que envie la variable total (de momento en cero) hacia la vista

```php
    public function resultado() {
        $total=0;
        return view("calculadora.resultado",["total"=>$total]);
    }
```
Y en la vista muestre el valor como sigue:

```html
<div>
    El resultado es <b>{{ $total }}</b>
</div>
```

### 8) Modifique la vista formularioingreso

Al enviar el formulario, deberia enviar los datos a la ruta /resultado

```html
<form action="/resultado">
    Num1:<input type="number" name="numero1"/><br/>
    Num2:<input type="number" name="numero2"/><br/>
    <input type="submit" name="enviar" value="enviar"/>
</form>
```
> Notas:
> Tengo que escribir un tag <form>
> Los elementos de ingreso tienen que tener nombre.
> Tengo que tener un boton en envio (submit)
> Opcionalmente el formulario puede tener un metodo y una accion

### 9) Modificar funcion controlador

Vamos a modificar la function del controlador para que lea los valores recibidos por el usuario

```php
    public function resultado(Request $request) { // <-- $request sirve para obtener los valores enviados por el usuario
        $total=$request->query("numero1",0)+$request->query("numero2",0);
        return view("calculadora.resultado",["total"=>$total]);
    }
```
