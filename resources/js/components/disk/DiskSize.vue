<template>
    <div class="disk">
        <!-- <img src="{{asset('/img/disk-flag.jpg')}}" alt="flag"> -->
        <div class="disk-usage">
            <p>Хранилище Disk</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 42%" aria-valuenow="42"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p>Занято <span>6.25 ГБ</span> из <span>15 ГБ </span><span>(42%)</span></p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "DiskSize"
    }
</script>

<style scoped>

</style>