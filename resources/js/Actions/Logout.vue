<template>
    
</template>

<script>
export default {
    name: "Logout",

    created() {
        axios.post('/logout', {})
            .finally(err => {
                window.location = '/';
            });
    }
}
</script>

<style>

</style>