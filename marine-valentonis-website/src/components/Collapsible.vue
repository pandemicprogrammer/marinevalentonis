<template>
  <div class="collapsible-container" :class="{ 'collapsed': isCollapsed }">
    <div class="collapsible-header" @click="toggleCollapse">
      <h2 class="collapsible-title">{{ collapsibleTitle }}</h2>
      <div class="tech-items">
        <div v-for="(item, index) in items" :key="index" class="item-container">
        <img v-if="item.logo" :src="item.logo" alt="Logo" class="item-logo" />
        <span class="item-name">{{ item.name }}</span>
        <span v-if="item.value" class="item-value">{{ item.value }}</span>
      </div>
    </div>
      <span class="collapse-icon">{{ isCollapsed ? '+' : '-' }}</span>
    </div>
    
    <div class="collapsible-content" :style="contentStyle">
          <slot></slot>
    </div>
  </div>
</template>

<script lang="ts">

// Define the structure of an item
interface Item {
  logo?: string;
  name: string;
  value?: string;
}

export default {
  data() {
    return {
      isCollapsed: true,
      contentStyle: {
        maxHeight: '0',
        opacity: '0',
        transition: 'all 0.3s ease',
      },
    };
  },
  props: {
    collapsibleTitle: {
      type: String,
      required: true,
    },
   items: {
    type: Array as () => Item[],
    required: false,
    default: () => [], // Provide a default empty array

    },
  },
  methods: {
    toggleCollapse() {
      this.isCollapsed = !this.isCollapsed;
      this.contentStyle.maxHeight = this.isCollapsed ? '0' : 'none';
      this.contentStyle.opacity = this.isCollapsed ? '0' : '1';
    },
  },
};
</script>

<style scoped>
.collapsible-container {
  position: relative;
  height: auto;
  padding: 1rem;
  transition: background-color 0.3s ease;
}

.collapsible-header {
  font-size: 110%;
  background-color: rgba(0, 30, 38, .8);
  justify-content: space-between;
  display: flex;
  align-items: center;
  position: sticky;
  top: 0;
  z-index: 1;
  padding: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  border-radius: 3px;
  line-height: 26px;
}

.collapse-icon {
  font-size: 1.2rem;
  cursor: pointer;
  color: white;
  scale: 200%;
  padding: 2rem;
}

.collapsible-content {
  overflow: hidden;
  background-color: rgba(0, 30, 38);
  color: white;
}

.collapsed .collapsible-header {
  background-color: rgba(0, 30, 38);
}

.collapsible-title {
  margin-left: 5%;
  font-family: 'WishShore';
  color: white;
  width: 100%;
  font-weight: 400;
}

.item-list {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding: 10px;
  flex-flow: wrap;
  justify-content: space-evenly;
}

.item {
  margin-bottom: 10px;
  color: white;
}
.item-logo{
  width:25%;
}
.item-container {
  display: flex;
  align-items: center;
  justify-content: center;
}
.tech-items {
  display: flex;
  justify-content: space-evenly;
  width: 100%;
}
.item-name {
  font-family: 'Ashfiana Regular';
  padding: 5px;
  color: white;
}
</style>
