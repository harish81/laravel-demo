<template>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Intertia.js Flash</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <inertia-link href="/todo" class="nav-link">Home</inertia-link>
                </li>
                <li class="nav-item">
                    <inertia-link href="/more-example" class="nav-link">More examples</inertia-link>
                </li>
            </ul>
        </div>
    </nav>
    <div class="mt-2">
        <div aria-live="polite" aria-atomic="true" style="position: fixed;min-height: 200px;right: 0;z-index: 22;">
            <div style="position: absolute; top: 0; right: 10px;">
                <Flash :message="flash" :type="key" timeout="2500"
                   v-if="$page.flash && flash!=null" v-for="(flash,key) in $page.flash" :key="key+flash+new Date().getTime()"/>

                <!--For laracast flash package-->
                <Flash v-for="(fls,index) in $page.flash_notification" :key="fls.message+index+new Date().getTime()"
                    :message="fls.message" :type="fls.level" :timeout="!fls.important?2500:null"/>
            </div>
        </div>
        <slot></slot>
    </div>
    </div>
</template>

<script>
import Flash from "../Component/Flash";
export default {
    name: "Main",
    components: {Flash}
}
</script>

<style scoped>

</style>
