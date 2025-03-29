<script setup>
import Board from "@/components/board/Board.vue";

const props = defineProps({
    boards: {
        type: Array,
    },
});
</script>

<template>
    <div class="flex gap-4 overflow-x-auto">
        <Board v-for="board in boards" :key="board.id" :board="board" />
    </div>
</template>
