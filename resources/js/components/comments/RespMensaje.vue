<template>
<div>
        <div class="child_response">
            <form action="" class="formulario" v-on:submit.prevent>
                <input type="text" class="form-control float-right" v-model="rta">
                <span class="btn btn-outline-primary float-right" @click="enviarRespuesta" >Responder</span>
            </form>
        </div> <br>
        <div class="respuestas">
            <div class="card mt-2" v-for="(resp, index) in resplist" :key="index">
                {{resp.comment_text}}
            </div>
        </div>

</div>    
    
</template>


<script>
export default {
    name: "respmensaje",
    props: ['commentid', 'userid'],
    data(){
        return{

            resplist : [],
            entrada:"",
            rta:""
    
        }
    },

    created(){
        console.log(this.commentid);
        this.cargarRespuestas();
        // this.enviarRespuesta();
    


    },
    methods:{
        cargarRespuestas(){
            const respuestas = axios.get(`/childcomments/${this.commentid}`)
      .then(response => {this.resplist = response.data})
        },

        enviarRespuesta(){
            if (this.userid == 0) {
                this.rta = "Debes loguear para poder comentar. "
                return
            }
            const data = {comment_text:this.rta, user_id:this.userid,parent_id:this.commentid}
            axios.post(`/childcomments/${this.commentid}`, data)
            .then(response => {})
            this.rta = "";
            this.cargarRespuestas();
        }        

    }
    
}
</script>

<style scoped>

.respuestas{
    clear: both;
}

.formulario{    
    display: inline;
}
input{
    width: 75%;
    border-radius: 0px 5px 5px 0px;
}

span{
    border-radius: 5px 0px 0px 5px;
}

</style>