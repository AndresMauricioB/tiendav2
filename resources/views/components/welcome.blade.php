<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-4" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bienvenido al panel de administrador
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        En este lugar podrás administrar toda la información de tu sitio web, realizar el CRUD de categorías y productos, y crear y gestionar las cuentas de administrador de tus usuarios
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg style="width: 30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900 ">
                <a class="text-decoration-none success" href="/categories">Usuarios</a>
            </h2>
        </div>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            En la sección de usuarios, podrás crear, modificar y eliminar usuarios del sistema, así como también ver la lista completa de todos los usuarios registrados
        </p>
    </div>
    <div>
        <div class="flex items-center">

            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a class="text-decoration-none " href="/categories">Categorias</a>
            </h2>
        </div>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            En la sección de categorías, podrás crear, modificar y eliminar categorías del sistema, así como también ver la lista completa de todas las categorías registradas y los productos asociados a cada una de ellas
        </p>
    </div>
</div>
