<script setup>
import { computed } from "vue";

const props = defineProps({
    modelValue: [String, Number],
    label: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        default: "text",
    },
    placeholder: String,
    error: String,
});

const emit = defineEmits(["update:modelValue", "clearError"]);

const handleInput = (event) => {
    emit("update:modelValue", event.target.value);
    emit("clearError");
};

const id = computed(() => props.label.toLowerCase().replace(/\s+/g, "-"));

const inputClasses = (hasError) => [
    "w-full p-3 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500",
    hasError ? "border-red-500 bg-red-50" : "border-gray-300",
];
</script>

<template>
    <div class="mb-4">
        <label
            :for="id"
            :class="[
                'block font-medium mb-1',
                error ? 'text-red-500' : 'text-gray-700',
            ]"
        >
            {{ label }}
        </label>

        <textarea
            v-if="type === 'textarea'"
            :id="id"
            :aria-label="label"
            :placeholder="placeholder"
            rows="5"
            :value="modelValue"
            @input="handleInput"
            :class="inputClasses(error)"
        ></textarea>

        <input
            v-else
            :id="id"
            :aria-label="label"
            :placeholder="placeholder"
            :type="type"
            :value="modelValue"
            @input="handleInput"
            :class="inputClasses(error)"
        />

        <p v-if="error" class="text-red-500 text-sm mt-1">
            {{ error }}
        </p>
    </div>
</template>
