<script setup>
import BaseOverlay from "@/components/ui/BaseOverlay.vue";
const emit = defineEmits(["close"]);

defineProps({
    show: Boolean,
});
</script>

<template>
    <Teleport to="body">
        <BaseOverlay />
        xxx
    </Teleport>
</template>
