<template>
  <div class="circle-container">
    <div
      v-for="(website, index) in websites"
      :key="website.id"
      class="logo-container"
      :style="logoStyle(index)"
      @mouseenter="handleLogoHover"
      @mouseleave="handleLogoLeave"
    >
      <a :href="website.url" target="_blank" class="logo-link">
        <img :src="website.logo" :alt="website.name" class="logo-image" />
        <h2 class="logo-name">{{ website.name }}</h2>
        <p class="logo-description">{{ website.description }}</p>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
       websites: [
        {
          id: 1,
          name: "Together Rising",
          url: "https://togetherrising.com",
          logo: "src/static/images/togetherrising.png",
          description: "Together Rising transforms collective heartbreak into effective action.",
        },
         {
          id: 2,
          name: "Kahn Academy",
          url: "https://khanacademy.org",
          logo: "src/static/images/kahn.png",
          description: "Our mission is to provide a free, world-class education to anyone, anywhere.",
        },
        {
          id: 3,
          name: "Marine Valentonis",
          url: "https://marinevalentonis.com",
          logo: "src/static/images/runes/labradorite.png",
          description: "Short description of Website 3",
        },
         {
          id: 4,
          name: "Marine Valentonis",
          url: "https://marinevalentonis.com",
          logo: "src/static/images/runes/labradorite.png",
          description: "Short description of Website 4",
        },
     
      ],
      selectedLogo: -1,
    };
  },
  methods: {
    handleLogoHover(index) {
      this.selectedLogo = index;
    },
    handleLogoLeave() {
      this.selectedLogo = -1;
    },
    logoStyle(index) {
      const angleIncrement = (2 * Math.PI) / this.websites.length;
      const distance = 200; // Distance from the center of the circle
      const x = Math.cos(index * angleIncrement) * distance;
      const y = Math.sin(index * angleIncrement) * distance;
      return {
        transform: `translate(${x}px, ${y}px) scale(${this.selectedLogo === index ? 1.2 : 1})`,
      };
    },
  },
};
</script>

<style scoped>
.circle-container {
  margin-top: 2rem;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  width: 400px;
  height: 400px;
}

.logo-container {
  position: absolute;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100px;
  height: 100px;
  transition: transform 0.5s;
}

.logo-link {
  width: 12rem;
  border-radius: 5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-flow: column;
  /* background-color: rgb(0, 30, 38, 95%); */
  background-color: white;
}

.logo-image {
  width: 65%;
  transition: transform 0.5s;
  border-radius: 10rem;
}
.logo-name {
  color:  rgb(0, 30, 38);
  font-family: 'Blankers';
  font-size: 200%;
}
.logo-description {
  font-size: 85%;
  text-align: center;
  margin-top: 10px;
  color:  rgb(0, 30, 38, 95%);
  padding: 1rem;
  font-style: italic;
  margin-top: -1rem;
  font-family: 'Ashfiana Regular';
}
.logo-link:hover {
  z-index: 100;
  transform: scale(125%);
}
</style>
