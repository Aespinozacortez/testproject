<template>
    <div v-if="!acceptedCookies" role="alert" class="alert">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>We use cookies for no reason.</span>
        <div>
            <button @click="denyCookies" class="btn btn-sm">Deny</button>
            <button @click="acceptCookies" class="btn btn-sm btn-primary">Accept</button>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue';

export default {
    setup() {
        const acceptedCookies = ref(false);

        const acceptCookies = () => {
            localStorage.setItem('cookiesAccepted', 'true');
            acceptedCookies.value = true;
        };

        const denyCookies = () => {
        };

        if (localStorage.getItem('cookiesAccepted')) {
            acceptedCookies.value = true;
        }

        return {
            acceptedCookies,
            acceptCookies,
            denyCookies
        };
    }
};
</script>
