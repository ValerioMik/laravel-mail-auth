<template>
    <div id="evento">
        <h1>
            
        Videogame
        </h1>

        <table border="1">
            <tr>
                
                   <th>titolo</th> 
                   <th>sottotitolo</th> 
                   <th> rating</th>
                   <th v-if="user">Action</th>
                
            </tr>
            <tr v-for="videogame in videogames" :key="videogame">
                    <td>{{ videogame.titolo}}</td> 
                    <td>{{ videogame.sottotitolo}}</td> 
                    <td>{{ videogame.rating}}</td>
                    <td v-if="user">
                       <!--  <a class="btn btn-danger" :href="'/api/videogame/delete/' + videogame.id">DELETE</a> -->
                       <button @click="videogameDelete(videogame.id)" class="btn btn-danger"> DELETE</button>
                    </td>
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

        props:{

            user: String

        },
        methods: {
            videogameDelete(id){
                const self = this;
               axios.get(`/api/videogame/delete/${id}`)
                .then(r => {

                    const ind = self.getidexById(id)
                    self.videogames.splice(ind,1);
                })
                .catch(e=> console.error('e',e));
            },

            getidexById(id){
                for (let x=0 ;x< this.videogames.length;x++)  {
                    const videogame = this.videogames[x];
                      if (videogame.id == id)   
                      return x;               
                }
                return -1;
            }

        },
    mounted(){

        console.log('user', this.user);
         
       axios.get('/api/videogames/list')
            .then(r => this.videogames = r.data)
            .catch(e=> console.error(e));
    }
}
</script>