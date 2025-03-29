<script setup>
import { PhPlus } from "@phosphor-icons/vue";
import { computed } from "vue";

const props = defineProps({
    isCard: {
        type: Boolean,
        default: true,
    },
});

const btnText = computed(() => (props.isCard ? "card" : "board"));
</script>

<template>
    <button
        class="flex-1 flex items-center h-fit gap-2 w-full bg-transparent rounded px-4 py-2 space-x-4 hover:bg-gray-200 cursor-pointer text-gray-600 text-left text-sm font-medium"
    >
        <PhPlus :size="16" />
        Add new {{ btnText }}
    </button>
</template>
