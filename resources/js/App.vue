<template>
    <div class="main-content">
        <aside>
            <navigation></navigation>
            <disk-size></disk-size>
        </aside>
        <router-view></router-view>
        <section></section>
    </div>

</template>

<script>
    import DiskSize from "./components/disk/DiskSize"
    import Navigation from "./components/layouts/blocks/nav/Navigation";
    export default {
        name: "App",
        components: {
            Navigation,
            DiskSize
        },
    }

</script>

<style scoped>
</style>