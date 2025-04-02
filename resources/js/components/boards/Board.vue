<script setup>
import { Link } from "@inertiajs/vue3";
import { PhDotsThree } from "@phosphor-icons/vue";
defineProps({
    board: Object,
});
</script>

<template>
    <Link
        :href="`/boards/${board.id}`"
        class="h-28 bg-white rounded-lg shadow flex justify-center items-center relative"
    >
        <div
            @click.prevent="console.log('log')"
            class="absolute top-0 right-0 pr-4 pt-1"
        >
            <PhDotsThree :size="32" />
        </div>
        <h2 class="font-bold text-lg">
            {{ board.title }}
        </h2>
    </Link>
</template>
