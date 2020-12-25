<template>
    <div>
        <button class="ml-3 btn btn-primary" @click="followUser()" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {

        props: ['userId', 'follows'],

        data: function () {
            return {
                status: this.follows
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        computed: {
            buttonText() {
                return (this.status) ? 'Unfollow' : 'Follow'
            }
        },

        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = !this.status
                        console.log(response.data)
                    })
                .catch(errors => {
                    if (errors.response.status === 401) {
                        window.location = '/login'
                    }
                })
            }
        }
    }
</script>
