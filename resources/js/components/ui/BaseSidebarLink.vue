<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    label: {
        type: String,
        required: true,
    },
    to: {
        type: [String, Function],
        default: "/",
    },
    isSidebarOpen: Boolean,
});
</script>

<template>
    <li>
        <Link
            :href="to"
            class="flex items-center justify-start py-2 px-4 hover:bg-slate-500 transition-all duration-150 rounded-md relative"
            :class="isSidebarOpen ? '' : 'w-fit'"
        >
            <slot />

            <span
                class="ml-4 transition-all duration-75 delay-75 absolute left-12 whitespace-nowrap text-sm"
                :class="
                    isSidebarOpen
                        ? 'opacity-100 translate-x-0'
                        : 'opacity-0 -translate-x-2 w-0'
                "
            >
                {{ label }}
            </span>
        </Link>
    </li>
</template>
