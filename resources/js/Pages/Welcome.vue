<script setup>
import { Head, Link } from '@inertiajs/vue3';
import cookies from '@/Components/Cookies.vue';
import navbar from '@/Components/navbar.vue';

const props = defineProps({
  cursos: Object,

  canLogin: {
    type: Boolean,
  },
  canRegister: {
    type: Boolean,
  },
  laravelVersion: {
    type: String,
    required: true,
  },
  phpVersion: {
    type: String,
    required: true,
  },

});

console.log(props.cursos)

</script>

<template>
  <cookies />
  <navbar />

  <Head title="Benvingut!" />


  <div class="bg-gray-50 text-black/50 ">

    <div
      class="bg-gris relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
      <p class="text-5xl text-white">Benvingut a l'aula virtual!</p>

      <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
        <main class="mt-6">
          <div class="carousel rounded-box">
            <div class="carousel-item">
              <img src="https://daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg" alt="Burger" />
            </div>
            <div class="carousel-item">
              <img src="https://daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.jpg" alt="Burger" />
            </div>
            <div class="carousel-item">
              <img src="https://daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.jpg" alt="Burger" />
            </div>
            <div class="carousel-item">
              <img src="https://daisyui.com/images/stock/photo-1494253109108-2e30c049369b.jpg" alt="Burger" />
            </div>
            <div class="carousel-item">
              <img src="https://daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg" alt="Burger" />
            </div>
            <div class="carousel-item">
              <img src="https://daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg" alt="Burger" />
            </div>
            <div class="carousel-item">
              <img src="https://daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg" alt="Burger" />
            </div>
          </div>
        </main>
      </div>
      <div class="m-8">
        <p class="text-5xl text-white">Clases Disponibles!</p>

        <div class="bg-gris min-h-96 flex flex-col items-center justify-center">
          <div v-for="(curso, index) in props.cursos" :key="index" class="card w-96 bg-base-100 mt-2">
            <div class="card-body bg-white rounded-md">
              <h2 class="card-title">{{ curso.nom }}</h2>
              <p>{{ curso.descripcion }}</p>
              <div class="card-actions justify-center">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>