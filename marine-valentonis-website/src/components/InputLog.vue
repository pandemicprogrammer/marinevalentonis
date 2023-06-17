<template>
  <div>    
    <div class="log" ref="log">
      <div v-for="item in logItems" :key="item.id" class="log-item">
        <span class="log-date">{{ formatDate(item.date) }}</span>
        <pre class="log-text">{{ item.text }}</pre>
      </div>
    </div>
  </div>
</template>
<script>
import Collapsible from './Collapsible.vue';

export default {
  components: {
    Collapsible
  },
  data() {
    return {
      logItems: []
    };
  },
  methods: {
    addLogItem(newLogText) {
      if (newLogText.trim() === "") {
        return;
      }
      const newItem = {
        id: new Date().getTime(),
        date: new Date().toLocaleString(),
        text: newLogText
      };
      this.logItems.push(newItem);
      this.scrollToBottom();
    },
    formatDate(date) {
      const parsedDate = new Date(date);
      if (isNaN(parsedDate)) {
        return ""; // Return an empty string for invalid dates
      }
      const year = parsedDate.getFullYear();
      const month = String(parsedDate.getMonth() + 1).padStart(2, "0");
      const day = String(parsedDate.getDate()).padStart(2, "0");
      const hours = String(parsedDate.getHours()).padStart(2, "0");
      const minutes = String(parsedDate.getMinutes()).padStart(2, "0");
      const formattedDate = `${year}-${month}-${day} ${hours}:${minutes}`;
      return formattedDate;
    },
    scrollToBottom() {
      this.$nextTick(() => {
        this.$refs.log.scrollTop = this.$refs.log.scrollHeight;
      });
    },
    async loadLogFromCSV() {
      try {
        const response = await fetch("src/static/data/github.csv"); // Replace with the actual path to your CSV file
        const data = await response.text();
                console.log(data);

        const rows = data.split("\n");
        const logItems = [];
        for (const row of rows) {
          const [id, date, text] = row.split(",");
          logItems.push({ id, date, text });
        }
        this.logItems = logItems;
      } catch (error) {
        console.error("Error loading log from CSV:", error);
      }
    }
  },
  mounted() {
    this.scrollToBottom();
    this.loadLogFromCSV();
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
