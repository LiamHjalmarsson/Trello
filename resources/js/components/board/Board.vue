<script setup>
import { PhDotsThree } from "@phosphor-icons/vue";
import TaskList from "@/components/board/TaskList.vue";
defineProps({
    board: Object,
});
</script>

<template>
    <div class="flex flex-1 flex-col max-w-64 bg-gray-100 p-2 h-fit">
        <div class="px-4 py-2 flex justify-between items-center">
            <h2 class="font-bold text-lg">
                {{ board.title }}
            </h2>
            <PhDotsThree :size="20" />
        </div>

        <TaskList />
    </div>
</template>
