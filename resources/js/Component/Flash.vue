<template>
    <div v-if="isShown" class="toast show" role="alert" aria-live="assertive" aria-atomic="true" style="min-width: 290px;"
    :class="bgClass">
        <div class="toast-header">
            <svg v-if="type=='success'" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <svg v-else xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            <strong class="mr-auto">{{type}}</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close" @click="closeThis">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">{{message}}</div>
    </div>
</template>

<script>
export default {
    name: "Flash",
    data() {
        return {
            isShown: true,
        }
    },
    props: {
        message: String,
        type: {
          type: String,
          default: 'success'
        },
        timeout: [String,Number],
        bgClass: String,
    },
    mounted() {
      if(this.timeout){
          setTimeout(()=>{this.closeThis()}, this.timeout);
      }
    },
    methods:{
        closeThis(){
            this.isShown = false;
        }
    }
}
</script>

<style scoped>

</style>
