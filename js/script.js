new Vue({
    el: '#root',
    data: {
        diskList: [],
        genreList: [],
        genre: 'All',
        error: ''
    },
    mounted() {
        const self = this;
        axios
            .get("http://localhost/github/php-ajax-dischi/app/app.php")
            .then(function(resp) {
                let disks = resp.data;
                self.diskList = disks;
                self.diskList.forEach((disk) => {
                    if (!self.genreList.includes(disk.genre)) {
                        self.genreList.push(disk.genre)
                    }
                });

            })
    },
    methods: {
        filterByGenre: function() {
            this.error = '';
            const self = this;
            axios
                .get("http://localhost/github/php-ajax-dischi/app/app.php", {
                    params: {
                        genre: self.genre
                    }
                })
                .then(function(resp) {
                    let disks = resp.data;
                    self.diskList = disks;
                })
                .catch(function (error) {
                    console.log(error.message);
                    self.error = `Riprova più tardi: ${error.message}`;
                    self.diskList = []
                })
        }
    }
});

Vue.config.devtools = true;