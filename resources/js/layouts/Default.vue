<script setup>
import TheHeader from '@/components/layout/TheHeader.vue';
import TheSidebar from '@/components/layout/TheSidebar.vue';

</script>

<template>
  <div class="flex flex-col h-screen">
    <TheHeader />

    <div class="flex flex-1">
      <TheSidebar />
    
      <main class="flex-1 p-6 overflow-auto">
        <slot />
      </main>
    </div>
  </div>
</template>
