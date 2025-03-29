<script setup>
defineProps({
    variant: {
        type: String,
    },
});
</script>

<template>
    <button class="flex-1 px-4 py-2 text-slate-700 space-x-4" :class="[]">
        <slot />
    </button>
</template>
