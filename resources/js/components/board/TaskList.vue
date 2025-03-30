<script setup>
import Task from "@/components/board/Task.vue";
import Add from "@/components/board/Add.vue";
import { PhDotsThree } from "@phosphor-icons/vue";
const props = defineProps({
    list: {
        type: Array,
    },
});
</script>

<template>
    <div class="flex min-w-64 flex-col bg-gray-100 p-2 h-fit">
        <div class="flex justify-between items-center">
            <h2 class="px-2 pb-2 font-semibold text-lg">{{ list.title }}</h2>
            <PhDotsThree :size="20" />
        </div>
        <div class="flex overflow-x-auto">
            <div class="w-full space-y-2">
                <Task v-for="task in list.tasks" :key="task.id" :task="task" />
                <Add />
            </div>
        </div>
    </div>
</template>
