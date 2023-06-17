<template>
  <div class="services-page-wrapper">
    <div class="services-list">
    <h2 class="service-page-title">Services</h2>
    <ul>
      <li v-for="service in services" :key="service.id">
        <h3 class="service-title">{{ service.title }}</h3>
        <p class="service-description">{{ service.description }}</p>
      </li>
    </ul>
  </div>
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
  z-index: 2;
  padding: 2em;
  color:white;
}
.services-list li:nth-child(odd) {
  text-align: right;
}

.services-list h2 {
  font-size: 2em;
  text-align: center;
  z-index: 2;
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
.services-page-wrapper {
  background-color: rgb(0, 30, 38, .95);
}
.service-title {
  font-size: 150%;
}
.service-page-title {
  font-size: 260%;
}
.service-page-title, .service-title {
  font-family: 'WishShore';
  letter-spacing: 1px;
}
.services-page-wrapper::before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 25%;
  background-color: rgb(0, 30, 38);
  z-index: 5;
}
.service-description {
  font-size: 80%;
  font-family: 'Ashfiana Regular';
}
</style>
