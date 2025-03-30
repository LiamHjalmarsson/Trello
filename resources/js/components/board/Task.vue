<script setup>
defineProps({
    task: {
        type: Object,
    },
});
</script>

<template>
    <div
        class="bg-white p-2 cursor-pomiter text-sm hover:bg-blue-50 shadow-xs rounded"
    >
        <span class="text-sm font-medium">{{ task.title }}</span>
        <p class="text-xs text-gray-400">{{ task.content || "content" }}</p>
    </div>
</template>
