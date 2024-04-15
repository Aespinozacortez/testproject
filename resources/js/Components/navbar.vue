<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

</script>
<template>
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <img class="w-20 p-3" src="/images/logo.jpg" alt="">
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <Link :href="route('curso.index')">

                <li><a>Gestionar Cursos</a></li>
                </Link>

                <li>
                    <details>
                        <summary>
                            Clases
                        </summary>
                        <ul class="p-2 bg-base-100 rounded-t-none">
                            <li><a>Clase A</a></li>
                            <li><a>Clase B</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
        <div class="flex-none gap-2">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component" src="/images/logo.jpg" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            Profile
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</template>