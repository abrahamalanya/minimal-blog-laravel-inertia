<script setup>
import Layout from "../shared/Layout.vue"
defineProps(['post'])
</script>

<template>
    <Layout>
        <article v-if="post">
            <h2 class="text-2xl font-extrabold">{{ post.title }}</h2>
            <p>{{ post.content }}</p>
        </article>

        <section v-else>
            <p>Post not found.</p>
        </section>

        <section>
            <a href="/" class="text-xs text-gray-400 hover:text-blue-600">← Back to all posts</a>
        </section>
    </Layout>
</template>