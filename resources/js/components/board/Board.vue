<script setup>
import { PhDotsThree } from "@phosphor-icons/vue";
import TaskList from "@/components/board/TaskList.vue";
defineProps({
    list: Object,
});
</script>

<template>
    <div class="flex min-w-64 flex-col bg-gray-100 p-2 h-fit">
        <div class="px-4 py-2 flex justify-between items-center">
            <h2 class="font-bold text-lg">
                {{ list.title }}
            </h2>
            <PhDotsThree :size="20" />
        </div>

        <TaskList :tasks="list.tasks" />
    </div>
</template>
