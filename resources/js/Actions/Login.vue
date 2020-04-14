<template>
    
</template>

<script>
export default {
    name: "Login",

    created() {
        axios.post('/login', {})
            .finally(err => {
                window.location = '/login';
            });
    }
}
</script>

<style>

</style>