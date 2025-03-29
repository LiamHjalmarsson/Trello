<script setup>
import BoardList from "@/components/board/BoardList.vue";

const props = defineProps({
    boards: {
        type: Array,
    },
});
</script>

<template>
    <nav class="bg-slate-800/50 px-5 py-4 text-white fixed w-full">
        <div class="text-xl font-bold">title</div>
    </nav>

    <BoardList :boards="boards" />
</template>
