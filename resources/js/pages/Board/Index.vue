<script setup>

const props = defineProps({
    boards: {
            type: Array
        }
    })

    console.log(props.boards)
    
</script>

<template>
    <div>
        Boards
    </div>
</template>