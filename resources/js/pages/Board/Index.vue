<script setup>
import Board from "@/components/boards/Board.vue";
import AddButton from "@/components/add/AddButton.vue";
import { ref } from "vue";

const props = defineProps({
    boards: {
        type: Array,
    },
});

const toggle = ref(false);

const toggleNewBoard = () => {
    toggle.value = true;
};
</script>

<template>
    <nav class="bg-slate-800/50 px-5 py-4 text-white fixed w-full">
        <div class="text-xl font-bold">All Boards</div>
    </nav>

    <section class="pt-24 px-10 bg-amber-500 h-full w-full overflow-auto">
        <div class="grid grid-cols-4 gap-5">
            <Board v-for="board in boards" :key="board.id" :board="board" />

            <AddButton> Add new board </AddButton>
        </div>
    </section>
</template>
