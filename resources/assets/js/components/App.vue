<template>
    <div>
        <h1>mygabia</h1>

        <p>
            <router-link :to="{ name: 'home' }">Hofdsame</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>
