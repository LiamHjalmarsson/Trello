<script setup>
defineProps({
    variant: {
        type: String,
    },
});
</script>

<template>
    <button
        class="flex-1 flex items-center gap-2 w-full bg-transparent rounded px-4 py-2 space-x-4 hover:bg-gray-200 cursor-pointer text-gray-600 text-left text-sm font-medium"
    >
        <slot />
    </button>
</template>
