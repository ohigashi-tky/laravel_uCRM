<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

defineProps({
    errors: Object
})

const form = reactive({
    title: null,
    content: null
})

const submitFunction = () => {
    router.post('/inertia', form)
}

</script>

<template>
    <form @submit.prevent="submitFunction" class="text-center">
        <!-- <div class="w-1/2 mx-auto"> -->
            <input type="text" name="title" class="mt-3" v-model="form.title"><br>
            <div v-if="errors.title">{{ errors.title }}</div>
            <input type="text" name="content" class="mt-3" v-model="form.content"><br>
            <div v-if="errors.content">{{ errors.content }}</div>
            <button class="mt-3 px-3 py-1 bg-blue-200 rounded hover:bg-blue-300">送信</button>
        <!-- </div> -->
    </form>
</template>