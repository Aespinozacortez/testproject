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
    },
});


const openModal = () => {
    modalOpen.value = true;
};

const closeModal = () => {
    modalOpen.value = false;
};

const submitForm = () => {
    form.delete(route("curso.destroy", props.curso.id), {
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
    <button class="btn" @click="openModal">eliminar</button>
    <dialog :open="modalOpen" class="modal">
        <div class="modal-box bg-gris w-5/6">
            <h3 class="font-bold text-lg text-black text-center mb-4">eliminar curso:</h3>
            <form @submit.prevent="submitForm">
                <p>estas seguro de eliminar el curso {{ props.curso.nom }}</p>
                <div class="flex justify-center">
                    <button type="submit" class="btn mr-4">eliminar</button>
                    <button type="button" class="btn" @click="closeModal">Cerrar</button>
                </div>
            </form>
        </div>
    </dialog>
</template>
