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
          title: 'Nuxt.js',
          description: 'Specializing in Vue.js & Next.js applications for a refined UX.',
        },
        {
          id: 2,
          title: 'API & Endpoints',
          description: 'Custom-built API development for your data needs.',
        },
        {
          id: 3,
          title: 'Wordpress & Custom Plugins',
          description: 'Full scope development of plugins tailored to your specific requirements.',
        },
        {
          id: 4,
          title: 'SEO Optimization',
          description: 'Increase user conversion & revenue with increased visibility.',
        },
        {
          id: 5,
          title: 'eCommerce Solutions',
          description: 'Creating reliable and scalable eCommerce solutions.',
        },
        {
          id: 6,
          title: 'SaaS Service Integration',
          description: 'We specialize in SaaS service integration on Javascript & Wordpress platforms.',
        },
        {
          id: 7,
          title: 'UI & UX',
          description: 'Specializing in user focused design & implementation.',
        }
      ]
    }
  }
}
</script>

<style scoped>
.services-list {
  z-index: 2;
  padding: 1em;
  color:white;
}
.services-list li:nth-child(odd) {
  text-align: right;
}

.services-list h2 {
  font-size: 300%;
  text-align: center;
  z-index: 2;
  margin-bottom: 3rem;
}

.services-list ul {
  list-style-type: none;
  padding: 0;
}

.services-list li {
  margin-bottom: 5rem;
  font-size: 130%;
}

.services-page-wrapper {
  background-color: rgb(0, 30, 38, .95);
}
.service-title {
  font-size: 150%;
  line-height: 30px;
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
  z-index: 1;
}
.service-description {
  font-size: 80%;
  font-family: 'Ashfiana Regular';
}
</style>
