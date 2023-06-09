## Pasos luego de clonar el repo:
- composer install
- composer update
- cp .env.example .env
- php artisan key:generate
- php artisan serve
- crear la base de datos "cinema"
- editar .env con los datos para la conexion de la BASE De datos
- php artisan migrate
- ir a /home (pantalla principal)


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## DETALLES TECNICOS A REALIZAR/MODIFICAR
## PELICULA
- Una vez creada la pelicula, ver en un modal sus datos y editarlos, ademas quiero agregar 1 a n actores con solo seleccionarlo y removerlos con un boton (rojo, que tenga una X). 

- Hay muchos actores asi que quiero que sea facil de buscar.

- Realizar con AJAX
- El buscador debe ser un select2

Se desea que:
- Cuando selecciono un actor se suma a la pelicula.
- Cuando presiono en la X se elimina ese actor de la pelicula.
- Un actor agregado desaparece de la lista de busqueda.
- No puedo agregar dos veces el mismo actor (por ejemplo intentando desde dos pestañas diferentes al mismo tiempo).
- Si no puse alguno de los datos requeridos para la pelicula no me permite guardar la edicion pero los actores si se guardaron.

## ACTORES
- Una vez creado un actor, ver en un modal sus datos y editarlos, ademas me resulta mas facil entrar en un actor y agregarle sus peliculas.
- Quiero agregar 1 a n peliculas a un actor con solo seleccionarla y removerlas con un boton (rojo, que tenga una X). 

- Hay muchas peliculas asi que quiero que sea facil de buscar.

- Realizar con Livewire
- El buscador debe ser un select2

Se desea que:
- Cuando selecciono una pelicula se suma a la pelicula.
- Cuando presiono en la X se elimina la pelicula del actor
- Una pelicula agregada desaparece de la lista de busqueda.
- No puedo agregar dos veces la misma pelicula (por ejemplo intentando desde dos pestañas diferentes al mismo tiempo).
- Si no puse alguno de los datos requeridos para el actor no me permite guardar la edicion pero las peliculas si se guardaron.

## ADEMAS
- La pantalla de peliculas tarda demasiado en cargar y ya no encuentro ninguna pelicula ni actor!!!

- El cliente necesita paginado en sus listados de actores y peliculas y al menos un filtro por nombre.

- Realizar uno con AJAX Y otro con livewire
- Le dariamos mejor experiencia de usuario si el buscador fuera automatico con un debouncer (https://www.freecodecamp.org/espanol/news/curso-debounce-javascript-como-hacer-que-tu-js-espere/) no?

Se desea que:
- Las listas estan correctamente paginadas y puedo navegarlo en el footer o header (o ambos)
- Si busco y me muevo en la paginacion me busca en la lista paginada y no desaparecen los filtros al moverme entre paginas
- La busqueda recien comienza luego de tres letras escritas