<template>
    
         <span @click="add_like(6)" class="like">Me gusta</span>

    
</template>

<script>
export default {

    data(){
        return{
            datos: 6
        }
    },
    methods:{
        add_like(id){
            axios.put(`/comments/${id}`)
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