<template>
<div>
        <div class="child_response">
            <form action="" class="formulario" v-on:submit.prevent>
                <input type="text" class="form-control float-right" v-model="rta" required @keyup.enter="enviarRespuesta">
                <span class="btn btn-outline-warning float-right" @click="enviarRespuesta" >Responder</span>
            </form>
        </div> <br>
        <div class="respuestas">
            <div class="card mt-2" v-for="(resp, index) in resplist" :key="index">
                <div class="card-header">
                     <b><i>{{resp.user_id}}</i></b><span class="float-right mr-3"> {{resp.created_at.substring(0,10)}}</span>
                </div>
                <div class="card-body">
                    {{resp.comment_text}} 
                </div>
                             
                
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
            rta:"",
           
    
        }
    },

    created(){
        this.cargarRespuestas();


    },
    methods:{
        cargarRespuestas(){
            axios.get(`/childcomments/${this.commentid}`)
            
      .then(response => {this.resplist = response.data})
      
     
        },

        enviarRespuesta(){
            if (this.userid == 0) {
                this.rta = "Debes loguear para poder comentar. "
                return
            }
            if (this.rta == "") {
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
    padding-top: 20px;
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
.card-header{
    padding: 0;
    padding-left: 15px;
}
.card{
    width: 75%;
    margin-left: 10%;
}
.card-body{
    padding: .8em;
}

</style>