<template>
    <div class="feed">
        <ul v-if="contact">
            <li v-for="message in messages" :class="`message${message.to === contact.user_id ? ' sent' : ' received'}`" :key="message.id">
                <div class="text">
                    {{ message.text }}
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            contact: {
                type: Object,
                required: false
            },
            messages: {
                type: Array,
                required: false
            }
        }
    }
</script>

<style scoped>

</style>
