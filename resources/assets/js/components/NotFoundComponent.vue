<template>
    <div>
        404
    </div>
</template>
<script>
    export default {
        created: function() {
            // Redirect outside the service_app using plain old javascript
            location.href='/404';
        }
    }
</script>