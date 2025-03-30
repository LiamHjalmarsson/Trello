<script setup>
import Board from "@/components/board/Board.vue";
import Add from "@/components/board/Add.vue";
defineProps({
    lists: Array,
});
</script>

<template>
    <section
        class="flex gap-4 pt-24 px-10 bg-amber-500 h-full w-full overflow-auto"
    >
        <Board v-for="list in lists" :key="list.id" :list="list" />

        <div class="min-w-96">
            <Add :isCard="false" />
        </div>
    </section>
</template>
