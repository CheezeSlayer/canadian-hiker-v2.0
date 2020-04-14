<template>
    
</template>

<script>
export default {
    name: "Signup",

    created() {
        axios.get('/register', {})
            .finally(err => {
                window.location = '/register';
            });
    }
}
</script>

<style>

</style>