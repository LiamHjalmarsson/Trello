<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    boards: {
        type: Array,
    },
});
</script>

<template>
    <nav class="bg-slate-800/50 px-5 py-4 text-white fixed w-full">
        <div class="text-xl font-bold">All Boards</div>
    </nav>

    <section class="pt-24 px-10 bg-amber-500 h-full w-full overflow-auto">
        <div class="grid grid-cols-3 gap-5">
            <Link
                v-for="board in boards"
                :key="board.id"
                :href="`/boards/${board.id}`"
                class="h-28 bg-white rounded-lg shadow flex justify-center items-center"
            >
                <h2 class="font-bold text-lg">
                    {{ board.title }}
                </h2>
            </Link>
        </div>
    </section>
</template>
