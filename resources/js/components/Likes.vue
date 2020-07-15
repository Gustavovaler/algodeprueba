<template>    
         <span @click="add_like()" class="like">Me gusta <span class="badge badge-primary">{{commentlikes}}</span></span>    
</template>

<script>
export default {
      props:
            ['commentid', 'commentlikes']
        ,

    data(){
        return{
            datos: 6
        }
    }, 
     created(){
           
        },
    methods:{     
      
        add_like(){
            this.commentlikes ++;
            axios.put(`/comments/${this.commentid}`)
            .then(res =>{})
        }
    }
    
}
</script>
<style scoped>

.div-like{
    display: inline;
}

.like{
    display: inline;
    cursor: pointer;
    color: darkcyan;
} 
</style>