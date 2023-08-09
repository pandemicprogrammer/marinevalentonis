<template>
  <footer>
    <div class="footer-content">
      <div class="footer-links"> 
        <a class="footer-link" href="mailto:mlvalentonis@protonmail.com">Email Me</a>
        <a class="footer-link" href="https://www.linkedin.com/in/marine-valentonis-346385a3" target="_blank">Linkedin</a>
        <a class="footer-link" href="https://github.com/pandemicprogrammer" target="_blank">GitHub</a>
</div>
      <p>
       
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
    font-family: 'Ashfiana Regular';
    text-decoration: none;
    margin: .75rem;
}
.footer-links {
  display: flex;
  justify-content: space-evenly;
  flex-wrap: wrap;
}
</style>
