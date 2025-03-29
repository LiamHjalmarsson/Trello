<script setup>
import { ref } from "vue";
import BaseSidebarLink from "@/components/ui/BaseSidebarLink.vue";
import {
    PhArrowLineLeft,
    PhCards,
    PhCirclesFour,
    PhCalendar,
    PhHeart,
    PhUsers,
    PhGearSix,
} from "@phosphor-icons/vue";

const isSidebarOpen = ref(true);

const toggleSidebar = () => {
    isSidebarOpen.value = !isSidebarOpen.value;
};
</script>

<template>
    <aside
        class="bg-slate-800 text-white h-full fixed left-0 top-16 bottom-0 flex flex-col transition-all duration-300"
        :class="isSidebarOpen ? 'w-64' : ' w-24'"
    >
        <nav class="flex flex-col space-y-2 px-3 mt-10">
            <button
                @click="toggleSidebar"
                class="flex gap-2 items-center hover:bg-slate-500 transition duration-150 rounded-md w-fit px-4 py-2"
            >
                <PhArrowLineLeft
                    :size="32"
                    :class="[
                        isSidebarOpen ? '' : 'rotate-180',
                        'transition duration-150',
                    ]"
                />
            </button>

            <ul class="mt-10 space-y-10">
                <BaseSidebarLink label="Boards" :isSidebarOpen="isSidebarOpen">
                    <PhCards :size="32" />
                </BaseSidebarLink>
                <BaseSidebarLink
                    label="Overview"
                    :isSidebarOpen="isSidebarOpen"
                >
                    <PhCirclesFour :size="32" />
                </BaseSidebarLink>
                <BaseSidebarLink label="Users" :isSidebarOpen="isSidebarOpen">
                    <PhUsers :size="32" />
                </BaseSidebarLink>
                <BaseSidebarLink
                    label="Calender"
                    :isSidebarOpen="isSidebarOpen"
                >
                    <PhCalendar :size="32" />
                </BaseSidebarLink>
                <BaseSidebarLink label="Liked" :isSidebarOpen="isSidebarOpen">
                    <PhHeart :size="32" />
                </BaseSidebarLink>
                <BaseSidebarLink
                    label="Settings"
                    :isSidebarOpen="isSidebarOpen"
                >
                    <PhGearSix :size="32" />
                </BaseSidebarLink>
            </ul>
        </nav>
    </aside>
</template>
