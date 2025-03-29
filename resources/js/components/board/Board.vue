<script setup>
import TaskList from "@/components/board/TaskList.vue";
defineProps({
    board: Array,
});
</script>

<template>
    <div class="flex flex-1 flex-col items-stretch max-w-64 bg-slate-100">
        <div class="p-4 flex justify-between items-center">
            <h2 class="font-bold text-lg">
                {{ board.title }}
            </h2>
            <PhDotsThree :size="32" />
        </div>

        <TaskList />
    </div>
</template>
