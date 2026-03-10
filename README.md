# Realizando un crud

## 1.- Creo el ecosistema de las clases que necesito

```bash
php artisan make:model Teacher --all
```

## 2.- Añado las rutas (REST API)

escribo en /routes/web.php

```php
use App\Http\Controllers\TeacherController;
Route::resource("teachers", TeacherController::class)
```

## 3- Creamos la BD y la poblamos

Todo esto están en migraciones, factory y seeders de la carpeta database

### 3.1 Crear la tabla (migration)

```php
public function up(): void
    {
     Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamps();
        });
}
```
### 3.2 La poblamos (factory)
Para el campo departamento hemos creado un fichero en config llamado **/config/departments.php**
```php
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "email" => $this->faker->unique()->safeEmail(),
            "phone" => $this->faker->phoneNumber(),
            "department" =>$this->faker->randomElement(config("departments")),
            //
        ];
    }
```
### 3.3 Inserto en la tabla de la BD (seeder)

```php
 public function run(): void
    {
        Teacher::factory()->count(10)->create();
    }

```

## 4.- Escribo el código de los métodos
Vamos a seguir el modle MVC => ante una solicitud o ruta =>Ejecuto un controlador =>que con el modelo accede a la BD => retorna una vista

Ruta => Contronlador => Model(BD)=> Vista (html)

Esto me permite implementar CRUD (Crear Read Update Delete)
### 4.1. Read (Obtener todos los registros)
Ruta URL /teachers
Ruta Nombre teachres.index
Método index()
```php
    $teachers = Teacher::all();
    $campos =Teacher::getLabels();
    return view('teachers.index', compact('teachers', 'campos'));
```
La vista es una tabla donde renderizaré el contendio de las filas
algo del estilo:
```html
<table>
    <tr>
        <th>Nombre</th>
        .....
    </tr>
    @foreach($teachers as $teacher)
        <tr>
            <td>{{$teacher->name}}</td>
            ....
        </tr>
        
    @endforeach
</table>

```
En nuestro caso hemos creado un componente llamado crud que se puede ver en el código


### 4.2. Read (Obtener todos los registros)









