<template>
  <div class="services-list">
    <h2>Our Development Services</h2>
    <ul>
      <li v-for="service in services" :key="service.id">
        <h3>{{ service.title }}</h3>
        <p>{{ service.description }}</p>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      services: [
        {
          id: 1,
          title: 'Nuxt.js Development',
          description: 'We provide top-notch Nuxt.js development services.',
        },
        {
          id: 2,
          title: 'Custom API Development',
          description: 'Our team is experienced in custom API development.',
        },
        {
          id: 3,
          title: 'Wordpress & Custom Plugins',
          description: 'We can handle Wordpress and custom plugin development.',
        },
        {
          id: 4,
          title: 'SEO Optimization',
          description: 'We offer SEO optimization to increase your online visibility.',
        },
        {
          id: 5,
          title: 'eCommerce Solutions',
          description: 'Our team develops reliable and scalable eCommerce solutions.',
        },
        {
          id: 6,
          title: 'SaaS Service Integration',
          description: 'We specialize in SaaS service integration for a wide variety of businesses.',
        },
        {
          id: 7,
          title: 'Risk Mitigation',
          description: 'Our risk mitigation strategies will protect your business from potential threats.',
        }
      ]
    }
  }
}
</script>

<style scoped>
.services-list {
  padding: 2em;
}

.services-list h2 {
  font-size: 2em;
}

.services-list ul {
  list-style-type: none;
  padding: 0;
}

.services-list li {
  margin-bottom: 1em;
}

.services-list h3 {
  font-size: 1.5em;
  margin-bottom: 0.5em;
}
</style>
