<template>
    <div class="container">
        {{status}}

        <feedbackFform />
    </div>
</template>

<script>
import feedbackFform from './components/feedback-form.vue'
export default {
    name: "App",
    components:{
        feedbackFform
    },

}
</script>

<style scoped>


</style>
