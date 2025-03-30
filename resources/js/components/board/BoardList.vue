<script setup>
import Add from "@/components/board/Add.vue";
defineProps({
    lists: Array,
});
</script>

<template>
    <div class="min-w-96">
        <Add :isCard="false" />
    </div>
</template>
