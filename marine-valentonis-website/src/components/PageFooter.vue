<template>
  <footer>
    <div class="footer-content">
      <p>
        <a class="footer-link" href="mailto:mlvalentonis@protonmail.com">Email Me</a>
        <a class="footer-link" href="https://www.amazon.com/stores/author/B0CCB7ZHQS" target="_blank">My Author Profile</a>
      </p>
      <p class="footer-copyright">&copy; {{ currentYear }} marinevalentonis.com</p>
      <!-- Add additional footer content here -->
    </div>
  </footer>
</template>
<script lang="ts">
import { defineComponent, ref } from 'vue';

// Define the currentYear as a ref
const currentYear = ref(new Date().getFullYear());

export default defineComponent({
  setup() {
    // Define the type for the data
    interface DataProps {
      currentYear: number;
    }

    // Use the data function to define the type and initialize the currentYear
    const data: DataProps = {
      currentYear: new Date().getFullYear(),
    };

    return { currentYear };
  },
});
</script>


<style>
footer {
  background-color: rgb(0, 30, 38, .95);
  padding: 20px;
  text-align: center;
}

.footer-content {
  font-size: 150%;
    top: -.5rem;
    display: flex;
  max-width: 1200px;
  margin: 0 auto;
  justify-content: space-evenly;
  align-items: center;
  font-family: Blankers;
}
.footer-copyright {
    color: white;
}
.footer-link {
    display: flex;
    line-height: 30px;
    text-decoration: none;
}
</style>
