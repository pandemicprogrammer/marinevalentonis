<template>
  <div class="collapsible-container" :class="{ 'collapsed': isCollapsed }">
    <div class="collapsible-header" @click="toggleCollapse">
      <h2 class="collapsible-title">{{ collapsibleTitle }}</h2>
      <span class="collapse-icon">{{ isCollapsed ? '+' : '-' }}</span>
    </div>
    <div class="collapsible-content" :style="contentStyle">
      <slot></slot>
    </div>
  </div>
</template>

<script lang="ts">
import { ref } from 'vue';

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
  padding: 10px;
  transition: background-color 0.3s ease;
}

.collapsible-header {
  background-color: rgba(0, 30, 38, .8);
  justify-content: space-between;
  display: flex;
  align-items: center;
  position: sticky;
  top: 0;
  z-index: 1;
  padding: 10px;
  cursor: pointer;
  height: 6rem;
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
}

.collapsed .collapsible-header {
  background-color: rgba(0, 30, 38);
}

.collapsible-title {
  margin-left: 5%;
  font-family: 'WishShore';
  font-size: 200%;
  color: white;
}
</style>
