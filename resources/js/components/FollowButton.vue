<template>
    <button class="btn btn-primary ms-4" id="btn" @click="followUser">Follow</button> 
</template>

<script>
    export default {
        props: ['userId'],
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            followUser(){
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        alert(response.data);
                    });
            }
        }
    }

</script>