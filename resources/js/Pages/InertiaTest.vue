<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    Inertiaテストです<br>
    <a href="/">aタグ経由</a><br>
    <Link href="/">Link経由</Link><br>
    <Link :href="route('inertia.index')">名前付きルート</Link><br>
    <Link :href="route('inertia.show', {id: 1})">ルートパラーメータ</Link><br>
</template>