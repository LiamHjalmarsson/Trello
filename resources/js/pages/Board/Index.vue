<script setup>
import Board from "@/components/board/Board.vue";

const props = defineProps({
    boards: {
        type: Array,
    },
});
</script>

<template>
    <nav class="bg-slate-800/50 px-5 py-4 text-white fixed w-full">
        <div class="text-xl font-bold">All Boards</div>
    </nav>

    <section class="pt-24 px-10 bg-amber-500 h-full w-full overflow-auto">
        <div class="grid grid-cols-3 gap-5">
            <Board v-for="board in boards" :key="board.id" :board="board" />
        </div>
    </section>
</template>
