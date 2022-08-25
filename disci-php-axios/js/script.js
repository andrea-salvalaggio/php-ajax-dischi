const app = new Vue({

    el: '#app',
    data: {
      discs: [],
    },

    methods: {
       getDiscs() {
          axios.get('http://localhost:8888/php-ajax-dischi/db/database.php')
          .then(result => {
             this.discs = result.data;
             console.log(this.discs);
          })
       }
    },

    created: function() {
       this.getDiscs();
    }

  })