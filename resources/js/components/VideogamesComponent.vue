<template>
    <div id="evento">
        <h1>
            Evento
        </h1>

        <table border="1">
            <tr>
                
                   <th>titolo</th> 
                   <th>sottotitolo</th> 
                   <th> rating</th>
                
            </tr>
            <tr v-for="videogame in videogames" :key="videogame">
                    <td>{{ videogame.titolo}}</td> 
                    <td>{{ videogame.sottotitolo}}</td> 
                    <td>{{ videogame.rating}}</td>
            </tr>

        </table>
    </div>
</template>

<script>
export default {
     data: function() {
         return{
             videogames:[]
         }; 
        },
    mounted(){
         
       axios.get('/api/videogames/list')
            .then(r => this.videogames = r.Data)
            .catch(e=> console.error(e));
    }
}
</script>