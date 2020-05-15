<template>
    <div class="contacts-list">
        <ul>
            <li v-for="(contact, index) in contacts" :key="contact.user_id" @click="selectContact(index, contact)" :class="{ 'selected': index === selected}">
                <div class="avatar">
                    <a href="https://kimaevents.com/wp-content/uploads/2017/12/picture-not-available-150x150.jpg">
                <img :src="contact" :alt="contact.first_name">
                    </a>
                </div>
                <div class="contact">
                    <p class="name">{{ contact.first_name }} {{contact.last_name}}</p>
                    <p class="email"><{{contact.email}}></p>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            contacts: {
                type: Array,
                default: []
            }
        },
        data() {
            return {
                selected: 0
            };
        },
        methods: {
            selectContact(index, contact) {
                this.selected = index;
                this.$emit('selected', contact);
            }
        }
    }
</script>

<style lang="scss" module>
    .contacts-list {
        flex: 2;
        max-height: 600px;
        overflow: scroll;
        border-left: 1px solid lightgray;
    }

    ul {
        list-style-type: none;
        padding-left: 0;

        li {
            display: flex;
            padding: 2px;
            border-bottom: 1px solid #aaaaaa;
            height: 80px;
            position: relative;
            cursor: pointer;

                &.selected {
                    background: #dfdfdf;
                }

                .avatar {
                    flex: 1;
                    display: flex;
                    align-items: center;

                    img {
                        width: 35px;
                        border-radius: 50%;
                        margin: 0 auto;
                    }
            }

            .contact {
                flex: 3;
                font-size: 10px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: center;
                p {
                    margin: 0;

                    &.name {
                        font-weight: bold;
                    }
                }
            }
        }
    }
</style>
