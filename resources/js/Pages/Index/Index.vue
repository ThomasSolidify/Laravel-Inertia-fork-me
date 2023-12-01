<template>

<div>Index</div>
<Link href="/show">Show Page</Link>
<div>
    The message is {{ message }}
</div>

</template>


<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import MainLayout from '../../Layouts/MainLayout.vue'
import Box from '@/Components/UI/Box.vue'
defineProps(['message']);
</script>

