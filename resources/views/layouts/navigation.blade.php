<nav class="bg-blue-800 py-6 shadow-md">
    <div class="max-w-6xl mx-auto flex flex-col items-center space-y-4">
        
        <!-- Nombre del negocio -->
        <h1 class="text-white text-3xl md:text-4xl font-extrabold tracking-wide text-center">
            Carpintería Las Curiosidades de Edy
        </h1>

        <!-- Menú de navegación con guiones -->
        <div class="flex flex-wrap justify-center items-center text-white text-lg font-semibold space-x-4">
            <a href="{{ url('/principal') }}" class="text-indigo-200 font-bold hover:text-indigo-300 transition duration-300">
                Principal
            </a>
            <span>-</span>
            <a href="{{ url('/') }}" class="hover:text-indigo-300 transition duration-300">
                Inicio
            </a>
            <span>-</span>
            <a href="{{ url('/productos') }}" class="hover:text-indigo-300 transition duration-300">
                Productos
            </a>
            <span>-</span>
            <a href="{{ url('/contacto') }}" class="hover:text-indigo-300 transition duration-300">
                Contacto
            </a>
            <span>-</span>
            <a href="{{ url('/resenas') }}" class="hover:text-indigo-300 transition duration-300">
                Reseñas
            </a>
        </div>
    </div>
</nav>


