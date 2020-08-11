<template>
    <Main>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveData">
                        <div class="form-group">
                            <label for="task">Task</label>
                            <input autocomplete="off" type="text" name="task" id="task" class="form-control" placeholder="What to do..."
                                   v-model="task">
                        </div>
                        <button class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </Main>
</template>

<script>
import Main from "../../Layout/Main";

export default {
    name: "Add",
    components: {Main},
    data() {
        return {
            task: ''
        }
    },
    methods: {
        saveData() {
            this.$inertia.post("/todo", {task: this.task});
        }
    }
}
</script>

<style scoped>

</style>
