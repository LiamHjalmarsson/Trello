<script setup>
const emit = defineEmits(["toggle-sidebar"]);
</script>

<template>
    <header
        class="bg-slate-900 text-white py-4 px-6 fixed top-0 left-0 w-full h-16 z-10"
    >
        <nav class="flex justify-between items-center">
            <div class="flex items-center">
                <p class="text-xl font-bold">Trello Clone</p>
            </div>

            <div class="flex items-center gap-4">
                <span> User </span>
                <div class="h-8 w-8 rounded-full bg-amber-200"></div>
            </div>
        </nav>
    </header>
</template>
