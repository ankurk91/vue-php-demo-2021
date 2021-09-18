<template>
  <div>
    <h1 class="cta-heading">Hello from Vue v{{ version }}</h1>
  </div>
</template>

<script>
export default {
  name: 'Welcome',
  data() {
    return {
      version: 2
    }
  }
}
</script>