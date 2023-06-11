<template>
  <div>    
      <div class="log" ref="log">
        <div v-for="item in logItems" :key="item.id" class="log-item">
          <span class="log-date">{{ formatDate(item.date) }}</span>
          <pre class="log-text">{{ item.text }}</pre>
        </div>
      </div>
      <input v-model="newLogText" @keyup.enter="addLogItem" type="text" placeholder="Enter text">
  </div>
</template>

<script>
import Collapsible from './Collapsible.vue'; // Assuming the above component is in a separate file

export default {
  components: {
    Collapsible
  },
  data() {
    return {
      logItems: [],
      newLogText: ""
    };
  },
  methods: {
    addLogItem() {
      if (this.newLogText.trim() === "") {
        return;
      }
      const newItem = {
        id: new Date().getTime(),
        date: new Date().toLocaleString(),
        text: this.newLogText
      };
      this.logItems.push(newItem);
      this.newLogText = "";
      this.scrollToBottom();
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
    saveLogToLocalStorage() {
      localStorage.setItem("githubLogContents", JSON.stringify(this.logItems));
    },
    getLogFromLocalStorage() {
      const logContents = localStorage.getItem("githubLogContents");
      if (logContents) {
        this.logItems = JSON.parse(logContents);
      }
    }
  },
  mounted() {
    this.scrollToBottom();
    this.getLogFromLocalStorage();
  }
};
</script>

<style scoped>
.log {
  margin-top: 40px;
}

.log-item {
  margin-bottom: 10px;
  font-size: 65%;
}

.log-date {
  color: gray;
}

.log-text {
  padding: 5px;
  font-family: monospace;
  white-space: pre-wrap;
  color: white;
}

.social-icon {
  width: 2rem;
  background: white;
  border-radius: 8px;
  margin-right: 2rem;
}
.github-link {
  display: flex;
  background: rgb(8 42 52);
  border-radius: 3px;
  align-items: center;
  font-family: 'WishShore';
  padding: 1rem;
  font-size: 150%;
}
</style>
