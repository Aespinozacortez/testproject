<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    model: {
        nom: "",
        etapa: "",
        descripcion: "",
        visibilidad: "",

    },
});

const submitForm = async () => {
    try {
        await form.post(route("curso.store"));
        my_modal_1.close();
    } catch (error) {
        console.error("Error al enviar el formulario:", error);
    }
};
</script>

<template>
    <button class="btn" onclick="my_modal_1.showModal()">Crear</button>
    <dialog id="my_modal_1" class="modal">
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
                    <button type="button" class="btn" onclick="my_modal_1.close()">Cerrar</button>
                </div>
            </form>
        </div>
    </dialog>
</template>
