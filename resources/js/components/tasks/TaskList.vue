<script setup>
import TaskItem from "@/components/tasks/TaskItem.vue";
import AddButton from "@/components/add/AddButton.vue";
import AddModel from "@/components/add/AddModel.vue";
import { PhDotsThree } from "@phosphor-icons/vue";
import { ref } from "vue";

const props = defineProps({
    list: {
        type: Object,
    },
});

const toggle = ref(false);

const toggleNewCard = () => {
    toggle.value = true;
};
</script>

<template>
    <div class="flex min-w-64 flex-col bg-gray-100 p-2 h-fit">
        <div class="flex justify-between items-center">
            <h2 class="px-2 pb-2 font-semibold text-lg">{{ list.title }}</h2>
            <PhDotsThree :size="20" />
        </div>
        <div class="flex overflow-x-auto">
            <div class="w-full space-y-2">
                <TaskItem
                    v-for="task in list.tasks"
                    :key="task.id"
                    :task="task"
                />
                <AddButton @click="toggleNewCard"> Add new card </AddButton>
            </div>
        </div>
    </div>

    <AddModel v-if="toggle" />
</template>
