<script setup>
import { ref } from 'vue';
import { useForm } from "@inertiajs/vue3";
const props = defineProps({
    curso: Object
})

const modalOpen = ref(false);
const form = useForm({
    model: {
        id: props.curso.id,
        nom: props.curso.nom,
        etapa: props.curso.etapa,
        descripcion: props.curso.descripcion,
        visibilidad: props.curso.visibilidad,
    },
});


const openModal = () => {
    modalOpen.value = true;
};

const closeModal = () => {
    modalOpen.value = false;
};

const submitForm = () => {
    form.patch(route("curso.update", props.curso.id), {
        onSuccess: () => {
            closeModal();
        },
        onError: () => {
        }
    });
};

console.log(props.curso)
</script>


<template>
    <button class="btn" @click="openModal">Editar</button>
    <dialog :open="modalOpen" class="modal">
        <div class="modal-box bg-gris w-5/6">
            <h3 class="font-bold text-lg text-black text-center mb-4">¡Hola! Para crear un curso tendrás que añadir un
                título, etapa y una descripción:</h3>
            <form @submit.prevent="submitForm">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Título
                        </label>
                        <input v-model="form.model.nom"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Desarrollo Web">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Etapa
                        </label>
                        <input v-model="form.model.etapa"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="(ESO / BTX / CF)">
                    </div>
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-visibility">
                        Visibilidad
                    </label>
                    <select v-model="form.model.visibilidad"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-visibility">
                        <option value="publico">Publico</option>
                        <option value="privado">Privado</option>
                    </select>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Descripción
                        </label>
                        <textarea v-model="form.model.descripcion"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password" placeholder="Descripción"></textarea>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="btn mr-4">Guardar</button>
                    <button type="button" class="btn" @click="closeModal">Cerrar</button>
                </div>
            </form>
        </div>
    </dialog>
</template>
