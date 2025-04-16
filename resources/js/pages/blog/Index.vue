<script setup>
import Layout from '../shared/Layout.vue'
defineProps(['posts'])
</script>

<template>
    <Layout>
        <section v-if="posts.length" class="flex flex-col gap-y-8">
            <article v-for="post in posts" :key="post.id">
                <h2 class="text-2xl font-extrabold">{{ post.title }}</h2>
                <p class="text-base text-gray-600 font-light">{{ post.excerpt }}</p>
                <a :href="`/posts/${post.slug}`" class="text-xs text-gray-400 hover:text-blue-600">Read more...</a>
            </article>
        </section>

        <section v-else>
            <p>No posts found.</p>
        </section>
    </Layout>
</template>