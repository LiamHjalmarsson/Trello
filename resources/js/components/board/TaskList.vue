<script setup>
import { PhPlus } from "@phosphor-icons/vue";

import Task from "@/components/board/Task.vue";
import Add from "@/components/board/Add.vue";
</script>

<template>
    <div class="flex overflow-x-auto">
        <div class="w-full space-y-2">
            <Task></Task>
            <Task></Task>

            <Add> <PhPlus :size="16" /> Add new card </Add>
        </div>
    </div>
</template>
