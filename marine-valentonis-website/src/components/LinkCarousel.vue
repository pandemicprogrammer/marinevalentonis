<template>
  <div class="circle-container">
    <div
      v-for="(website, index) in websites"
      :key="website.id"
      class="logo-container"
      :style="logoStyle(index)"
    >
      <a :href="website.url" target="_blank" class="logo-link">
        <img :src="website.logo" :alt="website.name" class="logo-image" />
        <h2 class="logo-name">{{ website.name }}</h2>
        <p class="logo-description">{{ website.description }}</p>
      </a>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
  data() {
    return {
      websites: [
        {
          id: 1,
          name: "Together Rising",
          url: "https://togetherrising.com",
          logo: '/wp-content/themes/zeever/assets/together-rising.png',
          description: "Together Rising transforms collective heartbreak into effective action.",
        },
        {
          id: 2,
          name: "Kahn Academy",
          url: "https://khanacademy.org",
          logo: '/wp-content/themes/zeever/assets/kahn.png',
          description: "Our mission is to provide a free, world-class education to anyone, anywhere.",
        },
      ],
      selectedLogo: -1,
    };
  },
  methods: {
    handleLogoHover(index: number) {
      this.selectedLogo = index;
    },
    handleLogoLeave() {
      this.selectedLogo = -1;
    },
    logoStyle(index: number) {
      const angleIncrement = (2 * Math.PI) / this.websites.length;
      const distance = 200; // Distance from the center of the circle
      const x = Math.cos(index * angleIncrement) * distance;
      const y = Math.sin(index * angleIncrement) * distance;
      return {
        transform: `translate(${x}px, ${y}px)`,
      };
    },
  },
});
</script>

<style scoped>
.logo-link {
  width: 12rem;
  border-radius: 5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-flow: column;
  /* background-color: rgb(0, 30, 38, 95%); */
  background-color: white;
  opacity: .75;
  scale: 95%;
}

.logo-image {
  width: 65%;
  transition: transform 0.5s;
  border-radius: 10rem;
}

.logo-name {
  color: rgb(0, 30, 38);
  font-family: 'Blankers';
  font-size: 200%;
}

.logo-description {
  font-size: 85%;
  text-align: center;
  margin-top: 10px;
  color: rgb(0, 30, 38, 95%);
  padding: 1rem;
  font-style: italic;
  margin-top: -1rem;
  font-family: 'Ashfiana Regular';
}

.logo-link:hover {
  z-index: 100;
  transform: scale(125%);
  opacity: 100%;
}

.circle-container {
  text-align: center;
  display: flex;
}
</style>
