<script setup>
import Board from "@/components/board/Board.vue";
defineProps({
    boards: Array,
});
</script>

<template>
    <div class="flex gap-4 pt-24 px-10 bg-amber-500 h-full">
        <Board v-for="board in boards" :key="board.id" :board="board" />
    </div>
</template>
