<template>
    <Main>
        <template>
            <div class="container">
                <div>
                    <h1 class="float-left">Todo List</h1>
                    <inertia-link href="/todo/create" class="btn btn-primary float-right">+ Add todo</inertia-link>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="todo in todos" :key="todo.id">
                        <td>{{todo.id}}</td>
                        <td>{{todo.task}}</td>
                        <td>{{todo.created_at}}</td>
                        <td>
                            <inertia-link :href="'/todo/'+todo.id" method="DELETE" class="btn btn-danger btn-sm">Delete</inertia-link>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </template>
    </Main>
</template>

<script>
import Main from "../../Layout/Main";
export default {
    name: "List",
    components: {Main},
    props: {todos:Array}
}
</script>

<style scoped>

</style>
