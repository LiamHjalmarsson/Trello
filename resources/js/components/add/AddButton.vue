<script setup>
import { PhPlus } from "@phosphor-icons/vue";
</script>

<template>
    <button
        class="flex-1 flex items-center h-fit gap-2 w-full min-w-fit bg-transparent rounded px-4 py-2 space-x-4 hover:bg-gray-200 cursor-pointer text-gray-600 text-left text-sm font-medium"
    >
        <PhPlus :size="16" />
        <slot />
    </button>
</template>
