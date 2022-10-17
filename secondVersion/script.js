const root = new Vue({
    el: '#app',
    data(){
        return{
            album: []
        }
    },
    created(){
        axios.get('./database/api.php')
        .then((elementDatabase) => {
            this.album = elementDatabase.data;
        })
        .catch((e) => {
            e.message;
          });
    }
});