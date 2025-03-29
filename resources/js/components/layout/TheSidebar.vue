<script setup>
import { ref } from 'vue';
import { PhArrowLineLeft } from "@phosphor-icons/vue";

const isSidebarOpen = ref(true);

const toggleSidebar = () => {
    isSidebarOpen.value = !isSidebarOpen.value
}

</script>

<template>
  <aside
    class="bg-gray-900 text-white h-full fixed left-0 top-16 bottom-0 flex flex-col transition-all duration-300"
    :class="isSidebarOpen ? 'w-64' : 'w-18'"
  >
    <nav class="flex flex-col space-y-2 p-4">
        <button @click="toggleSidebar" class="flex gap-2 items-center">
          <PhArrowLineLeft :size="32" :class="[isSidebarOpen ? '' : 'rotate-180', 'transition duration-150']" />
        </button>
    </nav>
  </aside>
</template>
