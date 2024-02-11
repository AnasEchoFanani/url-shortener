<template>
    <div class="row">
        <CreateLink />
        <LinksList />
    </div>
</template>

<script setup>
import CreateLink from "@/components/CreateLink.vue";
import LinksList from "@/components/LinksList.vue";
import { provide, defineProps } from "vue";

const props = defineProps({
    user_id: {
        type: Number,
        required: true,
    },
});

provide("user_id", props.user_id);
</script>

<style></style>
