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
        class="bg-slate-800 text-white h-full pt-16 flex flex-col transition-all duration-300"
        :class="isSidebarOpen ? 'w-56' : ' w-24'"
    >
        <nav class="flex flex-col space-y-2 px-4 mt-10">
            <div class="px-2">
                <button
                    @click="toggleSidebar"
                    class="flex gap-2 items-center hover:bg-slate-500 transition duration-150 rounded-md w-fit px-2 py-1"
                >
                    <PhArrowLineLeft
                        :size="24"
                        :class="[
                            isSidebarOpen ? '' : 'rotate-180',
                            'transition duration-150',
                        ]"
                    />
                </button>
            </div>

            <ul class="mt-10 space-y-10">
                <BaseSidebarLink label="Boards" :isSidebarOpen="isSidebarOpen">
                    <PhCards :size="24" />
                </BaseSidebarLink>
                <BaseSidebarLink
                    label="Overview"
                    :isSidebarOpen="isSidebarOpen"
                >
                    <PhCirclesFour :size="24" />
                </BaseSidebarLink>
                <BaseSidebarLink label="Users" :isSidebarOpen="isSidebarOpen">
                    <PhUsers :size="24" />
                </BaseSidebarLink>
                <BaseSidebarLink
                    label="Calender"
                    :isSidebarOpen="isSidebarOpen"
                >
                    <PhCalendar :size="24" />
                </BaseSidebarLink>
                <BaseSidebarLink label="Liked" :isSidebarOpen="isSidebarOpen">
                    <PhHeart :size="24" />
                </BaseSidebarLink>
                <BaseSidebarLink
                    label="Settings"
                    :isSidebarOpen="isSidebarOpen"
                >
                    <PhGearSix :size="24" />
                </BaseSidebarLink>
            </ul>
        </nav>
    </aside>
</template>
