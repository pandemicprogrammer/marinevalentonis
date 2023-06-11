<template>
  <div class="collapsible-container" :class="{ 'collapsed': !isCollapsed }">
    <div class="collapsible-header" @click="toggleCollapse">
      <h2 class="collapsible-title">{{ collapsibleTitle }}</h2>
      <span class="collapse-icon">{{ isCollapsed ? '+' : '-' }}</span>
    </div>
    <div v-show="!isCollapsed" class="collapsible-content">
      <slot></slot>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      isCollapsed: true
    };
  },
  props: {
    collapsibleTitle: {
      type: String,
      required: true
    }
  },
  methods: {
    toggleCollapse() {
      this.isCollapsed = !this.isCollapsed;
    }
  }
};
</script>

<style scoped>
.collapsible-container {
  position: relative;
  height: auto; /* Adjust the desired height */
  padding: 10px;
}
.collapse-title {
    color: white;
}
.collapsible-header {
  background-color: rgb(0, 30, 38, .8); /* Change this to the desired background color */
  justify-content: space-between;
  display: flex;
  align-items: center;
  position: sticky;
  top: 0;
  z-index: 1;
  padding: 10px;
  cursor: pointer;
  height: 6rem;
}

.collapse-icon {
font-size: 1.2rem;
  cursor: pointer;
  color: white;
  scale: 200%;
  padding: 2rem;}

.collapsible-content {
  /* Define the styles for the content */
}
.collapsed {
  background-color: rgb(0, 30, 38); /* Change this to the desired background color */
}
.collapsible-title {
    margin-left: 5%;
    font-family: 'WishShore';
    font-size: 200%;
    color: white;
}
</style>
