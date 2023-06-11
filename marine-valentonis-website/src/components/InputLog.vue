<template>
  <div class="log-container">
    <div class="log-header" :class="{ sticky: isSticky }" ref="logHeader">
      <a class="github-link" href="https://github.com/pandemicprogrammer">
        <img class="social-icon" src="@/static/github.png">
        <h3>GitHub PR & Release Log</h3>
      </a>
      <span class="collapse-icon" @click="toggleCollapse">
        {{ isCollapsed ? '+' : '-' }}
      </span>
    </div>
    <div v-show="!isCollapsed" class="log" ref="log">
      <div v-for="item in logItems" :key="item.id" class="log-item">
        <span class="log-date">{{ formatDate(item.date) }}</span>
        <pre class="log-text">{{ item.text }}</pre>
      </div>
    </div>
    <input v-model="newLogText" @keyup.enter="addLogItem" type="text" placeholder="Enter text">
  </div>
</template>

<script>
export default {
  data() {
    return {
      logItems: [],
      newLogText: "",
      isCollapsed: true,
      isSticky: false
    };
  },
  methods: {
    addLogItem() {
      if (this.newLogText.trim() === "") {
        return;
      }
      const newItem = {
        id: new Date().getTime(), // Generate a unique ID (timestamp)
        date: new Date().toLocaleString(), // Format the date
        text: this.newLogText
      };
      this.logItems.push(newItem);
      this.newLogText = ""; // Clear the input field
      this.scrollToBottom();
      this.expandLogContainer();
      this.saveLogToLocalStorage();
    },
    formatDate(date) {
      return new Date(date).toLocaleDateString();
    },
    scrollToBottom() {
      this.$nextTick(() => {
        this.$refs.log.scrollTop = this.$refs.log.scrollHeight;
      });
    },
    toggleCollapse() {
      this.isCollapsed = !this.isCollapsed;
    },
    expandLogContainer() {
      if (this.isCollapsed) {
        this.isCollapsed = false;
      }
    },
    saveLogToLocalStorage() {
      localStorage.setItem("githubLogContents", JSON.stringify(this.logItems));
    },
    getLogFromLocalStorage() {
      const logContents = localStorage.getItem("githubLogContents");
      if (logContents) {
        this.logItems = JSON.parse(logContents);
      }
    },
    handleScroll() {
      const logHeaderOffsetTop = this.$refs.logHeader.offsetTop;
      this.isSticky = window.pageYOffset >= logHeaderOffsetTop;
    }
  },
  mounted() {
    this.scrollToBottom();
    this.getLogFromLocalStorage();
    window.addEventListener("scroll", this.handleScroll);
  },
  beforeDestroy() {
    window.removeEventListener("scroll", this.handleScroll);
  }
};
</script>

<style scoped>
.log-container {
  position: relative;
  height: auto; /* Adjust the desired height */
  overflow-y: scroll;
  padding: 10px;
  box-shadow: white 0px 0px 13px;

}

.log-header {
    justify-content: space-between;
  display: flex;
  align-items: center;
  position: sticky;
  top: 0;
  z-index: 1;
  padding: 10px;
  cursor: pointer;
}

.sticky {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.log-header h3 {
  margin: 0;
  flex-grow: 1;
}

.collapse-icon {
  font-size: 1.2rem;
  cursor: pointer;
  color: white;
  scale: 150%;
}

.log {
  margin-top: 40px; /* Adjust the margin to avoid content overlapping with sticky header */
}

.log-item {
  margin-bottom: 10px;
}

.log-date {
  color: gray;
}

.log-text {
  padding: 5px;
  font-family: monospace;
  white-space: pre-wrap;
}

.social-icon {
  width: 2rem;
  background: white;
  border-radius: 8px;
  margin-right: 2rem;
}
.github-link {
    display: flex;
    align-items: center;
    
}
</style>
