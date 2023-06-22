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
    async loadLogFromAPI() {
  try {
    const ghAccessToken = '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';
    const response = await fetch("https://api.github.com/users/pandemicprogrammer/events", {
    headers: {
      Authorization: `token ${ghAccessToken}`
    }
  });

  // Check if request was successful
  if (!response.ok) {
    throw new Error(`HTTP error! status: ${response.status}`);
  }

  const data = await response.json();

  const logItems = data.map(event => ({
    id: event.id,
    date: event.created_at,
    text: `${event.type} in repo ${event.repo.name}`
  }));

  // Update component's data
  this.logItems = logItems;

  // Save logItems in local storage
  localStorage.setItem('githubLog', JSON.stringify(logItems));
} catch (error) {
  console.error("Error loading log from API:", error);
}
}

  },
 mounted() {
  this.scrollToBottom();
  
  const storedLogItems = localStorage.getItem('githubLog');

  // If githubLog exists in local storage, load it into the component's data
  if (storedLogItems) {
    this.logItems = JSON.parse(storedLogItems);
  } else {
    this.loadLogFromAPI();
  }
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
