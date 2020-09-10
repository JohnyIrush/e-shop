<template>
<!-- Modal -->
<div class="modal fade" id="get-started-wizard" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="get-started-wizard" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div id="wizard-window" class="modal-content Theme col-sm-12">
      <div class="modal-header text-center window-heading">
        <h5 class="modal-title heading-color heading-style " > Getting Started With e-shop </h5>
      </div>
      <div class="modal-body">
        <p>Hi</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Good To Go </button>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: {
  },
  data () {
    return {
    }
  },
    methods: {
    },
    mounted() {
        Event.$on('get-started-wizard',()=>{
          $('#get-started-wizard').modal('show');
        });

    },
}
</script>

<style scoped>
#wizard-window{
    height: 95vh;
}
.window-heading{
    text-align: center;
}
</style>
