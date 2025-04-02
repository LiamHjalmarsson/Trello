<script setup>
const emit = defineEmits(["close"]);
</script>

<template>
    <div
        class="fixed inset-0 z-10 h-screen w-full bg-slate-700/30"
        @click="emit('close')"
    >
        <slot />
    </div>
</template>
