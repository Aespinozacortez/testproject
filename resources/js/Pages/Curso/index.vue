<script setup>
import navbar from '@/Components/navbar.vue';
import AddCurso from "@/Pages/Curso/Partials/AddCurso.vue";
import EditCurso from "@/Pages/Curso/Partials/EditCurso.vue";
import DeleteCurso from "@/Pages/Curso/Partials/DeleteCurso.vue";


const props = defineProps({
    cursos: Object
})


console.log(props.cursos);
</script>
<template>
    <navbar />
    <div class="bg-gray-50 text-black/50">
        <div class="bg-gris min-h-96 flex flex-col items-center justify-center">
            <p class="text-5xl text-white mb-10">Gestiona tus cursos!</p>
            <div class="card w-96 bg-base-100 mt-2">
                <div class="card-body bg-white rounded-md">
                    <h2 class="card-title">¡Crea un Curso!</h2>
                    <p>Si decides crear un curso, ¿qué tema elegirías?</p>
                    <div class="card-actions justify-center">
                        <AddCurso></AddCurso>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gris min-h-96 flex flex-col items-center justify-center">
            <p class="text-5xl text-white mb-10">Mis Cursos!</p>
            <div v-for="(curso, index) in props.cursos" :key="index" class="card w-96 bg-base-100 mt-2">
                <div class="card-body bg-white rounded-md">
                    <h2 class="card-title">{{ curso.titulo }}</h2>
                    <p>{{ curso.descripcion }}</p>
                    <div class="card-actions justify-center">
                        <EditCurso :curso="curso"></EditCurso>
                        <DeleteCurso :curso="curso"></DeleteCurso>

                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
