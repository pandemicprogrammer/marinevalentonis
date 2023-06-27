<template>
  <div class="container">
    <div class="sidebar">
      <h3>Categories</h3>
      <ul>
        <li v-for="(category, index) in categories" :key="index">{{ category }}</li>
      </ul>
    </div>

    <div class="main-content">
      <div class="search-box">
        <input type="text" v-model="search" placeholder="Search..." />
      </div>

      <div class="post-input">
        <textarea v-model="newPost" placeholder="Write a new post..."></textarea>
        <button @click="addPost">Post</button>
      </div>

      <div class="posts">
        <div class="post" v-for="(post, index) in filteredPosts" :key="index">
          <h3>{{ post.title }}</h3>
          <p>{{ post.content }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, computed } from 'vue';

const search = ref('');
const newPost = ref('');
const categories = ['Category 1', 'Category 2', 'Category 3'];

const posts = ref([
  { title: 'Post 1', content: 'Content for post 1...' },
  { title: 'Post 2', content: 'Content for post 2...' },
  { title: 'Post 3', content: 'Content for post 3...' }
]);

const filteredPosts = computed(() => {
  return posts.value.filter(post => post.title.includes(search.value));
});

const addPost = () => {
  posts.value.push({ title: `Post ${posts.value.length + 1}`, content: newPost.value });
  newPost.value = '';
};
</script>

<style scoped>
.container {
  display: flex;
}
.sidebar {
  width: 20%;
  border-right: 1px solid #ddd;
  padding: 1em;
}
.main-content {
  width: 80%;
  padding: 1em;
}
.search-box {
  margin-bottom: 1em;
}
.post-input {
  margin-bottom: 2em;
}
textarea {
  width: 100%;
  margin-bottom: 1em;
}
</style>
