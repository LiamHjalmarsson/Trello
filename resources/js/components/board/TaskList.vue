<script setup>
import Task from "@/components/board/Task.vue";
import Add from "@/components/board/Add.vue";

defineProps({
    tasks: {
        type: Array,
    },
});
</script>

<template>
    <div class="flex overflow-x-auto">
        <div class="w-full space-y-2">
            <Task v-for="task in tasks" :key="task.id" :task="task" />

            <Add />
        </div>
    </div>
</template>
