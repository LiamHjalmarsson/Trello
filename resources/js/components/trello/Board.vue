<script setup>
defineProps({
    board: Array,
});
</script>

<template>
    <div class="flex flex-1 flex-col items-stretch max-w-64 bg-slate-200">
        <div class="p-4 flex justify-between items-center">
            <h2 class="font-bold text-lg">
                {{ board.title }}
            </h2>
            <PhDotsThree :size="32" />
        </div>

        <div class="flex flex-1 items-start overflow-x-auto">
            <div class="bg-slate-100 p-2 w-full">
                <div class="flex justify-between p-2">
                    <h3 class="font-semibold">Title</h3>
                    <PhX :size="20" />
                </div>

                <div
                    class="bg-white p-2 cursor-pomiter text-sm hover:bg-slate-50 shadow-xs mb-2"
                >
                    xx
                </div>

                <div
                    class="bg-white p-2 cursor-pomiter text-sm hover:bg-slate-50 shadow-xs"
                >
                    xx
                </div>
            </div>
        </div>
    </div>
</template>
