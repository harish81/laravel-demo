<template>
    <Main>
        <div class="container">
            <h1>Simple examples</h1>
            <inertia-link class="btn btn-secondary" href="/more-example?success">success message</inertia-link>
            <inertia-link class="btn btn-secondary" href="/more-example?error">error message</inertia-link>
            <inertia-link class="btn btn-secondary" href="/more-example?multi">multiple messages</inertia-link>
            <hr>

            <h1>Use with laracast flash</h1>
            <inertia-link class="btn btn-secondary" href="/more-example?larasuccess">success message</inertia-link>
            <inertia-link class="btn btn-secondary" href="/more-example?laraerror">error message</inertia-link>
            <inertia-link preserve-state class="btn btn-secondary" href="/more-example?laraimportant">important message</inertia-link>
        </div>
    </Main>
</template>

<script>
import Main from "../Layout/Main";
export default {
    name: "MoreExample",
    components: {Main}
}
</script>

<style scoped>

</style>
