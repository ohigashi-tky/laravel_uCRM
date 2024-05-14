<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({ blogs: Array })
</script>

<template>
    一覧
    <div v-if="$page.props.flash.message" class="text-blue-600">
    {{ $page.props.flash.message }}
    </div>
    <br>
    <ul>
        <li v-for="blog in blogs" :key="blogs.id">
            件名：<Link class="text-blue-400" :href="route('inertia.show', {id: blog.id})">{{ blog.title }}</Link>
            {{ blog.content }}
        </li>
    </ul>
</template>