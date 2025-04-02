<script setup>
import TaskList from "@/components/tasks/TaskList.vue";
import AddButton from "@/components/add/AddButton.vue";

const props = defineProps({
    board: {
        type: Object,
    },
});
</script>

<template>
    <nav class="bg-slate-800/50 px-5 py-4 text-white fixed w-full">
        <div class="text-xl font-bold">{{ board.title }}</div>
    </nav>

    <section
        class="pt-24 px-10 bg-amber-500 h-full w-full overflow-auto flex gap-5"
    >
        <TaskList v-for="list in board.lists" :key="list.id" :list="list" />
        <AddButton> Add new list </AddButton>
    </section>
</template>
