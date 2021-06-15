<header>
    <div class="menu">
        <a href="#" class="btn"><i class="fas fa-list"></i>Menu</a>
    </div>
    <nav>
        <ul>

            <li class="submenu">
                <a href="" class="listadomenu">USUARIOS<i class="fas fa-angle-down"></i></a>
                <ul class="listado">

                    <li><a href="{{-- {{ route('users.create') }} --}}">REGISTRO DE USUARIO<i class="fas fa-pencil-alt"></i></a>
                    </li>
                    <li><a href="{{-- {{ route('users.index') }} --}}">LISTA USUARIOS<i class="fas fa-clipboard-list"></i></a>
                    </li>
                    <li><a href="">ASIGNACIÓN DE ROLES<i class="fas fa-clipboard-list"></i></a></li>

                </ul>

            </li>

            <li class="submenu">
                <a href="#" class="listadomenu"><i class="fas fa-angle-down"></i>DOCENTES</a>

                <ul class="listado">
                    <li><a href="registro_de_docente.php">REGISTRO DOCENTE<i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="lista_docentes.php">LISTA DOCENTES<i class="fas fa-clipboard-list"></i></a></li>

                </ul>

            </li>



            <li class="submenu"><a class="listadomenu" href=""><i class="fas fa-angle-down"></i>ESTUDIANTES</a>
                <ul class="listado">

                    <li><a href="registro_alumnos.php">REGISTRO DE ALUMNOS<i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="lista_estudiantes_total.php">LISTA DE ALUMNOS<i class="fas fa-clipboard-list"></i></a>
                    </li>

                </ul>

            </li>
            <li class="submenu">
                <a href="" class="listadomenu"><i class="fas fa-angle-down"></i>CURSOS</a>
                <ul class="listado">
                    <li><a href="{{ route('cursos.index') }}">LISTA COMPLETA DE LOS CURSOS<i
                                class="fas fa-atlas"></i></a>
                    </li>
                    @foreach ($categorias as $categoria)
                        <li><a href="{{ route('cursos.category', $categoria->id) }}">{{ Str::upper($categoria->nombre) }}<i
                                    class="fas fa-atlas"></i></a>
                        </li>
                    @endforeach

                </ul>
            </li>

        </ul>
    </nav>
</header>
